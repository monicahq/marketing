---
title: "Código é um passivo"
slug: code-liability
section: engineering
order: 3
description: "O valor está no que o software permite às pessoas fazer; o código é o que temos de cuidar."
updated: 2026-11-18
---

Uma funcionalidade nova pode agregar valor. O código por baixo dela agrega responsabilidade.

Alguém precisa entendê-lo, revisá-lo, testá-lo, traduzir as mensagens que ele introduz e consertá-lo quando uma dependência mudar. Eventualmente esse alguém pode ser eu, num domingo em que eu havia planejado fazer literalmente qualquer outra coisa.

É por isso que não acho o número de linhas adicionadas à Monica especialmente impressionante.

### A conta chega depois

Imagine duas maneiras de representar a mesma informação pessoal. Uma se encaixa num conceito existente. A outra traz suas próprias telas, permissões, tarefas em segundo plano e configurações.

A segunda abordagem pode se justificar. Mas deveríamos ser capazes de nomear o benefício, porque cada uma dessas peças móveis agora pertence ao projeto.

Isso fica ainda mais relevante quando gerar código é barato. Uma ferramenta pode produzir rapidamente uma implementação grande sem tornar o resultado barato de entender ou seguro de manter.

Apagar comportamentos úteis de forma imprudente não é a resposta. [Remover funcionalidades](/pt/manual/removing-features/) exige cuidado com as pessoas que dependem delas. O melhor momento de evitar código desnecessário é antes de aceitar a obrigação.

Uma solução curta também não é automaticamente boa. Dez linhas incompreensíveis podem dar mais trabalho que cinquenta óbvias.

Quero código suficiente para tornar a Monica útil e compreensível. Não quero uma grande coleção de código só para provar que estivemos muito ocupados. O repositório não é um programa de fidelidade. Não ganhamos um sanduíche de graça depois de um milhão de linhas.
