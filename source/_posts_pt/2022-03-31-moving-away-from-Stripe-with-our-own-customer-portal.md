---
title: "Saindo do Stripe com nosso próprio portal do cliente"
slug: moving-away-from-Stripe-with-our-own-customer-portal
date: 2022-03-31
published_at: 2022-03-31T17:20:39+00:00
author: 'Regis Freyd'
description: "Decidimos sair do Stripe e ir para o Paddle."
original_url: https://www.monicahq.com/blog/moving-away-from-Stripe-with-our-own-customer-portal
---
Hoje usamos o Stripe para gerenciar nossas assinaturas. Embora adoremos o Stripe do ponto de vista de quem programa, lidar com impostos no mundo inteiro é uma confusão completa, especialmente no fim do ano fiscal. Nosso contador nos odeia.
Precisamos migrar para outro processador de pagamentos que trate de todos os impostos do jeito certo. Esse processador se chama [Paddle](https://paddle.com).

Há outro motivo para querermos mudar a abordagem atual. O Monica é, antes de tudo, um produto de código aberto. Temos uma comunidade enorme. Muitos de vocês hospedam o Monica nos próprios servidores. Como também hospedamos o produto para poder monetizá-lo, até agora incluímos na base de código principal todo o código necessário para gerenciar assinaturas. É muito código. Cuidamos de assinar, editar e cancelar uma assinatura, com todas as permissões em volta disso, e assim por diante. Não é o ideal.

Decidimos remover todo o código de cobrança da base principal e criar um novo portal, chamado portal de assinaturas, para gerenciar suas assinaturas do Monica. Você terá que criar uma conta nesse site e comprar uma chave de licença para colar na sua conta do Monica. Nada além disso é necessário.

Se você tem uma assinatura hoje, vamos permitir que migre sua conta para a nova com facilidade. Instruções detalhadas serão enviadas por e-mail para cada um de vocês.

Pretendemos fazer a transição para esse novo portal do cliente nas próximas semanas.
