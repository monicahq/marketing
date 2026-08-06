---
title: "O aplicativo móvel chegou"
slug: mobile-application
date: 2018-05-28
published_at: 2018-05-28T00:00:00+00:00
author: 'Regis Freyd'
description: "O aplicativo móvel oficial acaba de chegar."
original_url: https://www.monicahq.com/blog/mobile-application
---
Recebo e-mails pedindo um aplicativo móvel quase todo dia desde o lançamento público em junho de 2017.

Eu entendo o motivo. Um app móvel para o Monica faz muito sentido. Você quer ter a informação disponível na hora, onde quer que esteja, no momento certo. Não quando está em casa na frente do computador.

Começamos a trabalhar no aplicativo móvel 6 meses atrás. É bastante tempo. Ainda assim, acho que a maioria das pessoas não imagina o trabalho necessário para lançar um aplicativo móvel. Especialmente quando 99,9% do código é feito por uma única pessoa (o incrível @mokto). Que tem um emprego. E que não é pago para fazer isso.

Nesses meses, dedicamos muito esforço a criar tudo o que o aplicativo móvel precisaria. A API mudou bastante para permitir certos recursos. Estabilizamos o backend para garantir que tudo funcione sem falhas. Também passamos bastante tempo configurando direito o repositório do app no GitHub, o que vai nos permitir avançar mais rápido no futuro (estamos falando de uma boa integração contínua, testes unitários, publicação automática nas lojas e assim por diante).

E seis meses depois temos orgulho de anunciar que a primeira versão do aplicativo móvel está disponível [no iOS](https://itunes.apple.com/ca/app/monica-personal-crm/id1339447754?mt=8) e no [Android](https://play.google.com/store/apps/details?id=com.monicahq.app).

![O aplicativo móvel da Monica em três telefones: a ficha de um contato, a lista de contatos vazia e a tela de atividades.](/assets/images/blog/2018-05-28-mobile-app.webp)

Há uma ressalva: *esta primeira versão é somente leitura*. Ou seja, você não pode adicionar nem editar nada. Queremos ter um ótimo aplicativo, mas queremos ir devagar e garantir que ele funcione bem. Assim que tivermos confiança de que esta versão funciona para todo mundo, vamos acrescentar recursos que permitirão manipular completamente seus dados como quiser (dica: já começamos a trabalhar em uma nova versão).

Fora isso, este app móvel tem tudo o que você espera de nós:

- Uma interface simples e amigável.
- Você pode se conectar à nossa versão hospedada do Monica ou entrar na sua própria instância.
- O código é aberto. Você pode ler o código, abrir issues, contribuir. Tudo o que fazemos é aberto e transparente, e acreditamos que só a colaboração leva ao melhor produto.
- Código aberto significa que você pode *compilar e rodar o aplicativo móvel sem precisar passar pelas lojas oficiais da Apple e do Google*, o que é bem incrível, na minha opinião.
- Não exibimos anúncios e não revendemos seus dados.
- Não temos rastreamento nenhum no nosso código.
- O app é gratuito. Sem pegadinhas.

### Como você pode ajudar?

Precisamos de pessoas que queiram testar o aplicativo e [nos contar se há bugs](https://github.com/monicahq/chandler/issues), basicamente. Também gostaríamos da sua opinião sobre o que devemos construir em seguida, ou como poderíamos melhorar o app (em termos de experiência ou de layout).

### O que vem a seguir?

Nos próximos dias vamos melhorar a documentação do repositório oficial no GitHub, para que fique bem fácil para os desenvolvedores que quiserem ajudar entrarem no projeto.

Nos próximos meses vamos acrescentar a possibilidade de alterar seus dados dentro do aplicativo móvel. O objetivo final é que tudo o que você faz na web possa ser feito no celular (com exceção da exportação dos seus dados, porque como guardar um arquivo no iOS...). É por isso que agora construímos os recursos primeiro na API e depois na interface (web e móvel).

Para concluir, diria que tenho muito orgulho do que realizamos até aqui, e ainda mais da comunidade que nos ajuda todos os dias. O feedback e a ajuda de vocês tornam o Monica possível.
