---
title: "Cómo abordamos las pruebas"
slug: testing
section: engineering
order: 5
description: "La confianza debería seguir las consecuencias de un error, sobre todo cuando el error podría hacer perder los recuerdos de alguien."
updated: 2026-11-18
---

En mi [artículo de 2017 sobre Laravel](/es/blog/laravel/) admití que lanzar sin pruebas unitarias había perjudicado al proyecto. Arreglar una cosa podía romper otra. No fue un descubrimiento especialmente agradable.

La lección no es que un número de pruebas haga seguro el software. Es que la intuición sola es una mala forma de proteger un comportamiento del que depende la gente.

### Prueba la consecuencia

Para Monica, algunos errores importan mucho más que otros. Que desaparezca una nota, que un recordatorio salte el día equivocado o que una información se haga visible a la persona equivocada merece más atención que un detalle decorativo ligeramente desalineado.

Deberíamos probar lo que la persona espera que ocurra, incluido lo que no debe ocurrir. No basta con que una petición tenga éxito si guardó la información en el contacto equivocado.

Una prueba de regresión es especialmente útil cuando captura un fallo real: las condiciones que lo causaron y el resultado correcto. Da a los cambios futuros algo concreto que preservar.

Las pruebas también necesitan criterio. Repetir en una prueba cada llamada a un método interno puede hacer dolorosa la refactorización sin hacer más seguro el producto. Una batería de pruebas en verde aún puede pasar por alto un flujo confuso o un control inaccesible.

Son prioridades, no una afirmación sobre la cobertura actual, las puertas de lanzamiento ni un programa exhaustivo de pruebas. Eso requiere pruebas en el código real.

[Lanzar](/es/manual/shipping/) y probar van juntos. Queremos movernos con rapidez porque entendemos los riesgos, no porque no los hayamos buscado.
