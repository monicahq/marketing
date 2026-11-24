---
title: "El código se escribe para humanos"
slug: readable-code
section: engineering
order: 9
description: "Un futuro colaborador debería poder seguir una relación sin tener que resolver antes un acertijo."
updated: 2026-11-18
---

Un ordenador ejecuta con total tranquilidad código que a un humano le amarga la vida.

Por desgracia, los humanos son quienes tienen que arreglarlo.

Monica es de código abierto. Quien se acerque a un error puede no conocer nuestra historia, nuestra terminología ni la idea ingeniosa que parecía obvia cuando escribimos el código. Puede que esté contribuyendo en un idioma que no es el suyo. Aun así, debería tener una posibilidad razonable de entender lo que pasa.

### Di lo que el código significa

Una relación tiene una dirección. Un recordatorio tiene una fecha y un contexto. Un borrado tiene consecuencias. Los nombres y la estructura deberían hacer visibles esas cosas en lugar de esconderlas tras un mecanismo genérico que podría significar cualquier cosa.

Un poco de repetición puede ser más fácil de entender que una abstracción que intenta dar cabida a seis casos vagamente parecidos. La abstracción correcta es útil. La prematura se convierte en un pequeño framework que nadie pidió mantener.

Los comentarios son especialmente valiosos cuando explican el porqué: una suposición cultural que evitamos, una regla de fechas inesperada, una decisión de compatibilidad. Un comentario que anuncia que la siguiente línea guarda un registro no es tan revelador.

En el [artículo original sobre Laravel](/es/blog/laravel/) escribí sobre cómo eliminé la mayoría de los eventos y oyentes porque demasiado comportamiento se había vuelto difícil de seguir. Es un ejemplo histórico, no una prohibición universal de los eventos.

Quiero que los futuros colaboradores dediquen su tiempo a entender el problema humano. Descifrar mi antiguo entusiasmo por la ingeniosidad no debería ser un requisito previo.
