---
title: 'Agora você pode excluir várias pessoas, ou mudar a categoria delas, de uma só vez'
slug: bulk-people-actions
date: 2026-11-25
author: 'Regis Freyd'
description: 'Marque as pessoas que quiser na lista Pessoas e depois mude a categoria delas ou exclua todas de uma vez. A Monica diz quem vai sair antes de excluir qualquer pessoa, e uma mudança de categoria pode ser desfeita.'
category: feature
icon: people
screenshot:
  src: /assets/images/blog/2026-11-25-bulk-people-actions-preview.webp
  alt: 'A lista Pessoas com Chandler Bing, Ross Geller e Rachel Green marcados, e uma barra acima indicando 3 selecionadas, com Alterar categoria e Excluir'
  caption: 'Marque algumas pessoas, e uma barra mostra o que você pode fazer com elas.'
pullRequest: 8023
docs: https://my.monicahq.com/docs/en/people/find-people
---
Um cofre vai se enchendo com os anos. Pessoas que você encontrou uma única vez, colegas de um emprego que você deixou, todo o grupo de um casamento que você adicionou numa só noite. Mais cedo ou mais tarde você quer fazer uma faxina: arquivar a equipe antiga em **Conhecido**, ou deixar algumas pessoas irem embora de vez.

Até agora, isso significava abrir cada pessoa, uma depois da outra. Para passar Chandler, Ross e Rachel para **Amizade próxima**, você editava três páginas. Para excluir dez pessoas, você excluía dez vezes, confirmando cada uma.

Agora a lista Pessoas tem uma caixa no começo de cada linha. Marque as pessoas que quiser, ou a caixa do cabeçalho para pegar a página inteira, e aparece uma barra para mudar a categoria delas ou excluí-las, todas de uma vez. Excluir pergunta antes e diz o nome de todo mundo que sai. Depois de uma mudança de categoria, **Desfazer** devolve a todos a categoria que tinham.

## Como agir sobre várias pessoas de uma vez

1. Abra o seu cofre. No painel dele, escolha **Pessoas** na barra lateral.

   ![O painel do cofre Pessoal, com Pessoas na barra lateral sob o título Pessoas](/assets/images/blog/2026-11-25-bulk-people-actions-dashboard.webp "O painel do cofre. Pessoas fica na barra lateral.")

2. A lista agora tem uma caixa no começo de cada linha, e uma no cabeçalho.

   ![A lista Pessoas, com uma caixa vazia no começo das linhas de Chandler Bing, Ross Geller e Rachel Green, e uma no cabeçalho ao lado de Nome](/assets/images/blog/2026-11-25-bulk-people-actions-list.webp "Uma caixa em cada linha, e uma no cabeçalho para a página inteira.")

3. Marque as pessoas sobre as quais quer agir. Para pegar todo mundo na página, marque a caixa do cabeçalho. Os filtros e a busca dão lugar a uma barra que diz quantas pessoas estão selecionadas. Enquanto alguém estiver selecionado, escolher uma linha a seleciona em vez de abri-la.

4. Para colocá-las em uma categoria, escolha **Alterar categoria** e depois a categoria em **Mover para**. Para tirar a categoria delas, escolha **Remover categoria**.

   ![O menu Alterar categoria aberto sob a barra de seleção, listando Família, Amizade próxima, Amizade, Colega, Conhecido e Profissional em Mover para, e Remover categoria no fim](/assets/images/blog/2026-11-25-bulk-people-actions-category.webp "Todas as categorias da sua conta, e um jeito de removê-la.")

   A Monica as move na hora e diz quantas pessoas mudaram. Mudou de ideia? Escolha **Desfazer** nessa mensagem, e todo mundo volta à categoria que tinha.

   ![A lista Pessoas com uma mensagem indicando 3 pessoas movidas para Amizade próxima, e um botão Desfazer à direita](/assets/images/blog/2026-11-25-bulk-people-actions-undo.webp "Um clique em Desfazer põe tudo de volta.")

5. Para excluí-las em vez disso, escolha **Excluir**. A Monica pergunta antes, dizendo o nome de cada pessoa que está prestes a excluir. Para confirmar, escolha o botão que diz quantas pessoas saem, como **Excluir 3 pessoas**. Para deixá-las em paz, escolha **Manter**.

   ![Uma caixa perguntando Excluir 3 pessoas, com os nomes de Chandler Bing, Ross Geller e Rachel Green, e os botões Manter e Excluir 3 pessoas](/assets/images/blog/2026-11-25-bulk-people-actions-delete.webp "A Monica diz quem sai antes de excluir qualquer pessoa.")

Para limpar a seleção, escolha o X no fim da barra ou pressione Esc. Mudar o filtro, a busca, a ordem ou a página também a limpa.

## Bom saber

Excluir várias pessoas funciona exatamente como excluí-las uma a uma. Tudo o que foi escrito nas fichas delas vai junto, e não há como desfazer, então leia os nomes antes de confirmar. O contato que representa você nunca é excluído, mesmo quando está selecionado, e os outros são.

Uma pessoa cujo modelo não tem campo de categoria fica como estava quando você muda uma categoria, e a mensagem avisa isso.

Você pode agir sobre até 500 pessoas de uma vez.

Scripts e assistentes de IA podem fazer o mesmo: a API pode excluir vários contatos ou mudar as categorias deles em uma única requisição, e o servidor MCP oferece as duas coisas como ferramentas.
