# Monica Marketing Site

The public marketing site for **Monica**, the personal CRM. Built with [Jigsaw](https://jigsaw.tighten.com) and [Tailwind CSS](https://tailwindcss.com), in English, French, German, Spanish, Portuguese and Dutch.

Jigsaw is a static site generator written in PHP. It renders Blade templates to plain HTML files, so what gets deployed is a folder of HTML, CSS and images. No PHP runs in production.

It is published at [www.monicahq.com](https://www.monicahq.com) on **Cloudflare Pages**. See [Hosting and deploys](#hosting-and-deploys).

---

## Requirements

Three things:

| Tool         | Version    | Check with        |
| :----------- | :--------- | :---------------- |
| **PHP**      | 8.2 or newer | `php -v`        |
| **Composer** | any recent | `composer --version` |
| **Node.js**  | 20 or newer | `node -v`        |

If any are missing, on macOS with [Homebrew](https://brew.sh):

```sh
brew install php composer node
```

PHP needs the `mbstring`, `dom`, `xml` and `curl` extensions, which the Homebrew and official builds all include. Check with `php -m`.

---

## Install

From the project folder:

```sh
composer install    # PHP dependencies, including Jigsaw itself, into vendor/
npm install         # Vite and Tailwind, into node_modules/
```

Both are needed: Composer builds the pages, npm builds the CSS. Run them again after a `git pull` that changed `composer.json` or `package.json`.

`vendor/` and `node_modules/` are large, disposable and already ignored by git. If things get strange, delete them and install again.

---

## Run it locally

Two commands, in two terminals.

**Terminal 1** rebuilds the site whenever a file changes:

```sh
npm run dev
```

**Terminal 2** serves the result:

```sh
npm run serve
```

Then open the address it prints, normally `http://localhost:8000`:

```sh
open http://localhost:8000                      # default browser, macOS
open -a Firefox http://localhost:8000           # Firefox
open -a "Google Chrome" http://localhost:8000   # Chrome
```

On Linux use `xdg-open`, on Windows `start`, or just paste the address into your browser.

`http://localhost:8000` redirects to `/en/`, because every URL carries its language:

| URL                        | Page              |
| :------------------------- | :---------------- |
| `http://localhost:8000/en/` | Homepage, English |
| `http://localhost:8000/fr/` | Homepage, French  |
| `http://localhost:8000/de/` | Homepage, German  |
| `http://localhost:8000/es/` | Homepage, Spanish |
| `http://localhost:8000/pt/` | Homepage, Portuguese |
| `http://localhost:8000/nl/` | Homepage, Dutch   |

Locally it always lands on `/en/`. On the real site the root reads the browser's `Accept-Language` header and sends the reader to their own language instead. That is done by two Cloudflare redirect rules rather than by a file, so a local server never runs them. They live in [`cloudflare/redirect-rules.json`](cloudflare/redirect-rules.json), the deploy applies them, and the file beside it explains them.

Edit a file under `source/` or `lang/` and `npm run dev` rebuilds within a second. Refresh the browser to see it. Press `Ctrl+C` in either terminal to stop.

### Checking the real site

The local build is not what visitors get: it has no domain baked into its canonical URLs. Before deploying, build for production:

```sh
npm run build
```

That writes the finished site into `build_production/`. Serve it with any static server to check it:

```sh
php -S localhost:8001 -t build_production
```

---

## Hosting and deploys

The site is hosted on **Cloudflare Pages**, project **`marketing`**, in Monica's Cloudflare account. The whole deploy is one file, [`.github/workflows/ci.yml`](.github/workflows/ci.yml), and nothing about it is configured in the Cloudflare dashboard.

**GitHub Actions builds, Cloudflare only serves.** A Pages build image has no PHP, so Cloudflare is never asked to build anything. The workflow installs the Composer and npm dependencies, runs `npm run build`, and uploads the finished `build_production/` folder with [wrangler](https://developers.cloudflare.com/workers/wrangler/). What Cloudflare holds is a folder of files, exactly what you get locally.

| What happens          | What the workflow does                                                                                                                    |
| :-------------------- | :---------------------------------------------------------------------------------------------------------------------------------------- |
| Pull request opened or updated | Full production build, no upload. A missing translation key or a dead link fails the check here, before anything ships. The redirect rules are validated with `--dry-run`. |
| Push to `main`        | The same build, then the upload to Pages, then the root's redirect rules are applied and verified against the live site.                    |
| "Run workflow" in the Actions tab | The same as a push to `main`. This is how to redeploy without an empty commit, after a flaky network call for instance.         |

A pull request builds but never uploads, so **there are no preview deployments**. Reviewing a change means running it locally.

Two deploys never overlap: a run on `main` waits for the one before it, while a superseded pull request run is cancelled.

### Domains

The site answers on both **`www.monicahq.com`** and **`monicahq.com`**, and the apex does not redirect to `www`. The `www` copy is the canonical one, and the canonical tags on the apex pages say so, which is what keeps search engines from seeing two sites.

The domain is written in exactly two places: `baseUrl` in [`config.production.php`](config.production.php), which every canonical URL, hreflang alternate, sitemap entry and social image URL is built from, and one hard-coded line in [`source/robots.txt`](source/robots.txt). Changing the domain means editing those two, and nothing else.

`/` is the one URL no file answers, since every page is locale-prefixed. Two Cloudflare **redirect rules** answer it: they read the browser's `Accept-Language` header and send the reader to their own language, falling back to English. Those rules live in [`cloudflare/redirect-rules.json`](cloudflare/redirect-rules.json), the deploy applies them on every push, and [`cloudflare/redirect-rules.md`](cloudflare/redirect-rules.md) explains them. **Never edit them in the dashboard**, since the next deploy would put them back.

### Secrets the deploy needs

Four repository secrets, in the repository's Settings > Secrets and variables > Actions. `GITHUB_TOKEN` is provided by Actions itself and only lifts the rate limit on the GitHub API call that reads the star count.

| Secret                        | What it is                                                              |
| :---------------------------- | :---------------------------------------------------------------------- |
| `CLOUDFLARE_API_TOKEN`        | A token carrying **Cloudflare Pages > Edit**, for the upload             |
| `CLOUDFLARE_ACCOUNT_ID`       | The account id, from the Cloudflare dashboard                            |
| `CLOUDFLARE_RULES_API_TOKEN`  | A separate token carrying **Zone > Single Redirect > Edit** on `monicahq.com` |
| `CLOUDFLARE_ZONE_ID`          | The zone id of `monicahq.com`, from the zone's overview page             |

Two tokens rather than one, because publishing a site and rewriting a zone's redirects are different powers and nothing needs both. A token that expires shows up as a failed deploy, never as a broken site.

### Rolling back

The published site is a folder, so the previous one is still on Cloudflare. In the dashboard, under Workers & Pages > `marketing` > Deployments, any earlier deployment can be rolled back to, which takes effect in seconds and touches nothing in git.

That is the emergency lever. The real fix is to revert the commit on `main` and let the workflow deploy, because the next push overwrites a rollback.

---

## Commands

| Command             | What it does                                                     |
| :------------------ | :--------------------------------------------------------------- |
| `composer install`  | Installs Jigsaw and its PHP dependencies                          |
| `npm install`       | Installs Vite and Tailwind                                        |
| `npm run dev`       | Rebuilds the site as files change, and compiles CSS               |
| `npm run serve`     | Serves the local build at `localhost:8000`                        |
| `npm run build`     | Builds the production site into `build_production/`               |
| `npm run links`     | Re-checks `build_production/` for dead links (the build already does it) |
| `npm run og`        | Regenerates the social sharing images (needs Chrome installed)    |

---

## If something goes wrong

**`command not found: php` or `composer`.** Not installed, or not on your PATH. See [Requirements](#requirements).

**`Could not open input file: vendor/bin/jigsaw`.** You skipped `composer install`.

**`The Vite manifest does not exist`.** Jigsaw ran before Vite compiled the CSS. Run `npm run dev` or `npm run build`, both of which do it in the right order.

**A page shows a PHP error.** Jigsaw prints the template, the line and the message. The trace points at a file in `cache/`, which is generated: the real file is the one named at the top.

**Port 8000 is already in use.** Something else is serving there. Stop it, or serve the build folder yourself with `php -S localhost:8001 -t build_local`.

**Changes do not show up.** Confirm `npm run dev` is still running, then hard-refresh. If it is genuinely stuck, delete `cache/` and start it again.

---

## Supporting the live site

Two places tell you almost everything: the repository's **Actions** tab (did the build pass, did it upload) and the **Deployments** list of the `marketing` project on Cloudflare (what is actually being served, and when it landed). Start with the first one, since a change that never built is the common case.

**A change is merged but the site still shows the old page.** Look at the Actions run for that commit. A red build means nothing was uploaded and the previous site is still live, which is the system working. A green one means the file is published, so it is a cache: hard-refresh first, and purge the cached file in the Cloudflare dashboard (Caching > Configuration > Purge cache) only if it persists. CSS and JS carry a hash in their filename, so a stale stylesheet is not a thing that happens.

**A page returns a 404.** The site is a folder of files, so a URL exists only if the build wrote it. Two usual causes: the URL has no language in it (every page is under `/en/`, `/fr/` and so on), or the slug was written in English for another language (French pricing is `/fr/tarifs/`, never `/fr/pricing/`). Anything Cloudflare cannot find is served the site's own 404 page, which lists the languages and lets the reader pick.

**A reader lands in the wrong language.** Only `/` chooses a language, from the browser's `Accept-Language` header. Every other URL says its language in the path and never redirects. If `/` is sending everybody to English, the redirect rules are the place to look: run `scripts/cloudflare/apply-redirect-rules.sh --dry-run` to see what the file asks for, and read `cloudflare/redirect-rules.md`. A reader arriving on the apex stays on the apex, which is expected.

**The deploy failed on "Apply the root's redirect rules".** The site itself published, so the pages are live and only the root's language choice may be stale. It is usually an expired `CLOUDFLARE_RULES_API_TOKEN`. Renew the secret and re-run the workflow.

**The build failed on a translation key.** A string was added to `lang/en.php` and not to the other five. The exception names both the key and the language. Every `lang/` file has to carry the same keys.

**The build failed on a dead link.** `scripts/links/check.php` reads the built site and fails on a link that resolves to no file, a fragment that names no id, or a canonical, hreflang or sitemap entry that disagrees with the rest. It names the page and the URL. External links are never fetched, so it cannot fail because somebody else's site is down.

**A blog post is missing in one language.** A post is one Markdown file per language with the same slug and the same date. Missing one fails the build as a dead link, because the sitemap lists every post in every language.

**Sharing a link shows the wrong preview image or text.** The social cards are committed PNGs in `source/og/`, one per language, and their text is copied by hand into `scripts/og/template.html`. If a headline changed, the card did not follow it until somebody ran `npm run og`. Social networks cache previews hard, so also re-scrape the URL with the network's own debugger.

**The GitHub star count looks wrong.** It is read from the GitHub API during the build and floored to the nearest thousand, so `24k+` means at least 24,000. A failed call prints a warning and uses the figure in `config.php`, so an unchanged number after a deploy is the fallback, not a bug.

**Everything is down.** Check [Cloudflare's status page](https://www.cloudflarestatus.com) before anything else. There is no server, no database and no PHP in production, so the failure modes are DNS, Cloudflare itself, or a file that was never uploaded.

---

## Where things live

All visible text is in `lang/`, one PHP file per language, never inside a template. That is where you change a headline.

Everything else (project structure, the design system rules, Tailwind conventions, how to add a page or a language, how the star count and the social cards work) is documented in [`.claude/CLAUDE.md`](.claude/CLAUDE.md).
