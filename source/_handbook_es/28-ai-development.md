---
title: "Cómo usamos la IA para construir Monica"
slug: ai-development
section: engineering
order: 4
description: "La ayuda de la programación asistida debería hacer más fácil entender un cambio, no hacer opcional el entenderlo."
updated: 2026-11-18
---

Un agente de programación puede escribir una cantidad convincente de código. Eso es útil. También es una excelente manera de adquirir una cantidad convincente de código que todavía no has entendido.

Para Monica, la pregunta interesante es si un cambio asistido resuelve el problema real y nos deja en condiciones de mantener el resultado. «El agente dice que funciona» no responde a ninguna de las dos cosas.

Este es el estándar al que quiero que se someta el trabajo asistido por IA. No es un inventario de qué herramienta escribió qué parte de Monica, ni la afirmación de que ya exista un determinado proceso de revisión automatizada.

### La responsabilidad no se traslada

Quien acepta un cambio debería entender el comportamiento que introduce. Eso incluye los casos incómodos: el acceso a los datos de otra persona, los fallos parciales, las fechas, los borrados y las suposiciones sobre las relaciones.

Una prueba generada puede ser útil. También puede repetir el error de la implementación con muchísima minuciosidad. La confianza tiene que venir de comprobar el comportamiento previsto, no solo de ver que dos archivos generados coinciden.

Prefiero cambios lo bastante pequeños como para leerlos y discutirlos. Si explicar un parche lleva más tiempo que escribir uno más sencillo, lo que nos ahorramos al teclear no fue necesariamente una victoria.

Lo mismo vale para los colaboradores. Que te ayude una herramienta no elimina la necesidad de explicar un problema, reproducir un error o responder a una revisión.

[El código sigue siendo un pasivo](/es/manual/code-liability/), lo haya escrito quien lo haya escrito. El agente no hereda la bandeja de entrada del mantenimiento. Una desafortunada limitación de esta tecnología, por lo demás emocionante.
