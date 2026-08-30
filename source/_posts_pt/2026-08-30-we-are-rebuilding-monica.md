---
title: "Estamos reconstruindo o Monica"
slug: we-are-rebuilding-monica
date: 2026-08-30
author: 'Regis Freyd'
description: "Estamos reconstruindo o Monica a partir do zero, e esta nova série vai documentar como."
---
Este é o primeiro artigo de uma série chamada **Building Monica**. Quero usar esta série para documentar como estamos reconstruindo o Monica, o CRM pessoal de código aberto, a partir do zero. Vou falar dos problemas que estamos tentando resolver, das decisões que tomamos pelo caminho e provavelmente de algumas coisas que não saem como esperávamos.

Há quase dez anos, comecei a construir o Monica porque eu era péssimo em lembrar coisas sobre as pessoas. Eu esquecia o nome do filho de alguém, sobre o que tínhamos conversado na última vez que nos vimos, ou algo importante que me contaram alguns meses antes. Eu queria um lugar para anotar tudo isso, principalmente para compensar minha memória ruim, então comecei a usar um [CRM profissional](https://highrisehq.com/).

Não era uma boa solução. O software era feito para vendedores, o que eu não era, e eu não tinha muita vontade de pagar por uma ferramenta pensada para me ajudar a ganhar dinheiro quando tudo o que eu queria era lembrar coisas sobre meus amigos e minha família. Procurei algo mais adequado, não encontrei nada e decidi construir o meu próprio.

Esse pequeno projeto acabou virando o Monica. Coloquei o código no GitHub, publiquei no [Hacker News](https://news.ycombinator.com/item?id=14497295) e as coisas ficaram um pouco malucas a partir daí. Descobri que eu não era a única pessoa procurando algo assim. O Alexis entrou depois como cofundador e, ao longo dos anos, milhares de pessoas usaram o Monica, contribuíram com código, traduziram o projeto, relataram erros e instalaram a aplicação nos próprios servidores. O projeto já tem mais de 25.000 estrelas no GitHub e se tornou um dos CRMs pessoais de código aberto mais conhecidos.

Tenho muito orgulho do que o Monica se tornou. Mas depois de trabalhar nele por tanto tempo, cheguei a um ponto em que a versão atual não é mais o CRM pessoal que eu construiria hoje.

## Quase dez anos de decisões

Quando comecei o Monica, obviamente eu não tinha dez anos de experiência pensando em como representar relacionamentos pessoais em software. A maior parte das decisões foi tomada no momento em que um problema aparecia. Precisávamos de contatos, então construí contatos. Precisávamos de relacionamentos, então adicionei relacionamentos. Depois vieram os lembretes, as atividades, os presentes, as notas, os animais de estimação, os endereços e muitas outras funcionalidades.

Não há nada de particularmente errado em construir software desse jeito. Foi assim que o Monica cresceu, e muitas dessas decisões faziam sentido na época. Mas depois de quase dez anos, elas se acumulam. Ideias novas precisam contornar decisões tomadas anos antes, e coisas que pareciam detalhes de implementação vão se tornando aos poucos um limite para o que você pode fazer com o produto.

Com o tempo, isso deixou algumas partes do Monica mais difíceis de mudar do que deveriam ser. Mais importante ainda: mudei de ideia sobre algumas das decisões originais.

## O que eu construiria hoje?

Em algum momento, comecei a me fazer uma pergunta simples: se o Monica não existisse e eu tivesse que construir um CRM pessoal hoje, com tudo o que aprendi na última década, como ele seria?

Isso levou rapidamente a perguntas muito mais básicas do que quais funcionalidades o Monica deveria ter. O que exatamente é uma pessoa no Monica? Como os relacionamentos entre pessoas deveriam funcionar? Como o Monica deveria representar o próprio usuário? O que acontece quando algo importante na vida de alguém não é outra pessoa, mas um animal, uma organização ou algo completamente diferente? Como os lembretes deveriam funcionar se os relacionamentos humanos não seguem um calendário naturalmente? O que uma atividade deveria representar? E quanto de tudo isso o Monica deveria definir para você, para começar?

Os relacionamentos são um bom exemplo. Guardar que a Monica é irmã do Ross não parece nada complicado. Mas se a Monica é irmã do Ross, o Ross também é irmão da Monica. Uma relação de pai ou mãe implica uma relação de filho ou filha. Alguns relacionamentos têm uma direção, outros não. As famílias de verdade incluem divórcios, novos casamentos, enteados, meios-irmãos, adoções e todo tipo de estrutura que não cabe direito em uma lista predefinida. Cada cultura também descreve os laços familiares de um jeito diferente.

Passei muito tempo pensando nisso para a nova versão, e agora vejo os relacionamentos como um domínio próprio, em vez de um atributo preso a um contato. Hoje me parece óbvio. Não era óbvio quando desenhamos as primeiras versões do Monica.

A personalização é outra área em que mudei de ideia. Historicamente, foi o Monica que definiu o que é um contato e quais informações podem ser guardadas sobre ele, e nós fomos acrescentando personalização em volta dessa estrutura. Para a v3, queremos inverter isso. O Monica vai continuar oferecendo bons padrões, porque ninguém quer configurar cinquenta coisas antes de adicionar o primeiro contato, mas a sua vida não deveria ter que caber no esquema de banco de dados que nós decidimos que era certo para todo mundo.

Quando você começa a mudar as coisas nesse nível, redesenhar algumas telas não basta. As fundações também precisam mudar.

## O que eu quero que a v3 seja

O Monica v3 não é o produto atual com uma interface mais bonita. A interface vai mudar bastante, e quero que ela seja muito mais divertida e pessoal do que a maior parte do software que usamos hoje, mas isso é só uma parte do trabalho.

Quero construir um sistema muito poderoso para documentar as pessoas e os relacionamentos na vida de alguém. Não estou especialmente interessado em otimizar tudo em nome da simplicidade se o resultado for um produto que só sabe representar vidas simples. Prefiro ter bons padrões para quem não quer configurar nada, e dar a quem quer um controle enorme sobre como o seu Monica funciona.

Isso significa tratar os relacionamentos como conceitos de primeira classe e deixar cada pessoa decidir quais informações importam para ela. O Monica precisa dar conta de muito mais do que uma lista predefinida de campos pendurada em um contato. A parte difícil vai ser fazer tudo isso sem acabar com um software corporativo para gerenciar seus amigos e sua família, porque isso seria bem horrível.

Também há coisas que não quero mudar. Privacidade e propriedade dos dados continuam importando enormemente no Monica. O projeto vai continuar sendo de código aberto e você vai poder hospedá-lo por conta própria. Se você vai passar anos colocando em um software parte das informações mais pessoais da sua vida, acho que deveria ter o máximo de controle possível sobre essas informações.

Também não quero que o Monica decida o quanto alguém é importante para você. Ele pode ajudar você a lembrar coisas, organizar informações e avisar que você não fala com alguém há um bom tempo. O relacionamento continua sendo seu para cuidar.

## Começar de novo com dez anos de experiência

"Começar de novo" não é exatamente verdade, claro. Quando criei o Monica em 2017, eu tinha uma ideia e um problema que queria resolver. Desta vez temos quase dez anos de experiência trabalhando nesse problema, milhares de conversas com usuários, contribuições de pessoas do mundo inteiro, duas gerações do produto e uma lista bem longa de coisas que não faríamos do mesmo jeito.

Enquanto trabalhamos na v3, quero documentar mais disso publicamente. Existe uma quantidade surpreendente de problemas difíceis atrás de algo que parece bem simples visto de fora, principalmente quando você começa a pensar a sério em relacionamentos, lembretes, personalização e em como representar em um banco de dados algo tão desorganizado quanto uma vida humana. Vou escrever sobre esses problemas, mas também sobre as decisões técnicas e de design que estamos tomando e sobre as coisas que tentamos e que não funcionam.

É sobre isso que **Building Monica** vai falar. Não sei com que frequência vou publicar um artigo, e não quero inventar um calendário de publicação só para ter um. Vou escrever quando tivermos algo interessante para contar.

Em 2017, construí o Monica com base no que eu entendia do problema naquele momento. Quase dez anos depois, entendo esse problema de um jeito muito diferente. É por isso que estamos reconstruindo ele.
