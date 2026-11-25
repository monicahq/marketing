---
title: 'Ahora puedes cambiar la plantilla de un contacto'
slug: change-contact-template
date: 2026-11-25
author: 'Regis Freyd'
description: 'Pasa a alguien a otra plantilla cuando su página ya no le encaja. Monica te muestra antes lo que va a pasar, y nada de lo que escribiste se borra nunca.'
category: feature
icon: layers
screenshot:
  src: /assets/images/blog/2026-11-25-change-contact-template-preview.webp
  alt: 'El panel Plantilla de Editar contacto, que propone pasar a Monica Geller a la plantilla Red profesional y lista Categoría, Género, Cumpleaños y Dirección como datos que pasan a Respuestas sin usar'
  caption: 'Antes de que cambie nada, Monica lista lo que pasará a Respuestas sin usar.'
pullRequest: 8014
docs: https://my.monicahq.com/docs/en/people/change-the-template
---
Cada contacto en Monica está moldeado por una plantilla. La plantilla decide qué pestañas, secciones y campos muestra su página: un amigo cercano puede tener una página sobre cumpleaños y restaurantes favoritos, y un colega una página sobre su equipo y su jefe.

Hasta ahora, un contacto se quedaba para siempre con la plantilla con la que se creó. Si añadiste a Rachel con **Contacto básico** y más tarde se convirtió en tu colega, no había forma de darle la página **Colega**. Si elegiste la plantilla equivocada por error, tenías que aguantarte, o borrar el contacto y empezar de nuevo, perdiendo todo lo que habías escrito sobre ella.

Ahora puedes pasar a cualquiera a otra plantilla, o a otra versión de la que usa, cuando quieras. Antes de que cambie nada, Monica te muestra exactamente lo que va a pasar: las respuestas que no tienen sitio en la nueva plantilla y pasan a **Respuestas sin usar**, las que vuelven, y los recordatorios que se detienen o se reactivan. Nada de lo que escribiste se borra nunca, y puedes volver atrás en cualquier momento.

## Cómo cambiar la plantilla de un contacto

1. Abre tu bóveda. En su panel, elige **Personas** en la barra lateral.

   ![El panel de la bóveda Personal, con Personas en la barra lateral bajo el encabezado Personas](/assets/images/blog/2026-11-25-change-contact-template-dashboard.webp "El panel de la bóveda. Personas está en la barra lateral.")

2. En la lista de personas, elige a la persona cuya plantilla quieres cambiar. Los datos bajo su nombre terminan con la plantilla que usa su página.

   ![La página de contacto de Monica Geller, con Plantilla Contacto básico al final de los datos bajo su nombre, y el botón Editar contacto arriba a la derecha](/assets/images/blog/2026-11-25-change-contact-template-contact.webp "La página del contacto indica qué plantilla usa. Editar contacto está arriba a la derecha.")

3. Elige **Editar contacto**, arriba a la derecha de su página.

4. Desplázate hasta el panel **Plantilla**. Abre la lista bajo **Plantilla usada para**, seguida de su nombre. Muestra todas las plantillas que puedes usar para contactos. Una plantilla con varias versiones publicadas lista cada una de ellas, y la que la persona usa ahora aparece marcada.

   ![El panel Plantilla de Editar contacto, con Contacto básico seleccionado en la lista](/assets/images/blog/2026-11-25-change-contact-template-panel.webp "El panel Plantilla, al final de Editar contacto.")

5. Elige la nueva plantilla. Monica todavía no cambia nada. En su lugar aparece un cuadro que pregunta si quieres pasar a la persona a esa plantilla y lista lo que le pasará a su página.

   ![El cuadro que pregunta si pasar a Monica a la plantilla Amigo íntimo, indica que no se perderá ningún dato, con los botones Cancelar y Cambiar plantilla](/assets/images/blog/2026-11-25-change-contact-template-confirm.webp "Monica pregunta antes de cambiar nada.")

6. Lee las listas del cuadro. Cuando estés conforme, elige **Cambiar plantilla**. Para dejarlo todo como estaba, elige **Cancelar**.

Monica te lleva de vuelta a la página del contacto, que ahora muestra las pestañas y secciones de la nueva plantilla.

El panel **Plantilla** solo aparece cuando hay algo que elegir. Si tienes una única plantilla para contactos, con una única versión publicada, no hay nada a lo que cambiar, y el panel permanece oculto.

## Qué pasa con lo que escribiste

Una respuesta que tiene un campo equivalente en la nueva plantilla pasa a él, y su recordatorio sigue activo. Un cumpleaños sigue siendo un cumpleaños.

Una respuesta sin sitio en la nueva plantilla pasa a **Respuestas sin usar**. Ya no se muestra en la página, pero Monica la conserva, y vuelve sola en cuanto la persona use de nuevo una plantilla con un campo equivalente. Un recordatorio sobre una fecha que pasa allí se detiene, y se reactiva cuando la fecha vuelve.

El nombre, la foto, las relaciones, los eventos de vida y los grupos pertenecen a la persona y no a la plantilla, así que un cambio de plantilla nunca los toca.

## ¿Has cambiado de opinión?

Elige de nuevo la plantilla anterior en **Editar contacto**, y todo lo que pasó a **Respuestas sin usar** vuelve. También puedes abrir **Historial de versiones** desde el menú junto a **Editar contacto** y volver a la plantilla que la persona usaba antes.

Los scripts y los asistentes de IA pueden hacer lo mismo, con las mismas reglas: la API y el servidor MCP pueden previsualizar un cambio de plantilla y realizarlo.
