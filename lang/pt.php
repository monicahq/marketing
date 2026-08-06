<?php

/**
 * Brazilian Portuguese copy. Written with "você", which is the neutral register
 * in Brazil: Monica is a personal tool, and anything more formal would put a
 * desk between the reader and their own memories.
 *
 * Brazilian spelling and vocabulary throughout: "contato" rather than
 * "contacto", "usuário" rather than "utilizador", "tela" rather than "ecrã",
 * "celular" rather than "telemóvel".
 */

return [
    'meta' => [
        'imageAlt' => "Monica: lembre-se das pessoas com quem você se importa. O CRM pessoal de código aberto.",

        'breadcrumb' => [
            'home' => "Início",
            'v3' => "Monica v3",
            'pricing' => "Preços",
            'features' => "Recursos",
            'featuresDashboard' => "Painel",
            'featuresJournal' => "Diário",
            'blog' => "Blog",
            'terms' => "Termos de uso",
            'team' => "Equipe",
            'privacy' => "Política de privacidade",
            'page' => "Página :number",
        ],

        'software' => [
            'monthly' => "Monica hospedada, cobrança mensal",
            'yearly' => "Monica hospedada, cobrança anual",
            'selfHosted' => "Monica auto-hospedada",
        ],

        'home' => [
            'title' => "Monica — o CRM pessoal de código aberto",
            'description' => "A Monica ajuda você a lembrar das pessoas com quem se importa: o que está acontecendo na vida delas, as datas importantes, as conversas anteriores e quando voltar a falar. Privado, de código aberto, com hospedagem própria.",
        ],

        'pricing' => [
            'title' => "Preços da Monica — um plano hospedado, ou hospedagem própria de graça",
            'description' => "A Monica hospedada custa 9 USD por mês ou 90 USD por ano, com contatos ilimitados e sem cobrança por contato. Ou instale o aplicativo de código aberto de graça na sua própria infraestrutura.",
        ],

        'privacy' => [
            'title' => "Política de privacidade — Monica",
            'description' => "Como a Monica trata os seus dados: o que coletamos, onde fica armazenado, quem pode ver e o que acontece quando você encerra a conta. Sem anúncios, sem rastreadores, sem revenda de dados.",
        ],

        'team' => [
            'title' => "Equipe — Monica",
            'description' => "A Monica é feita por duas pessoas em Montreal, com centenas de pessoas contribuindo em código aberto. Por que construímos um CRM pessoal que não faz mal às relações humanas.",
        ],

        'terms' => [
            'title' => "Termos de uso — Monica",
            'description' => "Os termos de uso da Monica, o CRM pessoal de código aberto: o que o serviço cobre, os seus direitos sobre os seus dados, as suas responsabilidades e as letras miúdas jurídicas.",
        ],

        'blog' => [
            'title' => "O blog da Monica — notas de versão e decisões de produto",
            'description' => "O que lançamos, por que construímos desse jeito e como é de verdade tocar uma pequena empresa de código aberto. Escrito por quem faz a Monica.",
        ],

        // Um artigo traz o próprio título e a própria descrição, então aqui
        // fica só a moldura que o site coloca em volta.
        'post' => [
            'title' => ":title — o blog da Monica",
        ],

        // A página 2 de uma lista não é a lista. Sem isso, quatro páginas do
        // blog disputam um mesmo resultado sob um mesmo título.
        'paginated' => ":title (página :page de :total)",

        'v3' => [
            'title' => "Monica v3 — reconstruída para os próximos dez anos",
            'description' => "A Monica v3 é uma reconstrução do zero do CRM pessoal de código aberto: fichas que você mesmo desenha, um diário conectado a tudo, uma API completa e uma experiência de verdade no celular. Continua de código aberto. Chega antes do fim de 2026.",
        ],

        // Um bloco por aba de recursos: cada aba tem a própria URL, e um
        // buscador que encontre as três precisa conseguir distingui-las.
        'features' => [
            'title' => "Gestão de contatos — recursos da Monica",
            'description' => "Anote o que você sabe sobre as pessoas com quem se importa: relações, formas de contato, notas privadas, ligações, lembretes e presentes, tudo em uma única ficha.",
        ],

        'featuresDashboard' => [
            'title' => "O painel — recursos da Monica",
            'description' => "O painel da Monica mostra quem você consultou por último, o que vem a seguir, as suas notas favoritas e as ligações que você fez, para que você possa se concentrar no que realmente importa.",
        ],

        'featuresJournal' => [
            'title' => "O diário — recursos da Monica",
            'description' => "Escreva entradas de diário, registre como foi o seu dia e leia as atividades com os seus contatos que a Monica registra automaticamente para você.",
        ],
    ],

    'announcement' => [
        'headline' => "A Monica v3 chega antes do fim de 2026.",
        'detail' => "Reconstruída do zero. Continua de código aberto.",
        'cta' => "Veja o que vem por aí",
    ],

    'nav' => [
        'label' => "Principal",
        'product' => "Produto",
        'v3' => "Monica v3",
        'features' => "Recursos",
        'pricing' => "Preços",
        'blog' => "Blog",
        'docs' => "Documentação",
        'signIn' => "Entrar",
        'getStarted' => "Começar",
        'stars' => ":count estrelas",
    ],

    'hero' => [
        'eyebrow' => "O CRM pessoal de código aberto",
        'title' => "Lembre-se das pessoas com quem você se importa.",
        'lede' => "A Monica ajuda você a acompanhar as pessoas da sua vida: as coisas que elas contam, os momentos que vocês dividem e as promessas que você definitivamente pretendia lembrar.",
        'lede2' => "Privada por concepção. De código aberto. Com hospedagem própria. Sem anúncios, sem revenda de dados, sem notificações constrangedoras de “engajamento”.",
        'primaryCta' => "Começar a usar a Monica",
        'githubCta' => "Ver no GitHub · :count estrelas",
        'note' => "Hospedagem própria gratuita · Versão hospedada disponível",
    ],

    'proof' => [
        'starsLabel' => "Estrelas no GitHub",
        'since' => "2017",
        'sinceLabel' => "De código aberto desde",
        'featured' => "Repositório da semana",
        'featuredLabel' => "Destacado várias vezes",
        'launch' => "Product Hunt",
        'launchLabel' => "Melhor lançamento",
        'aside' => "Pelo visto, bastante gente também esquece aniversários.",
    ],

    'notALead' => [
        'title' => "Um CRM, mas ninguém aqui é um lead.",
        'body' => "Os CRMs tradicionais ajudam empresas a lembrar de clientes. A Monica ajuda você a lembrar de amigos, familiares, colegas, vizinhos e de todo mundo que importa.",
        'aside' => "Ser atencioso fica mais fácil quando a sua memória tem backup.",
        'listTitle' => "Guarde os detalhes que você esqueceria de outro jeito:",
        'items' => [
            "o que está acontecendo na vida delas;",
            "como vocês se conhecem;",
            "datas importantes;",
            "conversas anteriores;",
            "presentes, dívidas, promessas e ideias;",
            "lembretes para voltar a falar.",
        ],
    ],

    'showcase' => [
        'title' => "Tudo sobre alguém. Em um só lugar.",
        'aside' => "Pessoas são complicadas. As fichas delas têm o direito de ser um pouco complicadas também.",
        // Uma tela real do produto, não uma maquete: é isto que uma ficha de
        // contato guarda.
        'card' => [
            'name' => "Élise Aubert",
            'meta' => "Irmã · Lyon · Falaram hoje",
            'badge' => "Família",
            'birthdayLabel' => "Aniversário",
            'birthday' => "18 de março · faz 39 anos em 7 meses",
            'metLabel' => "Como vocês se conheceram",
            'met' => "Já nasceu assim",
            'relationshipsLabel' => "Relações",
            'relationships' => [
                ['initials' => "MC", 'label' => "Élise é companheira de Marc", 'meta' => "10 anos"],
                ['initials' => "LA", 'label' => "Élise é mãe de Léa", 'meta' => "Desde 2019"],
            ],
            'recentlyLabel' => "Recentemente",
            'timeline' => [
                [
                    'nature' => 'meal',
                    'title' => "Almoço no Le Petit Sud",
                    'meta' => "Hoje · ela está pensando em voltar para Lyon",
                ],
                [
                    'nature' => 'call',
                    'title' => "Ligou para falar do Georges",
                    'meta' => "2 de agosto · 22 minutos",
                ],
            ],
            'reminder' => "Perguntar como foi a entrevista",
            'reminderMeta' => "Lembrete · amanhã",
        ],
        'features' => [
            [
                'icon' => 'relationship',
                'title' => "Relações",
                'body' => "Entenda famílias, casais, amizades, colegas de trabalho e as ligações entre eles.",
            ],
            [
                'icon' => 'journal',
                'title' => "Notas e entradas de diário",
                'body' => "Lembre do que aconteceu sem rolar seis aplicativos de mensagem.",
            ],
            [
                'icon' => 'reminder',
                'title' => "Lembretes",
                'body' => "Ligar para a sua mãe. Parabenizar um amigo. Perguntar como foi a entrevista. A Monica lembra; o mérito continua sendo seu.",
            ],
            [
                'icon' => 'activity',
                'title' => "Atividades",
                'body' => "Mantenha um histórico de refeições, ligações, viagens, eventos e dos pequenos momentos que formam uma relação.",
            ],
            [
                'icon' => 'panel',
                'title' => "Informações personalizadas",
                'body' => "Guarde os detalhes que importam para você, não os campos que um CRM de vendas acha que deveriam importar.",
            ],
        ],
    ],

    'notSocial' => [
        'title' => "Deliberadamente não é uma rede social.",
        'body' => "A Monica não recomenda amizades, não classifica relações, não insere publicidade e não conta para ninguém que você visitou o perfil dela.",
        'body2' => "É um lugar privado para as suas memórias e as suas relações.",
        'quote' => "Sem feed. Sem seguidores. Sem marcas fingindo ter personalidade.",
    ],

    'openSource' => [
        'title' => "Seu quer dizer seu.",
        'body' => "A Monica é de código aberto desde o começo. Isso não vai mudar.",
        'aside' => "Confiança é útil. Código-fonte é melhor.",
        'sourceCta' => "Explorar o código-fonte",
        'hostingCta' => "Ler o guia de hospedagem própria",
        'v3Cta' => "Ver tudo o que vem na Monica v3",
        'listTitle' => "Com a Monica v3:",
        'items' => [
            "o projeto continua totalmente de código aberto;",
            "você pode rodar tudo no seu próprio servidor;",
            "o produto hospedado usa o mesmo aplicativo por baixo;",
            "os seus dados podem ser exportados;",
            "o código pode ser inspecionado, modificado e bifurcado.",
        ],
    ],

    'v3' => [
        'title' => "A Monica está crescendo. Quase toda.",
        'body' => "A Monica v3 está sendo reconstruída do zero para a próxima década.",
        'body2' => "Vai ser mais flexível, mais extensível e muito melhor no celular, preservando os princípios de privacidade e de propriedade que tornaram a Monica útil desde o início.",
        'listLabel' => "Chegando na v3",
        'features' => [
            [
                'icon' => 'panel',
                'title' => "Fichas que você desenha",
                'body' => "Escolha as seções e os campos que fazem sentido em uma ficha, em vez de aceitar a nossa opinião para sempre.",
            ],
            [
                'icon' => 'relationship',
                'title' => "Mais do que contatos",
                'body' => "Conecte pessoas a animais de estimação, empresas, casas, veículos, projetos e a qualquer outra coisa relevante na vida delas.",
            ],
            [
                'icon' => 'journal',
                'title' => "Um diário conectado a tudo",
                'body' => "Registre um momento uma vez só e conecte-o às pessoas, fichas, datas e lembretes envolvidos.",
            ],
            [
                'icon' => 'tag',
                'title' => "Estruturas feitas pela comunidade",
                'body' => "Instale estruturas úteis criadas por outras pessoas que usam a Monica e depois modifique a sua cópia à vontade.",
            ],
            [
                'icon' => 'code',
                'title' => "Uma API completa e um servidor MCP",
                'body' => "Tudo o que existe na interface também deve existir de forma programável.",
            ],
            [
                'icon' => 'phone',
                'title' => "Uma experiência de verdade no celular",
                'body' => "Primeiro um aplicativo web responsivo e, em seguida, aplicativos nativos para iOS e Android.",
            ],
        ],
        'cta' => "Conhecer a Monica v3",
        'note' => "Prevista para antes do fim de 2026 · O acesso beta vai abrir aos poucos",
    ],

    /** A página /v3. O bloco `v3` acima é a seção da home que leva até ela. */
    'v3page' => [
        'badge' => "Monica v3 · Em desenvolvimento",
        'timing' => "Chega antes do fim de 2026",
        'title' => "A Monica está sendo reconstruída para os próximos dez anos.",
        'lede' => "A Monica já ajudou milhares de pessoas a lembrar do que importa sobre quem está na vida delas. Agora ela está sendo reconstruída do zero: mais flexível, mais privada, mais fácil de estender e melhor em qualquer tela.",
        'lede2' => "Vai continuar de código aberto. E tudo o que fez a Monica valer a pena desde o início permanece.",

        'form' => [
            'label' => "Endereço de e-mail",
            'placeholder' => "voce@exemplo.com",
            'cta' => "Avise quando estiver pronta",
            'note' => "Um e-mail quando a Monica v3 for lançada. Sem newsletter, sem pixel de rastreamento, sem barulho.",
        ],

        'proof' => [
            'stars' => ":count estrelas no GitHub",
            'openSource' => "De código aberto desde 2017",
            'selfHostable' => "Com hospedagem própria",
        ],

        'coming' => [
            'label' => "O que vem por aí",
            'title' => "Muita coisa muda. A Monica fica mais sua.",
            'body' => "A Monica v3 não é uma renovação visual. É uma nova fundação, pensada para deixar o produto mais flexível sem deixá-lo mais complicado.",
            'features' => [
                [
                    'icon' => 'panel',
                    'title' => "Molde a Monica em volta da sua vida",
                    'body' => "Crie as seções e os campos que fazem sentido para você. Mantenha a Monica simples, ou monte fichas detalhadas para as coisas que você quer lembrar.",
                ],
                [
                    'icon' => 'relationship',
                    'title' => "Acompanhe mais do que pessoas",
                    'body' => "As pessoas continuam no centro da Monica, mas elas não existem isoladas. Conecte-as a animais de estimação, empresas, casas, veículos, projetos ou qualquer outra ficha que importe na vida delas.",
                ],
                [
                    'icon' => 'journal',
                    'title' => "Lembre do que aconteceu",
                    'body' => "Ligações, refeições, viagens, momentos difíceis, pequenos detalhes que vale a pena guardar: coloque tudo em um diário que se conecta naturalmente a pessoas, datas e lembretes.",
                ],
                [
                    'icon' => 'tag',
                    'title' => "Comece a partir de estruturas feitas por outras pessoas",
                    'body' => "Instale modelos prontos criados pela comunidade, adapte-os livremente e mantenha controle total sobre a sua própria versão.",
                ],
                [
                    'icon' => 'code',
                    'title' => "Construa sobre uma base aberta",
                    'body' => "Tudo o que existe na interface também vai existir na API. A Monica vai ficar mais fácil de integrar, automatizar e estender, sem depender de endpoints escondidos ou privados.",
                ],
                [
                    'icon' => 'phone',
                    'title' => "Use a Monica direito em qualquer tela",
                    'body' => "O aplicativo web será pensado para celulares desde o começo. Aplicativos nativos para iOS e Android vêm depois, feitos como aplicativos de verdade e não como uma casca em volta de um site.",
                ],
            ],
        ],

        'principles' => [
            'label' => "O que não muda",
            'title' => "Os princípios não estão sendo reescritos.",
            'body' => "A Monica v3 é ambiciosa, mas continua sendo a Monica. Os compromissos por trás de :count estrelas no GitHub seguem fazendo parte da fundação.",
            'items' => [
                [
                    'icon' => 'code',
                    'title' => "De código aberto, e continua de código aberto",
                    'body' => "A Monica vai continuar totalmente de código aberto e com hospedagem própria. O código pode ser lido, modificado, bifurcado e receber contribuições, exatamente como hoje.",
                ],
                [
                    'icon' => 'lock',
                    'title' => "Os seus dados continuam seus",
                    'body' => "Sem publicidade. Sem venda de dados pessoais. Sem modelo treinado nos seus contatos. A sua vida privada não é um modelo de negócio.",
                ],
                [
                    'icon' => 'download',
                    'title' => "Exporte tudo",
                    'body' => "Exporte as suas informações quando precisar, incluindo as estruturas, seções e campos personalizados que você criou.",
                ],
                [
                    'icon' => 'people',
                    'title' => "Feita para ser usável por todo mundo",
                    'body' => "Navegação por teclado, leitores de tela, tradução e layouts responsivos são requisitos do produto, não trabalho adiado para depois.",
                ],
                [
                    'icon' => 'arrowRight',
                    'title' => "Quem já usa não fica para trás",
                    'body' => "O objetivo é oferecer um caminho de migração claro para as contas Monica já existentes, incluindo contatos, notas, lembretes e outras informações essenciais.",
                ],
            ],
        ],

        'follow' => [
            'title' => "Acompanhe a reconstrução desde o começo.",
            'body' => "A Monica v3 ainda está em desenvolvimento, e muitas decisões importantes estão sendo tomadas em público. Entre na lista de lançamento ou siga o repositório para ver o trabalho acontecendo.",
            'note' => "Código aberto · Hospedagem própria · Construída em público",
            'primaryCta' => "Receber o e-mail de lançamento",
            'secondaryCta' => "Seguir a Monica no GitHub",
        ],
    ],

    'founder' => [
        'title' => "Feita porque a minha memória é ruim.",
        'body' => "Criei a Monica porque eu vivia esquecendo detalhes sobre pessoas com quem eu me importava de verdade.",
        'body2' => "Não porque fossem pouco importantes. Porque a vida é corrida, a memória não é confiável e, pelo visto, o cérebro humano não veio com busca.",
        'body3' => "A Monica começou como um projeto pessoal em 2017. De lá para cá virou um dos projetos de CRM pessoal de código aberto mais acompanhados, apoiado e melhorado por pessoas do mundo inteiro.",
        'signature' => "— Régis, fundador e pessoa que ainda esquece as coisas de vez em quando",
    ],

    'faq' => [
        'title' => "Perguntas que as pessoas realmente fazem.",
        'items' => [
            [
                'q' => "A Monica é mesmo gratuita?",
                'a' => "O código é livre e sempre será. Você pode rodá-lo no seu próprio servidor sem pagar nada. A versão hospedada é uma assinatura paga, porque servidores e backups não são de graça, e é ela que financia o trabalho no projeto de código aberto.",
            ],
            [
                'q' => "Preciso entender de tecnologia para usar?",
                'a' => "Na versão hospedada, não: você cria uma conta e começa. A hospedagem própria pede um pouco mais: Docker, ou um ambiente PHP que você se sinta confortável em manter. A documentação explica os dois caminhos.",
            ],
            [
                'q' => "Quem pode ver os meus dados na versão hospedada?",
                'a' => "Ninguém fica olhando. O suporte só acessa uma conta com a sua permissão explícita e para um problema específico. Os seus dados nunca são vendidos, nunca são usados em publicidade e nunca são usados para treinar um modelo.",
            ],
            [
                'q' => "Consigo tirar os meus dados de lá?",
                'a' => "A qualquer momento, por completo, incluindo as estruturas personalizadas que você criou. Exportar é um recurso, não uma corrida de obstáculos para segurar você.",
            ],
            [
                'q' => "Posso importar contatos que eu já tenho?",
                'a' => "Pode, em arquivos vCard e CSV. As duplicatas são mostradas para você antes de qualquer fusão, porque juntar as duas pessoas erradas é um jeito memorável de estragar uma tarde.",
            ],
            [
                'q' => "O que acontece com a minha conta quando a v3 chegar?",
                'a' => "O objetivo é um caminho de migração claro para as contas existentes, incluindo contatos, notas, lembretes e outras informações essenciais. Nada é apagado e nada é imposto a você de um dia para o outro.",
                'link' => ['label' => "Ler sobre a Monica v3", 'page' => 'v3'],
            ],
            [
                'q' => "Existe aplicativo para celular?",
                'a' => "O aplicativo web já funciona no celular hoje. Os aplicativos nativos para iOS e Android vêm depois da v3: aplicativos de verdade, não um site dentro de uma casca.",
            ],
            [
                'q' => "A Monica faz alguma coisa com IA?",
                'a' => "A Monica v3 expõe um servidor MCP, então você pode apontar o seu próprio assistente para os seus próprios dados, se quiser. A Monica não envia as suas relações para um modelo por conta própria.",
            ],
        ],
    ],

    'plans' => [
        'title' => "Use o nosso servidor. Ou o seu.",
        'hosted' => [
            'title' => "Monica hospedada",
            'body' => "Para quem quer a Monica sem administrar um servidor.",
            'items' => [
                "atualizações automáticas;",
                "backups gerenciados;",
                "nenhum trabalho de infraestrutura;",
                "apoia o desenvolvimento do projeto de código aberto.",
            ],
            'cta' => "Criar uma conta",
        ],
        'selfHosted' => [
            'title' => "Hospede a Monica você mesmo",
            'body' => "Para quem gosta de ser dono da própria infraestrutura, ou pelo menos diz que gosta.",
            'items' => [
                "controle total;",
                "código aberto;",
                "nenhuma assinatura da Monica;",
                "instalação por Docker ou manual.",
            ],
            'cta' => "Hospedar a Monica",
        ],
    ],

    'finalCta' => [
        'title' => "Seja um amigo melhor. Com apoio administrativo.",
        'body' => "Lembre dos detalhes importantes. Retome o contato na hora certa. Mantenha as suas relações fora dos bancos de dados de publicidade.",
        'primaryCta' => "Começar a usar a Monica",
        'secondaryCta' => "Ver a Monica v3",
        'note' => "Código aberto · Hospedagem própria · Sem cartão de crédito",
    ],

    /** A página /precos. Os preços vêm do design; mude-os aqui, uma vez por locale. */
    'pricing' => [
        'eyebrow' => "Preços simples",
        'title' => "Um único plano hospedado. Sem cobrança por relação.",
        'lede' => "Use a Monica nos nossos servidores por um preço previsível, ou hospede você mesmo de graça.",
        'lede2' => "Não cobramos por contato, por lembrete, por aniversário importante nem por pessoa que você está tentando não decepcionar.",
        'currency' => "Preços em USD",
        'taxFootnote' => "Os preços são exibidos em USD. Os impostos aplicáveis são calculados antes do pagamento.",

        'billing' => [
            'label' => "Período de cobrança",
            'yearly' => "Anual — 2 meses grátis",
            'monthly' => "Mensal",
        ],

        'hosted' => [
            'title' => "Monica hospedada",
            'body' => "Para quem quer a Monica sem manter um servidor.",
            'yearlyPrice' => "US\$ 90",
            'yearlyPeriod' => "USD / ano",
            'yearlyNote' => "Dois meses grátis na cobrança anual.",
            'monthlyPrice' => "US\$ 9",
            'monthlyPeriod' => "USD / mês",
            'monthlyNote' => "Cobrança mensal. Mude para anual e ganhe dois meses grátis.",
            'taxNote' => "Podem incidir impostos conforme o seu país.",
            'cta' => "Começar a usar a Monica",
            'trial' => "Teste de 30 dias · Sem cartão de crédito durante o teste",
            'listTitle' => "Tudo o que você precisa para lembrar das pessoas que importam:",
            'items' => [
                "contatos ilimitados;",
                "notas ilimitadas;",
                "lembretes ilimitados;",
                "atividades e entradas de diário ilimitadas;",
                "gestão de relações;",
                "campos e seções personalizados;",
                "arquivos anexados;",
                "exportação de dados;",
                "atualizações automáticas;",
                "backups gerenciados;",
                "suporte por e-mail;",
                "acesso pelo celular, tablet e computador;",
                "todos os recursos hospedados futuros incluídos.",
            ],
            'aside' => "Sem taxa extra por ter uma família grande.",
            'footnote' => "Cancele quando quiser. Os seus contatos não ficam de refém.",
        ],

        'selfHosted' => [
            'title' => "Prefere o seu próprio servidor?",
            'body' => "A Monica é de código aberto e pode ser instalada em uma infraestrutura que você controla.",
            'price' => "US\$ 0",
            'period' => "para a Monica",
            'aside' => "O seu provedor de hospedagem ainda pode querer dinheiro. Ainda não derrotamos o capitalismo.",
            'cta' => "Ver o guia de hospedagem própria",
            'sourceCta' => "Ver o código no GitHub · :count estrelas",
            'listTitle' => "O aplicativo sai de graça. Você entra com o servidor, as atualizações, os backups, o monitoramento, as correções de segurança e a tranquilidade de saber exatamente onde os seus dados moram.",
            'items' => [
                "o aplicativo de código aberto completo;",
                "contatos ilimitados;",
                "quantos usuários a sua infraestrutura permitir;",
                "controle total sobre os seus dados;",
                "importação e exportação de dados;",
                "documentação da comunidade;",
                "suporte da comunidade;",
                "a possibilidade de inspecionar e modificar o código-fonte.",
            ],
            'footnote' => "A edição com hospedagem própria não é uma demonstração reduzida. É a Monica rodando na sua infraestrutura.",
            'footnote2' => "Backups gerenciados, envio de e-mail, monitoramento da infraestrutura e suporte direto fazem parte do serviço hospedado.",
        ],

        'compare' => [
            'title' => "A mesma Monica. Outra pessoa responsável pelo servidor.",
            'rowHeader' => "O quê",
            'hosted' => "Monica hospedada",
            'selfHosted' => "Monica com hospedagem própria",
            'rows' => [
                ['label' => "Software Monica", 'hosted' => "Incluído", 'selfHosted' => "Incluído"],
                ['label' => "Contatos", 'hosted' => "Ilimitados", 'selfHosted' => "Ilimitados"],
                ['label' => "Atualizações", 'hosted' => "Automáticas", 'selfHosted' => "Você instala"],
                ['label' => "Backups", 'hosted' => "Gerenciados pela Monica", 'selfHosted' => "Você gerencia"],
                ['label' => "Manutenção do servidor", 'hosted' => "Gerenciada pela Monica", 'selfHosted' => "Você gerencia"],
                ['label' => "Local dos dados", 'hosted' => "Infraestrutura da Monica", 'selfHosted' => "Sua infraestrutura"],
                ['label' => "Conhecimento técnico necessário", 'hosted' => "Nenhum", 'selfHosted' => "Algum"],
                ['label' => "Suporte", 'hosted' => "Suporte por e-mail", 'selfHosted' => "Suporte da comunidade"],
                ['label' => "Custo", 'hosted' => "Assinatura mensal ou anual", 'selfHosted' => "Software gratuito mais custos de hospedagem"],
                ['label' => "Ideal para", 'hosted' => "Quem quer que a Monica simplesmente funcione", 'selfHosted' => "Quem gosta de servidores, ou é obrigado a gostar"],
            ],
        ],

        'whyPay' => [
            'title' => "Por que pagar se a Monica é de código aberto?",
            'body' => "Código aberto significa que você pode rodar, inspecionar, modificar e contribuir com a Monica. Não faz desaparecer servidores, backups, envio de e-mail, trabalho de segurança nem suporte.",
            'body2' => "Uma assinatura hospedada paga a infraestrutura que roda a sua conta e ajuda a financiar o desenvolvimento contínuo da Monica para todo mundo, inclusive para quem hospeda por conta própria.",
            'quote' => "Você paga para operarmos a Monica, não para desbloquear os seus próprios dados.",
            'aside' => "Servidores são só computadores que emitem faturas.",
        ],

        'noCharge' => [
            'title' => "Coisas que não cobramos",
            'items' => [
                ['title' => "Mais contatos", 'body' => "O seu preço não sobe porque você conhece mais gente."],
                ['title' => "Mais lembretes", 'body' => "Lembrar de aniversários de casamento já é estressante o bastante."],
                ['title' => "Exportar dados", 'body' => "Levar os seus dados embora é um direito, não um recurso premium."],
                ['title' => "Privacidade básica", 'body' => "Não vendemos upgrade de privacidade. Privacidade é o padrão."],
                ['title' => "Cancelar", 'body' => "Não há multa de cancelamento nem ligação cerimonial de término."],
                ['title' => "Usar a API", 'body' => "A API faz parte do produto, não é uma negociação corporativa à parte."],
            ],
        ],

        'leaving' => [
            'title' => "A sua assinatura pode acabar. O seu acesso aos seus dados não deveria.",
            'body' => "Você pode exportar os seus dados a qualquer momento.",
            'body2' => "Quando você cancela, a conta continua acessível até o fim do período já pago. Depois disso, mantemos a conta disponível por um prazo de carência definido antes da exclusão.",
            'steps' => [
                ['label' => "Cancelar", 'body' => "O seu plano continua ativo até o fim do período de cobrança."],
                ['label' => "Exportar", 'body' => "Baixe os seus dados antes ou depois do cancelamento, durante o prazo de carência."],
                ['label' => "Excluir", 'body' => "Exclua a sua conta na hora, pelas Configurações, quando você quiser."],
            ],
            'note' => "O prazo de carência, os formatos de exportação e os prazos de exclusão estão descritos na política de retenção.",
        ],

        'trackRecord' => [
            'title' => "De código aberto antes de isso virar estratégia de preço",
            'body' => "A Monica é desenvolvida em público desde 2017.",
            'body2' => "O projeto conquistou :count estrelas no GitHub, foi escolhido como Repositório da semana várias vezes, chegou ao topo do Product Hunt e recebeu reconhecimento da comunidade de código aberto.",
            'starsLabel' => "Estrelas no GitHub",
            'since' => "2017",
            'sinceLabel' => "De código aberto desde",
            'launch' => "Produto do dia nº 1",
            'launchLabel' => "Product Hunt",
            'featured' => "Repositório da semana",
            'featuredLabel' => "Destacado várias vezes",
            'cta' => "Ver a Monica no GitHub",
        ],

        'faq' => [
            'title' => "Perguntas sobre pagar pela Monica",
            'items' => [
                ['q' => "Quanto custa a Monica?", 'a' => [
                    "A Monica hospedada custa 9 USD por mês ou 90 USD por ano.",
                    "Você também pode hospedar a Monica de graça em uma infraestrutura que você mesmo gerencia.",
                ]],
                ['q' => "O preço é por usuário ou por contato?", 'a' => "Nem um nem outro. O plano hospedado tem um preço por conta e inclui contatos ilimitados."],
                ['q' => "A Monica é mesmo de código aberto?", 'a' => [
                    "É. O código-fonte da Monica é público, e o projeto tem :count estrelas no GitHub.",
                    "A Monica v3 vai continuar de código aberto e com hospedagem própria.",
                ], 'link' => ['label' => "Ler sobre a Monica v3", 'page' => 'v3']],
                ['q' => "Hospedar por conta própria é gratuito?", 'a' => "A Monica não cobra pelo software com hospedagem própria. O servidor e os custos de infraestrutura ficam por sua conta."],
                ['q' => "A versão hospedada é diferente da versão com hospedagem própria?", 'a' => [
                    "As duas usam o mesmo aplicativo por baixo.",
                    "O serviço hospedado inclui infraestrutura, atualizações gerenciadas, backups, monitoramento, envio de e-mail e suporte. Algumas integrações que dependem da infraestrutura operada pela Monica podem existir só no serviço hospedado.",
                ]],
                ['q' => "Posso sair da versão hospedada para a minha própria?", 'a' => "Pode. Você exporta os seus dados da Monica e importa em uma instalação própria compatível."],
                ['q' => "Posso cancelar quando quiser?", 'a' => "Pode. Cancele nas configurações da sua conta. A assinatura continua ativa até o fim do período de cobrança atual."],
                ['q' => "Existe multa de cancelamento?", 'a' => "Não. Ir embora não deveria exigir o pagamento de um resgate."],
                ['q' => "O que acontece se o meu pagamento falhar?", 'a' => [
                    "Avisamos você e tentamos cobrar de novo antes de restringir a conta.",
                    "Os seus dados não são apagados na hora porque um cartão venceu.",
                ]],
                ['q' => "Como funcionam os reembolsos?", 'a' => [
                    "Se você foi cobrado por engano ou esqueceu de cancelar, fale com a gente em até 30 dias. Vamos analisar o pedido como seres humanos razoáveis.",
                    "Assinaturas anuais podem ser reembolsadas dentro do prazo definido na nossa política de reembolso. Não há reembolso para contas que abusaram gravemente do serviço.",
                ]],
                ['q' => "O preço vai aumentar?", 'a' => [
                    "Os preços podem mudar conforme a Monica evolui, mas avisamos com antecedência quem já assina.",
                    "Não mudamos preços no silêncio torcendo para ninguém perceber.",
                ]],
                ['q' => "Os impostos estão incluídos?", 'a' => "Os preços exibidos incluem ou excluem impostos conforme o seu país e a lei aplicável. O valor final aparece antes do pagamento."],
                ['q' => "A Monica guarda os meus dados de pagamento?", 'a' => "Os dados de pagamento são processados pelo nosso provedor de pagamentos. A Monica não armazena números completos de cartão."],
                ['q' => "Os meus dados são usados para publicidade?", 'a' => "Não. A Monica não vende os seus dados pessoais, não exibe publicidade e não usa as pessoas da sua conta para montar perfis de anúncios."],
                ['q' => "Os meus dados são usados para treinar modelos de IA?", 'a' => "Nenhum modelo é treinado com o conteúdo privado da sua conta na Monica."],
                ['q' => "Os backups estão incluídos?", 'a' => [
                    "Sim, o serviço hospedado inclui backups gerenciados.",
                    "Em instalações próprias, você precisa configurar e testar os seus próprios backups.",
                ]],
                ['q' => "Posso exportar tudo?", 'a' => "Você pode exportar contatos, relações, notas, lembretes, atividades, campos personalizados e outros dados da conta que sejam suportados. Os anexos vão junto, no formato de exportação documentado."],
                ['q' => "Posso excluir a minha conta?", 'a' => "Pode. A exclusão da conta fica nas Configurações e não exige falar com o suporte."],
                ['q' => "Vocês dão desconto?", 'a' => "No momento, não. Preferimos um preço compreensível a um sistema em que cada pessoa negocia por conta própria."],
                ['q' => "Existe plano vitalício?", 'a' => "Não. Os servidores continuam gerando despesas depois que as campanhas de lançamento motivacionais acabam."],
                ['q' => "Existe plano corporativo?", 'a' => [
                    "Não é preciso agendar uma reunião de vendas para usar a Monica.",
                    "Para dúvidas sobre segurança, compras ou hospedagem em volume, fale com a gente.",
                ]],
                ['q' => "Posso pagar em outra moeda?", 'a' => "A cobrança é feita em USD por enquanto. O seu banco pode converter o valor e cobrar uma taxa de conversão."],
                ['q' => "Assinar ajuda o projeto de código aberto?", 'a' => "Ajuda. As assinaturas hospedadas financiam a infraestrutura, a manutenção, o suporte e o desenvolvimento contínuo em código aberto da Monica."],
            ],
        ],

        'finalCta' => [
            'title' => "A sua memória já fez trabalho não remunerado demais.",
            'body' => "Use a versão hospedada e deixe a infraestrutura com a gente, ou instale a Monica no seu próprio servidor.",
            'body2' => "De um jeito ou de outro, os seus contatos continuam sendo pessoas, não leads.",
            'primaryCta' => "Começar a usar a Monica",
            'secondaryCta' => "Hospedar a Monica",
            'note' => "Um plano hospedado simples · Hospedagem própria gratuita · Código aberto",
        ],
    ],

    'footer' => [
        'tagline' => "Um CRM pessoal privado e de código aberto para lembrar das pessoas que importam.",
        'productLabel' => "Produto",
        'projectLabel' => "Projeto",
        'github' => "GitHub",
        'privacy' => "Privacidade",
        'terms' => "Termos",
        'team' => "Equipe",
        'copyright' => "© :year Monica",
        'since' => "De código aberto desde 2017",
        'ownership' => "Os seus dados continuam seus.",
        'languageLabel' => "Mudar de idioma",
    ],

    'blog' => [
        'title' => "Blog",
        'lede' => "Notas sobre construir a Monica, manter dados pessoais privados e a pequena mecânica de continuar em contato.",

        'allPosts' => "Todos os artigos",
        'keepReading' => "Continuar lendo",
        'onThisPage' => "Nesta página",
        'latest' => "Artigos recentes",

        'readingTime' => ":count min de leitura",

        // Até aqui todos os artigos têm a mesma autoria. O rótulo mora neste
        // arquivo e não no cabeçalho de cada artigo por isso mesmo: é um rótulo
        // do site, e precisa ser traduzido como tal.
        'authorRole' => "Fundador",

        'copyLink' => "Copiar link",
        'copyLinkDone' => "Copiado",

        'showing' => "Artigos :from a :to de :total",
        'pageOf' => "Página :page de :total",
        'newerPosts' => "Artigos mais recentes",
        'olderPosts' => "Artigos mais antigos",

        'tryMonica' => [
            'title' => "Experimente a Monica",
            'body' => "Um CRM pessoal privado e de código aberto para lembrar das pessoas que importam. Hospede você mesmo, ou deixe com a gente.",
            'bodyPost' => "Acompanhe as pessoas da sua vida sem entregá-las a um banco de dados de publicidade.",
            'cta' => "Começar",
            'note' => "Teste de 30 dias · Sem cartão de crédito",
        ],


        'openSource' => [
            'title' => "Código aberto",
            'body' => "A Monica é de código aberto desde o começo. Leia o código, rode a sua própria instância, mande um patch.",
        ],
    ],

    /**
     * Tradução dos termos publicados em monicahq.com/terms. A versão inglesa em
     * lang/en.php é a que prevalece: foi ela que foi publicada, e é ela que
     * precisa ser alterada primeiro.
     */
    'terms' => [
        'title' => "Os nossos termos de uso",
        'updated' => "Última atualização: :date",
        'updatedOn' => "12 de abril de 2018",

        'sections' => [
            [
                'title' => "Abrangência do serviço",
                'blocks' => [
                    ['text' => "A Monica é compatível com os seguintes navegadores:"],
                    ['items' => [
                        "Internet Explorer (11+)",
                        "Firefox (50+)",
                        "Chrome (última versão)",
                        "Safari (última versão)",
                    ]],
                    ['text' => "Não garanto que o site vá funcionar em outros navegadores, mas é bem provável que funcione sem problema."],
                ],
            ],
            [
                'title' => "Direitos",
                'blocks' => [
                    ['text' => "Você não precisa informar o seu nome verdadeiro ao criar uma conta. Precisa, porém, de um endereço de e-mail válido se quiser migrar a conta para a versão paga ou receber lembretes por e-mail."],
                    ['text' => "Você tem o direito de encerrar a sua conta a qualquer momento."],
                    ['text' => "Você tem o direito de exportar os seus dados a qualquer momento, no formato SQL."],
                    ['text' => "Os seus dados não serão intencionalmente mostrados a outros usuários nem compartilhados com terceiros."],
                    ['text' => "Os seus dados pessoais não serão compartilhados com ninguém sem o seu consentimento."],
                    ['text' => "Os seus dados têm backup de hora em hora."],
                    ['text' => "Se o site deixar de funcionar, você terá a oportunidade de exportar todos os seus dados antes que ele morra."],
                    ['text' => "Qualquer novo recurso que afete a privacidade será estritamente opcional, com adesão explícita."],
                ],
            ],
            [
                'title' => "Responsabilidades",
                'blocks' => [
                    ['text' => "Você não vai usar o site para guardar informações ou dados ilegais segundo a lei canadense (ou qualquer outra lei)."],
                    ['text' => "Você precisa ter pelo menos 18 anos para criar uma conta e usar o site."],
                    ['text' => "Você não deve abusar do site publicando conscientemente código malicioso que possa prejudicar você ou os outros usuários."],
                    ['text' => "Você só deve usar o site para coisas amplamente aceitas como moralmente boas."],
                    ['text' => "Você não pode fazer requisições automatizadas ao site."],
                    ['text' => "Você não pode abusar do sistema de convites."],
                    ['text' => "Você é responsável por manter a sua conta segura."],
                    ['text' => "Reservo o direito de encerrar contas que abusem do sistema (milhares de contatos com centenas de milhares de lembretes, por exemplo) ou que o usem de forma pouco razoável."],
                ],
            ],
            [
                'title' => "Outras questões jurídicas importantes",
                'blocks' => [
                    ['text' => "Por mais que eu queira oferecer um ótimo serviço, há coisas que não posso prometer. Por exemplo, os serviços e o software são fornecidos “no estado em que se encontram”, por sua conta e risco, sem garantia ou condição de qualquer tipo, expressa ou implícita. Também não ofereço nenhuma garantia de comercialização, adequação a uma finalidade específica ou não violação de direitos. A Monica não terá responsabilidade por qualquer dano ao seu sistema, perda ou corrupção de dados, ou outro prejuízo decorrente do seu acesso aos serviços ou ao software, ou do uso deles."],
                    ['text' => "Estes termos podem mudar a qualquer momento, mas eu nunca vou ser babaca a respeito disso. Manter este site é um sonho realizado para mim, e espero conseguir mantê-lo no ar pelo maior tempo possível."],
                ],
            ],
        ],
    ],

    /**
     * Tradução da política publicada em monicahq.com/privacy. A versão inglesa
     * em lang/en.php é a que prevalece.
     *
     * Uma seção sem título: a política publicada é uma sequência de parágrafos
     * sem cabeçalhos, e inventar alguns seria editar um documento jurídico.
     */
    'privacy' => [
        'title' => "A nossa política de privacidade",
        'updated' => "Última atualização: :date",
        'updatedOn' => "30 de maio de 2019",

        'sections' => [
            [
                'blocks' => [
                    ['text' => "A Monica é um projeto de código aberto. A versão hospedada tem um plano pago que nos permite arrecadar dinheiro para pagar os servidores e serviços adicionais, mas o objetivo principal não é ganhar dinheiro (senão não teríamos aberto o código)."],
                    ['text' => "A Monica vem em dois sabores: você pode usar a nossa versão hospedada, ou baixá-la e rodar por conta própria. No segundo caso, não rastreamos absolutamente nada. Nem sabemos que você baixou o produto. Faça o que quiser com ele (mas respeite as leis do seu país)."],
                    ['text' => "Quando você cria a sua conta na nossa versão hospedada, você fornece ao site informações sobre você que nós coletamos. Isso inclui o seu nome, o seu endereço de e-mail e a sua senha, que é criptografada antes de ser armazenada. Não guardamos nenhuma outra informação pessoal."],
                    ['text' => "Quando você entra no serviço, usamos cookies para lembrar das suas credenciais de acesso. Essa é a única finalidade dos cookies."],
                    ['text' => "A Monica roda na Fortrabbit e somos os únicos, além dos funcionários da Fortrabbit, com acesso a esses servidores."],
                    ['text' => "Fazemos backups do banco de dados de hora em hora."],
                    ['text' => "A sua senha é criptografada com bcrypt, um algoritmo de hash de senhas bastante seguro. Você também pode ativar a autenticação de dois fatores na sua conta se quiser uma camada extra de segurança. Fora esses mecanismos de criptografia, os seus dados não são criptografados no banco de dados. Se alguém tiver acesso ao banco, conseguirá ler os seus dados. Fazemos o possível para que isso nunca aconteça, mas pode acontecer."],
                    ['text' => "Se houver um vazamento de dados, entraremos em contato com os usuários afetados para avisá-los sobre o incidente."],
                    ['text' => "Os e-mails transacionais são entregues pelo Postmark."],
                    ['text' => "Usamos uma ferramenta de código aberto chamada Sentry para acompanhar os erros que acontecem em produção. O serviço deles registra os erros, mas não tem acesso a nenhuma informação além do ID da conta, o que me permite depurar o que está acontecendo."],
                    ['text' => "O site não exibe anúncios hoje e nunca vai exibir. Também não vende, nem pretende vender, dados a terceiros, com ou sem o seu consentimento. Somos simplesmente contra isso. Foda-se a publicidade."],
                    ['text' => "Não usamos nenhum serviço de rastreamento de terceiros, como Google Analytics ou Intercom, que acompanhe comportamentos ou dados de usuários, nem no site de marketing nem na versão hospedada. Somos profundamente contra os princípios deles, já que usariam esses dados para traçar um perfil seu, algo a que somos totalmente contrários."],
                    ['text' => "Todos os dados que você coloca na Monica pertencem a você. Não temos nenhum direito sobre eles. Por favor, não coloque coisas ilegais lá, senão nós é que ficamos em apuros."],
                    ['text' => "Todas as informações sobre os contatos que você coloca na Monica são privadas e só suas. Não cruzamos informações entre contas nem usamos uma informação de uma conta para preencher outra conta (ao contrário do Facebook, por exemplo)."],
                    ['text' => "Usamos o Stripe para receber os pagamentos de acesso à versão paga. Não armazenamos informações de cartão de crédito nem nada relativo às transações em si nos nossos servidores. No entanto, por conta da biblioteca de código aberto que usamos para processar os pagamentos (Laravel Cashier), guardamos os últimos 4 dígitos do cartão e a bandeira (VISA ou MasterCard). Como usuário, você é identificado no Stripe por um número aleatório que eles geram e usam."],
                    ['text' => "Sobre os pagamentos, você pode voltar para o plano gratuito quando quiser. Quando isso acontece, o Stripe é atualizado automaticamente e não temos como cobrar você de novo, mesmo que quiséssemos. Quanto menos lidamos com informações de pagamento, mais felizes ficamos."],
                    ['text' => "Você pode exportar os seus dados a qualquer momento. Também pode usar a API para exportar tudo, se souber fazer isso. Você ainda pode pedir que nós mesmos façamos esse processo e enviemos o resultado para você. Os seus dados serão exportados no formato SQL."],
                    ['text' => "Quando você encerra a sua conta, destruímos imediatamente todas as suas informações pessoais do banco de dados de produção, mas as suas informações continuam nos backups que mantemos por 30 dias. Depois de 30 dias, as suas informações são destruídas por completo. Ainda que o controle seja seu, podemos excluir a conta para você, se pedir."],
                    ['text' => "Em certas situações, podemos ser obrigados a divulgar dados pessoais em resposta a solicitações legais de autoridades públicas, inclusive para atender a exigências de segurança nacional ou de aplicação da lei. Só esperamos que isso nunca aconteça."],
                    ['text' => "Se você violar os termos de uso, encerraremos a sua conta e avisaremos você. Mas se você seguir a política do “não seja babaca”, nada deve acontecer com você e todo mundo fica feliz."],
                    ['text' => "A Monica usa apenas projetos de código aberto, hospedados principalmente no Github."],
                    ['text' => "Vamos atualizar esta política de privacidade assim que adotarmos novas práticas de informação. Se isso acontecer, enviaremos um e-mail para o endereço indicado na sua conta. Nunca seremos babacas a respeito disso e nunca, jamais, introduziremos algo no que fazemos que afete o seu direito à privacidade absoluta."],
                ],
            ],
        ],
    ],


    /**
     * Tradução do texto de missão publicado em monicahq.com/team, palavra por
     * palavra, gramática incluída. A versão inglesa em lang/en.php é a que
     * prevalece.
     *
     * Os dois valores que eram números na página antiga são palavras aqui. Nada
     * nesta build consegue contar pessoas contribuindo em um repositório cujo
     * histórico foi zerado, nem contatos em um servidor com o qual ela nunca
     * fala, e um número errado uma semana depois do lançamento é pior do que
     * uma ordem de grandeza honesta.
     */
    'team' => [
        'eyebrow' => "Equipe",
        'title' => "A Monica é uma equipe de 2. Com centenas de pessoas contribuindo.",

        'stats' => [
            ['value' => "2016", 'label' => "Primeira linha de código"],
            ['value' => "Montreal", 'label' => "Sede"],
            ['value' => "2", 'label' => "Integrantes oficiais"],
            ['value' => "Centenas", 'label' => "Pessoas contribuindo em código aberto"],
            ['value' => "Milhões", 'label' => "Contatos gerenciados"],
        ],

        'missionLabel' => "A nossa missão",
        'mission' => [
            "A nossa missão é usar a tecnologia de um jeito que não faça mal às relações humanas, como as grandes redes sociais conseguem fazer.",
            "Numa época em que as pessoas têm milhares de amigos virtuais, queremos oferecer uma ferramenta que ajude a fortalecer a relação com apenas alguns desses amigos. Fazer com que cada amizade importe muito.",
            "A Monica nasceu de uma necessidade pessoal de acompanhar o que amigos que moravam em outros países estavam fazendo da vida. Depois de construir a primeira versão da ferramenta, decidi abrir o código, divulgá-la no Hacker News e o resto é história.",
            "A Monica é hoje um projeto de código aberto saudável. Tivemos a sorte de contar com uma ótima comunidade, com dezenas de pessoas contribuindo e centenas de contribuições de código. Ele também gera um pouco de dinheiro: cada dólar que ganhamos com este projeto é reinvestido nele, para pagar as contas e ajudar no desenvolvimento.",
            "Obrigado por dar uma olhada no projeto.",
        ],
        'signature' => "Regis Freyd e Alexis Saettler",
    ],

    /**
     * As três páginas de recursos, que compartilham uma barra de abas e uma
     * mesma linha de fechamento.
     *
     * O texto é o do site antigo, frase por frase: é a copy de marketing do
     * dono, e esta versão é um redesenho, não uma reescrita. As anotações eram
     * etiquetas vermelhas presas em volta da captura de tela; aqui são uma
     * lista comum ao lado da imagem, para que sobrevivam a um celular, a um
     * leitor de tela e a uma tradução mais longa que o inglês.
     */
    'features' => [
        'tabsLabel' => "Recursos",
        'tabs' => [
            'features' => "Gestão de contatos",
            'featuresDashboard' => "Painel completo",
            'featuresJournal' => "Diário",
        ],

        'calloutsLabel' => "Nesta tela",

        'contacts' => [
            'title' => "Como as pessoas acompanham o que é importante.",
            'lede' => "Anote o que você sabe sobre as pessoas com quem se importa. E nunca mais esqueça nada sobre elas.",
            'imageAlt' => "Uma ficha de contato na Monica: relações, formas de contato, notas, ligações, lembretes e presentes.",
            'callouts' => [
                "Veja rapidamente as informações importantes do seu contato",
                "Indique os nomes de companheiros, filhos e até dos animais de estimação.",
                "Adicione todas as formas de falar com essa pessoa: telefone, e-mail, apelido no Whatsapp e muito mais.",
                "Adicione notas sobre essa pessoa, privadas e só suas.",
                "Registre cada vez que você liga para pessoas de quem tem pouca notícia, para ser lembrado de ligar de novo no futuro.",
                "Adicione lembretes sobre datas ou eventos importantes. Alguns lembretes são preenchidos automaticamente para você (aniversários, por exemplo).",
                "Gerencie presentes dados ou que você quer dar. Indique se você deve dinheiro ou se têm dinheiro a receber.",
            ],
        ],

        'dashboard' => [
            'title' => "Veja rapidamente o que é importante e o que vem a seguir",
            'lede' => "Para que você possa se concentrar no que realmente importa.",
            'imageAlt' => "O painel da Monica: contatos consultados recentemente, próximos lembretes, notas favoritas e ligações registradas.",
            'callouts' => [
                "Veja quem você consultou por último",
                "Lista dos próximos eventos ou lembretes sobre os seus contatos",
                "Consulte as suas notas favoritas sobre os seus contatos",
                "Acompanhe as ligações que você fez para as pessoas com quem se importa",
            ],
        ],

        'journal' => [
            'title' => "Documente a sua vida. E veja como você evolui.",
            'lede' => "Escreva entradas de diário. Indique rapidamente como foi o seu dia. Registros de atividade automáticos.",
            'imageAlt' => "O diário da Monica: como foi o dia, as atividades registradas com os contatos e as entradas escritas.",
            'callouts' => [
                "Indique como foi o seu dia.",
                "O diário lista automaticamente todas as atividades com os seus contatos.",
                "O diário também permite escrever entradas. Pense nele como o seu diário privado on-line.",
                "Em uma versão futura, vamos mostrar estatísticas bonitas sobre os seus dias e atividades.",
            ],
        ],

        'pillars' => [
            [
                'title' => "Tudo em um só lugar",
                'body' => "Gerencie, organize e acompanhe todas as interações com os seus contatos em um lugar central.",
            ],
            [
                'title' => "Na web",
                'body' => "Acesse a Monica com facilidade, hospedada nos seus servidores ou nos nossos.",
            ],
            [
                'title' => "Interface moderna",
                'body' => "A Monica é bonita e bem simples de usar.",
            ],
        ],

        'api' => [
            'title' => "Amada por quem usa. Adorada por quem programa.",
            'body' => "Quem usa gosta de como o produto é rápido e simples. Quem programa adora a API, que permite automatizar a Monica como bem entender.",
            'body2' => "Importe ou exporte com facilidade os seus contatos e os dados deles com a poderosa API REST da Monica, ou use a API para automatizar várias áreas do aplicativo.",
            'imageAlt' => "As rotas da API da Monica, abertas em um editor de código.",
        ],
    ],

    'notFound' => [
        'title' => "Página não encontrada.",
        'body' => "Este endereço não leva a lugar nenhum. Ele pode ter mudado, ou pode nunca ter existido.",
    ],
];
