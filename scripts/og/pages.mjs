/**
 * Renders the per-page social cards into source/og/, as <key>-<locale>.jpg.
 *
 *   npm run og                          every page that has a card
 *   npm run og -- home                  only the pages named
 *   npm run og -- --locale=fr home      only French, only home
 *
 * A page has a card when its `meta.<key>.ogImage` block exists in lang/en.php.
 * That block is the only place the card's words live: cards.php reads it from
 * every lang/<locale>.php, this script writes it into page.html and has one
 * headless Chrome screenshot every card. seo.blade.php reads the same block
 * to decide which image a page points at, so the two cannot disagree.
 *
 * The JPEGs are committed, so a build never needs a
 * browser. Run this after changing a card's copy, its background or the
 * template, then commit what changed.
 *
 * No dependency: Chrome is driven over its DevTools protocol with Node's own
 * WebSocket. Chrome is found on the usual paths, or set CHROME to its binary.
 */

import { execFileSync, spawn } from 'node:child_process';
import { existsSync, mkdtempSync, readFileSync, rmSync, writeFileSync } from 'node:fs';
import { tmpdir } from 'node:os';
import { dirname, join } from 'node:path';
import { fileURLToPath, pathToFileURL } from 'node:url';

const here = dirname(fileURLToPath(import.meta.url));
const root = join(here, '..', '..');
const outDir = join(root, 'source', 'og');
const template = readFileSync(join(here, 'page.html'), 'utf8');
const defaultBackground = 'filing-cabinet.png';
const width = 1200;
const height = 630;
const quality = 88;

// zh is the one locale whose code is not its language tag. See config.php.
const languageTags = { zh: 'zh-Hans' };

const fail = (message) => {
  console.error(`og: ${message}`);
  process.exit(1);
};

const chromePath =
  process.env.CHROME ??
  [
    '/Applications/Google Chrome.app/Contents/MacOS/Google Chrome',
    // The binary itself rather than /usr/bin/chromium, which on some
    // distributions is a wrapper that appends the desktop's own flags
    // (Wayland, extensions) after ours and leaves "headless" drawing on screen.
    '/usr/lib/chromium/chromium',
    '/usr/bin/chromium',
    '/usr/bin/google-chrome-stable',
    '/usr/bin/google-chrome',
    '/usr/bin/chromium-browser',
  ].find((path) => existsSync(path));

if (!chromePath || !existsSync(chromePath)) {
  fail('Chrome not found. Set CHROME to your Chrome or Chromium binary.');
}

// ------------------------------------------------------------------ the copy

const args = process.argv.slice(2);
const locales = args.filter((arg) => arg.startsWith('--locale=')).map((arg) => arg.slice('--locale='.length));

let cards;
try {
  cards = JSON.parse(execFileSync('php', [join('scripts', 'og', 'cards.php'), ...locales], { cwd: root, encoding: 'utf8' }));
} catch {
  fail('Could not read the cards from lang/ (see the error above).');
}

const only = args.filter((arg) => !arg.startsWith('--'));
const known = [...new Set(Object.values(cards).flatMap((locale) => Object.keys(locale)))];
const unknown = only.filter((key) => !known.includes(key));
if (unknown.length) {
  fail(`No ogImage block in lang/en.php for: ${unknown.join(', ')}`);
}
const keys = only.length ? only : known;

const jobs = Object.keys(cards)
  .sort()
  .flatMap((locale) => keys.filter((key) => cards[locale][key]).map((key) => ({ locale, key, card: cards[locale][key] })));

for (const { locale, key, card } of jobs) {
  for (const field of ['title']) {
    if (typeof card[field] !== 'string' || card[field].trim() === '') {
      fail(`[meta.${key}.ogImage.${field}] is empty for locale [${locale}].`);
    }
  }
  if (!existsSync(join(here, 'backgrounds', card.background ?? defaultBackground))) {
    fail(`scripts/og/backgrounds/${card.background} does not exist (${key}, ${locale}).`);
  }
}

// ------------------------------------------------------------------ chrome

const work = mkdtempSync(join(tmpdir(), 'monica-og-'));
const chrome = spawn(
  chromePath,
  [
    '--headless',
    '--disable-gpu',
    '--hide-scrollbars',
    '--allow-file-access-from-files',
    '--remote-debugging-port=0',
    // A headless tab counts as hidden, and after five minutes Chrome starts
    // throttling it hard enough to take minutes over each card.
    '--disable-background-timer-throttling',
    '--disable-renderer-backgrounding',
    '--disable-backgrounding-occluded-windows',
    '--disable-features=IntensiveWakeUpThrottling',
    `--user-data-dir=${join(work, 'profile')}`,
    'about:blank',
  ],
  { stdio: ['ignore', 'ignore', 'pipe'] },
);

const cleanup = () => {
  chrome.kill();
  rmSync(work, { recursive: true, force: true });
};
process.on('exit', cleanup);
for (const signal of ['SIGINT', 'SIGTERM']) {
  process.on(signal, () => process.exit(130));
}

const endpoint = await new Promise((resolve, reject) => {
  let log = '';
  chrome.stderr.on('data', (chunk) => {
    log += chunk;
    const match = log.match(/DevTools listening on (ws:\/\/\S+)/);
    if (match) resolve(match[1]);
  });
  chrome.on('exit', () => reject(new Error(`Chrome exited before it was ready:\n${log}`)));
}).catch((error) => fail(error.message));

const socket = new WebSocket(endpoint);
await new Promise((resolve) => socket.addEventListener('open', resolve, { once: true }));

let nextId = 0;
const pending = new Map();
socket.addEventListener('message', ({ data }) => {
  const message = JSON.parse(data);
  const waiting = pending.get(message.id);
  if (!waiting) return;
  pending.delete(message.id);
  message.error ? waiting.reject(new Error(message.error.message)) : waiting.resolve(message.result);
});

// Every call gets thirty seconds: a card takes well under one, and a stuck
// Chrome should fail the run rather than hang it.
const send = (method, params = {}, sessionId) =>
  new Promise((resolve, reject) => {
    const id = ++nextId;
    const timer = setTimeout(() => {
      pending.delete(id);
      reject(new Error(`${method} timed out`));
    }, 30_000);
    pending.set(id, {
      resolve: (value) => (clearTimeout(timer), resolve(value)),
      reject: (error) => (clearTimeout(timer), reject(error)),
    });
    socket.send(JSON.stringify({ id, method, params, sessionId }));
  });

/**
 * One fresh tab per card, closed once it is captured. Reusing a single tab
 * slowed Chrome down card after card, to minutes each after a few hundred,
 * and a page that was navigated away from could still answer the first
 * readiness check with the previous card's state.
 */
const openTab = async (url) => {
  const { targetId } = await send('Target.createTarget', { url: 'about:blank' });
  const { sessionId } = await send('Target.attachToTarget', { targetId, flatten: true });
  const page = (method, params) => send(method, params, sessionId);

  await page('Emulation.setFocusEmulationEnabled', { enabled: true });
  await page('Emulation.setDeviceMetricsOverride', { width, height, deviceScaleFactor: 1, mobile: false });
  await page('Page.navigate', { url });

  return {
    page,
    evaluate: async (expression) => (await page('Runtime.evaluate', { expression, returnByValue: true })).result.value,
    close: () => send('Target.closeTarget', { targetId }),
  };
};

// ------------------------------------------------------------------ render

for (const { locale, key, card } of jobs) {
  const data = {
    lang: languageTags[locale] ?? locale,
    background: card.background ?? defaultBackground,
    eyebrow: card.eyebrow ?? null,
    title: card.title,
    accent: card.accent ?? null,
    description: card.description ?? null,
    optionalDescription: card.optionalDescription ?? false,
  };

  // Escaping `<` keeps a `</script>` in the copy from ending the script the
  // JSON is written into. The template sets every string with textContent.
  const json = JSON.stringify(data).replace(/</g, '\\u003c');
  const html = join(work, `${key}-${locale}.html`);
  writeFileSync(
    html,
    template.replace('<!--base-->', `<base href="${pathToFileURL(here).href}/">`).replace('/*CARD*/ null', json),
  );

  const { page, evaluate, close } = await openTab(pathToFileURL(html).href).catch((error) => fail(`${key} (${locale}): ${error.message}`));

  // The template marks the body once fonts and background have loaded and
  // the copy has been fitted. Ten seconds is far more than a local file needs.
  let state;
  for (let tries = 0; tries < 100 && !state; tries++) {
    state = await evaluate(
      // The page is a fresh tab, so a state here can only be this card's.
      'document.body?.dataset.assets && [document.body.dataset.assets, document.body.dataset.fit, document.body.dataset.dropped]',
    );
    if (!state) await new Promise((resolve) => setTimeout(resolve, 100));
  }

  if (!state) fail(`${key} (${locale}): the card never finished loading.`);
  if (state[0] !== 'ok') fail(`${key} (${locale}): a font or the background did not load.`);
  if (state[1] !== 'ok') fail(`${key} (${locale}): the copy does not fit the card. Shorten it.`);

  const { data: jpeg } = await page('Page.captureScreenshot', {
    format: 'jpeg',
    quality,
    clip: { x: 0, y: 0, width, height, scale: 1 },
  }).catch((error) => fail(`${key} (${locale}): ${error.message}`));
  await close();

  const out = join(outDir, `${key}-${locale}.jpg`);
  const bytes = Buffer.from(jpeg, 'base64');
  writeFileSync(out, bytes);

  // A JPEG's size sits in its SOF0 marker, at a fixed offset after FFC0.
  const sof = bytes.indexOf(Buffer.from([0xff, 0xc0]));
  const [h, w] = sof > 0 ? [bytes.readUInt16BE(sof + 5), bytes.readUInt16BE(sof + 7)] : [0, 0];
  if (w !== width || h !== height) fail(`${key} (${locale}): wrote ${w}x${h}, expected ${width}x${height}.`);

  const note = state[2] ? '  (description left out: too long)' : '';
  console.log(`  ${`${key}-${locale}.jpg`.padEnd(40)} ${String(Math.round(bytes.length / 1024)).padStart(4)} KB${note}`);
}

socket.close();
console.log(`Wrote ${jobs.length} cards to source/og/`);
process.exit(0);
