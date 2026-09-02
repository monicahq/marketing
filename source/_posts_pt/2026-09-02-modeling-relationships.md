---
title: "Building Monica: modelar as relações entre pessoas"
slug: modeling-relationships
date: 2026-09-02
author: 'Regis Freyd'
description: "Decidir o que é realmente uma relação revelou-se um dos problemas mais difíceis da reconstrução do Monica."
---
Quando começámos a reconstruir o Monica, sabia que as relações seriam uma das áreas que teríamos de repensar. O que não esperava era a dificuldade de sequer definir o que é uma relação.

Um CRM pessoal precisa de saber como as pessoas estão relacionadas entre si. Alguém é a tua mãe, o teu irmão, o teu amigo, a tua colega ou o teu companheiro. O Monica faz isto há anos e, do ponto de vista de quem o usa, é uma funcionalidade bastante simples: escolhes uma pessoa, escolhes uma relação e está feito.

Infelizmente, desenhar o que acontece por trás desse pequeno menu não é nada simples.

## Mesmo as relações simples não são assim tão simples

Digamos que o Monica é irmã do Ross. Do ponto de vista dela, o Ross é o seu irmão. As duas frases descrevem a mesma relação, mas as palavras que usamos dependem da pessoa que estamos a olhar.

O mesmo acontece por toda a família. A Rachel é mãe da Emma, enquanto a Emma é filha da Rachel. A tia de alguém tem uma sobrinha ou um sobrinho. Uma avó tem uma neta ou um neto.

Outras relações não funcionam assim. O Chandler e o Joey são amigos. A palavra é a mesma independentemente do lado de que se olha. Com primos e colegas pode ser igual.

Já temos portanto comportamentos diferentes. Às vezes uma relação muda de nome conforme o lado de que olhamos, às vezes não, e às vezes a palavra que usamos depende do género de uma das duas pessoas.

E esta é a parte fácil.

## As famílias são confusas

Imagina que duas pessoas se casam e têm dois filhos. Divorciam-se. Uma delas volta a casar com alguém que já tem filhos de outra relação e talvez tenham outro filho juntas.

Não é uma família particularmente invulgar, mas agora temos pais, filhos, irmãos, meios-irmãos, enteados, padrastos e madrastas, cônjuges e ex-cônjuges.

Isto também começa a levantar perguntas para as quais não creio que exista sempre uma resposta universal. Se te divorciares, a tua sogra deixa de ser tua sogra? Tecnicamente, talvez. Mas e se a conheces há vinte anos e continuas a considerá-la parte da tua família? Certamente não deixa de ser a avó dos teus filhos só porque o teu casamento acabou.

Depois há pais biológicos, pais adotivos, famílias de acolhimento e tutores. Alguém pode ter várias pessoas que considera seus pais, e essas relações não significam necessariamente a mesma coisa. Há familiares afastados, pessoas que consideram alguém um irmão ou uma irmã sem qualquer relação biológica, antigos companheiros que continuam muito próximos e pais que criam filhos em conjunto sem já serem um casal.

A árvore genealógica arrumada que tendemos a imaginar quando pensamos neste problema não sobrevive ao contacto com muitas famílias reais.

E mesmo quando a estrutura familiar é simples, as relações mudam. Quem é hoje o teu companheiro pode ser o teu ex daqui a cinco anos. Isso não significa que a relação antiga deva simplesmente desaparecer. O facto de duas pessoas terem estado casadas durante quinze anos continua a fazer parte da sua história, mesmo que já não estejam.

As relações têm um passado, o que torna igualmente problemático representar apenas o seu estado atual.

## Duas pessoas podem não concordar sobre a sua relação

As relações familiares dão-nos ao menos alguns factos com que trabalhar. A amizade é ainda menos precisa.

Se o Monica considera a Rachel uma amiga próxima, a Rachel considera necessariamente o Monica uma amiga próxima? Não temos a mínima ideia.

O mesmo problema existe com mentores, conhecidos e muitas outras relações. Alguém pode considerar outra pessoa o seu mentor mesmo que essa pessoa nunca usasse a palavra. Alguém pode considerar um velho amigo praticamente família enquanto a outra pessoa o vê como alguém que conheceu há anos.

Isto é muito importante no Monica, porque a informação não pretende descrever um grafo social objetivo. É a tua informação sobre as pessoas da tua vida.

Quando escreves que alguém é teu amigo, estás a descrever a relação como a entendes. O Monica não tem a versão da outra pessoa e, em muitos casos, provavelmente não existe uma única resposta correta.

Isto torna-se particularmente estranho quando o software tenta transformar as relações em algo mensurável. Alguém é melhor amigo por o vermos todas as semanas? Uma amiga que não vemos há cinco anos é menos importante do que um colega com quem falamos todos os dias? Obviamente, a frequência diz-nos algo sobre uma relação, mas não nos diz o que essa relação significa para alguém.

## O tempo também não encaixa bem

Um colega pode tornar-se amigo. Um amigo pode tornar-se companheiro. Um companheiro pode tornar-se ex-companheiro e, anos mais tarde, essa mesma pessoa pode voltar a ser um amigo.

Se o Monica registar que duas pessoas estão casadas e elas se divorciarem mais tarde, o que deve acontecer ao casamento? Removê-lo tornaria a informação atual correta, mas também apagaria algo bastante importante da sua história.

Podíamos guardar datas, só que muitas vezes as pessoas não as sabem. Posso saber que dois amigos já estiveram juntos sem ter a menor ideia de quando começaram a namorar nem de quando exatamente se separaram. Exigir datas precisas deixaria o modelo mais limpo e o produto bastante mais irritante de usar.

Também não há garantia de que as relações passem de forma limpa de um estado para outro. As pessoas não acordam necessariamente uma manhã e passam de «amigo» a «companheiro». Algumas relações têm um início claro, como um casamento. Muitas outras não.

A base de dados gostaria muito que soubéssemos quando tudo começou e quando tudo terminou. Na maior parte do tempo, não sabemos.

## O inglês não é o modelo do mundo inteiro

Outro problema é que a maioria dos primeiros exemplos que nos vêm à cabeça tem por base o inglês.

O inglês usa «cousin» para um grande número de relações familiares, enquanto outras línguas podem ser muito mais precisas. O mandarim, por exemplo, tem palavras diferentes para primos conforme o lado da família de que vêm, o seu género e às vezes a sua idade. O sueco distingue os quatro avós: *mormor* é a mãe da tua mãe, *morfar* o pai da tua mãe, *farmor* a mãe do teu pai e *farfar* o pai do teu pai. O inglês dá-nos apenas «grandmother» e «grandfather».

O coreano dá outro exemplo. Até algo tão simples como «irmão mais velho» muda conforme quem fala. Um homem chama ao seu irmão mais velho *hyeong*, enquanto uma mulher lhe chama *oppa*. O vocabulário das relações contém informação que não está presente na palavra inglesa «brother».

Isto é importante para o Monica porque está traduzido em muitas línguas e é usado em todo o mundo. Não podemos desenhar todo o sistema de relações partindo do princípio de que o inglês contém a lista canónica das relações e que todas as outras línguas só têm de traduzir essas palavras.

É um problema que já encontrámos no Monica, e reconstruí-lo não o faz desaparecer por magia.

## A família não é sequer a parte mais difícil

Ao menos as relações familiares costumam ter nome. O resto das nossas relações é muito menos estruturado.

«Amigo» pode descrever alguém que conheces há trinta anos e com quem falas todas as semanas, mas também alguém que vês duas vezes por ano e de quem gostas muito. Um colega pode ser a pessoa sentada ao teu lado todos os dias ou alguém com quem trabalhaste há quinze anos.

E as pessoas não cabem numa categoria de cada vez. Alguém pode ser teu colega, teu amigo e teu antigo colega de casa. O teu sócio também pode ser teu irmão. A tua vizinha pode ser a mãe da melhor amiga da tua filha.

Às vezes é o próprio contexto que importa. Conheces alguém porque andaram na mesma escola, jogaram na mesma equipa, viveram no mesmo edifício ou trabalharam no mesmo projeto. «Amigo» pode ser tecnicamente correto, mas perde a informação que explica porque é que essa pessoa faz parte da tua vida.

É aqui que uma pergunta simples como «de onde conheces esta pessoa?» se torna surpreendentemente difícil de responder com um único campo.

## Uma relação pode implicar muitas outras

Suponhamos que o Ross é irmão do Monica e que o Ross tem um filho chamado Ben. Compreendemos imediatamente que o Monica é tia do Ben.

O software pode chegar à mesma conclusão. E, uma vez que começa a fazê-lo, pode continuar.

Pais implicam filhos. Filhos com os mesmos pais podem ser irmãos. Irmãos com filhos criam tias, tios, sobrinhas e sobrinhos. Acrescenta outra geração e tens avós e netos. Muito depressa, um pequeno número de relações pode produzir um grafo familiar bem maior.

Mas o facto de o software *poder* inferir algo não significa necessariamente que o deva fazer.

O novo cônjuge de um pai não é automaticamente pai da criança. Duas pessoas que partilham um progenitor podem ser tecnicamente meios-irmãos, mas talvez não se conheçam. A informação que o Monica tem pode também estar simplesmente incompleta. E mesmo que a relação familiar seja tecnicamente correta, pode não ser a relação que as pessoas envolvidas usariam para se descrever.

Cada vez que o software infere mais uma relação, ganha também mais uma oportunidade de estar errado.

## Há mais perguntas do que respostas

Quanto mais trabalhamos nisto, mais casos limite encontramos.

Deve o Monica lembrar-se da história de uma relação ou apenas do seu estado atual? Podem duas pessoas ter várias relações ao mesmo tempo? «Melhor amigo» é uma relação diferente de «amigo», ou é outra coisa? O que acontece quando conhecemos a mãe de alguém mas não temos essa mãe como contacto no Monica? Como descrevemos relações que nos são importantes mas não têm um nome conveniente?

Algumas destas são questões de base de dados. A maioria não é.

A parte difícil é decidir o que queremos dizer quando dizemos que duas pessoas têm uma relação, porque os humanos não usam essa palavra com nada que se aproxime da precisão que uma base de dados preferiria.

Na interface, tudo isto pode acabar por se resumir a algumas palavras no perfil de alguém: mãe, irmão, amigo, colega.

Acertar nessas poucas palavras é um dos problemas mais difíceis com que estamos a lidar ao reconstruir o Monica.
