---
title: "O Chandler está em beta"
slug: chandler-is-in-beta
date: 2023-06-08
published_at: 2023-06-08T07:29:00+00:00
author: 'Regis Freyd'
description: "A nova versão principal está disponível em beta."
original_url: https://www.monicahq.com/blog/chandler-is-in-beta
---
Temos o prazer de anunciar que, depois de 18 meses de trabalho duro, nossa nova versão, de codinome Chandler, já está disponível em beta: [https://beta.monicahq.com](https://beta.monicahq.com)

O Monica nasceu há 7 anos com o objetivo de ser um CRM pessoal. Esta nova versão trata de documentar a sua vida, incluindo o que seus contatos andam fazendo, mas não só isso.

O que significa beta? É como ter um bando de bugzinhos travessos escondidos no nosso software, brincando de esconde-esconde com a gente. Temos quase certeza de que eles estão lá, mas não fazemos ideia de quais são nem de onde se escondem. Então precisamos de todas as almas corajosas para entrar no nosso esquadrão de caça a bugs e ajudar a encontrá-los antes do lançamento para o público.

O Chandler é uma reinvenção completa do Monica, construída do zero. Eliminamos a enorme dívida técnica acumulada ao longo dos anos e acrescentamos ou melhoramos muitas funcionalidades. Apesar de não termos divulgado o Chandler, muitos usuários já o testaram e encontraram bugs que corrigimos, mas não testamos este software em larga escala. Então, por favor, crie uma conta e se divirta.

A versão disponível no servidor de beta pode ser considerada estável. Não vamos zerar o banco de dados. Faremos backup dos seus dados diariamente e vamos mantê-los quando lançarmos oficialmente a versão final.

O Chandler tem algumas limitações:

- Você não pode usar seu login atual do Monica,
- Você não pode importar seus dados,
- Não há importação em massa de contatos,
- Ainda não temos uma API.

Temos muitas funcionalidades novas, um novo layout e o tão pedido modo escuro.

Numa nota pessoal, o recurso do qual mais me orgulho é a possibilidade de personalizar quase tudo no Chandler: do layout aos módulos que você pode ativar, até os dados que pode registrar sobre a sua vida.

O Chandler continua sendo de código aberto e pode ser instalado gratuitamente no seu servidor, se você souber usar Docker ou a linha de comando. Você pode continuar modificando o código, se quiser. O Monica é, e sempre será, de código aberto. É assim que deve ser.

Por enquanto, o Monica é gratuito na nossa instância hospedada ([https://beta.monicahq.com](https://beta.monicahq.com)), mas teremos os mesmos preços da versão atual assim que considerarmos o produto estável.

Tenho um orgulho enorme do que conquistamos nestes oito anos. Naquela época, eu tinha medo de tornar meu código público porque sabia que ele era de baixa qualidade. Surpreendentemente, as pessoas não pareceram se importar. Hoje, nossa base de código continua aberta ao público e não nos preocupamos mais com julgamentos. O app ainda é uma aplicação Laravel, com VueJS no front-end e InertiaJS entre o front e o back. É uma pilha bem simples. Nos esforçamos para manter a base de código o mais simples possível, para facilitar a manutenção, a evolução e a busca por desenvolvedores que nos ajudem.

Em breve vamos migrar nossa imagem Docker oficial para o Chandler. Já tivemos mais de 25 milhões de downloads da imagem, o que nos deixa humildes.

Em nome de toda a equipe do Monica, obrigado por continuarem conosco todo esse tempo. A "equipe inteira do Monica" são basicamente dois amigos, Alexis e eu, apaixonados por oferecer ferramentas bacanas para as pessoas melhorarem suas vidas. O Monica ainda é um projeto paralelo para nós, temos empregos em tempo integral "do lado". Enquanto algumas pessoas jogam videogame ou assistem à Netflix, nós "brincamos" na base de código do Monica. E amamos isso.
