---
title: "Como pensamos sobre integrações"
slug: integrations
section: product
order: 8
description: "O botão é a parte fácil; os anos depois do botão é que são interessantes."
updated: 2026-11-18
---

“A Monica não poderia simplesmente sincronizar com este outro aplicativo?”

Possivelmente. Esse “simplesmente” está fazendo um trabalho heroico.

Uma conexão entre produtos precisa lidar com significados diferentes, não apenas com formatos diferentes. O que acontece quando um nome muda nos dois lados? Quando um registro é apagado? Quando um token de acesso expira? Qual sistema decide o que está correto?

Na Monica, um erro pode sobrescrever informações pessoais que alguém passou anos coletando. Isso tem mais consequências do que um botão de importação meio desajeitado.

### Alguém é dono da conexão

O outro serviço pode mudar a sua API, os preços ou as permissões. Pode desaparecer. Pode decidir que uma funcionalidade antes gratuita agora exige um plano empresarial. Nenhuma dessas decisões passa a ser nossa para controlar porque escrevemos uma integração.

O [exemplo do CalDAV](/pt/manual/prioritize/) explica um limite pessoal de manutenção. É um lembrete útil de que aceitar uma implementação também significa aceitar o trabalho que vem depois.

Uma API pode deixar as pessoas construírem conexões adequadas às suas próprias necessidades sem fazer de todo produto externo uma parte do núcleo da Monica. Ela ainda precisa de um comportamento claro e de um acesso cuidadoso às informações pessoais. “É uma integração” não é isenção de privacidade.

Devemos considerar o fluxo de trabalho real, as informações trocadas e quem vai mantê-lo. Às vezes a resposta é uma conexão direta. Às vezes é uma exportação ou um script pequeno.

Conectar tudo é uma ambição tentadora. Manter as conexões compreensíveis é uma ambição melhor.
