<?php

// Editorial search targets, not search-volume measurements or meta keywords.
// The order is primary, secondary, then supporting phrases. Branded utility
// pages intentionally have fewer terms than product landing pages.
$english = [
    'home' => ['personal CRM', ['personal database', 'open source personal CRM'], ['self-hosted personal CRM', 'remember personal details']],
    'pricing' => ['Monica pricing', ['personal CRM pricing', 'free self-hosted CRM'], ['Monica hosted plans', 'lifetime personal CRM']],
    'personalCrm' => ['what is a personal CRM', ['personal CRM guide', 'personal CRM vs address book'], ['personal relationship manager', 'choose a personal CRM']],
    'personalData' => ['personal information management software', ['personal data management', 'personal organization app', 'personal database', 'digital life organizer', 'personal information manager'], ['personal knowledge management', 'open source personal information manager', 'self-hosted personal database', 'organize personal information', 'keep track of belongings', 'organize life information']],
    'aiMemory' => ['personal AI memory', ['persistent AI memory', 'shared memory for AI assistants'], ['open source AI memory', 'self-hosted AI memory', 'MCP personal memory']],
    'mcpServer' => ['Monica MCP server', ['personal data MCP server', 'personal CRM MCP server'], ['remote MCP server', 'MCP OAuth', 'self-hosted MCP server']],
    'v3' => ['Monica v3', ['Monica rebuild', 'Monica roadmap'], ['Monica upcoming features']],
    'templates' => ['contact templates', ['custom contact fields', 'personal CRM templates'], ['contact sections', 'contact template versions']],
    'details' => ['personal contact management software', ['organize contact details', 'remember details about people'], ['contact notes', 'personal contact records']],
    'reminders' => ['birthday reminder app', ['personal follow-up reminders', 'recurring contact reminders'], ['email birthday reminders', 'remember to call friends']],
    'timeline' => ['personal timeline', ['life event tracker', 'relationship timeline'], ['record shared memories', 'custom life events']],
    'people' => ['personal contact management', ['remember people', 'personal CRM for friends and family'], ['contact details and relationships', 'shared moments and follow-ups']],
    'timelineReminders' => ['personal timeline and reminders', ['follow-up reminders', 'shared life events'], ['contact timeline', 'remember to follow up']],
    'possessions' => ['personal inventory app', ['possession management', 'keep track of belongings'], ['home inventory', 'item locations and loans']],
    'inventory' => ['personal inventory with tags', ['possession types', 'custom inventory fields'], ['book collection inventory', 'organise belongings with tags']],
    'locations' => ['possession locations', ['where belongings are kept', 'location history'], ['home inventory locations', 'track where items are stored']],
    'maintenanceLoans' => ['possession maintenance records', ['loan tracking', 'track items lent to friends'], ['maintenance history', 'who borrowed what']],
    'knowledge' => ['personal knowledge base', ['notes and lists', 'organise notes in folders'], ['household instructions', 'reference lists']],
    'notes' => ['personal notes app', ['Markdown notes', 'household instructions'], ['notes with checklists', 'notes in folders']],
    'lists' => ['personal lists with custom columns', ['reading list', 'recommendation list'], ['custom list columns', 'everyday reference tables']],
    'folders' => ['organise notes in folders', ['personal knowledge organisation', 'search notes and lists'], ['note folders', 'knowledge base search']],
    'relationships' => ['track personal relationships', ['family connections', 'relationship history'], ['family tree', 'custom relationship types']],
    'vaults' => ['Monica vaults', ['organize personal and work contacts', 'separate contact lists'], ['personal CRM vaults', 'contact organization']],
    'sharing' => ['share contact details privately', ['read-only contact sharing', 'share selected contact fields'], ['password-protected sharing link', 'revoke contact sharing']],
    'api' => ['personal CRM API', ['Monica API', 'personal CRM integrations'], ['contact management API', 'connect AI assistants to contacts']],
    'privacyFeatures' => ['personal CRM privacy', ['contact data access controls', 'personal CRM security'], ['sensitive contact fields', 'passkeys', 'two-factor authentication']],
    'languages' => ['multilingual personal CRM', ['contact name formats', 'personal CRM languages'], ['date and time preferences', 'international contact names']],
    'about' => ['about Monica', ['open source Monica project'], ['independent personal CRM']],
    'team' => ['Monica team', ['Monica maintainers'], ['Monica contributors']],
    'contribute' => ['contribute to Monica', ['Monica translations', 'Monica documentation contributions'], ['open source contributions']],
    'support' => ['Monica support', ['Monica help', 'Monica documentation'], []],
    'privacy' => ['Monica privacy policy', ['Monica personal data policy'], []],
    'terms' => ['Monica terms of use', ['Monica service terms'], []],
    'blog' => ['Monica blog', ['Monica release notes', 'Monica product updates'], ['building an open source personal CRM']],
    'handbook' => ['Monica handbook', ['Monica project principles', 'running Monica'], ['independent open source project']],
];

// Each line follows the route order below. These terms describe the existing
// translated content; they do not add product claims to it.
$keys = ['home', 'pricing', 'personalCrm', 'v3', 'templates', 'details', 'reminders', 'timeline', 'relationships', 'vaults', 'sharing', 'api', 'privacyFeatures', 'languages', 'about', 'team', 'contribute', 'support', 'privacy', 'terms', 'blog', 'personalData', 'aiMemory', 'mcpServer', 'handbook', 'people', 'timelineReminders', 'possessions', 'inventory', 'locations', 'maintenanceLoans', 'knowledge', 'notes', 'lists', 'folders'];
$localized = [
    'fr' => <<<'TERMS'
CRM personnel|base de données personnelle|CRM personnel open source
tarifs Monica|CRM auto-hébergé gratuit|hébergement Monica
qu’est-ce qu’un CRM personnel|guide du CRM personnel|CRM personnel ou carnet d’adresses
Monica v3|refonte de Monica|nouveautés Monica
modèles de contact|champs de contact personnalisés|modèles de CRM personnel
gestion des contacts personnels|organiser ses contacts|notes sur les contacts
rappels d’anniversaire|rappels de suivi personnel|rappels récurrents
chronologie personnelle|suivi des événements de vie|souvenirs partagés
relations personnelles|liens familiaux|historique des relations
coffres Monica|séparer contacts personnels et professionnels|organiser ses contacts
partage privé de coordonnées|partage de contact en lecture seule|lien de partage protégé
API de CRM personnel|API Monica|intégrations Monica
confidentialité du CRM personnel|contrôle d’accès aux contacts|sécurité Monica
CRM personnel multilingue|formats des noms|langues de Monica
à propos de Monica|projet Monica open source|CRM personnel indépendant
équipe Monica|créateurs de Monica|contributeurs Monica
contribuer à Monica|traduire Monica|documentation Monica
support Monica|aide Monica|documentation Monica
politique de confidentialité Monica|données personnelles Monica
conditions d’utilisation Monica|conditions du service Monica
blog Monica|nouveautés Monica|notes de version Monica
logiciel de gestion d’informations personnelles|gestion des données personnelles|application d’organisation personnelle|base de données personnelle
mémoire IA personnelle|mémoire IA persistante|mémoire partagée pour assistants IA|mémoire IA open source
serveur MCP Monica|serveur MCP pour données personnelles|serveur MCP distant|serveur MCP auto-hébergé
manuel Monica|principes du projet Monica|projet open source indépendant
gestion des contacts personnels|se souvenir des gens|suivre ses proches
chronologie et rappels|rappels de suivi|événements de vie partagés
inventaire personnel|gestion des objets|emplacements et prêts
inventaire avec étiquettes|types d’objets|champs personnalisés
emplacements des objets|où sont rangées vos affaires|historique des emplacements
historique d’entretien des objets|suivi des prêts|objets prêtés à des amis
base de connaissances personnelle|notes et listes|dossiers de notes
application de notes personnelles|notes en Markdown|instructions pour la maison
listes personnelles à colonnes|liste de lecture|liste de recommandations
ranger ses notes dans des dossiers|organiser ses connaissances|rechercher dans ses notes
TERMS,
    'de' => <<<'TERMS'
persönliches CRM|persönliche Datenbank|Open-Source-CRM
Monica Preise|kostenloses selbst gehostetes CRM|Monica Hosting
was ist ein persönliches CRM|persönliches CRM erklärt|CRM oder Adressbuch
Monica v3|Monica Neuentwicklung|Monica Neuigkeiten
Kontaktvorlagen|benutzerdefinierte Kontaktfelder|CRM-Vorlagen
persönliche Kontaktverwaltung|Kontaktdetails organisieren|Kontaktnotizen
Geburtstagserinnerungen|persönliche Folgeerinnerungen|wiederkehrende Erinnerungen
persönliche Zeitleiste|Lebensereignisse festhalten|gemeinsame Erinnerungen
persönliche Beziehungen|Familienverbindungen|Beziehungsverlauf
Monica Tresore|private und berufliche Kontakte trennen|Kontakte organisieren
Kontaktdaten privat teilen|schreibgeschützte Kontaktfreigabe|geschützter Freigabelink
persönliche CRM-API|Monica API|Monica Integrationen
Datenschutz im persönlichen CRM|Kontaktzugriff steuern|Monica Sicherheit
mehrsprachiges persönliches CRM|Namensformate|Monica Sprachen
über Monica|Open-Source-Projekt Monica|unabhängiges CRM
Monica Team|Monica Entwickler|Monica Mitwirkende
zu Monica beitragen|Monica übersetzen|Monica Dokumentation
Monica Support|Monica Hilfe|Monica Dokumentation
Monica Datenschutzerklärung|persönliche Daten bei Monica
Monica Nutzungsbedingungen|Monica Dienstbedingungen
Monica Blog|Monica Versionshinweise|Monica Produktneuigkeiten
persönliche Daten verwalten|Software für persönliches Informationsmanagement|persönliche Datenbank|digitales Leben organisieren
persönliches KI-Gedächtnis|KI-Gedächtnis für Assistenten|gemeinsames Gedächtnis für KI-Assistenten|KI-Gedächtnis selbst hosten
Monica MCP-Server|MCP-Server für persönliche Daten|persönliches CRM MCP-Server|MCP-Server selbst hosten
Monica Handbuch|Prinzipien von Monica|unabhängiges Open-Source-Projekt führen
persönliche Kontaktverwaltung|sich an Menschen erinnern|Freunde und Familie im Blick behalten
Zeitleiste und Erinnerungen|Erinnerungen zum Nachfassen|gemeinsame Lebensereignisse
persönliches Inventar|Besitz verwalten|Orte und Verleih
Inventar mit Schlagwörtern|Besitztypen|eigene Felder
Standorte von Gegenständen|wo Dinge aufbewahrt werden|Standortverlauf
Wartungsverlauf von Gegenständen|Verleih verfolgen|an Freunde verliehene Dinge
persönliche Wissensdatenbank|Notizen und Listen|Notizen in Ordnern
persönliche Notizen-App|Markdown-Notizen|Anleitungen für zu Hause
persönliche Listen mit eigenen Spalten|Leseliste|Empfehlungsliste
Notizen in Ordnern ordnen|persönliches Wissen organisieren|Notizen durchsuchen
TERMS,
    'es' => <<<'TERMS'
CRM personal|base de datos personal|CRM personal de código abierto
precios de Monica|CRM autoalojado gratuito|alojamiento de Monica
qué es un CRM personal|guía de CRM personal|CRM o libreta de direcciones
Monica v3|reconstrucción de Monica|novedades de Monica
plantillas de contacto|campos de contacto personalizados|plantillas de CRM personal
gestión de contactos personales|organizar contactos|notas de contactos
recordatorios de cumpleaños|recordatorios de seguimiento personal|recordatorios recurrentes
cronología personal|registro de acontecimientos vitales|recuerdos compartidos
relaciones personales|vínculos familiares|historial de relaciones
bóvedas de Monica|separar contactos personales y profesionales|organizar contactos
compartir datos de contacto en privado|compartir contactos en modo lectura|enlace protegido
API de CRM personal|API de Monica|integraciones de Monica
privacidad del CRM personal|control de acceso a contactos|seguridad de Monica
CRM personal multilingüe|formatos de nombres|idiomas de Monica
acerca de Monica|proyecto Monica de código abierto|CRM independiente
equipo de Monica|creadores de Monica|colaboradores de Monica
colaborar con Monica|traducir Monica|documentación de Monica
soporte de Monica|ayuda de Monica|documentación de Monica
política de privacidad de Monica|datos personales en Monica
condiciones de uso de Monica|condiciones del servicio Monica
blog de Monica|notas de versión de Monica|novedades de Monica
software de gestión de información personal|app de organización personal|base de datos personal|organizador de vida digital
memoria de IA personal|memoria persistente para asistentes de IA|memoria compartida para asistentes de IA
servidor MCP de Monica|servidor MCP de datos personales|servidor MCP de CRM personal
manual de Monica|principios del proyecto Monica|proyecto de código abierto independiente
gestor de contactos personales|recordar a la gente|seguir a amigos y familia
cronología y recordatorios|recordatorios de seguimiento|eventos vitales compartidos
inventario personal|gestión de pertenencias|ubicaciones y préstamos
inventario con etiquetas|tipos de pertenencia|campos personalizados
ubicaciones de pertenencias|dónde guardas tus cosas|historial de ubicaciones
registros de mantenimiento|seguimiento de préstamos|cosas prestadas a amigos
base de conocimiento personal|notas y listas|carpetas de notas
aplicación de notas personales|notas en Markdown|instrucciones para la casa
listas personales con columnas|lista de lectura|lista de recomendaciones
organizar notas en carpetas|organizar el conocimiento personal|buscar en notas y listas
TERMS,
    'pt' => <<<'TERMS'
CRM pessoal|banco de dados pessoal|CRM pessoal de código aberto
preços da Monica|CRM auto-hospedado gratuito|hospedagem da Monica
o que é um CRM pessoal|guia de CRM pessoal|CRM ou agenda de contatos
Monica v3|reconstrução da Monica|novidades da Monica
modelos de contato|campos de contato personalizados|modelos de CRM pessoal
gestão de contatos pessoais|organizar contatos|notas sobre contatos
lembretes de aniversário|lembretes de acompanhamento pessoal|lembretes recorrentes
linha do tempo pessoal|registro de acontecimentos da vida|memórias compartilhadas
relacionamentos pessoais|laços familiares|histórico de relacionamentos
cofres da Monica|separar contatos pessoais e profissionais|organizar contatos
compartilhar dados de contato em privado|compartilhar contatos somente para leitura|link protegido
API de CRM pessoal|API da Monica|integrações da Monica
privacidade do CRM pessoal|controle de acesso a contatos|segurança da Monica
CRM pessoal multilíngue|formatos de nomes|idiomas da Monica
sobre a Monica|projeto Monica de código aberto|CRM independente
equipe da Monica|criadores da Monica|colaboradores da Monica
contribuir com a Monica|traduzir a Monica|documentação da Monica
suporte da Monica|ajuda da Monica|documentação da Monica
política de privacidade da Monica|dados pessoais na Monica
termos de uso da Monica|termos do serviço Monica
blog da Monica|notas de versão da Monica|novidades da Monica
software de gestão de informações pessoais|organizador de vida pessoal|aplicativo para organizar informações pessoais|banco de dados pessoal
memória de IA pessoal|memória persistente para IA|memória compartilhada para assistentes de IA|memória de IA de código aberto
servidor MCP da Monica|servidor MCP de dados pessoais|servidor MCP remoto|MCP com OAuth
manual da Monica|princípios do projeto Monica|projeto de código aberto independente
gerenciador de contatos pessoais|lembrar das pessoas|acompanhar amigos e família
linha do tempo e lembretes|lembretes de acompanhamento|eventos de vida compartilhados
inventário pessoal|gestão de pertences|locais e empréstimos
inventário com etiquetas|tipos de pertence|campos personalizados
locais dos pertences|onde suas coisas estão guardadas|histórico de locais
registros de manutenção|controle de empréstimos|coisas emprestadas a amigos
base de conhecimento pessoal|notas e listas|pastas de notas
aplicativo de notas pessoais|notas em Markdown|instruções da casa
listas pessoais com colunas|lista de leitura|lista de recomendações
organizar notas em pastas|organizar o conhecimento pessoal|pesquisar notas e listas
TERMS,
    'nl' => <<<'TERMS'
persoonlijk CRM|persoonlijke database|open source persoonlijk CRM
Monica prijzen|gratis zelfgehost CRM|Monica hosting
wat is een persoonlijk CRM|gids voor persoonlijk CRM|CRM of adresboek
Monica v3|Monica herbouw|Monica vernieuwingen
contactsjablonen|aangepaste contactvelden|persoonlijke CRM-sjablonen
persoonlijk contactbeheer|contactgegevens organiseren|contactnotities
verjaardagsherinneringen|persoonlijke opvolgherinneringen|terugkerende herinneringen
persoonlijke tijdlijn|levensgebeurtenissen vastleggen|gedeelde herinneringen
persoonlijke relaties|familiebanden|relatiegeschiedenis
Monica kluizen|privécontacten en werkcontacten scheiden|contacten organiseren
contactgegevens privé delen|contacten alleen-lezen delen|beveiligde deellink
persoonlijke CRM-API|Monica API|Monica integraties
privacy in persoonlijk CRM|toegang tot contacten beheren|Monica beveiliging
meertalig persoonlijk CRM|naamformaten|Monica talen
over Monica|open source project Monica|onafhankelijk CRM
Monica team|Monica makers|Monica bijdragers
bijdragen aan Monica|Monica vertalen|Monica documentatie
Monica ondersteuning|Monica hulp|Monica documentatie
Monica privacybeleid|persoonsgegevens in Monica
Monica gebruiksvoorwaarden|Monica dienstvoorwaarden
Monica blog|Monica release-informatie|Monica productnieuws
persoonlijk informatiebeheer software|persoonlijke gegevens beheren|app om je leven te organiseren|persoonlijke database
persoonlijk AI-geheugen|permanent geheugen voor AI-assistenten|gedeeld geheugen voor AI-assistenten
Monica MCP-server|MCP-server voor persoonlijke gegevens|MCP-server voor persoonlijke CRM|MCP-server zelf hosten
Monica handboek|principes van Monica|open source project runnen
persoonlijk contactbeheer|mensen onthouden|vrienden en familie bijhouden
tijdlijn en herinneringen|herinneringen om op te volgen|gedeelde levensgebeurtenissen
persoonlijke inventaris|spullen beheren|plekken en uitlenen
inventaris met labels|soorten bezittingen|eigen velden
locaties van bezittingen|waar je spullen liggen|locatiegeschiedenis
onderhoudsgeschiedenis van spullen|uitleningen bijhouden|spullen uitgeleend aan vrienden
persoonlijke kennisbank|notities en lijsten|notities in mappen
app voor persoonlijke notities|notities in Markdown|instructies voor in huis
persoonlijke lijsten met eigen kolommen|leeslijst|lijst met aanraders
notities in mappen ordenen|persoonlijke kennis ordenen|notities doorzoeken
TERMS,
    'zh' => <<<'TERMS'
个人 CRM|个人数据库|开源个人 CRM
Monica 价格|免费自托管 CRM|Monica 托管
什么是个人 CRM|个人 CRM 指南|CRM 与通讯录
Monica v3|Monica 重建|Monica 新功能
联系人模板|自定义联系人字段|个人 CRM 模板
个人联系人管理|整理联系人信息|联系人笔记
生日提醒|个人跟进提醒|重复提醒
个人时间线|人生事件记录|共同回忆
人际关系管理|家庭关系|关系历史
Monica 资料库|区分私人和工作联系人|联系人整理
私密分享联系方式|只读联系人分享|受保护的分享链接
个人 CRM API|Monica API|Monica 集成
个人 CRM 隐私|联系人访问控制|Monica 安全
多语言个人 CRM|姓名格式|Monica 语言
关于 Monica|Monica 开源项目|独立个人 CRM
Monica 团队|Monica 开发者|Monica 贡献者
参与 Monica|翻译 Monica|Monica 文档
Monica 支持|Monica 帮助|Monica 文档
Monica 隐私政策|Monica 个人数据
Monica 使用条款|Monica 服务条款
Monica 博客|Monica 版本说明|Monica 产品更新
个人信息管理软件|个人数据管理|个人数据库|数字生活整理工具
个人 AI 记忆|AI 助手持久记忆|AI 助手共享记忆
Monica MCP 服务器|个人数据 MCP 服务器|个人 CRM MCP 服务器
Monica 手册|Monica 项目原则|独立开源项目运营
个人联系人管理|记住身边的人|记录亲友信息
时间线与提醒|跟进提醒|共同的人生事件
个人物品清单|物品管理|位置和借出
带标签的物品清单|物品类型|自定义字段
物品位置|物品存放位置|位置历史
物品维护记录|借用记录|借给朋友的物品
个人知识库|笔记和列表|文件夹整理笔记
个人笔记应用|Markdown 笔记|家居说明
自定义列的个人列表|阅读清单|推荐列表
用文件夹整理笔记|整理个人知识|搜索笔记和列表
TERMS,
    'ru' => <<<'TERMS'
персональная CRM|личная база данных|персональная CRM с открытым кодом
цены Monica|бесплатная CRM на своём сервере|хостинг Monica
что такое персональная CRM|руководство по персональной CRM|CRM или адресная книга
Monica v3|переработка Monica|новые возможности Monica
шаблоны контактов|собственные поля контактов|шаблоны персональной CRM
управление личными контактами|организация контактов|заметки о контактах
напоминания о днях рождения|личные напоминания об общении|повторяющиеся напоминания
личная хронология|запись жизненных событий|общие воспоминания
личные отношения|семейные связи|история отношений
хранилища Monica|разделение личных и рабочих контактов|организация контактов
приватная передача контактных данных|доступ к контакту только для чтения|защищённая ссылка
API персональной CRM|Monica API|интеграции Monica
конфиденциальность персональной CRM|управление доступом к контактам|безопасность Monica
многоязычная персональная CRM|форматы имён|языки Monica
о Monica|проект Monica с открытым кодом|независимая CRM
команда Monica|разработчики Monica|участники Monica
помочь Monica|перевод Monica|документация Monica
поддержка Monica|помощь Monica|документация Monica
политика конфиденциальности Monica|личные данные в Monica
условия использования Monica|условия сервиса Monica
блог Monica|заметки о версиях Monica|новости Monica
программа для управления личной информацией|управление личными данными|органайзер личной жизни|персональная база данных
личная память для ИИ|память для ИИ-ассистента|общая память для нейросетей
MCP-сервер Monica|MCP-сервер для личных данных|MCP-сервер для персональной CRM
руководство Monica|принципы проекта Monica|как устроен проект с открытым кодом
личный менеджер контактов|помнить о людях|следить за друзьями и семьёй
хронология и напоминания|напоминания о делах|общие события
личный инвентарь|учёт вещей|места и займы
инвентарь с метками|типы вещей|свои поля
места хранения вещей|где лежат ваши вещи|история мест хранения
история обслуживания вещей|учёт займов|вещи, одолженные друзьям
личная база знаний|заметки и списки|папки для заметок
приложение для личных заметок|заметки в Markdown|инструкции по дому
личные списки со своими столбцами|список для чтения|список рекомендаций
заметки по папкам|порядок в личных знаниях|поиск по заметкам
TERMS,
];

$topics = ['en' => $english];
foreach ($localized as $locale => $lines) {
    $rows = explode("\n", trim($lines));
    if (count($rows) !== count($keys)) {
        throw new RuntimeException("SEO topic count does not match routes for [$locale].");
    }
    foreach (array_combine($keys, $rows) as $key => $line) {
        $terms = array_map('trim', explode('|', $line));
        $topics[$locale][$key] = [array_shift($terms), $terms, []];
    }
}

return $topics;
