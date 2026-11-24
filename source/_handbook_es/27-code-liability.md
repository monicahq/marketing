---
title: "El código es un pasivo"
slug: code-liability
section: engineering
order: 3
description: "El valor es lo que el software permite hacer a la gente; el código es lo que tenemos que cuidar."
updated: 2026-11-18
---

Una función nueva puede aportar valor. El código que hay debajo añade responsabilidad.

Alguien tiene que entenderlo, revisarlo, probarlo, traducir los mensajes que introduce y arreglarlo cuando cambie una dependencia. Con el tiempo, ese alguien podría ser yo, un domingo en el que había planeado hacer literalmente cualquier otra cosa.

Por eso no me parece especialmente impresionante el número de líneas que se añaden a Monica.

### La factura llega después

Imagina dos maneras de representar el mismo dato personal. Una encaja en un concepto existente. La otra añade sus propias pantallas, permisos, tareas en segundo plano y ajustes.

El segundo enfoque podría estar justificado. Pero deberíamos poder nombrar el beneficio, porque cada una de esas piezas móviles pasa ahora a pertenecer al proyecto.

Esto es aún más relevante cuando generar código es barato. Una herramienta puede producir rápidamente una implementación enorme sin que el resultado sea barato de entender ni seguro de mantener.

Eliminar de forma temeraria comportamientos útiles no es la respuesta. [Quitar funciones](/es/manual/removing-features/) exige cuidado con las personas que dependen de ellas. El mejor momento para evitar código innecesario es antes de aceptar la obligación.

Una solución corta tampoco es buena por definición. Diez líneas incomprensibles pueden dar más trabajo que cincuenta obvias.

Quiero el código suficiente para que Monica sea útil y comprensible. No quiero una gran colección de código cuyo único mérito sea demostrar que estuvimos muy ocupados. El repositorio no es un programa de fidelización. No nos regalan un bocadillo al llegar al millón de líneas.
