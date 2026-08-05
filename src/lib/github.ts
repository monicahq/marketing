/**
 * The repository's star count, read from the GitHub API at build time.
 *
 * This runs in Node during `npm run build`, never in a browser, so the number
 * is baked into the generated HTML and the page still ships no JavaScript.
 *
 * Two consequences worth knowing:
 *
 * - The figure is frozen at build time. Flooring it to the nearest thousand
 *   keeps it truthful for months, but it only moves when the site is rebuilt.
 *   Schedule a deploy hook if you want it to track more closely.
 * - A marketing site must never fail to deploy because an API was slow. Any
 *   failure falls back to FALLBACK_STARS and logs a warning.
 */
import { GITHUB_TOKEN } from 'astro:env/server';

const REPO = 'monicahq/monica';

/**
 * Used when the API cannot be reached. Last verified 2026-08-04 (24,956).
 * Deliberately below the real figure: if this ever ships, it should understate
 * rather than overstate.
 */
const FALLBACK_STARS = 24_000;

const TIMEOUT_MS = 5_000;

/**
 * Floor to the nearest thousand, because the "+" promises "at least this many".
 * 24,956 becomes "24k+", never "25k+".
 */
function format(count: number): string {
  return count < 1000 ? String(count) : `${Math.floor(count / 1000)}k+`;
}

async function fetchStars(): Promise<number> {
  const headers: Record<string, string> = {
    Accept: 'application/vnd.github+json',
    // GitHub rejects requests without a User-Agent.
    'User-Agent': 'monica-marketing-site',
  };

  // Optional. Unauthenticated builds get 60 requests per hour per IP, which is
  // plenty for one build but is shared with everything else on a CI runner.
  // A token raises the ceiling to 5,000 and makes the limit a non-issue.
  if (GITHUB_TOKEN) headers.Authorization = `Bearer ${GITHUB_TOKEN}`;

  const response = await fetch(`https://api.github.com/repos/${REPO}`, {
    headers,
    signal: AbortSignal.timeout(TIMEOUT_MS),
  });

  if (!response.ok) {
    throw new Error(`GitHub API responded ${response.status} ${response.statusText}`);
  }

  const data: unknown = await response.json();
  const count = (data as { stargazers_count?: unknown }).stargazers_count;

  if (typeof count !== 'number' || !Number.isFinite(count)) {
    throw new Error('GitHub API response had no usable stargazers_count');
  }

  return count;
}

/**
 * Memoized at module scope, so the four locale pages share one request per
 * build rather than making one each.
 */
const starCount: Promise<string> = fetchStars()
  .then(format)
  .catch((error: unknown) => {
    console.warn(
      `[github] Could not read the star count for ${REPO}, using the fallback. ${
        error instanceof Error ? error.message : String(error)
      }`,
    );
    return format(FALLBACK_STARS);
  });

/** The formatted star count, e.g. "24k+". */
export function getStarCount(): Promise<string> {
  return starCount;
}
