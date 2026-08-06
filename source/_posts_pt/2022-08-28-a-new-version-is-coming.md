---
title: "Um novo Monica está chegando"
slug: a-new-version-is-coming
date: 2022-08-28
published_at: 2022-08-28T20:44:00+00:00
author: 'Regis Freyd'
description: "Uma versão principal completamente nova está a caminho."
original_url: https://www.monicahq.com/blog/a-new-version-is-coming
---
[Alexis](https://twitter.com/asbin) e eu [(Regis)](https://twitter.com/maazarin) estamos trabalhando há alguns meses (desde janeiro de 2022, na verdade) em uma versão totalmente nova do Monica. A primeira versão principal de fato desde que lançamos o projeto, alguns anos atrás.

Fico muito tentado a chamá-la de "versão mais rápida, mais nova, melhor", porque ela é, mas sou ruim de marketing, então vou dizer apenas que é uma versão nova e responder abaixo às perguntas que você possa ter.

**O que vocês querem dizer com versão nova?**

Uma reescrita completa do Monica, do zero.

**Vocês são loucos?**

Somos, mas também: a base de código do Monica já está velha. Velha no sentido de que tem 7 anos e passou pelas mãos de centenas de contribuidores. Há conceitos no código que deixamos passar, seja porque não sabíamos fazer melhor na época, seja porque não queríamos irritar quem contribuía, e que não queremos mais. O projeto tem dependências demais, e manter o código ficou mais difícil do que antes. Mudar alguma coisa é mais arriscado e leva mais tempo. Além disso, vimos como as pessoas usam o Monica, o que querem fazer com ele, e o código atual nos limita demais para dar conta desses usos. Por fim, o Monica ainda é um projeto paralelo para nós. Somos apaixonados por ele e também queremos nos divertir construindo. E a versão atual não estava tão divertida.

**O que vocês querem dizer com reescrita?**

Que começamos de uma base de código vazia e partimos dali. Antes, era uma aplicação Laravel (ou seja, PHP), com views Blade e um pouco de Vue aqui e ali. Agora, continua sendo uma aplicação Laravel (ou seja, ainda PHP), inteiramente com Vue 3. Simplificamos muita coisa, deixamos outras mais flexíveis e, portanto, um pouco mais complexas, mas acreditamos que conseguimos sustentar o futuro do Monica com isso.

Isso também significa que temos uma estrutura de dados totalmente nova, apoiada em um novo esquema de banco de dados.

**A nova versão vai se chamar Monica?**

Por enquanto, o codinome do novo Monica é Chandler. Não vamos manter esse nome: o nome oficial do novo Monica será Monica. Para maior clareza, vamos chamar a nova versão de Chandler no restante do texto.

**Vocês escolheram PHP apesar de \<insira aqui nova linguagem/framework>?**

O PHP é uma ótima linguagem. Não estamos mais na era do PHP 4 ou 5. Além disso, é uma linguagem bem simples, o que significa que muita gente no mundo lê e entende PHP. Escolher PHP torna mais fácil contribuir com o projeto, mais fácil depurar, mais fácil manter e mais fácil para nós encontrarmos pessoas que ajudem, se surgir a necessidade no futuro. Por fim, o ecossistema PHP é simplesmente ótimo, com o Laravel abrindo caminho para uma das melhores experiências de desenvolvimento que conheço.

**Quais funcionalidades o Chandler vai ter?**

No lançamento, queremos cobrir 100% (ou quase) do conjunto de funcionalidades que o Monica v1 oferece. Mesmo mantendo as funcionalidades, queríamos simplificá-las (as tarefas, por exemplo) ou torná-las mais robustas (os lembretes, por exemplo).

Feito isso, temos tantas ideias sobre o que o Monica deveria se tornar que chega a ser demais. Basicamente, o Monica nasceu como o primeiro CRM pessoal (ou PRM, gerenciador de relacionamentos pessoais). Foi assim que o posicionamos. Mas depois de anos trabalhando nele, conversando com as pessoas e lendo os milhares de e-mails que vocês nos enviaram, percebemos que o Monica é, na verdade, uma forma de documentar a sua vida, seja lá o que isso signifique para você. Então o Monica vai tratar de documentar a sua vida e de dar ferramentas para você fazer isso do seu jeito.

Lemos em todo lugar que produtos devem ter opinião e uma personalidade forte, para que as pessoas usem suas ferramentas do jeito que você quer. Essa foi a direção da v1. Agora queremos mudar essa afirmação. Queremos que as pessoas usem e configurem o Monica do jeito que quiserem. Quem somos nós para dizer que você deve usar só 3 pronomes para seus contatos, ou quais tipos de relacionamento você deveria ter? O Chandler será completamente personalizável, do que você vê na interface ao tipo de dado que pode inserir. O pessoal de marketing diria "o Chandler é sobre você", e isso é verdade, de certo modo. A desvantagem: do ponto de vista técnico, é mais difícil de administrar, mas esse problema é nosso.

**Quando vai ficar pronto? Posso experimentar?**

Vai ficar pronto quando estiver pronto. Lembre-se: não trabalhamos nisso em tempo integral, de jeito nenhum. Alexis e eu temos empregos exigentes, famílias, amigos e o Monica (e o OfficeLife, também).

NO ENTANTO.

Já fizemos bastante coisa. Algumas funcionalidades grandes que você conhece e gosta ainda faltam na nova versão: acontecimentos de vida, atividades, presentes e CalDAV/CardDAV, para citar algumas. Os acontecimentos de vida, em especial, são um bocado grande, porque queremos repensar completamente o conceito e torná-lo realmente útil. E, este é um "e" enorme, no momento ainda não temos uma API. Como é uma base de código nova, não dá para simplesmente copiar seus contatos da v1 e esperar que apareçam na v2. Então, se lançássemos algo agora, você não conseguiria importar seus dados. E achamos que isso é um problema.

DITO ISSO.

Ainda precisamos de gente para testar e nos ajudar a encontrar bugs, mesmo que aqui a gente não faça bugs (lol). Precisamos de pessoas para corrigir erros de escrita na documentação. Então o que poderíamos fazer é lançar o Chandler em um estado bem alfa, gratuito para todos até deixar de ser alfa.

**Continua sendo de código aberto? Posso usar de graça?**

Sim, continua de código aberto, com a mesma licença de antes. Isso significa que o Monica é gratuito, claro, a menos que você use a versão que hospedamos, que em algum momento vai custar algo, como a versão atual. Sim, você pode instalá-lo onde quiser, no seu próprio servidor. Como o Chandler não é a mesma base de código, ainda não temos o ecossistema rico de antes nem todas aquelas maneiras diferentes de instalá-lo em qualquer lugar, mas chegaremos lá. Sim, você ainda pode contribuir com o código, corrigir bugs, acrescentar funcionalidades, mesmo que continuemos com o direito de recusar seus pull requests se acharmos que não queremos dar suporte ao que você propõe.

**Qual é o futuro do Monica v1?**

Vamos dar suporte à v1 até o Chandler sair do alfa e do beta. Depois disso ela será descontinuada, mas quem a hospeda poderá continuar usando, se quiser. A v1 que nós mesmos hospedamos não terá suporte depois disso.

**Já dá para contribuir com a base de código?**

O repositório já está [disponível no GitHub](https://github.com/monicahq/chandler), mas estamos longe da maturidade do repositório principal atual. Isso significa que ainda não estamos prontos para receber contribuições de todo mundo, já que as coisas mudam quase todo dia, mas, se você aceitar isso, fique à vontade.

**O que vem a seguir?**

Antes de tudo, muito obrigado por ter lido este post inteiro. Somos muito gratos pela nossa comunidade e por vocês continuarem apaixonados por esta ferramentinha que nos divertimos construindo. Alexis e eu seguimos supermotivados com ela, e agradecemos por se importarem junto com a gente. Manteremos vocês informados.
