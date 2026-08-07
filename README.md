# Monica Marketing Site

The public marketing site for **Monica**, the personal CRM. Built with [Jigsaw](https://jigsaw.tighten.com) and [Tailwind CSS](https://tailwindcss.com), in English, French, German and Spanish.

Jigsaw is a static site generator written in PHP. It renders Blade templates to plain HTML files, so what gets deployed is a folder of HTML, CSS and images. No PHP runs in production.

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

Locally it always lands on `/en/`. On the real site the root reads the browser's `Accept-Language` header and sends the reader to their own language instead, which is a Cloudflare Pages Function (`functions/index.js`) rather than a file, so a plain local file server never runs it.

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

## Commands

| Command             | What it does                                                     |
| :------------------ | :--------------------------------------------------------------- |
| `composer install`  | Installs Jigsaw and its PHP dependencies                          |
| `npm install`       | Installs Vite and Tailwind                                        |
| `npm run dev`       | Rebuilds the site as files change, and compiles CSS               |
| `npm run serve`     | Serves the local build at `localhost:8000`                        |
| `npm run build`     | Builds the production site into `build_production/`               |
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

## Where things live

All visible text is in `lang/`, one PHP file per language, never inside a template. That is where you change a headline.

Everything else (project structure, the design system rules, Tailwind conventions, how to add a page or a language, how the star count and the social cards work) is documented in [`.claude/CLAUDE.md`](.claude/CLAUDE.md).
