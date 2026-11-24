---
title: "Cómo pensamos sobre las integraciones"
slug: integrations
section: product
order: 8
description: "El botón es la parte fácil; lo interesante son los años que vienen después del botón."
updated: 2026-11-18
---

«¿No podría Monica simplemente sincronizarse con esta otra aplicación?»

Posiblemente. Ese «simplemente» está haciendo un trabajo heroico.

Una conexión entre productos tiene que lidiar con significados distintos, no solo con formatos distintos. ¿Qué pasa cuando un nombre cambia en ambos lados? ¿Cuando se borra un registro? ¿Cuando caduca un token de acceso? ¿Qué sistema decide qué es lo correcto?

En Monica, un error podría sobrescribir información personal que alguien pasó años recopilando. Eso tiene más consecuencias que un botón de importación algo torpe.

### Alguien es responsable de la conexión

El otro servicio puede cambiar su API, sus precios o sus permisos. Puede desaparecer. Puede decidir que una función antes gratuita ahora requiere un plan de empresa. Ninguna de esas decisiones pasa a estar bajo nuestro control porque hayamos escrito una integración.

El [ejemplo de CalDAV](/es/manual/prioritize/) explica un límite personal de mantenimiento. Es un buen recordatorio de que aceptar una implementación también significa aceptar el trabajo posterior.

Una API puede permitir que la gente construya conexiones adecuadas a sus propias necesidades sin hacer que cada producto externo forme parte del núcleo de Monica. Aun así, necesita un comportamiento claro y un acceso cuidadoso a la información personal. «Es una integración» no es una exención de privacidad.

Deberíamos considerar el flujo de trabajo real, la información que se intercambia y quién la mantendrá. A veces la respuesta es una conexión directa. A veces es una exportación o un pequeño script.

Conectarlo todo es una ambición tentadora. Mantener las conexiones comprensibles es una mejor.
