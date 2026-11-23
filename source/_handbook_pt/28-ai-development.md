---
title: "Como usamos IA para construir a Monica"
slug: ai-development
section: engineering
order: 4
description: "A ajuda de programação deve tornar uma mudança mais fácil de entender, não tornar o entendimento opcional."
updated: 2026-11-18
---

Um agente de programação consegue escrever uma quantidade convincente de código. Isso é útil. Também é uma excelente maneira de adquirir uma quantidade convincente de código que você ainda não entendeu.

Para a Monica, a pergunta interessante é se uma mudança assistida resolve o problema de verdade e nos deixa em condições de manter o resultado. “O agente disse que funciona” não responde a nenhuma das duas partes.

Este é o padrão ao qual quero que o trabalho assistido por IA seja submetido. Não é um inventário de qual ferramenta escreveu qual parte da Monica, nem uma afirmação de que determinado processo automatizado de revisão já existe.

### A responsabilidade não muda de mãos

Quem aceita uma mudança deveria entender o comportamento que ela introduz. Isso inclui os casos incômodos: acesso aos dados de outra pessoa, falhas parciais, datas, exclusões e suposições sobre relacionamentos.

Um teste gerado pode ser útil. Também pode repetir o erro da implementação com muito capricho. A confiança precisa vir de verificar o comportamento pretendido, não de simplesmente ver dois arquivos gerados concordarem.

Prefiro mudanças pequenas o bastante para serem lidas e discutidas. Se explicar um patch leva mais tempo do que escrever um mais simples, a digitação economizada não foi necessariamente uma vitória.

O mesmo vale para quem contribui. A ajuda de uma ferramenta não elimina a necessidade de explicar um problema, reproduzir um bug ou responder a uma revisão.

[O código continua sendo um passivo](/pt/manual/code-liability/), seja quem for que o digitou. O agente não herda a caixa de entrada da manutenção. Uma limitação lamentável dessa tecnologia, de resto muito empolgante.
