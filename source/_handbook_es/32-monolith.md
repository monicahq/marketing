---
title: "La belleza de un monolito"
slug: monolith
section: engineering
order: 8
description: "Mantener junto el trabajo relacionado hasta que un problema real nos dé una razón para separarlo."
updated: 2026-11-18
---

Un contacto tiene una relación. Esa relación aparece en una cronología. Un recordatorio se refiere a la vida de la misma persona.

Estos conceptos ya requieren bastante reflexión sin que además tengamos que depurar una conversación de red entre varias aplicaciones cada vez que interactúan.

Un monolito resulta atractivo porque mantiene gran parte de ese trabajo en un solo lugar. El límite de un problema puede quedar cerca del código que necesitamos leer para entenderlo.

### Lo fácil de razonar tiene valor

Para un equipo pequeño, cada servicio adicional es algo más que desplegar, observar, actualizar y explicar. Para quien se autoaloja, es otro requisito entre descargar Monica y usarla de verdad.

Repartir el código entre procesos no produce automáticamente límites limpios. Puede conservar toda la confusión y añadir tiempos de espera agotados. Un logro notable, técnicamente.

Aun así, debemos separar responsabilidades dentro de una aplicación. El código que gestiona las relaciones no debería convertirse en una excusa para mezclarlo todo con todo. Un monolito no es una recomendación de crear un único archivo enorme.

Esto es una preferencia arquitectónica, no una descripción completa de la infraestructura de producción de Monica. Pueden existir servicios de apoyo y trabajo en segundo plano sin que cada concepto del producto se convierta en un sistema desplegado de forma independiente.

Si algún día un problema medido pide un límite distinto, lo consideraremos entonces. [La tecnología aburrida](/es/manual/boring-technology/) no significa negarse a adaptarse.

Hasta que haya una razón para repartir la complejidad, prefiero mantenerla en un sitio donde un colaborador pueda encontrarla.
