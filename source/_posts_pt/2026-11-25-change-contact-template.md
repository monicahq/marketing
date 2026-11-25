---
title: 'Agora você pode mudar o modelo de um contato'
slug: change-contact-template
date: 2026-11-25
author: 'Regis Freyd'
description: 'Passe alguém para outro modelo quando a página dessa pessoa já não combina com ela. A Monica mostra antes o que vai acontecer, e nada do que você escreveu é apagado.'
category: feature
icon: layers
screenshot:
  src: /assets/images/blog/2026-11-25-change-contact-template-preview.webp
  alt: 'O painel Modelo de Editar contato, perguntando se Monica Geller deve passar para o modelo Rede profissional e listando Categoria, Gênero, Aniversário e Endereço como itens que vão para Respostas sem uso'
  caption: 'Antes de qualquer mudança, a Monica lista o que vai para Respostas sem uso.'
pullRequest: 8014
docs: https://my.monicahq.com/docs/en/people/change-the-template
---
Cada contato na Monica é moldado por um modelo. O modelo decide quais abas, seções e campos a página dele mostra: um amigo próximo pode ter uma página sobre aniversários e restaurantes favoritos, e um colega uma página sobre sua equipe e seu gestor.

Até agora, um contato ficava para sempre com o modelo com que foi criado. Se você adicionou a Rachel com **Contato básico** e ela depois virou sua colega, não havia como dar a ela a página **Colega**. Se você escolheu o modelo errado por engano, tinha de conviver com isso, ou apagar o contato e começar de novo, perdendo tudo o que tinha escrito sobre ela.

Agora você pode passar qualquer pessoa para outro modelo, ou para outra versão do que ela usa, quando quiser. Antes de qualquer mudança, a Monica mostra exatamente o que vai acontecer: as respostas que não têm lugar no novo modelo e vão para **Respostas sem uso**, as que voltam, e os lembretes que param ou recomeçam. Nada do que você escreveu é apagado, e você pode voltar atrás a qualquer momento.

## Como mudar o modelo de um contato

1. Abra o seu cofre. No painel dele, escolha **Pessoas** na barra lateral.

   ![O painel do cofre Pessoal, com Pessoas na barra lateral sob o título Pessoas](/assets/images/blog/2026-11-25-change-contact-template-dashboard.webp "O painel do cofre. Pessoas está na barra lateral.")

2. Na lista de pessoas, escolha aquela cujo modelo você quer mudar. As informações sob o nome dela terminam com o modelo que a página usa.

   ![A página de contato de Monica Geller, com Modelo Contato básico no fim das informações sob o nome dela, e o botão Editar contato no canto superior direito](/assets/images/blog/2026-11-25-change-contact-template-contact.webp "A página do contato diz qual modelo ela usa. Editar contato fica no canto superior direito.")

3. Escolha **Editar contato**, no canto superior direito da página dela.

4. Role até o painel **Modelo**. Abra a lista sob **Modelo usado para**, seguido do nome da pessoa. Ela mostra todos os modelos que você pode usar para contatos. Um modelo com várias versões publicadas lista cada uma delas, e a que a pessoa usa agora aparece marcada.

   ![O painel Modelo de Editar contato, com Contato básico selecionado na lista](/assets/images/blog/2026-11-25-change-contact-template-panel.webp "O painel Modelo, no fim de Editar contato.")

5. Escolha o novo modelo. A Monica ainda não muda nada. Em vez disso, aparece uma caixa perguntando se deve passar a pessoa para esse modelo e listando o que vai acontecer com a página dela.

   ![A caixa perguntando se deve passar a Monica para o modelo Amizade próxima, dizendo que nenhum dado será perdido, com os botões Cancelar e Alterar modelo](/assets/images/blog/2026-11-25-change-contact-template-confirm.webp "A Monica pergunta antes de mudar qualquer coisa.")

6. Leia as listas da caixa. Quando estiver de acordo, escolha **Alterar modelo**. Para deixar tudo como estava, escolha **Cancelar**.

A Monica leva você de volta à página do contato, que agora mostra as abas e seções do novo modelo.

O painel **Modelo** só aparece quando há algo para escolher. Se você tem um único modelo para contatos, com uma única versão publicada, não há para onde mudar, e o painel fica oculto.

## O que acontece com o que você escreveu

Uma resposta que tem um campo correspondente no novo modelo passa para ele, e o lembrete dela continua ativo. Um aniversário continua sendo um aniversário.

Uma resposta sem lugar no novo modelo vai para **Respostas sem uso**. Ela deixa de aparecer na página, mas a Monica a guarda, e ela volta sozinha assim que a pessoa usar de novo um modelo com um campo correspondente. Um lembrete de uma data que vai para lá para, e recomeça quando a data volta.

O nome, a foto, os relacionamentos, os eventos de vida e os grupos pertencem à pessoa e não ao modelo, por isso uma mudança de modelo nunca mexe neles.

## Mudou de ideia?

Escolha o modelo antigo de novo em **Editar contato**, e tudo o que foi para **Respostas sem uso** volta. Você também pode abrir **Histórico de versões** no menu ao lado de **Editar contato** e voltar ao modelo que a pessoa usava antes.

Scripts e assistentes de IA podem fazer o mesmo, com as mesmas regras: a API e o servidor MCP podem ambos pré-visualizar uma mudança de modelo e realizá-la.
