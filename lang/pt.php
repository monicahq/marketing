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
            'templates' => "Modelos de contato",
            'details' => "Fichas de contato",
            'page' => "Página :number",
        ],

        'software' => [
            'monthly' => "Monica hospedada, cobrança mensal",
            'yearly' => "Monica hospedada, cobrança anual",
            'selfHosted' => "Monica auto-hospedada",
            'lifetime' => "Monica hospedada, vitalícia",
        ],

        'home' => [
            'title' => "Monica — o CRM pessoal de código aberto",
            'description' => "A Monica ajuda você a lembrar das pessoas com quem se importa: o que está acontecendo na vida delas, as datas importantes, as conversas anteriores e quando voltar a falar. Privado, de código aberto, com hospedagem própria.",
        ],

        'pricing' => [
            'title' => "Preços da Monica: hospedagem própria de graça, ou deixe a Monica hospedar",
            'description' => "Hospede a Monica de graça, ou deixe a Monica hospedar por 9 USD por mês, 90 USD por ano ou 150 USD uma única vez. Todos os planos têm todos os recursos, contatos ilimitados e nenhuma cobrança por contato.",
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

        'templates' => [
            'title' => "Seus contatos, do seu jeito: modelos de contato na Monica",
            'description' => "Crie modelos de contato com campos, seções e abas próprios. Modelos diferentes para amigos, família e trabalho, versões publicadas quando você quiser e seções que podem ser compartilhadas.",
        ],

        'details' => [
            'title' => "Lembre-se dos detalhes que importam: as fichas de contato na Monica",
            'description' => "Guarde juntos os detalhes que as pessoas contam para você: o que disseram da última vez, as pequenas coisas, as pessoas ao redor delas e os momentos compartilhados.",
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
        'getStarted' => "Criar conta",
        'stars' => ":count estrelas",

        // The features menu: three columns of what Monica does, and a card
        // pointing at templates, the thing a new reader most often misses.
        'menu' => [
            'groups' => [
                [
                    'title' => "Lembrar",
                    'items' => [
                        ['icon' => 'note', 'title' => "Os detalhes", 'body' => "Tudo sobre alguém, em um só lugar."],
                        ['icon' => 'reminder', 'title' => "Lembretes", 'body' => "Aniversários, retornos, repetições."],
                        ['icon' => 'timeline', 'title' => "Linha do tempo", 'body' => "Registre uma vez. Vale para todos que estavam lá."],
                    ],
                ],
                [
                    'title' => "Organizar",
                    'items' => [
                        ['icon' => 'relationship', 'title' => "Relações", 'body' => "Árvores genealógicas, e quem conhece quem."],
                        ['icon' => 'vault', 'title' => "Cofres", 'body' => "Pessoal e trabalho, cada um no seu lugar."],
                        ['icon' => 'link', 'title' => "Compartilhamento", 'body' => "Compartilhe algumas seções. Revogue quando quiser."],
                    ],
                ],
                [
                    'title' => "Conectar e proteger",
                    'items' => [
                        ['icon' => 'calendar', 'title' => "Sincronização e agendas", 'body' => "Catálogos de endereços, agendas, vCards."],
                        ['icon' => 'key', 'title' => "Assistentes e API", 'body' => "O seu agente pode consultar pessoas."],
                        ['icon' => 'lock', 'title' => "Privacidade", 'body' => "Chaves de acesso, 2FA, campos privados."],
                    ],
                ],
            ],
            'start' => [
                'label' => "Comece aqui",
                'title' => "Seus contatos, do seu jeito",
                'body' => "Crie os seus próprios modelos. Abas, seções, campos, opções.",
                'rows' => [
                    ['label' => "Amigo", 'detail' => "Presentes, animais"],
                    ['label' => "Família", 'detail' => "Árvore genealógica"],
                    ['label' => "Trabalho", 'detail' => "Empresa, cargo"],
                ],
                'cta' => "Ver como funcionam os modelos",
            ],
        ],
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
                    'icon' => 'arrow-right',
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

    /** A página /precos. Os preços vêm do design; mude-os aqui, uma vez por locale. */
    // ---------------------------------------------------------------- home
    //
    // The homepage, section by section, in page order. Every person in it is
    // from Friends, and only from Friends: the product picture is open on
    // Phoebe, the reminders and the agent are about Rachel, Chandler and Joey.
    // They keep their names in every language; what is said about them is
    // translated.
    //
    // A sentence with one word in bold is written as three pieces, before, bold
    // and after, so a translation can move the bold word to wherever its
    // grammar puts it without anyone writing markup in a copy file.
    'home' => [
        'hero' => [
            'pill' => "Rachel, Ross, Chandler, Joey e o pato",
            'title' => "Lembre-se das pessoas com quem você se importa.",
            'subtitle' => "Somos um CRM pessoal de código aberto.",
            'lede' => "Privada por concepção. De código aberto. Com hospedagem própria. Sem anúncios, sem revenda de dados, sem notificações constrangedoras de “engajamento”.",
            'start' => "Começar a usar a Monica",
            'github' => "Ver no GitHub",
            'sales' => "Falar com vendas",
            'salesJoke' => "Brincadeira.",
            'salesTruth' => "Não temos equipe de vendas.",
        ],

        'product' => [
            // Read out in place of the picture, which is drawn in markup but is
            // a picture of the product rather than a working copy of it.
            'label' => "A Monica aberta na página de Phoebe Buffay: duas datas importantes, as relações dela, a última nota sobre ela e três ideias de presente.",
            'vault' => "Família",
            'nav' => ["Painel", "Pessoas", "Lembretes", "Diário", "Ideias de presente", "Configurações"],
            'vaultsLabel' => "Cofres",
            'vaults' => ["Família", "Amigos", "Central Perk"],
            'search' => "Buscar pessoas",
            'add' => "Adicionar pessoa",
            'meta' => "Irmã gêmea de Ursula · Nova York · conhecida há 10 anos",
            'tabs' => ["Visão geral", "Linha do tempo", "Notas", "Ideias de presente"],
            'datesTitle' => "Datas importantes",
            'dates' => [
                ['title' => "Aniversário", 'date' => "16 de fevereiro de 1966", 'when' => "daqui a quatro meses"],
                ['title' => "Aniversário de casamento", 'date' => "12 de fevereiro de 2004", 'when' => "daqui a quatro meses"],
            ],
            'relationshipsTitle' => "Relações",
            'relationships' => [
                ["Phoebe é a irmã gêmea de ", "Ursula", "."],
                ["Phoebe é a esposa de ", "Mike", "."],
            ],
            'noteTitle' => "Última nota",
            'note' => "Compôs uma música nova sobre um gato. Muito orgulhosa dela. Não mencione o cheiro.",
            'noteWhen' => "Há seis dias",
            'giftsTitle' => "Ideias de presente",
            'gifts' => ["Cordas de violão", "Óleo de massagem", "Areia de gato sem perfume"],
        ],

        'awards' => [
            'label' => "Desconhecidos na internet aprovam",
            'github' => "GitHub Trending: repositório nº 1 do dia",
            'hn' => "Hacker News: nº 65 entre os links mais votados de todos os tempos",
            'ph' => "Product Hunt: produto nº 4 do dia",
        ],

        'agents' => [
            'eyebrow' => "Servidor MCP e REST API",
            'title' => "Use a Monica como backend para os seus agentes.",
            'body' => "A Monica não tem nenhuma IA embutida, e nunca terá, mas deixamos o seu próprio agente acessar os seus dados — se você quiser.",
            'mcp' => "Ver a doc do MCP",
            'api' => "Ver a API",
            'prompt' => "O que eu dou para a Rachel de aniversário?",
            'answer' => "O aniversário da Rachel é daqui a 23 dias.",
            'saved' => "Você salvou duas ideias em julho:",
            'ideas' => ["O cachecol que ela apontou na Bloomingdale’s", "Qualquer coisa, menos uma lista de prós e contras"],
            'ask' => "Registre que tomei um café com o Joey no Central Perk hoje.",
            'used' => "Usou a Monica",
            'reply' => "Pronto. Adicionei “Café” à linha do tempo do Joey em 11 de outubro.",
        ],

        'features' => [
            'title' => "Alguns dos recursos que oferecemos",
            'lede' => "Tudo o que é preciso para registrar o que acontece na sua vida",
            'reminders' => [
                'title' => "Parabéns no dia, não no dia seguinte.",
                'body' => "Lembretes de datas, ligações e promessas. Por e-mail, na hora certa.",
                'rows' => [
                    ['name' => "Rachel Green", 'what' => "aniversário", 'when' => "daqui a 23 dias"],
                    ['name' => "Chandler Bing", 'what' => "retornar sobre o Dia de Ação de Graças", 'when' => "amanhã"],
                    ['name' => "Joey Tribbiani", 'what' => "devolver o dinheiro do aluguel", 'when' => "seis anos de atraso"],
                ],
            ],
            'relationships' => [
                'title' => "Quem é quem, e de quem.",
                'body' => "Árvores genealógicas, ex, padrinhos. Escritos como frases.",
                'sentences' => [
                    ["Monica é a irmã de ", "Ross", "."],
                    ["Ross é a lagosta de ", "Rachel", "."],
                    ["Joey é o colega de apartamento de ", "todo mundo", "."],
                ],
            ],
            'gifts' => [
                'title' => "Ideias de presente, salvas em julho.",
                'body' => "Para dezembro não virar pânico.",
                'ideas' => ["Uma mesa de pebolim", "Aquele livro sobre dinossauros"],
                'crossed' => "Uma lista de prós e contras",
            ],
            'notes' => [
                'title' => "Notas que você encontra de novo.",
                'body' => "Busque em todas as notas, de todas as pessoas.",
                'query' => "alérgico",
                'who' => "Ross:",
                'match' => "alérgico a kiwi. A Monica sempre esquece.",
            ],
            'details' => [
                'title' => "Lembra do pintinho e do pato.",
                'body' => "Animais, filhos, trabalho, preferências alimentares. Os detalhes que importam.",
                'fields' => [
                    ['label' => "Animais", 'value' => "Um pintinho e um pato"],
                    ['label' => "Café", 'value' => "Central Perk, todo dia"],
                ],
            ],
            'vaults' => [
                'title' => "Um cofre para cada círculo.",
                'body' => "Família, amigos, trabalho. Separados, e compartilhados com quem você convidar.",
                'vaults' => [
                    ['name' => "Família", 'count' => "24 pessoas"],
                    ['name' => "Amigos", 'count' => "61 pessoas"],
                    ['name' => "Central Perk", 'count' => "6 pessoas"],
                ],
            ],
        ],

        'privacy' => [
            'eyebrow' => "Privacidade",
            'title' => "Ao contrário de todos os outros nessa área, nós nos importamos com a sua privacidade.",
            'aside' => "Muito.",
            'source' => [
                'title' => "Código aberto",
                'body' => "Audite nosso código para ter certeza de que não fazemos besteira.",
                'comment' => "// O que compartilhamos com terceiros",
            ],
            'trackers' => [
                'title' => "Sem anúncios, sem rastreadores, sem palhaçada",
                'body' => "Nada para vender. Ninguém para quem vender.",
                'label' => "Requisições a terceiros",
                'rows' => ["Publicidade", "Análises", "Corretores de dados", "Fingerprinting"],
            ],
            'selfHost' => [
                'title' => "Recomendamos que você hospede por conta própria",
                'body' => "Um comando Docker. Seu servidor, suas regras, sua privacidade.",
                'pulling' => "Baixando a imagem… pronto",
                'running' => "Rodando no seu servidor",
            ],
        ],

        // The prices themselves are not here: the Cloud card reads them from
        // `pricing.prices`, so the homepage and the pricing page cannot quote
        // two different numbers.
        'pricing' => [
            'badge' => "Sem anúncios",
            'badgeText' => "Os seus dados são portáveis em todos os planos.",
            'title' => "Pague como preferir. Ou não pague.",
            'lede' => "Hospede você mesmo de graça, ou deixe a Monica cuidar disso para você.",
            'selfHost' => [
                'title' => "Hospedagem própria",
                'price' => "Grátis",
                'per' => "para sempre",
                'items' => ["Todos os recursos, sem limites", "Deploy com Docker em um comando", "Controle total dos seus dados", "O suporte técnico é você"],
                'cta' => "Ler a documentação",
            ],
            'cloud' => [
                'title' => "Nuvem",
                'billingLabel' => "Período de cobrança",
                'monthly' => "Mensal",
                'yearly' => "Anual",
                'perMonth' => "por mês",
                'perYear' => "por ano",
                'yearlyNote' => "Dois meses grátis",
                'lifetime' => "Vitalício",
                'once' => "pagamento único",
                'lifetimeNote' => "Sem pagamentos recorrentes",
                'items' => ["Hospedagem gerenciada", "Atualizações e backups automáticos", "Pessoas e cofres ilimitados", "Cancele quando quiser"],
                'cta' => "Começar a usar a Monica",
            ],
        ],

        'faq' => [
            'title' => "Perguntas e respostas.",
            'items' => [
                ['q' => "É um CRM de vendas?", 'a' => "Não. Ninguém aqui tem funil de vendas. A Monica é para a família, os amigos e as pessoas com quem você quer manter contato."],
                ['q' => "A hospedagem própria é mesmo gratuita?", 'a' => "Sim. Todos os recursos, sem limites, sob a licença AGPL-3.0. O servidor fica por sua conta."],
                ['q' => "Quem pode ver os meus dados?", 'a' => "Você, e quem você convidar para um cofre. Sem anúncios, sem rastreadores, sem revenda de dados. Na hospedagem própria, eles nunca saem do seu servidor."],
                ['q' => "Posso migrar entre a nuvem e a hospedagem própria?", 'a' => "Sim, nos dois sentidos. Exporte tudo e importe do outro lado."],
                ['q' => "Funciona com o meu agente de IA?", 'a' => "Se ele fala MCP, sim. Também há uma REST API completa para todo o resto."],
            ],
        ],
    ],

    'pricing' => [
        // The four prices, as a reader sees them. Everything below quotes them
        // through :free, :monthly, :yearly and :lifetime, and the homepage
        // reads them from here, so a price change is one edit per language
        // (plus `plans` in config.php, for the structured data).
        'prices' => [
            'free' => "US\$ 0",
            'monthly' => "US\$ 9",
            'yearly' => "US\$ 90",
            'lifetime' => "US\$ 150",
        ],

        'hero' => [
            'badge' => "Sem cobrança por contato",
            'badgeText' => "Pague por mês, por ano, uma vez ou nunca.",
            'title' => "Preços que você não precisa de lembrete para lembrar.",
            'lede' => "Hospede você mesmo, de graça. Deixe a Monica hospedar por :monthly por mês ou :yearly por ano. Ou pague :lifetime uma vez e nunca mais pense nisso. O preço é o mesmo, conheça você dez pessoas ou dez mil.",
        ],

        'selfHost' => [
            'eyebrow' => "Opção um · grátis",
            'title' => "Hospede você mesmo. É grátis, e é a Monica inteira.",
            'body' => "A Monica é de código aberto. Um comando Docker e ela roda na sua própria máquina: o seu servidor, as suas regras, todos os recursos. Sem período de teste, sem nível bloqueado, sem chave de licença.",
            'items' => [
                "Grátis para sempre, licença AGPL",
                "Todos os recursos da Monica hospedada",
                "Os seus dados nunca saem do seu hardware",
                "Atualizações quando você decidir baixá-las",
            ],
            'cta' => "Ler o guia de hospedagem própria",
            'terminal' => [
                'comment' => "# Baixe, rode, pronto.",
                'pulling' => "Baixando monica:latest…",
                'starting' => "Iniciando o banco de dados…",
                'running' => "Rodando em http://localhost:8080",
                'outro' => "# Agora vá adicionar a sua mãe.",
            ],
        ],

        'plans' => [
            'title' => "Três jeitos de entrar. Todos justos.",
            'lede' => "Rode você mesmo, pague conforme usa ou pague uma vez. Todos os planos têm todos os recursos. Você só está escolhendo quem cuida do servidor.",
            'footnote' => "Preços em USD. Impostos adicionados no pagamento quando exigidos. Nenhum plano cobra por contato, por lembrete ou por cofre.",

            'selfHost' => [
                'title' => "Hospedagem própria",
                'body' => "Para quem já tem um servidor, ou quer uma desculpa para ter um.",
                'per' => "para sempre",
                'items' => [
                    "Código-fonte completo, AGPL",
                    "Contatos e cofres ilimitados",
                    "Backups e atualizações ficam com você",
                    "Suporte da comunidade",
                ],
                'cta' => "Guia de hospedagem própria",
            ],

            'hosted' => [
                'title' => "Hospedada",
                'badge' => "A mais escolhida",
                'body' => "Para quem quer que a Monica simplesmente esteja lá.",
                'billingLabel' => "Período de cobrança",
                'monthly' => "Mensal",
                'yearly' => "Anual",
                'perMonth' => "/ mês",
                'perYear' => "/ ano",
                'yearlyNote' => "2 meses grátis",
                'items' => [
                    "Contatos, lembretes e cofres ilimitados",
                    "Atualizações automáticas e backups diários",
                    "Lembretes enviados por e-mail",
                    "Suporte por e-mail feito por pessoas de verdade",
                    "Cancele quando quiser, exporte tudo",
                ],
                'cta' => "Começar com a Monica",
            ],

            'lifetime' => [
                'title' => "Vitalícia",
                'badge' => "Pague uma vez",
                'body' => "Para quem prefere nunca mais pensar nisso.",
                'per' => "uma vez",
                'items' => [
                    "Tudo da Hospedada",
                    "Um pagamento, sem renovações",
                    "Todas as versões futuras incluídas",
                    "Passe para a hospedagem própria quando quiser",
                ],
                'cta' => "Pague uma vez, :lifetime",
            ],
        ],

        'calculator' => [
            'eyebrow' => "A calculadora de preços baseada em relações",
            'title' => "Quanto a sua vida social deveria custar?",
            'lede' => "Conte a ela sobre as pessoas da sua vida. Ela pondera onze fatores profundamente pessoais e chega a um preço justo, sob medida e totalmente científico.",

            'sliders' => [
                'people' => ['label' => "Pessoas de quem você gostaria de lembrar", 'help' => "Dunbar diz 150. Dunbar não conhece a sua família."],
                'birthdays' => ['label' => "Aniversários que você esqueceu no ano passado", 'help' => "Incluindo aquele que você lembrou às 23h48."],
                'coffee' => ['label' => "Vezes que você disse “vamos marcar um café”", 'help' => "E depois não marcou café nenhum."],
                'cousins' => ['label' => "Filhos de primos cujo nome você não sabe", 'help' => "Você sabe que tem um Leo. Talvez dois."],
                'reminders' => ['label' => "Lembretes que você criaria", 'help' => "A Monica envia todos eles."],
                'mum' => ['label' => "Ligações para a sua mãe, por mês", 'help' => "Ela reparou, de um jeito ou de outro."],
            ],

            'toggles' => [
                'pretend' => ['label' => "Você já fingiu lembrar o nome de alguém", 'help' => "“Oi… você.”"],
                'notes' => ['label' => "Você anota coisas sobre as pessoas no celular", 'help' => "A Monica é essa ideia, com datas."],
                'dentist' => ['label' => "Você sabe o primeiro nome do seu dentista", 'help' => "Impressionante, sinceramente."],
                'belated' => ['label' => "Você já mandou um “parabéns atrasado”", 'help' => "Todo mundo já. Uns mais que outros."],
            ],

            'social' => [
                'label' => "A sua vida social",
                'help' => "Aplicada como multiplicador, porque é assim que multiplicadores funcionam.",
                'options' => [
                    'hermit' => "Eremita",
                    'reasonable' => "Razoável",
                    'mayor' => "Prefeito da cidade",
                ],
            ],

            'quote' => "O seu orçamento personalizado",
            'planLabel' => "Plano",
            'plans' => [
                'monthly' => "Mensal",
                'yearly' => "Anual",
                'lifetime' => "Vitalício",
            ],

            // :count is a slider's value, :rate a made-up price per unit.
            'lines' => [
                'base' => [
                    'monthly' => "Monica, mensal",
                    'yearly' => "Monica, anual",
                    'lifetime' => "Monica, vitalícia",
                ],
                'people' => ":count pessoas × :rate",
                'reminders' => ":count lembretes",
                'birthdays' => ":count aniversários esquecidos × :rate de culpa",
                'coffee' => ":count cafés teóricos × :rate",
                'cousins' => ":count filhos de primos sem nome × :rate",
                'mum' => ":count ligações para a mãe × :rate de crédito",
                'pretend' => "Sobretaxa por fingir lembrar nomes",
                'notes' => "Migração do seu app de notas",
                'dentist' => "Bônus de intimidade com o dentista",
                'belated' => "Taxa de recuperação do “parabéns atrasado”",
                'multiplier' => "Multiplicador de vida social ×:rate",
                'included' => "incluído",
                'free' => "grátis",
            ],

            'subtotal' => "Subtotal",
            'refund' => "Preço baseado em relações",
            'refundHelp' => "Isso não existe na Monica. Removido por completo.",
            'total' => "O seu total",
            'per' => [
                'monthly' => "/ mês",
                'yearly' => "/ ano",
                'lifetime' => "uma vez",
            ],

            'verdicts' => [
                'birthdays' => ":count aniversários no ano que vem, todos cobertos.",
                'coffee' => "Vá tomar um desses cafés.",
                'mum' => "Ligue para a sua mãe. O orçamento espera.",
                'default' => "O mesmo que para todo mundo. A ideia é essa.",
            ],

            'cta' => "Garantir este preço suspeito",
            'reset' => "Esquecer tudo e começar de novo",
            'footnote' => "Todas as linhas acima são inventadas, menos o total. A Monica custa o mesmo, conheça você três pessoas ou três mil, lembre de todos os aniversários ou de nenhum.",
        ],

        'promises' => [
            'people' => [
                'title' => "Nunca cobrado por pessoa",
                'body' => "Conhecer alguém novo não deveria custar nada. Contatos, lembretes e cofres são ilimitados em todos os planos.",
            ],
            'export' => [
                'title' => "Saia levando tudo",
                'body' => "Exporte a sua conta inteira quando quiser e leve para uma Monica com hospedagem própria ou para qualquer outro lugar. Cancelar é um botão só.",
            ],
            'openSource' => [
                'title' => "Código aberto desde 2017",
                'body' => "Pagar pela hospedagem paga os servidores e as pessoas que continuam construindo a Monica, inclusive para todo mundo que hospeda ela por conta própria.",
            ],
        ],

        'ninety' => [
            'eyebrow' => ":yearly em perspectiva",
            'title' => "O que mais custa noventa dólares?",
            'lede' => "Um ano da Monica hospedada, ao lado das coisas em que as pessoas costumam gastar esse dinheiro depois de esquecer algo.",
            'about' => "~ :yearly",
            'items' => [
                'bouquets' => ['title' => "Três buquês de desculpas", 'body' => "Um por aniversário esquecido. Daqueles de posto de gasolina, comprados no caminho."],
                'gift' => ['title' => "Um presente atrasado com entrega expressa", 'body' => "A maior parte do custo é o frete. Todo ele é culpa."],
                'coffees' => ['title' => "Dezoito cafés", 'body' => "Aqueles que você disse que ia marcar. A Monica lembra você de marcar um de verdade."],
                'streaming' => ['title' => "Seis meses de um serviço de streaming", 'body' => "Aquele que você esqueceu que assinava."],
                'cards' => ['title' => "Um cartão para cada primo", 'body' => "Mais os selos. Mais descobrir onde eles moram agora."],
                'dinner' => ['title' => "Jantar para dois, sem sobremesa", 'body' => "Em que você finalmente pergunta como a pessoa está, e escuta."],
                'addressBook' => ['title' => "Uma agenda de endereços nova", 'body' => "De couro, bem-feita, e perdida de novo até a primavera."],
                'monica' => ['title' => "Um ano lembrando de todo mundo", 'body' => "Aniversários, nomes dos filhos, como foi a entrevista de emprego. Essa é a Monica."],
            ],
            'footnote' => "Os preços são aproximados e baseados na experiência. Um ano de Monica custa exatamente :yearly.",
        ],

        'faq' => [
            'eyebrow' => "Perguntas sobre pagamento",
            'title' => "Perguntas frequentes, raramente esquecidas.",
            'intro' => "Toda resposta começa pela versão curta. Abra a longa se a curta deixou você desconfiado.",
            'search' => "Buscar perguntas",
            'categoriesLabel' => "Filtrar perguntas por tema",
            'categories' => [
                'all' => "Todas",
                'money' => "Dinheiro",
                'plans' => "Planos",
                'selfHosting' => "Hospedagem própria",
                'data' => "Os seus dados",
                'leaving' => "Saída",
            ],
            'progress' => [
                'none' => "0 de :total lidas. Comece por qualquer uma.",
                'some' => ":count de :total lidas.",
                'many' => ":count de :total lidas. Você já sabe mais sobre isso do que a maioria das pessoas que se cadastram.",
                'all' => "Todas as :total lidas. Você poderia responder a caixa de suporte.",
            ],
            'random' => "Me pergunte algo aleatório",
            'emptyTitle' => "Nenhuma pergunta corresponde a isso",
            'emptyBody' => "Tente uma palavra mais curta ou escreva para o suporte. Pessoas de verdade leem.",
            'items' => [
                ['cat' => 'money', 'q' => "Quanto custa a Monica?", 'short' => "Nada, :monthly, :yearly ou :lifetime.", 'a' => "A hospedagem própria é grátis. A Monica hospedada custa :monthly por mês ou :yearly por ano. A vitalícia custa :lifetime, pagos uma vez. Todas as opções incluem todos os recursos."],
                ['cat' => 'money', 'q' => "O preço é por usuário ou por contato?", 'short' => "Nenhum dos dois.", 'a' => "Uma conta paga um preço. Adicione quantos contatos, lembretes, cofres e notas quiser. Conhecer gente nova nunca deveria custar dinheiro."],
                ['cat' => 'money', 'q' => "Os impostos estão incluídos?", 'short' => "Adicionados no pagamento quando exigidos.", 'a' => "Se o seu país exige imposto sobre vendas ou IVA, ele aparece antes de você pagar, então o valor com que você concorda é o valor cobrado."],
                ['cat' => 'money', 'q' => "Posso pagar em outra moeda?", 'short' => "Os preços são em dólares americanos.", 'a' => "A operadora do seu cartão faz a conversão no pagamento. O valor em dólares continua o mesmo de um ano para o outro."],
                ['cat' => 'money', 'q' => "O preço vai aumentar?", 'short' => "Não para o plano que você já tem.", 'a' => "Se os preços mudarem para novos clientes, as assinaturas existentes mantêm o seu preço. Você fica sabendo com bastante antecedência, por e-mail, com o valor real."],
                ['cat' => 'money', 'q' => "Vocês oferecem descontos?", 'short' => "O anual sai dois meses mais barato.", 'a' => "Pagar por ano custa :yearly em vez de US\$ 108. Estudantes e organizações sem fins lucrativos podem escrever para o suporte. A hospedagem própria continua sendo o maior desconto de todos: 100%."],
                ['cat' => 'plans', 'q' => "Vocês oferecem planos vitalícios?", 'short' => "Sim. :lifetime, uma vez.", 'a' => "A vitalícia é a Monica hospedada sem renovações. Inclui todas as versões futuras enquanto a Monica hospedada existir, e você pode passar para a hospedagem própria a qualquer momento."],
                ['cat' => 'plans', 'q' => "A versão hospedada é diferente da versão com hospedagem própria?", 'short' => "A mesma Monica.", 'a' => "O mesmo código, os mesmos recursos. A única diferença é quem roda o servidor, aplica as atualizações e guarda os backups."],
                ['cat' => 'plans', 'q' => "Vocês oferecem um plano empresarial?", 'short' => "Não.", 'a' => "A Monica é um CRM pessoal para a sua própria vida. Uma equipe de vendas estaria mais bem servida por uma ferramenta de vendas."],
                ['cat' => 'selfHosting', 'q' => "A Monica é mesmo de código aberto?", 'short' => "Sim, desde 2017.", 'a' => "O código-fonte completo é público, sob a AGPL. Você pode ler, rodar, modificar e contribuir."],
                ['cat' => 'selfHosting', 'q' => "A hospedagem própria é grátis?", 'short' => "Totalmente.", 'a' => "Sem chave de licença, sem recurso bloqueado, sem período de teste. Você paga pelo seu próprio servidor, se tiver um, e com o seu próprio tempo."],
                ['cat' => 'selfHosting', 'q' => "Posso passar da hospedada para a hospedagem própria?", 'short' => "Sim, quando quiser.", 'a' => "Exporte a sua conta e importe na sua própria Monica. O formato é o mesmo dos dois lados, então nada se perde no caminho."],
                ['cat' => 'selfHosting', 'q' => "Assinar ajuda o projeto de código aberto?", 'short' => "Diretamente.", 'a' => "A receita da hospedagem paga os servidores e as pessoas que continuam desenvolvendo a Monica, inclusive as partes que quem hospeda por conta própria usa de graça."],
                ['cat' => 'data', 'q' => "A Monica guarda os meus dados de pagamento?", 'short' => "Não.", 'a' => "Os pagamentos são processados pela empresa de pagamentos. A Monica nunca vê nem guarda o número do seu cartão."],
                ['cat' => 'data', 'q' => "Os meus dados são usados para publicidade?", 'short' => "Nunca.", 'a' => "Não há anúncios, nem rastreadores, nem terceiros lendo o que você escreve sobre a sua família."],
                ['cat' => 'data', 'q' => "Os meus dados são usados para treinar modelos de IA?", 'short' => "Não.", 'a' => "O que você escreve sobre as pessoas da sua vida não é material de treinamento, nem para a Monica nem para ninguém com quem a Monica trabalha."],
                ['cat' => 'data', 'q' => "Os backups estão incluídos?", 'short' => "Diários, nos planos hospedados.", 'a' => "As contas Hospedada e Vitalícia têm backup todos os dias. Numa Monica com hospedagem própria, quem agenda os backups é você."],
                ['cat' => 'data', 'q' => "Posso exportar tudo?", 'short' => "Tudo.", 'a' => "Contatos, notas, lembretes, relações, arquivos. A exportação está disponível em todos os planos, inclusive depois que você cancela."],
                ['cat' => 'leaving', 'q' => "Posso cancelar a qualquer momento?", 'short' => "Sim, com um botão.", 'a' => "Sem ligação, sem formulário de retenção. A sua conta continua utilizável até o fim do período que você pagou."],
                ['cat' => 'leaving', 'q' => "Há taxa de cancelamento?", 'short' => "Não.", 'a' => "Cancelar não custa nada. Voltar também não."],
                ['cat' => 'leaving', 'q' => "O que acontece se o meu pagamento falhar?", 'short' => "Nada desaparece.", 'a' => "Você recebe um e-mail e um prazo de carência para atualizar o cartão. Os seus dados ficam exatamente onde estavam."],
                ['cat' => 'leaving', 'q' => "Como funcionam os reembolsos?", 'short' => "Peça em até 30 dias.", 'a' => "Se a Monica não for para você, escreva para o suporte em até 30 dias após o pagamento e o valor é reembolsado integralmente."],
                ['cat' => 'leaving', 'q' => "Posso excluir a minha conta?", 'short' => "Sim, de forma permanente.", 'a' => "Excluir a sua conta remove os seus dados dos servidores. Os backups que os contêm expiram no prazo normal."],
            ],
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

    /**
     * The templates page, "Your contacts, your way". Every picture on it is a
     * drawing of the product, so each one carries a `label` that a screen
     * reader reads instead of the drawing itself.
     *
     * The field names and field types are shared by several drawings, so they
     * are written once under `fields` and `types`.
     */
    'templates' => [
        'fields' => [
            'cake' => "Bolo favorito",
            'cannotEat' => "Não pode comer",
            'coffee' => "Pedido de café",
            'shoeSize' => "Número do calçado",
            'nameDay' => "Dia do santo",
            'giftIdeas' => "Ideias de presente",
            'idea' => "Ideia",
            'given' => "Já presenteado",
            'howWeMet' => "Como nos conhecemos",
        ],
        'types' => [
            'shortText' => "Texto curto",
            'longText' => "Texto longo",
            'number' => "Número",
            'multipleChoice' => "Múltipla escolha",
            'recurringDate' => "Data recorrente",
            'repeater' => "Grupo repetível",
            'checkbox' => "Caixa de seleção",
        ],
        'section' => "Pequenas coisas que vale lembrar",
        'addField' => "Adicionar um campo",
        'fieldCount' => ":count campos",
        'publish' => "Publicar esta versão",
        'draft' => "Rascunho",
        'published' => "Publicada",
        'friends' => "Amigos",

        'hero' => [
            'title' => "Seus contatos, do seu jeito.",
            'lede' => "Lembre-se do que importa para você. Crie modelos de contato com os seus próprios campos, seções e abas, para que a ficha de cada pessoa tenha espaço para os detalhes que você quer guardar.",
            'cta' => "Criar a sua conta",
            'label' => "A ficha de Rachel Green na Monica, aberta na aba Pequenas coisas, ao lado da seção do modelo Amigos que define os campos da ficha.",
            'meta' => "Modelo Amigos · adicionado há 3 anos",
            'tabs' => ["Geral", "Formas de contato", "Pequenas coisas", "Planos"],
            'values' => [
                'cake' => "Cheesecake da Mama’s Little Bakery, Chicago",
                'cannotEat' => ["Lagosta", "Cebola crua"],
                'coffee' => "Latte, no Central Perk",
                'shoeSize' => "38",
            ],
            'story' => "Entrou no Central Perk encharcada, de vestido de noiva, no dia em que largou o Barry no altar. Mudou-se para lá naquela noite.",
            'behind' => "O modelo por trás dela",
        ],

        'birthday' => [
            'title' => "Um aniversário é útil. Saber qual é o bolo favorito também.",
            'body' => "Uma agenda guarda números de telefone. Talvez você também queira lembrar como se conheceram, o que alguém está tentando alcançar ou qual comida a pessoa não pode comer.",
            'close' => "Com a Monica, você escolhe o que fica nas fichas dos seus contatos.",
            'label' => "Um registro de agenda com um número de telefone e um aniversário, e a ficha de Ross Geller na Monica, que também guarda o bolo favorito dele, como vocês se conheceram, o que ele está tentando alcançar e o que ele não pode comer.",
            'addressBook' => "Uma agenda",
            'rows' => [
                ['label' => "Telefone", 'value' => "+1 212 555 0174"],
                ['label' => "Aniversário", 'value' => "18 de outubro de 1967"],
            ],
            'monica' => [
                ['label' => "Aniversário", 'value' => "18 de outubro · em três semanas"],
                ['label' => "Bolo favorito", 'value' => "Bolo de cenoura, com nozes extras"],
                ['label' => "Como nos conhecemos", 'value' => "Irmão da Monica, desde a faculdade"],
                ['label' => "Objetivo", 'value' => "Estabilidade como professor na NYU"],
                ['label' => "Não pode comer", 'value' => ["Kiwi", "Lagosta"]],
            ],
        ],

        'people' => [
            'title' => "Pessoas diferentes. Detalhes diferentes.",
            'close' => "Crie modelos diferentes para as pessoas da sua vida. Cada um pode ter a sua própria estrutura.",
            'cards' => [
                [
                    'title' => "Amigos",
                    'body' => "As coisas de que eles mais gostam, os planos para o verão e a história de como vocês se conheceram.",
                    'label' => "Uma ficha criada a partir de um modelo Amigos, com as abas Favoritos, Verão e Nossa história.",
                    'tabs' => ["Favoritos", "Verão", "Nossa história"],
                    'rows' => [
                        ['label' => "Banda", 'value' => "Khruangbin"],
                        ['label' => "Livro", 'value' => "Os Despojos do Dia"],
                        ['label' => "Plano de verão", 'value' => "Pedalar pelo Loire, em julho"],
                    ],
                ],
                [
                    'title' => "Família",
                    'body' => "As tradições que importam para eles, as datas importantes e a receita que eles vivem prometendo mandar.",
                    'label' => "Uma ficha criada a partir de um modelo Família, com as abas Tradições, Datas e Receitas.",
                    'tabs' => ["Tradições", "Datas", "Receitas"],
                    'rows' => [
                        ['label' => "Ceia de Natal", 'value' => "Ostras, depois missa do galo"],
                        ['label' => "Dia do santo", 'value' => "26 de julho"],
                        ['label' => "Receita prometida", 'value' => "O clafoutis da vovó"],
                    ],
                ],
                [
                    'title' => "Contatos profissionais",
                    'body' => "A área de especialidade, onde vocês conversaram pela primeira vez e o assunto que você queria retomar na próxima vez.",
                    'label' => "Uma ficha criada a partir de um modelo para contatos profissionais, com as abas Trabalho, Formas de contato e Próxima conversa.",
                    'tabs' => ["Trabalho", "Formas de contato", "Próxima conversa"],
                    'rows' => [
                        ['label' => "Especialidade", 'value' => "Cadeias de suprimentos no varejo de alimentos"],
                        ['label' => "Primeira conversa", 'value' => "Lyon, em um painel sobre logística"],
                        ['label' => "Retomar na próxima vez", 'value' => "O piloto de cadeia de frio dela"],
                    ],
                ],
            ],
        ],

        'room' => [
            'title' => "Abra espaço para o que importa.",
            'body' => [
                "Adicione campos de texto, datas, números ou uma escolha em uma lista. Dê a eles nomes que façam sentido para você.",
                "Reúna campos relacionados em seções, organize essas seções em abas e coloque tudo na ordem que preferir. Para detalhes que aparecem várias vezes, use um grupo repetível.",
            ],
            'close' => "Uma seção chamada “Pequenas coisas que vale lembrar”? Perfeitamente razoável.",
            'label' => "O editor de modelos da Monica, com um rascunho do modelo Amigos aberto na página Pequenas coisas. O campo Não pode comer está selecionado, e o painel ao lado mostra o nome, o tipo e a lista de opções dele.",
            'version' => "v2 · baseada na v1",
            'saved' => "Salvo há 4 segundos",
            'import' => "Importar uma seção",
            'pages' => [
                ['name' => "Geral", 'count' => 5],
                ['name' => "Pequenas coisas", 'count' => 6],
                ['name' => "Planos", 'count' => 3],
            ],
            'addPage' => "Adicionar uma página",
            'field' => "Campo",
            'name' => "Nome",
            'type' => "Tipo",
            'choices' => "Opções",
            'choiceList' => ["Amendoim", "Glúten", "Frutos do mar", "Laticínios", "Cebola crua"],
            'addChoice' => "Adicionar uma opção",
            'note' => "O que você alterar vale só para este rascunho.",
        ],

        'reuse' => [
            'title' => "Crie uma vez. Use de novo.",
            'body' => [
                "Um modelo dá a várias fichas a mesma estrutura. Cada pessoa mantém as próprias informações.",
                "Adicione “Como nos conhecemos” ao seu modelo de amigos, e cada amigo ganha um lugar para uma história diferente. Escolha um modelo padrão para cada cofre e dê aos novos contatos o ponto de partida certo.",
            ],
            'label' => "Um único campo Como nos conhecemos no modelo Amigos, preenchido com uma história diferente na ficha de três amigos, e o modelo Amigos escolhido como padrão para novos contatos no cofre Amigos.",
            'template' => "Modelo Amigos",
            'stories' => [
                'Rachel' => "Entrou no Central Perk de vestido de noiva.",
                'Ross' => "Irmão da Monica, desde a faculdade.",
                'Joey' => "Respondeu ao anúncio do quarto vago do Chandler.",
            ],
            'default' => "Modelo padrão",
            'defaultBody' => "Os novos contatos do cofre Amigos começam aqui",
        ],

        'versions' => [
            'title' => "Mude de ideia sem perder as suas anotações.",
            'body' => [
                "Você pode querer adicionar um detalhe, renomear um campo ou mover uma seção. Os seus modelos podem mudar junto com você.",
                "Prepare um rascunho e publique quando ele estiver pronto. Os contatos existentes continuam na versão atual até você decidir atualizá-los.",
                "Se você remover um campo de um modelo, as informações que já preencheu são mantidas. Você ainda consegue encontrá-las, e elas voltam à ficha se você trouxer o campo de volta.",
            ],
            'label' => "O histórico de versões de um modelo, com um rascunho v3 aguardando publicação enquanto 34 contatos continuam na v2, e a ficha de Rachel Green mantendo o número do calçado de um campo que foi removido, com um botão para trazer o campo de volta.",
            'history' => "Histórico de versões",
            'rows' => [
                ['version' => "v3", 'text' => "Adicionado “Dia do santo”, “Alergias” renomeado para “Não pode comer”", 'status' => 'draft'],
                ['version' => "v2", 'text' => "Publicada em 2 de junho · 34 contatos", 'status' => 'published'],
                ['version' => "v1", 'text' => "Publicada em 9 de janeiro · 3 contatos", 'status' => null],
            ],
            'notice' => "Publicar a v3 mantém 34 contatos na v2 até você atualizá-los.",
            'values' => [
                'cake' => "Cheesecake da Mama’s Little Bakery",
                'coffee' => "Latte, no Central Perk",
            ],
            'kept' => "Mantido de um campo removido",
            'restore' => "Trazer o campo de volta",
        ],

        'share' => [
            'title' => "Compartilhe o modelo. Guarde os detalhes só para você.",
            'body' => [
                "Criou algo útil? Exporte um modelo inteiro ou uma única seção para outra pessoa importar na própria conta.",
                "O arquivo contém a estrutura que você montou, com os rótulos e as listas de opções. Os seus contatos e as informações deles ficam com você.",
            ],
            'label' => "Exportação da seção Pequenas coisas que vale lembrar. O arquivo contém a seção, os rótulos e os tipos dos seis campos e a lista de opções de Não pode comer. Os seus 34 contatos e tudo o que está escrito nas fichas deles ficam com você.",
            'export' => "Exportar esta seção",
            'inFile' => "No arquivo",
            'inFileItems' => ["A seção e o nome dela", "6 rótulos e tipos de campo", "A lista de opções de “Não pode comer”"],
            'stays' => "Fica com você",
            'staysItems' => ["Os seus 34 contatos", "Tudo o que está escrito nas fichas deles"],
            'file' => "pequenas-coisas-que-vale-lembrar.json · 3 KB",
            'download' => "Baixar",
        ],

    ],

    /**
     * The details page, "Remember the details that matter". Every picture on
     * it is a drawing of the product, so each one carries a `label` that a
     * screen reader reads instead of the drawing itself. The people are the
     * Friends characters, whose names are not translated and live in the
     * partials.
     */
    'details' => [
        'hero' => [
            'title' => "Lembre-se dos detalhes que importam.",
            'lede' => "O número está no seu celular. O nome do novo namorado, a comida favorita e o que foi contado da última vez são mais difíceis de encontrar.",
            'close' => "Guarde esses detalhes juntos na Monica, prontos para a próxima conversa.",
            'cta' => "Criar a sua conta",
            'label' => "A ficha de Rachel Green na Monica, aberta na aba Geral. O namorado dela é o Joshua, a comida favorita é a lasanha da Monica sem carne, e ela trabalha na equipe de compras da Bloomingdale’s. Uma nota de seis dias atrás diz que ela tem uma entrevista em Paris no mês que vem.",
            'vault' => "Pessoal",
            'people' => "Pessoas",
            'meta' => [
                ['label' => "Categoria", 'value' => "Amigos"],
                ['label' => "Aniversário", 'value' => "5 de maio · daqui a três semanas"],
                ['label' => "Último contato", 'value' => "seis dias atrás"],
            ],
            'edit' => "Editar contato",
            'tabs' => ["Visão geral", "Geral", "Formas de contato", "Relacionamentos"],
            'personal' => "Dados pessoais",
            'rows' => [
                ['label' => "Namorado", 'value' => "Joshua, desde fevereiro"],
                ['label' => "Comida favorita", 'value' => "A lasanha da Monica, sem carne"],
                ['label' => "Trabalha na", 'value' => "Bloomingdale’s, equipe de compras"],
            ],
            'lastTime' => "O que ela contou da última vez",
            'note' => "Entrevista em Paris no mês que vem, para uma vaga na Louis Vuitton. Ainda não contou para o pai. Quer achar um apartamento perto do Marais.",
            'added' => "Adicionado seis dias atrás",
        ],

        'audition' => [
            'title' => "“Como foi o teste?”",
            'body' => [
                "Joey comentou sobre um teste na semana passada. Você lembra que era importante para ele. Ter esse detalhe na ficha dele dá um ponto de partida para retomar a conversa.",
                "Registre o que as pessoas contam para você: um emprego novo, uma mudança chegando, um projeto do qual elas não param de falar.",
            ],
            'label' => "Duas notas na ficha de Joey Tribbiani: um teste na quinta-feira para uma série de hospital e a saída do apartamento até o fim do verão. Abaixo, um lembrete para hoje: perguntar ao Joey como foi o teste.",
            'notes' => "Notas",
            'entries' => [
                ['text' => "Teste na quinta-feira para um papel numa série de hospital. Segunda chamada. Ele está ensaiando a cena do choro no terraço.", 'added' => "Adicionado 8 dias atrás"],
                ['text' => "Vai sair do apartamento até o fim do verão. Está procurando lugares no Queens.", 'added' => "Adicionado 3 semanas atrás"],
            ],
            'reminder' => "Perguntar ao Joey como foi o teste",
            'today' => "Hoje",
            'remembered' => "Eu lembrei",
            'forgot' => "Eu esqueci",
        ],

        'little' => [
            'title' => "As pequenas coisas merecem um lugar.",
            'lead' => "As flores favoritas da Rachel. Como o Chandler toma o café. O nome do último projeto de pesquisa do Ross.",
            'body' => "Alguns detalhes são úteis. Outros simplesmente lembram você de quem alguém é. Guarde tanto ou tão pouco quanto quiser, com as suas próprias palavras.",
            'cards' => [
                ['field' => "Flores favoritas", 'value' => "Peônias. Nunca lírios.", 'note' => "As brancas, da banca na 6th Avenue.", 'label' => "As flores favoritas de Rachel Green: peônias, nunca lírios. As brancas, da banca na 6th Avenue."],
                ['field' => "Café", 'value' => "Preto, dois de açúcar", 'note' => "Na caneca laranja, se estiver limpa.", 'label' => "Como Chandler Bing toma o café: preto, dois de açúcar, na caneca laranja se estiver limpa."],
                ['field' => "Projeto de pesquisa", 'value' => "Camadas sedimentares do Cretáceo Superior", 'note' => "Pergunte sobre a escavação em Montana. Reserve vinte minutos.", 'label' => "O projeto de pesquisa de Ross Geller: camadas sedimentares do Cretáceo Superior. Pergunte sobre a escavação em Montana e reserve vinte minutos."],
            ],
        ],

        'own' => [
            'title' => "Dê a cada pessoa uma ficha só dela.",
            'body' => [
                "Guarde juntos os dados de contato, as datas importantes e as informações pessoais. Adicione uma foto e organize o resto com um modelo que combine com o que você quer lembrar.",
                "Abra a ficha da Monica Geller antes do jantar para conferir o endereço, o aniversário ou o prato que você prometeu levar.",
            ],
            'label' => "A ficha de Monica Geller na Monica: endereço e telefone, aniversário e aniversário de casamento, e uma nota de ontem sobre a sobremesa que você prometeu levar ao jantar de sexta-feira.",
            'meta' => [
                ['label' => "Categoria", 'value' => "Amigos"],
                ['label' => "Aniversário", 'value' => "22 de abril"],
                ['label' => "Lembretes", 'value' => "1 hoje"],
            ],
            'connect' => [
                'title' => "Formas de contato",
                'rows' => [
                    ['label' => "Endereço", 'value' => "90 Bedford Street, Apt 20\nNew York, NY 10014"],
                    ['label' => "Telefone", 'value' => "+1 212 555 0187"],
                ],
            ],
            'dates' => [
                'title' => "Datas importantes",
                'rows' => [
                    ['label' => "Aniversário", 'value' => "22 de abril de 1969"],
                    ['label' => "Casamento", 'value' => "15 de maio, com Chandler"],
                ],
            ],
            'dinner' => [
                'title' => "Jantar de sexta-feira",
                'text' => "Você prometeu levar a sobremesa. Não o trifle. Ela já fez uma lista de opções aceitáveis.",
                'added' => "Adicionado ontem",
            ],
        ],

        'people' => [
            'title' => "Deixe espaço para as pessoas ao redor delas.",
            'lead' => "Lembrar de alguém muitas vezes significa lembrar também das pessoas dela.",
            'body' => "Ligue o Ross à Monica como irmã, à Rachel como ex-companheira e à Emma como filha. Quando você sabe que alguém existe mas ainda não conheceu a pessoa, pode registrar a ligação só com um nome, ou até sem ele.",
            'label' => "Os relacionamentos de Ross Geller na Monica. Família: Monica, a irmã, e Emma, a filha. Ex-companheira: Rachel. Ainda não conhecidos: Charlie, uma colega de quem só se sabe o nome, e um primo de Long Island cujo nome não se sabe.",
            'heading' => "As pessoas de Ross Geller",
            'add' => "Adicionar",
            'groups' => [
                ['title' => "Família", 'people' => [
                    ['name' => "Monica Geller", 'detail' => "Monica é irmã do Ross."],
                    ['name' => "Emma Geller-Green", 'detail' => "Emma é filha do Ross."],
                ]],
                ['title' => "Ex-companheira", 'people' => [
                    ['name' => "Rachel Green", 'detail' => "Rachel é ex-companheira do Ross."],
                ]],
                ['title' => "Ainda não conhecidos", 'people' => [
                    ['name' => "Charlie", 'detail' => "Colega do Ross · só um nome", 'known' => false],
                    ['name' => "Nome desconhecido", 'detail' => "Primo do Ross, de Long Island", 'known' => false, 'named' => false],
                ]],
            ],
        ],

        'moments' => [
            'title' => "Guarde os momentos junto com os detalhes.",
            'body' => [
                "Uma ficha de contato pode guardar tanto os fatos do dia a dia quanto as coisas que aconteceram.",
                "Registre um jantar com a Phoebe, uma ligação com o Chandler ou uma viagem com a turma toda. Adicione todo mundo que estava lá, e o evento aparece na linha do tempo de cada pessoa.",
            ],
            'close' => "Na próxima vez que vocês se encontrarem, você tem um caminho de volta para a última conversa.",
            'label' => "Uma linha do tempo na Monica com três registros de 2026: jantar com a Phoebe em 3 de outubro, ligação com o Chandler em 21 de setembro e um fim de semana em Montauk em 14 de agosto com Ross, Rachel, Monica, Chandler e Joey. Ao lado, o fim de semana em Montauk aparece na linha do tempo dos cinco.",
            'timeline' => "Linha do tempo",
            'addEvent' => "Adicionar um acontecimento",
            'entries' => ":count registros",
            'events' => [
                ['title' => "Jantar com a Phoebe", 'date' => "3 de outubro", 'body' => "O tailandês da Grove Street. Ela está escrevendo músicas sobre o táxi dela de novo."],
                ['title' => "Ligação com o Chandler", 'date' => "21 de setembro", 'body' => "Quarenta minutos. Está pensando em largar o emprego em reconfiguração de dados."],
                ['title' => "Um fim de semana em Montauk", 'date' => "14 de agosto", 'body' => "Alugaram de novo a casa de praia. Joey perdeu a chave do carro na areia."],
            ],
            'with' => "Com :names",
            'onTimelines' => "Em :count linhas do tempo",
        ],

        'cta' => [
            'title' => "Você não precisa lembrar de tudo.",
            'body' => "Comece com uma pessoa e alguns detalhes que você gostaria de guardar. Adicione mais sempre que algo parecer digno de lembrar.",
            'button' => "Criar a sua conta",
        ],
    ],

    'footer' => [
        // The closing line ends every page, so it is two short sentences rather
        // than a pitch. Each one is its own line.
        'closing' => ["A Monica lembra.", "Você vai viver."],
        'start' => "Começar a usar a Monica",
        'github' => "Ver no GitHub",

        'tagline' => "CRM pessoal de código aberto. AGPL-3.0.",
        'productLabel' => "Produto",
        'developersLabel' => "Desenvolvedores",
        'companyLabel' => "Empresa",
        'personalCrm' => "O que é um CRM pessoal?",
        'changelog' => "Novidades",
        'mcp' => "MCP",
        'api' => "API",
        'contactSales' => "Falar com vendas",
        'privacy' => "Privacidade",
        'terms' => "Termos",
        'team' => "Equipe",

        'art' => "Um campo à beira de um lago, com pandas deitados na grama e cochilando nas árvores",
        'copyright' => "© :year Monica. Nenhum panda foi rastreado.",
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
