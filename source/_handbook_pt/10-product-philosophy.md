---
title: Filosofia de produto
slug: product-philosophy
section: product
order: 1
description: Simples de usar, construído por iteração, começando pelo problema, padrões inteligentes em vez de opções e nunca um atalho para o trabalho que os relacionamentos exigem.
updated: 2026-11-18
---

### Deixe as coisas óbvias

Um produto deve ser simples de usar. Idealmente, os usuários nunca deveriam precisar procurar ajuda para fazer algo. Dito isso, um link para a central de ajuda deve estar presente em todas as telas, para auxiliar os usuários caso, infelizmente, a interface não esteja clara o bastante.

A documentação deve complementar o produto, não compensar um design ruim.

Não devemos presumir que algo é intuitivo só porque é intuitivo para nós. Passamos centenas de horas construindo o produto. Sabemos exatamente onde está cada coisa e por que as coisas funcionam como funcionam. Quem descobre a Monica pela primeira vez não tem nada desse conhecimento.

Também não devemos confundir simplicidade com minimalismo. Remover o rótulo de um botão pode deixar a interface mais bonita, mas, se as pessoas deixam de entender o que o botão faz, o que de fato conseguimos?

### Itere constantemente

Devemos sempre iterar. A primeira versão de uma funcionalidade deve ser uma solução meio constrangedora, mas muito funcional, para um problema ou uma necessidade. Depois, usando um ciclo de feedback rápido de construir, medir e aprender, podemos criar uma versão melhor.

Não devemos nos apegar demais às nossas ideias originais. O fato de termos passado três semanas construindo algo de determinado jeito não significa que esse seja o jeito certo.

Às vezes, a melhor melhoria que podemos fazer numa funcionalidade é repensá-la por completo. Às vezes, é remover metade do que construímos.

Também não há obrigação de melhorar uma funcionalidade continuamente. Se algo funciona bem, resolve o problema para o qual foi projetado e as pessoas estão contentes com isso, podemos simplesmente deixar como está. Não há necessidade de redesenhar algo a cada dois anos só pelo prazer de redesenhar.

### Comece pelo problema

Devemos sempre começar pelo problema, não pela solução. Devemos nos concentrar em enunciados de problema bem formulados, para entender o cerne das questões enfrentadas pelo usuário. Só depois de pensar o suficiente no problema conseguimos compreender plenamente o quadro geral e imaginar uma solução.

Quando alguém nos pede para implementar uma funcionalidade, o que costuma estar fazendo é descrever a sua solução preferida para um problema que tem. É nossa responsabilidade entender o problema de fundo, não necessariamente implementar a solução da pessoa.

Às vezes, podemos resolver esse problema com uma solução muito mais simples. Às vezes, o produto já o resolve, mas não fizemos um bom trabalho em deixar isso óbvio.

O fato de podermos construir algo não é um motivo particularmente bom para construí-lo. Isso é ainda mais verdade na era da IA, em que escrever o código está se tornando cada vez mais a parte mais fácil de construir um produto.

Entender o que construir continua sendo a parte difícil.

### Padrões inteligentes em vez de opções

O máximo possível, devemos resistir a adicionar opções de configuração ou ajustes. É muito melhor ter padrões inteligentes do que poluir o produto com opções. Cada opção acrescenta complexidade em engenharia, testes, documentação e compreensão do produto.

Um dos traços de personalidade de quem mantém um projeto é o desejo de agradar as pessoas. Queremos que os usuários amem aquilo que passamos noites e anos criando.

Então, toda vez que recebemos um pedido de funcionalidade, é natural querer implementá-lo, principalmente se for para adicionar uma opção. Afinal, só estamos dando uma escolha aos usuários. O que poderia dar errado?

Bem, multiplique esse raciocínio por mil pedidos de funcionalidades e você acaba com um produto que ninguém entende por completo, nem mesmo quem o construiu.

Adicionar uma opção também é, às vezes, uma forma de evitar tomar uma decisão. Em vez de descobrir qual deveria ser o melhor comportamento, implementamos os dois e deixamos o usuário decidir. Isso não é necessariamente um bom design de produto. Às vezes, é só preguiça da nossa parte.

Devemos resistir, o máximo possível, a criar uma situação em que o nosso produto fique tão complexo que não seja mais possível mantê-lo. A 37signals tem um ótimo artigo sobre [dizer não](https://basecamp.com/gettingreal/05.3-start-with-no). Leia isto.

Claro, algumas coisas realmente precisam ser configuráveis. A vida das pessoas é diferente. Mas há uma diferença fundamental entre deixar as pessoas documentarem a vida do jeito que querem e deixá-las configurar todos os aspectos de como o software funciona.

### Construa para a vida real

A vida é bagunçada. As pessoas esquecem coisas. Os relacionamentos mudam. As famílias são complicadas. As informações são incompletas. Às vezes, nem sabemos o nome de alguém que encontramos várias vezes.

A Monica deve acomodar essa realidade.

Não devemos obrigar as pessoas a preencher informações que não têm. Não devemos impor fluxos rígidos quando não há uma boa razão para isso. Não devemos presumir que todo mundo documenta a vida de forma estruturada e organizada.

O produto deve se adaptar às imperfeições da vida real, não esperar que a vida real se adapte ao produto.

### Pense em décadas

A maioria dos produtos de software é projetada em torno do que os usuários precisam hoje. A Monica também precisa considerar o que os usuários podem precisar daqui a dez ou vinte anos.

Uma informação aparentemente insignificante hoje pode se tornar extremamente valiosa no futuro. O nome de alguém que você conheceu numa viagem, uma conversa com os seus avós ou algo engraçado que o seu filho disse quando tinha cinco anos.

Isso tem implicações para o jeito como projetamos o produto. Devemos ter muito cuidado para não perder informações, não introduzir mudanças que quebram a compatibilidade nem tomar decisões que impeçam as pessoas de acessar os seus dados daqui a anos.

Também devemos desconfiar de construir funcionalidades em torno de tecnologias ou modas que talvez não existam mais em alguns anos.

A vida humana não mudou fundamentalmente porque um novo framework JavaScript saiu na terça-feira passada.

### Respeite a atenção do usuário

Não queremos construir um produto no qual as pessoas fiquem viciadas.

Não precisamos de sequências diárias, rankings, pontuações de engajamento ou conquistas para incentivar as pessoas a documentar a vida. Não queremos que os usuários se sintam culpados porque não abrem a Monica há duas semanas.

Não existe um dia bem-sucedido medido pela quantidade de anotações que você adicionou à Monica.

As notificações e os lembretes devem existir porque trazem valor ao usuário, não porque trazem o usuário de volta à aplicação.

O resultado ideal de usar a Monica pode muito bem ser passar menos tempo diante de uma tela e mais tempo com as pessoas de quem você gosta.

### Não automatize o fato de ser humano

Por fim, nunca vamos implementar uma funcionalidade que elimine a necessidade de se esforçar para manter relacionamentos saudáveis.

O que quero dizer com isso? Ter um círculo social exige tempo e esforço. Não existe um jeito fácil de ter ótimos relacionamentos. A Monica vai ajudar você a documentar a sua vida, mas não vai substituir a necessidade de, sabe como é, realmente trabalhar nos seus relacionamentos.

Podemos lembrar você do aniversário de alguém. Podemos ajudar você a lembrar do que conversaram da última vez que se viram. Podemos ajudar você a lembrar o nome da filha do seu colega.

Mas lembrar do aniversário de alguém não é a mesma coisa que se importar com a pessoa. Mandar uma mensagem automática para alguém não é a mesma coisa que tirar um tempo para escrever para ela.

Não queremos transformar as relações humanas numa série de tarefas a serem concluídas, otimizadas ou automatizadas. As pessoas não são leads num funil de vendas. As amizades não precisam de indicadores de desempenho.

A tecnologia pode ajudar a remover parte do atrito envolvido em manter relacionamentos. Ela não deve remover o esforço humano que torna esses relacionamentos significativos desde o início.

A Monica deve ajudar você a estar mais presente na sua vida, não vivê-la em seu lugar.
