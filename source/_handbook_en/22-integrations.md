---
title: "How we think about integrations"
slug: integrations
section: product
order: 8
description: "The button is the easy part; the years after the button are where things get interesting."
updated: 2026-11-18
---

“Could Monica just sync with this other application?”

Possibly. That word “just” is doing a heroic amount of work.

A connection between products has to deal with different meanings, not merely different formats. What happens when a name changes on both sides? When a record is deleted? When an access token expires? Which system gets to decide what is correct?

For Monica, a mistake might overwrite personal information someone spent years collecting. That's more consequential than a slightly awkward import button.

### Someone owns the connection

The other service can change its API, pricing, or permissions. It might disappear. It might decide that a previously free feature now requires a business plan. None of those decisions become ours to control because we wrote an integration.

The [CalDAV example](/en/handbook/prioritize/) explains a personal maintenance boundary. It's a useful reminder that accepting an implementation also means accepting the work afterwards.

An API can let people build connections suited to their own needs without making every external product part of Monica's core. It still needs clear behaviour and careful access to personal information. “It's an integration” isn't a privacy exemption.

We should consider the actual workflow, the information exchanged, and who will maintain it. Sometimes the answer is a direct connection. Sometimes it's an export or a small script.

Connecting everything is a tempting ambition. Keeping the connections understandable is a better one.
