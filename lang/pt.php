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
            'personalCrm' => "Guia do CRM pessoal",
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

        'personalCrm' => [
            'title' => "O que é um CRM pessoal? Um guia prático — Monica",
            'description' => "O que é um CRM pessoal, como ele se diferencia de uma lista de contatos e de um CRM de vendas, o que guardar, as escolhas de privacidade envolvidas e como escolher a abordagem certa.",
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
        'personalCrm' => "O que é um CRM pessoal",
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

        'progress' => [
            'body' => "Não há nada para assinar. A Monica v3 está sendo construída em público: volte daqui a algumas semanas para ver o que mudou.",
            'note' => "Sem lista de lançamento, sem newsletter, sem pixel de rastreamento.",
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
            'body' => "A Monica v3 ainda está em desenvolvimento, e muitas decisões importantes estão sendo tomadas em público. Siga o repositório para ver o trabalho acontecendo.",
            'note' => "Código aberto · Hospedagem própria · Construída em público",
            'cta' => "Seguir a Monica no GitHub",
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

    'personalCrm' => [
        'eyebrow' => "Um guia prático",
        'title' => "O que é um CRM pessoal?",
        'lede' => "Um CRM pessoal é um lugar privado para lembrar o contexto das pessoas da sua vida: o que elas contaram, o que é importante para elas e o que você pretendia retomar.",
        'intro' => "Diferente de um CRM de vendas, ele é feito para relações, não para funis. A ideia não é gerenciar pessoas. É dar uma ajuda à sua memória, para você chegar com um pouco mais de contexto.",

        'toc' => [
            'label' => "Neste guia",
            'items' => [
                ['id' => 'definition', 'title' => "A definição curta"],
                ['id' => 'comparison', 'title' => "Como ele difere de outras ferramentas"],
                ['id' => 'contents', 'title' => "O que cabe dentro dele"],
                ['id' => 'fit', 'title' => "Para quem ele serve"],
                ['id' => 'approaches', 'title' => "As principais abordagens"],
                ['id' => 'history', 'title' => "De onde isso veio"],
                ['id' => 'privacy', 'title' => "Privacidade e ética"],
                ['id' => 'hosting', 'title' => "Na nuvem ou com hospedagem própria"],
                ['id' => 'choosing', 'title' => "Como escolher"],
                ['id' => 'monica', 'title' => "A abordagem da Monica"],
            ],
        ],

        'definition' => [
            'label' => "A definição curta",
            'title' => "Um CRM pessoal lembra mais do que dados de contato.",
            'body' => "Sua lista de contatos sabe o telefone da Sam. Um CRM pessoal pode lembrar você de que a Sam está treinando para uma meia maratona, que a filha dela se chama Maya e que você prometeu mandar o nome daquele livro.",
            'body2' => "Ele liga fatos à história de uma relação. Dependendo da ferramenta, isso pode incluir anotações, conversas, atividades, datas importantes, lembretes, os vínculos entre as pessoas e as informações próprias que você considera importantes.",
            'aside' => "Um bom CRM pessoal ajuda você a lembrar. Ele não decide quanto uma pessoa vale.",
        ],

        'comparison' => [
            'label' => "Três trabalhos diferentes",
            'title' => "Uma lista de contatos, um CRM pessoal e um CRM tradicional não são a mesma coisa.",
            'body' => "Os três guardam informações sobre pessoas, mas foram construídos em torno de perguntas diferentes. Chamar todos de gestão de contatos esconde o que importa: para que serve a informação.",
            'cards' => [
                [
                    'title' => "Lista de contatos",
                    'question' => "Como falo com esta pessoa?",
                    'body' => "Nomes, telefones, e-mails, endereços e talvez um aniversário. Simples, familiar e suficiente para muita gente.",
                ],
                [
                    'title' => "CRM pessoal",
                    'question' => "Que contexto eu quero lembrar?",
                    'body' => "A pessoa, a sua relação com ela, o que aconteceu e o que você quer lembrar ou fazer mais adiante.",
                ],
                [
                    'title' => "CRM tradicional",
                    'question' => "Como esta relação com o cliente está avançando?",
                    'body' => "Leads, contas, negociações, pedidos de suporte, receita, atividade do time e as etapas de um processo comercial.",
                ],
            ],
            'tableTitle' => "CRM pessoal e CRM tradicional",
            'tableHeadings' => ["", "CRM pessoal", "CRM tradicional"],
            'rows' => [
                ["Objetivo principal", "Lembrar o contexto pessoal e cumprir o que foi combinado", "Coordenar vendas, marketing ou atendimento"],
                ["Pessoas representadas", "Amigos, família, vizinhos, colegas e outras pessoas da sua vida", "Leads, clientes, contas e contatos comerciais"],
                ["Informações comuns", "Vínculos, memórias, conversas, datas, anotações e lembretes", "Negociações, receita, campanhas, histórico de suporte e etapas do funil"],
                ["Sucesso é quando", "Você tem o contexto de que precisa na hora que importa", "Um processo comercial avança e pode ser medido"],
                ["Costuma ser usado por", "Uma pessoa, às vezes uma casa", "Uma empresa ou um time"],
            ],
            'closing' => "CRMs tradicionais são boas ferramentas para o trabalho que foram feitos para fazer. O problema começa quando a linguagem e os incentivos das vendas entram na vida privada. Seus amigos não são leads, e um mês mais quieto não é um funil travado.",
        ],

        'contents' => [
            'label' => "O que entra ali",
            'title' => "Guarde contexto suficiente para ser útil. Nada além disso.",
            'body' => "Um CRM pessoal pode se tornar um registro detalhado da vida de outra pessoa. Isso é motivo para ser seletivo, não motivo para preencher todos os campos disponíveis. Guarde uma informação porque ela ajuda você a lembrar ou a cumprir algo, não porque o programa ofereceu um campo vazio.",
            'groups' => [
                ['title' => "Identidade e dados de contato", 'body' => "Nomes, pronomes, telefones, e-mails, lugares e os nomes que a pessoa usa de verdade."],
                ['title' => "Vínculos", 'body' => "Como você conhece alguém, as pessoas ligadas a ela e as relações de família ou de casa que dão sentido ao resto."],
                ['title' => "Datas importantes", 'body' => "Aniversários, datas de casamento, mudanças, formaturas ou qualquer data que importe para essa pessoa ou para a história de vocês."],
                ['title' => "Conversas e anotações", 'body' => "Sobre o que vocês falaram, uma recomendação que ela deu, uma preocupação que ela dividiu ou um detalhe que você não quer perguntar pela terceira vez."],
                ['title' => "Atividades e memórias", 'body' => "Refeições, ligações, viagens, visitas, projetos e outros momentos que você talvez queira situar no tempo depois."],
                ['title' => "Compromissos e lembretes", 'body' => "Uma promessa que você fez, algo que emprestou, uma ideia de presente ou um lembrete para perguntar como foi."],
            ],
            'note' => "Informação sensível merece um critério mais alto. Se anotar algo pareceria uma traição no momento de ler para a pessoa descrita, esse desconforto é uma informação útil.",
        ],

        'example' => [
            'label' => "Um exemplo pequeno",
            'title' => "Como é de verdade usar um CRM pessoal",
            'body' => "A parte útil costuma ser bem comum. É menos sobre montar um banco de dados perfeito e mais sobre fechar os pequenos ciclos que a sua memória deixaria abertos.",
            'steps' => [
                ["number" => "01", 'title' => "Uma amiga comenta uma entrevista", 'body' => "Você faz uma anotação curta depois da conversa. Não uma transcrição, só o contexto que quer lembrar."],
                ["number" => "02", 'title' => "Você cria um lembrete", 'body' => "O lembrete fica ligado à pessoa e aparece depois da entrevista, quando perguntar realmente ajuda."],
                ["number" => "03", 'title' => "Você retoma o contato com contexto", 'body' => "Você pergunta como foi porque se importa. O programa lembrou o momento; a relação continua sendo sua."],
            ],
        ],

        'fit' => [
            'label' => "Se faz sentido",
            'title' => "Algumas pessoas precisam de um. Muitas outras não.",
            'body' => "Um CRM pessoal só merece o seu lugar se resolver um problema real de memória ou de acompanhamento. Ele deve reduzir a carga mental, não criar um novo hobby administrativo.",
            'goodTitle' => "Pode ajudar se você…",
            'good' => [
                "se importa com mais pessoas do que consegue manter na cabeça com segurança;",
                "tem amigos ou família espalhados por cidades, países ou fases da vida;",
                "esquece com frequência nomes, datas, promessas ou os detalhes que as pessoas contam;",
                "orienta alguém, é voluntário, organiza uma comunidade ou cuida de uma família grande;",
                "quer um único lugar privado para o contexto das relações que hoje está espalhado entre anotações e agendas.",
            ],
            'notTitle' => "Você provavelmente não precisa de um se…",
            'not' => [
                "sua lista de contatos e sua agenda já cobrem o que você esquece;",
                "manter os registros pesa mais do que o problema que eles resolvem;",
                "você quer apenas um lugar para telefones e aniversários;",
                "você quer funis de time, contato em massa, previsão de vendas ou análise de clientes. Um CRM tradicional serve melhor para isso.",
            ],
        ],

        'approaches' => [
            'label' => "Um recorte útil",
            'title' => "CRMs pessoais fazem escolhas diferentes.",
            'body' => "CRM pessoal é uma categoria solta, não uma norma. As abordagens abaixo são uma forma de comparar produtos, não rótulos oficiais do setor. Muitas ferramentas combinam várias delas.",
            'items' => [
                ['title' => "Rede de contatos primeiro", 'body' => "Construído em torno de contatos profissionais, apresentações e manter o vínculo. Útil quando o trabalho depende de muitas relações de longo prazo, mas pode trazer a linguagem das vendas para a vida pessoal."],
                ['title' => "Automação primeiro", 'body' => "Puxa contexto de e-mails, agendas, redes sociais ou outros serviços. Reduz a digitação, em troca de um acesso mais amplo e, às vezes, de uma coleta maior do que você pretendia."],
                ['title' => "Produtividade primeiro", 'body' => "Trata o acompanhamento como tarefas e lembretes recorrentes. É claro e prático, mas uma relação pode começar a parecer uma caixa de entrada se cada troca virar obrigação."],
                ['title' => "Memória primeiro", 'body' => "Coloca no centro as anotações, as atividades, as datas e a história em comum. Pede um registro mais consciente, mas você decide o que entra."],
                ['title' => "Banco de dados pessoal", 'body' => "Deixa você desenhar seus próprios registros, campos e conexões. Flexível o suficiente para vidas fora do padrão, com mais configuração e manutenção em troca."],
            ],
        ],

        'history' => [
            'label' => "Uma história curta",
            'title' => "O CRM pessoal pegou emprestada a memória do software corporativo e depois mudou o propósito dela.",
            'body' => "Não existe um inventor reconhecido do CRM pessoal. A categoria cresceu pouco a pouco a partir das listas de contatos, dos gerenciadores de contatos, do software de CRM corporativo e das ferramentas de informação pessoal.",
            'items' => [
                ['date' => "Antes do software", 'title' => "O contexto das relações ficava no papel", 'body' => "Cadernos de endereços, pastas de correspondência, agendas e fichas anotadas separavam os dados de contato de tudo o mais, que a memória guarda mal."],
                ['date' => "1987", 'title' => "A gestão de contatos chega ao computador pessoal", 'body' => "A Act! marca o seu primeiro produto de gestão de contatos em 1987. As primeiras ferramentas eram descritas muitas vezes como um Rolodex digital, antes de CRM virar o termo comum."],
                ['date' => "Meados dos anos 1990", 'title' => "CRM se torna uma categoria corporativa", 'body' => "Estudos acadêmicos situam o surgimento da expressão customer relationship management em meados dos anos 1990, quando os registros de contato passaram a fazer parte de sistemas maiores de vendas e atendimento."],
                ['date' => "A partir de 1999", 'title' => "O CRM vai para a nuvem", 'body' => "A Salesforce nasceu em 1999 com CRM pelo navegador. O software na nuvem tornou normais os registros compartilhados, as atualizações automáticas e as integrações."],
                ['date' => "Anos 2010", 'title' => "CRM pessoal se torna um rótulo reconhecível", 'body' => "Produtos novos aplicaram parte dessas ideias às relações profissionais e privadas de uma pessoa. Em 2019, a categoria já estava estabelecida o bastante para gerar tanto entusiasmo quanto desconforto com a ideia de otimizar a amizade."],
            ],
            'sourcesLabel' => "Fontes desta linha do tempo",
            'sources' => [
                ['label' => "História da empresa Act!", 'url' => 'https://www.act.com/about-us/'],
                ['label' => "História acadêmica do CRM", 'url' => 'https://www.sciencedirect.com/science/article/pii/S0963868707000182'],
                ['label' => "História da empresa Salesforce", 'url' => 'https://www.salesforce.com/company/our-story'],
                ['label' => "Axios sobre CRM pessoal em 2019", 'url' => 'https://www.axios.com/2019/08/27/startups-new-frontier-optimizing-your-friendships'],
            ],
        ],

        'privacy' => [
            'label' => "Privacidade e ética",
            'title' => "A conta é sua. Boa parte do que está dentro dela é sobre outras pessoas.",
            'body' => "Isso deixa um CRM pessoal especialmente sensível. Ele pode conter endereços, laços de família, conversas privadas, detalhes de saúde ou memórias contadas em confiança. Uma senha é necessária, mas o bom senso começa antes de qualquer coisa ser salva.",
            'principles' => [
                ['title' => "Colete menos", 'body' => "Guarde o que tem um propósito claro. Mais completo não é automaticamente mais útil."],
                ['title' => "Respeite o contexto original", 'body' => "O que foi dito em uma conversa privada não fica liberado para enriquecimento, análise ou circulação mais ampla só porque dá para copiar."],
                ['title' => "Saiba para onde a automação manda os dados", 'body' => "Sincronização de e-mail, transcrição, enriquecimento e recursos de IA podem envolver outros serviços. Verifique o que sai da aplicação, por quê, por quanto tempo e se é usado para treinar modelos."],
                ['title' => "Planeje a perda e a saída", 'body' => "Use bons controles de acesso e cópias de segurança. Garanta que você consegue exportar seus dados em um formato aproveitável e apagá-los quando sair."],
                ['title' => "Escreva pensando em quem pode ler", 'body' => "Um bom teste é se você conseguiria explicar uma anotação para a pessoa que ela descreve, sem se esconder atrás do programa."],
            ],
            'closing' => "Um CRM pessoal não é cuidadoso nem invasivo por natureza. A diferença costuma estar no que você guarda, em como aquilo chegou lá, em quem pode acessar e no que você faz com isso.",
        ],

        'hosting' => [
            'label' => "Onde ele roda",
            'title' => "A nuvem e a hospedagem própria mudam o lugar da responsabilidade.",
            'body' => "Um serviço hospedado pede que um fornecedor opere a aplicação. A hospedagem própria dá a você o controle do servidor e tira esse fornecedor do dia a dia. Nenhuma das duas opções é mais segura por si só. A segurança depende das atualizações, dos acessos, das cópias de segurança, do monitoramento e das pessoas responsáveis por isso.",
            'tableHeadings' => ["", "Serviço hospedado", "Hospedagem própria"],
            'rows' => [
                ["Manutenção", "O fornecedor opera e atualiza o serviço", "Você instala, atualiza e monitora"],
                ["Controle", "Você trabalha dentro do produto e das regras do fornecedor", "Você controla o servidor, a configuração e a implantação"],
                ["Cópias de segurança", "Em geral cuidadas pelo fornecedor; confira o que está incluído", "Você configura, protege e testa"],
                ["Disponibilidade", "Em geral acessível sem gerenciar infraestrutura", "Depende da infraestrutura que você opera"],
                ["Local dos dados", "Depende do fornecedor e dos subcontratados dele", "Depende do servidor e dos serviços que você escolher"],
                ["Combina se", "Você quer a ferramenta sem operar um serviço", "Você tem o conhecimento e a vontade de operar por conta própria"],
            ],
            'note' => "A hospedagem própria dá mais controle. Ela também dá mais formas de cometer um erro sério. Escolha isso porque você quer a responsabilidade, não porque o rótulo parece seguro.",
        ],

        'choosing' => [
            'label' => "Antes de escolher uma ferramenta",
            'title' => "Comece pelo hábito que você quer ter e depois examine o programa.",
            'body' => "A lista de recursos mais longa raramente diz qual CRM pessoal sobrevive ao contato com a sua vida real. Uma ferramenta modesta que você continua usando vale mais do que um sistema perfeito que você evita abrir.",
            'questions' => [
                ['title' => "Com o que você quer ajuda para lembrar?", 'body' => "Nomes e datas pedem uma ferramenta diferente de um histórico detalhado, de lembretes de acompanhamento ou de um banco de dados pessoal flexível."],
                ['title' => "Quanto trabalho dá para registrar?", 'body' => "Decida se prefere anotações feitas de propósito, importações automáticas amplas ou algo entre as duas coisas."],
                ['title' => "Que acessos ele pede?", 'body' => "Veja se ele lê e-mails, agendas, contatos, redes sociais ou mensagens, e se cada permissão é realmente necessária."],
                ['title' => "Como ele usa IA?", 'body' => "Descubra que dados vão para qual fornecedor de modelo, o que fica guardado, se o treinamento é permitido e se o recurso pode ser desligado."],
                ['title' => "Você consegue sair?", 'body' => "Procure exportação completa, formatos compreensíveis, exclusão da conta e um plano crível para a manutenção do produto no longo prazo."],
                ['title' => "Quem opera?", 'body' => "Compare a comodidade de um serviço hospedado com o controle e o trabalho da hospedagem própria. Inclua cópias de segurança e atualizações na decisão."],
                ['title' => "Ele acompanha as suas relações?", 'body' => "Campos rígidos podem ser mais simples. Registros sob medida podem servir melhor. Escolha a flexibilidade que você vai usar de verdade."],
            ],
        ],

        'monica' => [
            'label' => "O ponto de vista da Monica",
            'title' => "Memória antes de automação. Relações antes de rede de contatos.",
            'body' => "A Monica é uma resposta à pergunta do CRM pessoal, não a definição da categoria. Ela começou com uma ideia simples: lembrar os detalhes que ajudam a cuidar de amigos e da família, sem transformar essas pessoas em oportunidades de venda nem entregar a vida delas a um sistema de publicidade.",
            'principles' => [
                ['title' => "O contexto importa mais do que os dados de contato", 'body' => "A Monica liga as pessoas a anotações, atividades, lembretes, datas importantes e aos vínculos ao redor delas."],
                ['title' => "Você escolhe o que entra no registro", 'body' => "A Monica prefere a memória consciente ao enriquecimento invisível. O objetivo não é engolir todo sinal disponível."],
                ['title' => "A propriedade faz parte do produto", 'body' => "A Monica é de código aberto, pode ser hospedada por você e oferece uma versão hospedada para quem não quer manter um servidor."],
                ['title' => "Vidas diferentes precisam de estruturas diferentes", 'body' => "A Monica v3 está sendo construída em torno de registros e conexões mais personalizáveis, mantendo os princípios de privacidade e de propriedade do projeto."],
            ],
            'currentCta' => "Ver o que a Monica pode lembrar",
            'v3Cta' => "Ler sobre a Monica v3",
            'privacyCta' => "Ler a política de privacidade da Monica",
            'finalTitle' => "Um CRM pessoal deve ajudar você a prestar atenção e depois sair da frente.",
            'finalBody' => "Se a abordagem da Monica combina com a forma como você quer lembrar das pessoas, você pode usar o serviço hospedado ou rodar a aplicação de código aberto por conta própria.",
            'primaryCta' => "Começar a usar a Monica",
            'secondaryCta' => "Ver a Monica no GitHub",
        ],

        'faq' => [
            'label' => "Perguntas comuns",
            'title' => "Algumas respostas honestas antes de montar um segundo cérebro para a sua vida social.",
            'items' => [
                ['q' => "Usar um CRM pessoal é invasivo?", 'a' => [
                    "Pode ser. Guardar em silêncio informações sensíveis, importar conversas privadas sem cuidado ou dar nota para as pessoas passa de limites razoáveis para muita gente.",
                    "Um conjunto pequeno e privado de anotações e lembretes também pode ser uma ajuda comum à memória. O que você guarda, como aquilo chegou lá e o que você faz com isso importa mais do que o rótulo.",
                ]],
                ['q' => "Posso usar o meu aplicativo de contatos, a agenda ou as anotações no lugar?", 'a' => "Pode. Se essas ferramentas resolvem o problema, continue com elas. Um CRM pessoal fica útil quando você quer a pessoa, o contexto, o histórico e o acompanhamento ligados em um só lugar."],
                ['q' => "CRM pessoal serve só para rede de contatos profissional?", 'a' => "Não. Alguns produtos são feitos principalmente para relações profissionais. Outros olham para amigos, família, comunidade ou uma mistura. A escolha certa depende das relações e dos hábitos que você tem de verdade."],
                ['q' => "Hospedar por conta própria é mais privado?", 'a' => "Pode reduzir o número de fornecedores envolvidos e dar mais controle a você. Não configura por você as atualizações, as cópias de segurança, a criptografia nem os acessos. Privacidade e segurança continuam dependendo de como o sistema é operado."],
                ['q' => "Quanta informação eu deveria registrar?", 'a' => "Comece pelo mínimo que resolve o seu problema. Datas, algumas anotações e um lembrete de vez em quando bastam para muita gente. Acrescente estrutura só quando ela valer o custo de manutenção."],
            ],
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
        'personalCrm' => "O que é um CRM pessoal?",
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
        'rssFeed' => "Feed RSS",
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
