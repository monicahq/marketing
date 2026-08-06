/* The site's only JavaScript.
 *
 * Alpine drives the billing toggle on the pricing page and nothing else. It is
 * loaded as a module, so it is deferred and runs after the document is parsed.
 *
 * Everything Alpine touches is server-rendered in its default state first, so
 * the page is correct and readable before this file arrives, and still correct
 * if it never does. Keep it that way: bind with `x-text` over real content
 * rather than rendering an empty element and filling it in. */
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
