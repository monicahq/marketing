---
title: "Dependências são compromissos"
slug: dependencies
section: engineering
order: 7
description: "Um pacote pode poupar um fim de semana e ainda assim exigir atenção por anos."
updated: 2026-11-18
---

Adicionar um pacote pode ser uma ótima decisão. Escrever nossa própria versão de um problema difícil e bem resolvido não é nobre por natureza.

Mas instalar uma dependência é o começo de um relacionamento, não o fim de uma tarefa. Que apropriado para a Monica.

Esse pacote pode mudar sua interface, exigir um novo ambiente de execução, introduzir uma vulnerabilidade ou deixar de ser mantido. Ainda somos responsáveis pelo efeito sobre nossos usuários.

### Considere o arranjo inteiro

Antes de adicionar uma, deveríamos entender o problema que ela resolve e a parte da Monica que vai depender dela. Uma pequena conveniência usada num só lugar merece uma conversa diferente da de uma biblioteca posta entre cada usuário e suas informações.

Conseguimos entender o comportamento dela? A licença combina com o projeto? O que mais ela traz junto? As pessoas conseguem hospedar a Monica por conta própria sem precisar de uma conta em outro serviço? Se precisarmos substituí-la mais tarde, quanto da aplicação vai se importar?

São perguntas úteis, não uma afirmação de que toda dependência do passado passou por uma lista de verificação formal. Também fazemos escolhas imperfeitas.

[Tecnologia familiar](/pt/manual/boring-technology/) e um ecossistema saudável ajudam, mas popularidade não é garantia de manutenção.

Não quero que rejeitemos pacotes por orgulho. Também não quero vinte dependências novas só porque uma delas desenha um menu suspenso um pouco mais bonito.

O comando de instalação é curto. Infelizmente, o compromisso não precisa ser.
