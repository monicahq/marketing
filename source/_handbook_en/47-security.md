---
title: "Security is never finished"
slug: security
section: privacy
order: 5
description: "Personal information deserves ongoing care, precise explanations, and a healthy suspicion of absolute promises."
updated: 2026-11-18
---

I would love to say that Monica is completely secure. It would be an excellent sentence for a landing page.

It would also be a claim we can't honestly make.

Security depends on software, dependencies, infrastructure, configuration, and people. All of those change. Finding no known problem today doesn't mean there's no problem to find tomorrow.

### Consequences should guide the work

Monica holds information whose sensitivity isn't always obvious from the field name. A plain note can contain something intensely personal. That should shape how we think about access, accidental exposure, and the consequences of mistakes.

The useful questions are specific. Who should be able to read this record? Does the same rule apply through other interfaces? What happens when access changes? Could an error message reveal something it shouldn't?

These are questions engineering should answer, not a claim that this article certifies a particular implementation or audit programme.

[Testing](/en/handbook/testing/) and [public code](/en/handbook/verify-trust/) help. Neither eliminates the need to investigate reports and maintain the systems involved.

If you discover a possible vulnerability, follow the security reporting instructions in the current repository. Please avoid publishing real private data or a working exploitation guide in an ordinary issue while the problem is being assessed.

For self-hosted installations, your configuration and maintenance matter too. Security isn't a characteristic we can attach to a release and then stop thinking about. Annoyingly, it keeps needing work.
