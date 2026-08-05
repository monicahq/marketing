#!/usr/bin/env bash
#
# Renders the social sharing images into public/og/, one per locale, at
# 1200x630. Run it after editing scripts/og/template.html or after changing the
# hero copy it mirrors:
#
#   npm run og
#
# Headless Chrome does the rendering, so there is no image library to install
# and the output matches what a browser would draw. The generated PNGs are
# committed, because a build should not depend on a browser being present.

set -euo pipefail

CHROME="${CHROME:-/Applications/Google Chrome.app/Contents/MacOS/Google Chrome}"

if [ ! -x "$CHROME" ]; then
  echo "Chrome not found at: $CHROME" >&2
  echo "Set CHROME to your Chrome or Chromium binary and run again." >&2
  exit 1
fi

ROOT="$(cd "$(dirname "${BASH_SOURCE[0]}")/../.." && pwd)"
TEMPLATE="$ROOT/scripts/og/template.html"
OUT_DIR="$ROOT/public/og"

mkdir -p "$OUT_DIR"

for locale in en fr de es; do
  out="$OUT_DIR/monica-$locale.png"

  # --allow-file-access-from-files lets the page load the webfont and the mark
  # over file://, which Chrome otherwise blocks as a cross-origin request.
  "$CHROME" \
    --headless \
    --disable-gpu \
    --hide-scrollbars \
    --allow-file-access-from-files \
    --force-device-scale-factor=1 \
    --window-size=1200,630 \
    --screenshot="$out" \
    "file://$TEMPLATE?locale=$locale" \
    >/dev/null 2>&1

  if [ ! -f "$out" ]; then
    echo "Failed to render $locale" >&2
    exit 1
  fi

  echo "  $(basename "$out")  $(du -h "$out" | cut -f1)"
done

echo "Wrote $(ls -1 "$OUT_DIR"/*.png | wc -l | tr -d ' ') images to public/og/"
