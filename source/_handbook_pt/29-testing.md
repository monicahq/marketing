---
title: "Como encaramos os testes"
slug: testing
section: engineering
order: 5
description: "A confiança deve acompanhar as consequências de um erro, sobretudo quando o erro pode fazer alguém perder suas memórias."
updated: 2026-11-18
---

No meu [artigo de 2017 sobre Laravel](/pt/blog/laravel/), admiti que lançar sem testes unitários havia prejudicado o projeto. Consertar uma coisa podia quebrar outra. Não foi uma descoberta especialmente agradável.

A lição não é que uma contagem de testes torne o software seguro. É que a intuição sozinha é uma péssima forma de proteger comportamentos dos quais as pessoas dependem.

### Teste a consequência

Para a Monica, alguns erros importam muito mais que outros. Uma nota que some, um lembrete que dispara no dia errado ou uma informação que fica visível para a pessoa errada merecem mais atenção do que um detalhe decorativo ligeiramente desalinhado.

Devemos testar o que a pessoa espera que aconteça, inclusive o que não pode acontecer. Uma requisição bem-sucedida não basta se ela salvou a informação no contato errado.

Um teste de regressão é particularmente útil quando captura uma falha real: as condições que a causaram e o resultado correto. Ele dá às mudanças futuras algo concreto para preservar.

Os testes também exigem bom senso. Repetir cada chamada de método interno num teste pode tornar a refatoração dolorosa sem tornar o produto mais seguro. Uma suíte toda verde ainda pode deixar passar um fluxo confuso ou um controle inacessível.

Estas são prioridades, não uma afirmação sobre a cobertura atual, sobre barreiras de lançamento ou sobre um programa de testes exaustivo. Isso exige evidências do código real.

[Entregar](/pt/manual/shipping/) e testar andam juntos. Queremos andar rápido porque entendemos os riscos, e não porque não os procuramos.
