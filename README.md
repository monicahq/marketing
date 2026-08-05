# Monica Marketing Site

The public marketing site for **Monica**, the personal CRM. Built with [Astro](https://astro.build) and [Tailwind CSS](https://tailwindcss.com), in English, French, German and Spanish.

---

## Requirements

Node.js **22.12 or newer**. Check what you have:

```sh
node -v
```

If that says "command not found" or prints an older version, install it with `brew install node` (macOS), from [nodejs.org](https://nodejs.org) (any platform), or with `nvm install 22` if you juggle several versions.

Node includes `npm`, which is all you need. Astro comes with the project, so there is nothing to install globally.

---

## Install

From the project folder:

```sh
npm install
```

This downloads the project's dependencies into `node_modules/`. It takes a minute the first time. Run it again after a `git pull` that changed `package.json`.

`node_modules/` is large and disposable, and already ignored by git. If things ever get strange, `rm -rf node_modules && npm install` is a safe reset.

---

## Run it locally

```sh
npm run dev
```

Astro prints the address it is serving on, normally `http://localhost:4321`. Open it:

```sh
open http://localhost:4321                      # default browser, macOS
open -a Firefox http://localhost:4321           # Firefox
open -a "Google Chrome" http://localhost:4321   # Chrome
```

On Linux use `xdg-open`, on Windows `start`, or just paste the address into your browser.

`http://localhost:4321` redirects to `/en/`, because every URL carries its language:

| URL                         | Page              |
| :-------------------------- | :---------------- |
| `http://localhost:4321/en/` | Homepage, English |
| `http://localhost:4321/fr/` | Homepage, French  |
| `http://localhost:4321/de/` | Homepage, German  |
| `http://localhost:4321/es/` | Homepage, Spanish |

Edit any file under `src/` and save, and the browser updates within a second. Press `Ctrl+C` to stop the server.

### Running it in the background

`npm run dev` takes over the terminal. To keep using the same shell:

```sh
npx astro dev --background     # start it
npx astro dev status           # is it running, and where
npx astro dev logs             # what it has printed
npx astro dev stop             # stop it
```

### Checking the real site

The dev server is built for fast feedback, not for what visitors actually get. Before deploying, build the static site and serve it:

```sh
npm run build      # writes the finished site into dist/
npm run preview    # serves dist/ at http://localhost:4321
```

---

## Commands

| Command           | What it does                                                 |
| :---------------- | :----------------------------------------------------------- |
| `npm install`     | Downloads dependencies                                        |
| `npm run dev`     | Development server with live reload                           |
| `npm run build`   | Builds the production site into `dist/`                       |
| `npm run preview` | Serves the built `dist/` locally                              |
| `npx astro check` | Checks types. **This is what catches a missing translation**  |

Run `npx astro check` after editing anything in `src/i18n/`.

---

## If something goes wrong

**`command not found: npm`.** Node is not installed, or not on your PATH. See [Requirements](#requirements).

**`Cannot find package 'astro'`.** You skipped `npm install`, or dependencies changed.

**Port 4321 is already in use.** A dev server is already running. Either `npx astro dev stop`, or pick another port with `npm run dev -- --port 3000`.

**Blank page, or a section is missing.** Check the terminal running the dev server. Astro prints errors there with the file and line.

**Edits do not show up.** Confirm the server is still running and the file is saved. If it is genuinely stuck, `Ctrl+C` and start it again.

---

## Where things live

All visible text is in `src/i18n/content/`, one file per language, never inside a component. That is where you change a headline.

Everything else (project structure, the design system rules, Tailwind conventions, how to add a page or a language, how to set up the blog) is documented in [`.claude/CLAUDE.md`](.claude/CLAUDE.md).
