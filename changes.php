<?php

/**
 * Every change made to the marketing site, for /changes.
 *
 * One entry per change, in English whatever the page's language. `at` is UTC
 * ('Y-m-d H:i'). `pages` names the route keys it touched, or 'all' for a change
 * every page shows (the header, the footer, a style). The page sorts newest
 * first, so a new entry can go anywhere, though the top is where it reads best.
 *
 * Add an entry for every change to the site, and move `changes` in `lastmod`
 * in config.php to the same day. See .claude/skills/site-changes.
 */

return [
    ['at' => '2026-11-26 16:23', 'summary' => 'Redirected the old blog, API and download addresses, which had no language prefix, to the blog in English, the API reference and the homepage.', 'pages' => ['blog', 'api']],
    ['at' => '2026-11-26 15:35', 'summary' => 'Added the changes page, linked from the footer, listing every change made to the website.', 'pages' => ['changes']],
    ['at' => '2026-11-26 15:24', 'summary' => 'Added the Monica vs Dex, Monica vs folk and Monica vs Mesh comparison pages, with a Comparisons column in the footer.', 'pages' => ['compareDex', 'compareFolk', 'compareMesh']],
    ['at' => '2026-11-26 14:40', 'summary' => 'Redirected the old features index to the people page in every language.', 'pages' => ['people']],
    ['at' => '2026-11-25 21:34', 'summary' => 'Published the post about deleting several people, or changing their category, at once.', 'pages' => ['blog']],
    ['at' => '2026-11-25 20:30', 'summary' => 'Added feature posts to the blog and published the post about changing the template of a contact.', 'pages' => ['blog']],
    ['at' => '2026-11-25 14:32', 'summary' => 'Added a language menu beside the star count in the header, and tooltips on the GitHub and theme buttons.', 'pages' => ['all']],
    ['at' => '2026-11-25 14:25', 'summary' => 'Posts that no longer describe Monica now carry a notice above their body.', 'pages' => ['blog']],
    ['at' => '2026-11-24 20:53', 'summary' => 'Added the sales page, a docs menu in the header and a post about the new website.', 'pages' => ['sales', 'blog']],
    ['at' => '2026-11-24 19:09', 'summary' => 'Redesigned the whole website on the new design system, in eight languages.', 'pages' => ['all']],
    ['at' => '2026-11-20 18:24', 'summary' => 'Added the support page, with a contact address that scrapers cannot read.', 'pages' => ['support']],
    ['at' => '2026-11-20 18:01', 'summary' => 'Allowed the API, MCP and integrations in the legal pages, and described how to connect an assistant.', 'pages' => ['privacy', 'terms']],
    ['at' => '2026-11-16 20:08', 'summary' => 'Published the post announcing that the new version is ready for testing.', 'pages' => ['blog']],
    ['at' => '2026-10-26 12:09', 'summary' => 'Announced that registration is closed.', 'pages' => ['home']],
    ['at' => '2026-09-02 23:42', 'summary' => 'Published the post on modeling relationships between people.', 'pages' => ['blog']],
    ['at' => '2026-08-31 22:50', 'summary' => 'Published the post on the database browser we built for Laravel.', 'pages' => ['blog']],
    ['at' => '2026-08-31 22:37', 'summary' => 'Linked the RSS feed from the blog index.', 'pages' => ['blog']],
    ['at' => '2026-08-30 15:18', 'summary' => 'Published the post announcing that Monica is being rebuilt, in six languages.', 'pages' => ['blog']],
    ['at' => '2026-08-30 15:09', 'summary' => 'Removed the extra space above the first post on the blog index.', 'pages' => ['blog']],
    ['at' => '2026-08-23 18:11', 'summary' => 'Added the personal CRM guide, in six languages.', 'pages' => ['personalCrm']],
    ['at' => '2026-08-07 21:40', 'summary' => 'Improved the French wording across the site.', 'pages' => ['all']],
];
