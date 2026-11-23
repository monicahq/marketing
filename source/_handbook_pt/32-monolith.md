---
title: "A beleza de um monolito"
slug: monolith
section: engineering
order: 8
description: "Manter o trabalho relacionado junto até que um problema real nos dê um motivo para separá-lo."
updated: 2026-11-18
---

Um contato tem um relacionamento. Esse relacionamento aparece numa linha do tempo. Um lembrete se refere à vida da mesma pessoa.

Esses conceitos já exigem reflexão suficiente sem que precisemos depurar uma conversa de rede entre várias aplicações toda vez que interagem.

Um monolito é atraente porque mantém boa parte desse trabalho num só lugar. A fronteira de um problema pode ficar perto do código que precisamos ler para entendê-lo.

### Simples de raciocinar tem valor

Para uma equipe pequena, cada serviço adicional é mais uma coisa para implantar, observar, atualizar e explicar. Para quem hospeda por conta própria, é mais um requisito entre baixar a Monica e de fato usá-la.

Dividir o código em processos não produz automaticamente fronteiras limpas. Pode preservar toda a confusão e ainda acrescentar tempos limite. Uma façanha notável, tecnicamente.

Ainda devemos separar responsabilidades dentro de uma aplicação. O código que cuida de relacionamentos não deve virar desculpa para misturar tudo com tudo. Um monolito não é uma recomendação de criar um único arquivo enorme.

Esta é uma preferência de arquitetura, não uma descrição completa da infraestrutura de produção da Monica. Serviços de apoio e trabalho em segundo plano podem existir sem transformar cada conceito do produto num sistema implantado de forma independente.

Se um problema medido eventualmente pedir uma fronteira diferente, podemos considerá-la então. [Tecnologia chata](/pt/manual/boring-technology/) não significa recusar-se a se adaptar.

Até que haja um motivo para distribuir a complexidade, prefiro mantê-la num lugar onde quem contribui consiga encontrá-la.
