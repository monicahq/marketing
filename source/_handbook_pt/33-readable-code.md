---
title: "O código é escrito para humanos"
slug: readable-code
section: engineering
order: 9
description: "Quem contribuir no futuro deveria conseguir seguir um relacionamento sem antes resolver um enigma."
updated: 2026-11-18
---

Um computador executa com toda a satisfação um código que deixa um humano infeliz.

Infelizmente, são os humanos que têm de consertá-lo.

A Monica é de código aberto. Alguém que se aproxima de um bug pode não conhecer a nossa história, a nossa terminologia nem a ideia engenhosa que parecia óbvia quando escrevemos o código. Pode estar contribuindo num idioma que não é o seu primeiro. Mesmo assim, deveria ter uma chance razoável de entender o que está acontecendo.

### Diga o que o código significa

Um relacionamento tem direção. Um lembrete tem data e contexto. Uma exclusão tem consequências. Nomes e estrutura deveriam tornar essas coisas visíveis em vez de escondê-las atrás de um mecanismo genérico que poderia significar qualquer coisa.

Um pouco de repetição pode ser mais fácil de entender do que uma abstração tentando acomodar seis casos vagamente parecidos. A abstração certa é útil. A prematura vira um pequeno framework que ninguém pediu para manter.

Comentários são especialmente valiosos quando explicam o porquê: uma suposição cultural que evitamos, uma regra de data inesperada, uma decisão de compatibilidade. Um comentário anunciando que a próxima linha salva um registro não chega a ser uma revelação.

No [artigo original sobre Laravel](/pt/blog/laravel/), escrevi sobre remover a maioria dos eventos e listeners porque comportamento demais havia se tornado difícil de acompanhar. É um exemplo histórico, não uma proibição universal de eventos.

Quero que quem contribuir no futuro gaste seu tempo entendendo o problema humano. Decifrar meu antigo entusiasmo por esperteza não deveria ser pré-requisito.
