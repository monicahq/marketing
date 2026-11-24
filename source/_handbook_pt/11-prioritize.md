---
title: Como priorizamos as funcionalidades?
slug: prioritize
section: product
order: 2
description: Como equilibramos bugs, os nossos próprios interesses, os pedidos da comunidade, a manutenção de longo prazo e a ambição de manter a Monica prazerosa de construir.
updated: 2026-11-18
---

Este assunto é polêmico. Como mantenedor do projeto, preciso lidar constantemente com dois pensamentos conflitantes. De um lado, há o que os usuários querem e precisam. Do outro, há o que eu gosto de fazer. Às vezes essas prioridades se alinham, e às vezes não.

Originalmente construí a Monica para mim. Liberei o código para que outras pessoas também pudessem aproveitá-la. E decidi hospedar a nossa própria instância para que quem não tem conhecimento técnico para hospedá-la por conta própria também possa usá-la.

### Não somos uma empresa de software tradicional

Queremos que a Monica gere dinheiro suficiente para se sustentar e justificar o tempo que gastamos trabalhando nela. No entanto, maximizar a receita não é a motivação principal do projeto.

Sempre que posso, defendo que as pessoas usem a imagem Docker e hospedem a Monica por conta própria, se tiverem o conhecimento técnico para isso. Por mais esforço que dediquemos a proteger a nossa instância hospedada, ela nunca vai dar a você o mesmo nível de controle de um sistema que é seu e que você mantém adequadamente.

Essa independência nos dá o luxo de decidir no que queremos trabalhar, sem necessariamente ter de justificar cada decisão do ponto de vista financeiro.

### Os bugs vêm primeiro

Corrigir bugs deve, em geral, ter prioridade sobre introduzir novas funcionalidades.

Alguém que usa a Monica todos os dias e encontra o mesmo bug irritante por três meses provavelmente não se importa que tenhamos acabado de introduzir cinco novas funcionalidades.

Claro, nem todos os bugs são iguais. Um bug que causa perda de dados é infinitamente mais importante do que um botão desalinhado em dois pixels num navegador específico.

Devemos usar o bom senso, mas o princípio geral é que fazer o produto existente funcionar direito é mais importante do que torná-lo maior.

### Queremos nos divertir

É por isso que, além de corrigir bugs, posso decidir trabalhar em algo que eu quero em vez do que a comunidade inteira quer.

Quero me divertir com este projeto. Quero aproveitar o meu tempo trabalhando nele. Passo noites e fins de semana fazendo isso, e há muitas outras coisas que eu poderia fazer com esse tempo.

Por exemplo, implementar CalDAV não é divertido para mim. Provavelmente nunca vou fazer isso. E provavelmente também não vou aceitar essa contribuição se ela vier da comunidade, já que eu teria de mantê-la pelo resto da vida do software, e não a pessoa que a contribuiu.

Isso pode soar egoísta. Talvez seja. Mas a alternativa é gastar o meu tempo livre trabalhando em coisas de que não gosto, acabar perdendo o interesse no projeto e parar de trabalhar nele de vez.

Não acho que alguém sairia ganhando com isso.

A motivação de quem mantém um projeto de código aberto é um recurso incrivelmente importante. Devemos protegê-la tanto quanto protegemos a qualidade técnica do projeto.

### Ouça a comunidade

No entanto, também não sou cego. Se vejo que algo não para de aparecer, vou considerar seriamente implementá-lo.

Quero ajudar os outros, e uma das formas de ajudar os outros é construir algo de que eles precisam.

O feedback da comunidade é extremamente valioso porque nos expõe a formas de usar a Monica em que nunca teríamos pensado sozinhos. A nossa própria vida não é necessariamente representativa da vida de todo mundo.

Dito isso, o número de votos positivos numa issue do GitHub não é o único critério para decidir se algo deve ser construído.

Uma funcionalidade pedida por cem pessoas pode ir fundamentalmente contra a filosofia do projeto. Uma funcionalidade pedida por uma única pessoa pode ser uma ideia absolutamente brilhante que beneficiaria todo mundo.

A popularidade é um indício de que pode haver um problema que vale a pena resolver. Ela não necessariamente nos diz como resolvê-lo nem se a Monica é a ferramenta certa para isso.

### Uma contribuição não é de graça

Um dos equívocos sobre código aberto é que, se alguém se dispõe a implementar uma funcionalidade por conta própria, não há razão para não aceitá-la.

Pois é, não.

Escrever o código inicial é só uma pequena parte do custo de uma funcionalidade. Depois que a aceitamos, nos tornamos responsáveis por ela. Precisamos testá-la, documentá-la, traduzi-la, protegê-la, corrigir os seus bugs e garantir que continue funcionando conforme o resto da aplicação evolui.

A pessoa que contribuiu com a funcionalidade pode desaparecer do projeto no dia seguinte. A funcionalidade, porém, agora é responsabilidade nossa.

É por isso que podemos rejeitar um pull request perfeitamente executado. Isso não significa necessariamente que o código seja ruim ou que não valorizamos o esforço. Significa simplesmente que não queremos assumir a responsabilidade de longo prazo de manter aquela funcionalidade específica.

### Considere o custo de dizer sim

Cada funcionalidade em que trabalhamos é uma funcionalidade a menos em que podemos trabalhar em outra coisa.

Se passamos três semanas implementando uma integração com outro software, são três semanas que não vamos gastar melhorando as funcionalidades centrais da Monica.

Temos uma quantidade limitada de tempo. Devemos gastar o máximo possível dele em coisas que tornem a Monica fundamentalmente melhor no que ela deveria fazer.

Também devemos considerar se a funcionalidade introduz novas dependências de serviços externos, novas preocupações de segurança ou conceitos totalmente novos que os usuários precisarão entender.

Às vezes, uma funcionalidade aparentemente simples esconde uma quantidade absurda de complexidade.

### Não prometa coisas

Não acreditamos em manter um roadmap público detalhado que diga a todo mundo o que será lançado daqui a seis meses.

Não sabemos no que vamos querer trabalhar daqui a seis meses. Não sabemos que problemas vamos descobrir, que feedback vamos receber nem como será a nossa vida pessoal.

Podemos compartilhar ideias sobre aonde queremos levar o projeto, mas essas ideias não devem ser interpretadas como promessas.

Da mesma forma, uma issue aberta no GitHub não constitui um compromisso de implementar algo. Significa que sabemos do pedido e podemos considerá-lo em algum momento.

Prefiro decepcionar alguém dizendo não hoje a decepcioná-lo fazendo uma promessa que não vamos cumprir.

### Algumas coisas nunca serão implementadas

Não importa quantas pessoas peçam algo, há funcionalidades que simplesmente não vamos implementar.

Tudo o que vá fundamentalmente contra o propósito da Monica, torne o produto desnecessariamente complexo, comprometa a privacidade ou elimine a necessidade de realmente se esforçar para manter bons relacionamentos dificilmente vai entrar no produto.

Não estamos tentando construir um produto que satisfaça todo mundo. Fazer isso provavelmente resultaria num produto de que ninguém gosta especialmente.

### Como decidimos no fim das contas

Quando consideramos trabalhar em algo, devemos nos fazer algumas perguntas:

- Isso resolve um problema real?
- Cabe no escopo da Monica?
- Beneficiaria uma parte significativa dos nossos usuários?
- Podemos resolver o problema de um jeito mais simples?
- Estamos dispostos a mantê-lo pelos próximos dez anos?
- Teríamos prazer em trabalhar nisso?

Não precisamos de uma planilha complicada do Excel com pontuações ponderadas para priorizar funcionalidades. Precisamos de bom senso, de uma visão clara do que a Monica deve ser e de humildade suficiente para reconhecer que às vezes podemos errar.

Sempre haverá mais coisas para construir do que tempo para construí-las. Está perfeitamente bem.

A Monica não precisa estar terminada. Precisa continuar útil, possível de manter e prazerosa de trabalhar.
