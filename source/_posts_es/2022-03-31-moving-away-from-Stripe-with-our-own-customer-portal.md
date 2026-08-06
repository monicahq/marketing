---
title: "Dejamos Stripe por nuestro propio portal de clientes"
slug: moving-away-from-Stripe-with-our-own-customer-portal
date: 2022-03-31
published_at: 2022-03-31T17:20:39+00:00
author: 'Regis Freyd'
description: "Hemos decidido dejar Stripe y pasarnos a Paddle."
original_url: https://www.monicahq.com/blog/moving-away-from-Stripe-with-our-own-customer-portal
---
Ahora mismo usamos Stripe para gestionar nuestras suscripciones. Aunque adoramos Stripe desde el punto de vista de quien programa, lidiar con los impuestos de todo el mundo es un auténtico lío, sobre todo al cierre del ejercicio fiscal. Nuestro contable nos odia.
Necesitamos cambiar a otra pasarela de pago que gestione todos los impuestos como es debido. Esa pasarela se llama [Paddle](https://paddle.com).

Hay otro motivo por el que queremos cambiar de planteamiento. Monica es, ante todo, un producto de código abierto. Tenemos una comunidad enorme. Muchos de vosotros alojáis Monica en vuestros servidores. Como nosotros también alojamos el producto para poder monetizarlo, hasta ahora hemos incluido en el código principal todo lo necesario para gestionar las suscripciones. Es mucho código. Nos ocupamos de dar de alta, editar y cancelar una suscripción, con todos los permisos que ello implica, y así sucesivamente. No es lo ideal.

Hemos decidido sacar todo el código de facturación del código principal y crear un portal nuevo, el portal de suscripciones, para gestionar tus suscripciones de Monica. Tendrás que crear una cuenta en ese sitio y comprar una clave de licencia que después pegarás en tu cuenta de Monica. No hace falta nada más.

Si ahora mismo tienes una suscripción, te permitiremos migrar tu cuenta a la nueva sin complicaciones. Cada uno recibirá más instrucciones por correo.

Tenemos previsto pasar a este nuevo portal de clientes en las próximas semanas.
