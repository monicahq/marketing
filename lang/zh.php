<?php

/**
 * Simplified Chinese copy. lang/en.php is the canonical shape, and a key
 * missing here fails the build.
 *
 * House voice in Chinese: the reader is 你, never 您. Full-width punctuation,
 * no ！ and no emoji. A space separates Chinese from Latin words and numbers
 * ("Monica 是一个开源的个人 CRM"). Product and brand names stay in Latin script.
 *
 * Placeholders are :colon style and are filled by the `t` helper in config.php.
 */

return [
    /**
     * Title and description are per page, keyed by the route name in config.php.
     * The social card is per locale rather than per page, so its alt text sits
     * beside them rather than inside them.
     */
    'meta' => [
        'imageAlt' => "Monica：记住你在乎的人。开源的个人 CRM。",

        /**
         * The page names in a breadcrumb trail: one per route key, plus the
         * root and the label a page of the blog index gets.
         *
         * Kept apart from `nav` on purpose. A nav label is written to be
         * scanned in a bar four items wide; a breadcrumb is read out in a
         * search result and can afford to say what the page is.
         */
        'breadcrumb' => [
            'home' => "首页",
            'v3' => "Monica v3",
            'pricing' => "价格",
            'blog' => "博客",
            'terms' => "使用条款",
            'team' => "团队",
            'privacy' => "隐私政策",
            'personalCrm' => "个人 CRM 指南",
            'templates' => "联系人模板",
            'details' => "联系人详情",
            'reminders' => "提醒",
            'timeline' => "时间线",
            'relationships' => "关系",
            'vaults' => "保险库",
            'sharing' => "分享",
            'api' => "API 和 MCP",
            'privacyFeatures' => "隐私与安全",
            'languages' => "语言与格式",
            'page' => "第 :number 页",
        ],

        /**
         * What each of the three offers is called in the SoftwareApplication
         * structured data. The prices themselves are numbers in config.php,
         * because a crawler wants 9.00 and USD, not "$9".
         */
        'software' => [
            'monthly' => "Monica 托管版，按月付费",
            'yearly' => "Monica 托管版，按年付费",
            'selfHosted' => "自托管 Monica",
            'lifetime' => "Monica 托管版，终身",
        ],

        'home' => [
            'title' => "Monica：开源的个人 CRM",
            'description' => "Monica 帮你记住你在乎的人：他们生活中正在发生什么、重要的日子、之前聊过的内容，以及什么时候该再联系。注重隐私，开源，可自托管。",
        ],

        'pricing' => [
            'title' => "Monica 价格：免费自托管，或交给 Monica 托管",
            'description' => "免费自托管 Monica，或交给 Monica 托管：每月 \$9，每年 \$90，或一次性 \$150。每个方案都包含全部功能，联系人数量不限，也不按联系人计费。",
        ],

        'privacy' => [
            'title' => "隐私政策：Monica",
            'description' => "Monica 如何处理你的数据：我们收集什么、数据存放在哪里、谁能看到，以及你关闭账户后会发生什么。没有广告，没有追踪器，不转售数据。",
        ],

        'team' => [
            'title' => "团队：Monica",
            'description' => "Monica 由两个人在蒙特利尔打造，背后还有数百位开源贡献者。为什么我们要做一个不伤害人际关系的个人 CRM。",
        ],

        'terms' => [
            'title' => "使用条款：Monica",
            'description' => "开源个人 CRM Monica 的使用条款：服务涵盖的范围、你对自己数据的权利、你的责任，以及法律细则。",
        ],

        'blog' => [
            'title' => "Monica 博客：发布说明与产品决策",
            'description' => "我们发布了什么，为什么这样做，以及经营一家小型开源公司到底是什么样子。由打造 Monica 的人撰写。",
        ],

        // A post brings its own title and description, so this is only the
        // frame the site puts around them.
        'post' => [
            'title' => ":title：Monica 博客",
        ],

        // Page 2 of a list is not the list. Without this, four pages of the
        // blog compete for one result under one title.
        'paginated' => ":title（第 :page 页，共 :total 页）",

        'v3' => [
            'title' => "Monica v3：为未来十年重新打造",
            'description' => "Monica v3 是这款开源个人 CRM 的彻底重写：由你设计的记录、与一切相连的日记、完整的 API，以及真正好用的移动端体验。依然开源。将在 2026 年底前推出。",
        ],

        'templates' => [
            'title' => "你的联系人，你做主：Monica 联系人模板",
            'description' => "用你自己的字段、分区和标签页来创建联系人模板。为朋友、家人和工作分别设计模板，准备好再发布版本，还能分享分区。",
        ],

        'details' => [
            'title' => "记住重要的细节：Monica 联系人页面",
            'description' => "把别人告诉你的细节放在一起：他们上次说了什么、那些小事、他们身边的人，以及你们共度的时刻。",
        ],

        'reminders' => [
            'title' => "记得主动联系：Monica 提醒",
            'description' => "为生日、重要的日子或一位你想打电话的朋友设置提醒。可以只提醒一次，也可以按周期重复，按对方的时区，通过邮件或在 Monica 中提醒，并留下你记得做过什么的记录。",
        ],

        'timeline' => [
            'title' => "留住值得记住的时刻：Monica 时间线",
            'description' => "记录发生了什么、有谁在场，以及你想留下的细节。生活事件同时出现在每个人的时间线上，可以自定义事件类型和字段，还能逐年回顾。",
        ],

        'relationships' => [
            'title' => "看清人与人之间的联系：Monica 关系功能",
            'description' => "记下某个人身边的人，让每一段关系从两边看都说得通。家谱、还没见过的人、过去的关系，以及你自己的关系类型。",
        ],

        'vaults' => [
            'title' => "生活的每一部分，各有各的位置：Monica 保险库",
            'description' => "把朋友、家人和同事放在一起，或者给每个圈子一个单独的空间。每个保险库都有自己的联系人、时间线、提醒和默认模板，全都在你的账户里。",
        ],

        'sharing' => [
            'title' => "只分享你选定的内容：Monica 分享功能",
            'description' => "通过只读链接分享联系人页面上选定的分区。你来决定它显示什么，可以设置失效日期或密码，看到它何时被打开，并随时撤销。",
        ],

        'api' => [
            'title' => "让你的联系人连接你的工具：Monica API 与 MCP 服务器",
            'description' => "在 Claude、ChatGPT、Gemini 或你自己的脚本里使用 Monica。通过 MCP 或 JSON API 查找联系人、记录生活事件、设置提醒，访问权限由你决定。",
        ],

        'privacyFeatures' => [
            'title' => "个人的细节，值得一个私密的地方：Monica 隐私与安全",
            'description' => "把字段标记为敏感，只分享选定的分区，控制 API 密钥和助手能读取什么，用通行密钥和双重验证保护你的账户，并查看账户的活动。",
        ],

        'languages' => [
            'title' => "你的语言，他们的名字：Monica 的语言与格式",
            'description' => "在 30 多种语言中使用 Monica。按人们习惯的顺序和形式书写名字，选择显示名称，并设置你自己的日期、时间、数字和时区偏好。",
        ],

        'personalCrm' => [
            'title' => "什么是个人 CRM？实用指南：Monica",
            'description' => "个人 CRM 是什么，它与通讯录和销售 CRM 有何不同，该存储哪些内容，隐私上的取舍，以及如何选择合适的方式。",
        ],
    ],

    'announcement' => [
        'headline' => "Monica v3 将在 2026 年底前推出。",
        'detail' => "从头重建。依然开源。",
        'cta' => "看看有什么新变化",
    ],

    'nav' => [
        'label' => "主导航",
        'product' => "产品",
        'personalCrm' => "什么是个人 CRM",
        'v3' => "Monica v3",
        'features' => "功能",
        'pricing' => "价格",
        'blog' => "博客",
        'docs' => "文档",
        'signIn' => "登录",
        'getStarted' => "注册",
        'stars' => ":count 星",

        // The features menu: three columns of what Monica does, and a card
        // pointing at templates, the thing a new reader most often misses.
        'menu' => [
            'groups' => [
                [
                    'title' => "记住",
                    'items' => [
                        ['icon' => 'note', 'title' => "详情", 'body' => "关于一个人的一切，集中在一处。"],
                        ['icon' => 'reminder', 'title' => "提醒", 'body' => "生日、跟进、重复提醒。"],
                        ['icon' => 'timeline', 'title' => "时间线", 'body' => "记一次，在场的人都有记录。"],
                    ],
                ],
                [
                    'title' => "整理",
                    'items' => [
                        ['icon' => 'relationship', 'title' => "关系", 'body' => "家谱，以及谁认识谁。"],
                        ['icon' => 'vault', 'title' => "保险库", 'body' => "个人和工作，彼此分开。"],
                        ['icon' => 'link', 'title' => "分享", 'body' => "分享部分内容，随时撤销。"],
                    ],
                ],
                [
                    'title' => "连接与保护",
                    'items' => [
                        ['icon' => 'globe', 'title' => "语言", 'body' => "你的语言，他们的名字，你的格式。"],
                        ['icon' => 'key', 'title' => "助手与 API", 'body' => "你的智能体可以查找联系人。"],
                        ['icon' => 'lock', 'title' => "隐私", 'body' => "通行密钥、双重验证、私密字段。"],
                    ],
                ],
            ],
            'start' => [
                'label' => "从这里开始",
                'title' => "你的联系人，你做主",
                'body' => "设计你自己的模板。标签页、分区、字段、选项。",
                'rows' => [
                    ['label' => "朋友", 'detail' => "礼物、宠物"],
                    ['label' => "家人", 'detail' => "家谱"],
                    ['label' => "工作", 'detail' => "公司、职位"],
                ],
                'cta' => "看看模板怎么用",
            ],
        ],
    ],

    /** The /v3 teaser page. */
    'v3page' => [
        'badge' => "Monica v3 · 开发中",
        'timing' => "将在 2026 年底前推出",
        'title' => "Monica 正在为未来十年重新打造。",
        'lede' => "Monica 已经帮助成千上万的人记住生活中那些人的重要之处。现在，它正在从头重建：更灵活，更注重隐私，更容易扩展，在每一种屏幕上都更好用。",
        'lede2' => "它依然会保持开源。当初让 Monica 值得使用的一切，都会保留下来。",

        'progress' => [
            'body' => "现在没有什么需要注册的。Monica v3 正在公开开发，几周后再来看看有什么变化。",
            'note' => "没有发布名单，没有邮件通讯，没有追踪像素。",
        ],

        'proof' => [
            'stars' => ":count 个 GitHub 星标",
            'openSource' => "自 2017 年起开源",
            'selfHostable' => "可自托管",
        ],

        'coming' => [
            'label' => "即将到来",
            'title' => "很多地方都在改变。Monica 将更加属于你。",
            'body' => "Monica v3 不只是换一层外观。它是一个全新的基础，目的是让产品更灵活，却不变得更复杂。",
            'features' => [
                [
                    'icon' => 'panel',
                    'title' => "按你的生活塑造 Monica",
                    'body' => "创建对你有意义的分区和字段。可以让 Monica 保持简单，也可以为想记住的事建立详细的记录。",
                ],
                [
                    'icon' => 'relationship',
                    'title' => "记录的不止是人",
                    'body' => "人依然是 Monica 的核心，但他们并不是孤立存在的。你可以把他们与宠物、公司、住所、车辆、项目，或任何对他们生活重要的记录关联起来。",
                ],
                [
                    'icon' => 'journal',
                    'title' => "记住发生过的事",
                    'body' => "通话、聚餐、旅行、艰难的时刻、值得留下的小细节，都可以加入日记，它会自然地与联系人、日期和提醒关联。",
                ],
                [
                    'icon' => 'tag',
                    'title' => "从别人搭好的结构开始",
                    'body' => "安装社区创建的现成模板，随意调整，并完全掌控你自己的版本。",
                ],
                [
                    'icon' => 'code',
                    'title' => "构建在开放的基础之上",
                    'body' => "界面里能做的一切，也都能通过 API 完成。Monica 将更容易集成、自动化和扩展，不必依赖隐藏的或私有的接口。",
                ],
                [
                    'icon' => 'phone',
                    'title' => "在任何屏幕上都好好使用 Monica",
                    'body' => "Web 应用从一开始就为手机而设计。iOS 和 Android 原生应用也会随后推出，它们是真正的应用，而不是网站的外壳。",
                ],
            ],
        ],

        'principles' => [
            'label' => "不会改变的事",
            'title' => "原则不会被改写。",
            'body' => "Monica v3 很有雄心，但它依然是 Monica。:count 个 GitHub 星标背后的承诺，仍然是基础的一部分。",
            'items' => [
                [
                    'icon' => 'code',
                    'title' => "开源，并且会一直开源",
                    'body' => "Monica 将保持完全开源，并可自托管。代码可以阅读、修改、派生和贡献，和今天完全一样。",
                ],
                [
                    'icon' => 'lock',
                    'title' => "你的数据始终属于你",
                    'body' => "没有广告。不出售个人数据。不用你的联系人训练模型。你的私人生活不是一门生意。",
                ],
                [
                    'icon' => 'download',
                    'title' => "全部可导出",
                    'body' => "你可以随时导出自己的信息，包括你创建的自定义结构、分区和字段。",
                ],
                [
                    'icon' => 'people',
                    'title' => "为每个人都能使用而打造",
                    'body' => "键盘导航、屏幕阅读器、本地化和响应式布局都是产品的基本要求，而不是拖到以后再做的事。",
                ],
                [
                    'icon' => 'arrow-right',
                    'title' => "不会丢下现有用户",
                    'body' => "我们的目标是为现有的 Monica 账户提供清晰的迁移路径，包括联系人、笔记、提醒和其他重要信息。",
                ],
            ],
        ],

        'follow' => [
            'title' => "从一开始就关注这次重建。",
            'body' => "Monica v3 仍在开发中，许多重要的决定都是公开做出的。关注代码仓库，就能看到工作的进展。",
            'note' => "开源 · 可自托管 · 公开构建",
            'cta' => "在 GitHub 上关注 Monica",
        ],
    ],

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
            'pill' => "Rachel、Ross、Chandler、Joey，还有那只鸭子",
            'title' => "记住你在乎的人。",
            'subtitle' => "我们是一个开源的个人 CRM。",
            'lede' => "默认注重隐私。开源。可自托管。没有广告，不转售数据，也没有尴尬的“互动”通知。",
            'start' => "开始使用 Monica",
            'github' => "在 GitHub 上查看",
            'sales' => "联系销售",
            'salesJoke' => "开玩笑的。",
            'salesTruth' => "我们没有销售团队。",
        ],

        'product' => [
            // Read out in place of the picture, which is drawn in markup but is
            // a picture of the product rather than a working copy of it.
            'label' => "Monica 打开着 Phoebe Buffay 的页面：两个重要日期、她的关系、关于她的最新笔记和三个礼物创意。",
            'vault' => "家人",
            'nav' => ["仪表盘", "联系人", "提醒", "日记", "礼物创意", "设置"],
            'vaultsLabel' => "保险库",
            'vaults' => ["家人", "朋友", "Central Perk"],
            'search' => "搜索联系人",
            'add' => "添加联系人",
            'meta' => "Ursula 的双胞胎妹妹 · 纽约 · 认识 10 年",
            'tabs' => ["概览", "时间线", "笔记", "礼物创意"],
            'datesTitle' => "重要日期",
            'dates' => [
                ['title' => "生日", 'date' => "1966 年 2 月 16 日", 'when' => "四个月后"],
                ['title' => "结婚纪念日", 'date' => "2004 年 2 月 12 日", 'when' => "四个月后"],
            ],
            'relationshipsTitle' => "关系",
            'relationships' => [
                ["Phoebe 是 ", "Ursula", " 的双胞胎妹妹。"],
                ["Phoebe 是 ", "Mike", " 的妻子。"],
            ],
            'noteTitle' => "最新笔记",
            'note' => "写了一首关于猫的新歌。非常得意。别提那股味道。",
            'noteWhen' => "六天前",
            'giftsTitle' => "礼物创意",
            'gifts' => ["吉他弦", "按摩油", "无香猫砂"],
        ],

        'awards' => [
            'label' => "网上的陌生人都说好",
            'github' => "GitHub Trending：当日第 1 名仓库",
            'hn' => "Hacker News：历史得票最高链接第 65 名",
            'ph' => "Product Hunt：当日第 4 名产品",
        ],

        'agents' => [
            'eyebrow' => "MCP 服务器与 REST API",
            'title' => "把 Monica 当作你的智能体的后端。",
            'body' => "我们没有内置任何 AI，以后也不会有，但如果你愿意，可以让你自己的智能体访问你的数据。",
            'mcp' => "查看 MCP 文档",
            'api' => "查看 API",
            'prompt' => "Rachel 生日我该送她什么？",
            'answer' => "Rachel 的生日还有 23 天。",
            'saved' => "你在 7 月存了两个创意：",
            'ideas' => ["她在 Bloomingdale’s 指过的那条围巾", "除了“利弊清单”以外的任何东西"],
            'ask' => "记一下，我今天和 Joey 在 Central Perk 喝了咖啡。",
            'used' => "已使用 Monica",
            'reply' => "好了。已在 Joey 的时间线上 10 月 11 日添加“喝咖啡”。",
        ],

        'features' => [
            'title' => "我们提供的部分功能",
            'lede' => "记录你生活点滴所需的一切",
            'reminders' => [
                'title' => "在生日变成“迟到的祝福”之前。",
                'body' => "为日期、电话和承诺设置提醒。通过邮件，准时送达。",
                'rows' => [
                    ['name' => "Rachel Green", 'what' => "生日", 'when' => "23 天后"],
                    ['name' => "Chandler Bing", 'what' => "回电话聊感恩节的事", 'when' => "明天"],
                    ['name' => "Joey Tribbiani", 'what' => "还房租", 'when' => "已逾期六年"],
                ],
            ],
            'relationships' => [
                'title' => "谁是谁，谁的谁。",
                'body' => "家谱、前任、教父教母。都写成句子。",
                'sentences' => [
                    ["Monica 是 ", "Ross", " 的姐姐。"],
                    ["Ross 是 ", "Rachel", " 的“龙虾”。"],
                    ["Joey 是 ", "所有人", " 的室友。"],
                ],
            ],
            'gifts' => [
                'title' => "礼物创意，7 月就存好。",
                'body' => "这样 12 月就不用手忙脚乱。",
                'ideas' => ["一张桌上足球桌", "那本关于恐龙的书"],
                'crossed' => "一份利弊清单",
            ],
            'notes' => [
                'title' => "还能再找到的笔记。",
                'body' => "搜索每个人的每一条笔记。",
                'query' => "过敏",
                'who' => "Ross：",
                'match' => "对猕猴桃过敏。Monica 总是忘记。",
            ],
            'details' => [
                'title' => "记得那只小鸡和那只鸭子。",
                'body' => "宠物、孩子、工作、饮食偏好。那些重要的细节。",
                'fields' => [
                    ['label' => "宠物", 'value' => "一只小鸡和一只鸭子"],
                    ['label' => "咖啡", 'value' => "Central Perk，每天"],
                ],
            ],
            'vaults' => [
                'title' => "每个圈子一个保险库。",
                'body' => "家人、朋友、工作。彼此分开，只与你邀请的人共享。",
                'vaults' => [
                    ['name' => "家人", 'count' => "24 人"],
                    ['name' => "朋友", 'count' => "61 人"],
                    ['name' => "Central Perk", 'count' => "6 人"],
                ],
            ],
        ],

        'privacy' => [
            'eyebrow' => "隐私",
            'title' => "和这个领域的其他玩家不同，我们在乎你的隐私。",
            'aside' => "非常在乎。",
            'source' => [
                'title' => "开源",
                'body' => "审阅我们的代码库，确认我们没有做蠢事。",
                'comment' => "// 我们与第三方分享的内容",
            ],
            'trackers' => [
                'title' => "没有广告，没有追踪器那一套烂事",
                'body' => "没什么可卖的，也没有人可卖。",
                'label' => "第三方请求",
                'rows' => ["广告", "分析", "数据经纪商", "指纹识别"],
            ],
            'selfHost' => [
                'title' => "我们建议你自托管",
                'body' => "一条 Docker 命令。你的服务器，你的规则，你的隐私。",
                'pulling' => "正在拉取镜像…… 完成",
                'running' => "正在你的服务器上运行",
            ],
        ],

        // The prices themselves are not here: the Cloud card reads them from
        // `pricing.prices`, so the homepage and the pricing page cannot quote
        // two different numbers.
        'pricing' => [
            'badge' => "没有广告",
            'badgeText' => "所有方案都可以导出你的数据。",
            'title' => "想怎么付就怎么付。或者不付。",
            'lede' => "自己托管，免费使用；或者交给 Monica 为你运行。",
            'selfHost' => [
                'title' => "自托管",
                'price' => "免费",
                'per' => "永久",
                'items' => ["全部功能，没有限制", "一条命令完成 Docker 部署", "完全掌控你的数据", "你就是 IT 部门"],
                'cta' => "阅读文档",
            ],
            'cloud' => [
                'title' => "云端",
                'billingLabel' => "计费周期",
                'monthly' => "按月",
                'yearly' => "按年",
                'perMonth' => "每月",
                'perYear' => "每年",
                'yearlyNote' => "免费两个月",
                'lifetime' => "终身",
                'once' => "一次性",
                'lifetimeNote' => "无需定期付款",
                'items' => ["托管服务", "自动更新与备份", "联系人和保险库数量不限", "随时取消"],
                'cta' => "开始使用 Monica",
            ],
        ],

        'faq' => [
            'title' => "常见问题解答。",
            'items' => [
                ['q' => "这是销售 CRM 吗？", 'a' => "不是。这里没有人有销售管道。Monica 是为家人、朋友，以及你想保持联系的人准备的。"],
                ['q' => "自托管真的免费吗？", 'a' => "是的。全部功能，没有限制，采用 AGPL-3.0 许可。你只需要提供服务器。"],
                ['q' => "谁能看到我的数据？", 'a' => "你，以及你邀请进保险库的人。没有广告，没有追踪器，不转售数据。自托管的话，数据永远不会离开你的服务器。"],
                ['q' => "可以在云端和自托管之间迁移吗？", 'a' => "可以，双向都行。导出全部内容，在另一边导入即可。"],
                ['q' => "它能配合我的 AI 智能体使用吗？", 'a' => "只要它支持 MCP，就可以。其他情况还有完整的 REST API。"],
            ],
        ],
    ],

    'pricing' => [
        // The four prices, as a reader sees them. Everything below quotes them
        // through :free, :monthly, :yearly and :lifetime, and the homepage
        // reads them from here, so a price change is one edit per language
        // (plus `plans` in config.php, for the structured data).
        'prices' => [
            'free' => "\$0",
            'monthly' => "\$9",
            'yearly' => "\$90",
            'lifetime' => "\$150",
        ],

        'hero' => [
            'badge' => "不按联系人收费",
            'badgeText' => "按月付、按年付、一次付清，或者一直不付。",
            'title' => "这样的价格，你不需要设提醒。",
            'lede' => "自己托管，完全免费。让 Monica 替你托管，每月 :monthly 或每年 :yearly。或者一次付 :lifetime，从此不用再想。无论你认识十个人还是一万个人，价格都一样。",
        ],

        'selfHost' => [
            'eyebrow' => "选项一 · 免费",
            'title' => "自托管。免费，而且功能完整。",
            'body' => "Monica 是开源的。一条 Docker 命令，就能在你自己的机器上运行：你的服务器，你说了算，所有功能一应俱全。没有试用期，没有锁定的套餐，也不需要许可证密钥。",
            'items' => [
                "永久免费，采用 AGPL 许可",
                "托管版 Monica 有的功能，这里都有",
                "你的数据不会离开你的硬件",
                "更新与否，由你决定",
            ],
            'cta' => "阅读自托管指南",
            'terminal' => [
                'comment' => "# 拉取，运行，搞定。",
                'pulling' => "正在拉取 monica:latest…",
                'starting' => "正在启动数据库…",
                'running' => "运行于 http://localhost:8080",
                'outro' => "# 现在去添加你妈妈吧。",
            ],
        ],

        'plans' => [
            'title' => "三种方式。都很公道。",
            'lede' => "自己运行、按期付费，或者一次付清。每个方案都包含全部功能。你只是在选择由谁来照看服务器。",
            'footnote' => "价格以美元计。需要时，税费会在结账时加上。任何方案都不按联系人、提醒或保险库收费。",

            'selfHost' => [
                'title' => "自托管",
                'body' => "适合已经有服务器的人，或者想找个理由搭一台的人。",
                'per' => "永久",
                'items' => [
                    "完整源代码，AGPL",
                    "联系人和保险库不限量",
                    "备份和更新由你负责",
                    "社区支持",
                ],
                'cta' => "自托管指南",
            ],

            'hosted' => [
                'title' => "托管版",
                'badge' => "最多人选择",
                'body' => "适合希望 Monica 一直就在那里的人。",
                'billingLabel' => "计费周期",
                'monthly' => "按月",
                'yearly' => "按年",
                'perMonth' => "/ 月",
                'perYear' => "/ 年",
                'yearlyNote' => "免费 2 个月",
                'items' => [
                    "联系人、提醒、保险库不限量",
                    "自动更新和每日备份",
                    "通过邮件发送提醒",
                    "由真人提供的邮件支持",
                    "随时取消，导出全部数据",
                ],
                'cta' => "从 Monica 开始",
            ],

            'lifetime' => [
                'title' => "终身",
                'badge' => "一次付清",
                'body' => "适合不想再为此操心的人。",
                'per' => "一次",
                'items' => [
                    "包含托管版的一切",
                    "一次付款，无需续费",
                    "包含未来的每个版本",
                    "随时可以转为自托管",
                ],
                'cta' => "一次付清，:lifetime",
            ],
        ],

        'calculator' => [
            'eyebrow' => "基于人际关系的价格计算器",
            'title' => "你的社交生活该值多少钱？",
            'lede' => "告诉它你生活中的人。它会权衡十一项极其私人的因素，给出一个公平、量身定制、完全科学的价格。",

            'sliders' => [
                'people' => ['label' => "你想记住的人", 'help' => "邓巴说是 150 个。邓巴没见过你的那些远房亲戚。"],
                'birthdays' => ['label' => "去年你忘掉的生日", 'help' => "包括那个你在晚上 11:48 才想起来的。"],
                'coffee' => ['label' => "你说过“找时间喝杯咖啡”的次数", 'help' => "然后并没有去喝咖啡。"],
                'cousins' => ['label' => "叫不出名字的表亲家孩子", 'help' => "你知道其中有个 Leo。也许有两个。"],
                'reminders' => ['label' => "你会设置的提醒", 'help' => "Monica 会把每一条都发给你。"],
                'mum' => ['label' => "每月给妈妈打电话的次数", 'help' => "不管你打不打，她都有数。"],
            ],

            'toggles' => [
                'pretend' => ['label' => "你假装记得过某个人的名字", 'help' => "“嘿……你好啊。”"],
                'notes' => ['label' => "你在手机里记着关于别人的笔记", 'help' => "Monica 就是这个想法，再加上日期。"],
                'dentist' => ['label' => "你知道牙医的名字", 'help' => "说实话，挺厉害。"],
                'belated' => ['label' => "你发过“迟到的生日快乐”", 'help' => "人人都发过。有些人发得更多。"],
            ],

            'social' => [
                'label' => "你的社交生活",
                'help' => "按倍数计算，因为倍数就是这么用的。",
                'options' => [
                    'hermit' => "隐士",
                    'reasonable' => "适度",
                    'mayor' => "镇长",
                ],
            ],

            'quote' => "你的专属报价",
            'planLabel' => "方案",
            'plans' => [
                'monthly' => "按月",
                'yearly' => "按年",
                'lifetime' => "终身",
            ],

            // :count is a slider's value, :rate a made-up price per unit.
            'lines' => [
                'base' => [
                    'monthly' => "Monica，按月",
                    'yearly' => "Monica，按年",
                    'lifetime' => "Monica，终身",
                ],
                'people' => ":count 个人 × :rate",
                'reminders' => ":count 条提醒",
                'birthdays' => ":count 个被忘掉的生日 × :rate 内疚费",
                'coffee' => ":count 杯纸上谈兵的咖啡 × :rate",
                'cousins' => ":count 个叫不出名字的表亲家孩子 × :rate",
                'mum' => ":count 次给妈妈的电话 × :rate 抵扣",
                'pretend' => "假装记得名字附加费",
                'notes' => "从笔记应用迁移",
                'dentist' => "熟悉牙医奖励",
                'belated' => "“迟到的生日快乐”补救费",
                'multiplier' => "社交生活倍数 ×:rate",
                'included' => "已包含",
                'free' => "免费",
            ],

            'subtotal' => "小计",
            'refund' => "基于人际关系的定价",
            'refundHelp' => "Monica 没有这回事。全额扣除。",
            'total' => "你的总价",
            'per' => [
                'monthly' => "/ 月",
                'yearly' => "/ 年",
                'lifetime' => "一次",
            ],

            'verdicts' => [
                'birthdays' => "明年的 :count 个生日，全都有人记着。",
                'coffee' => "去喝一杯那些咖啡吧。",
                'mum' => "给你妈妈打个电话。报价可以等。",
                'default' => "和其他人一样。这正是重点。",
            ],

            'cta' => "锁定这个可疑的价格",
            'reset' => "忘掉一切，重新开始",
            'footnote' => "上面的每一行都是编的，只有总价是真的。无论你认识三个人还是三千个人，记得每个生日还是一个也记不住，Monica 的价格都一样。",
        ],

        'promises' => [
            'people' => [
                'title' => "绝不按人头计价",
                'body' => "认识新朋友不该花你一分钱。每个方案的联系人、提醒和保险库都不限量。",
            ],
            'export' => [
                'title' => "带着一切离开",
                'body' => "随时导出你的整个账户，带到自托管的 Monica 或任何其他地方。取消只需点一下按钮。",
            ],
            'openSource' => [
                'title' => "自 2017 年起开源",
                'body' => "为托管付费，就是在支持服务器和持续开发 Monica 的人，也包括所有自己托管的用户。",
            ],
        ],

        'ninety' => [
            'eyebrow' => "看看 :yearly 能做什么",
            'title' => "还有什么要花九十美元？",
            'lede' => "一年的托管版 Monica，和人们在忘了某件事之后通常会花钱的地方放在一起比一比。",
            'about' => "约 :yearly",
            'items' => [
                'bouquets' => ['title' => "三束道歉的花", 'body' => "每个忘掉的生日一束。加油站买的那种，顺路带上。"],
                'gift' => ['title' => "一份加急快递的迟到礼物", 'body' => "大部分花费在运费上。全部的代价是内疚。"],
                'coffees' => ['title' => "十八杯咖啡", 'body' => "就是你说过要去喝的那些。Monica 会提醒你真的去喝一杯。"],
                'streaming' => ['title' => "六个月的流媒体会员", 'body' => "那个你都忘了自己订阅过的。"],
                'cards' => ['title' => "给每位表亲寄一张卡片", 'body' => "再加上邮票。再加上弄清楚他们现在住哪儿。"],
                'dinner' => ['title' => "两人晚餐，不点甜点", 'body' => "你终于问起对方过得怎么样，并且认真听。"],
                'addressBook' => ['title' => "一本新的通讯录", 'body' => "皮面，做工讲究，到了春天又弄丢了。"],
                'monica' => ['title' => "一整年记住所有人", 'body' => "生日、孩子的名字、面试进展如何。这一项就是 Monica。"],
            ],
            'footnote' => "价格为大致估算，来自生活经验。一年的 Monica 恰好是 :yearly。",
        ],

        'faq' => [
            'eyebrow' => "关于付费的问题",
            'title' => "常被问起，很少忘记。",
            'intro' => "每个回答都先给出简短版本。如果简短版本让你起疑，再展开详细版本。",
            'search' => "搜索问题",
            'categoriesLabel' => "按主题筛选问题",
            'categories' => [
                'all' => "全部",
                'money' => "费用",
                'plans' => "方案",
                'selfHosting' => "自托管",
                'data' => "你的数据",
                'leaving' => "离开",
            ],
            'progress' => [
                'none' => "已读 0 / :total。从哪里开始都行。",
                'some' => "已读 :count / :total。",
                'many' => "已读 :count / :total。你现在对这件事的了解，比大多数注册的人都多。",
                'all' => "全部 :total 条已读。你都可以去回复客服邮件了。",
            ],
            'random' => "随便问我点什么",
            'emptyTitle' => "没有匹配的问题",
            'emptyBody' => "试试更短的词，或者写信给支持团队。读信的是真人。",
            'items' => [
                ['cat' => 'money', 'q' => "Monica 要多少钱？", 'short' => "免费、:monthly、:yearly 或 :lifetime。", 'a' => "自托管免费。托管版 Monica 每月 :monthly 或每年 :yearly。终身版为 :lifetime，一次付清。每个选项都包含全部功能。"],
                ['cat' => 'money', 'q' => "价格是按用户还是按联系人算？", 'short' => "都不是。", 'a' => "一个账户付一份价格。联系人、提醒、保险库和笔记想加多少就加多少。认识新朋友永远不该花你的钱。"],
                ['cat' => 'money', 'q' => "价格含税吗？", 'short' => "需要时在结账时加上。", 'a' => "如果你所在的国家需要缴纳销售税或增值税，会在付款前显示出来，所以你同意的数字就是你被收取的数字。"],
                ['cat' => 'money', 'q' => "可以用其他货币付款吗？", 'short' => "价格以美元计。", 'a' => "结账时由你的发卡机构换算。美元金额年复一年保持不变。"],
                ['cat' => 'money', 'q' => "价格会上涨吗？", 'short' => "你已有的方案不会。", 'a' => "如果面向新客户的价格有变动，现有订阅保持原价。我们会提前很久通过邮件通知你，并附上具体数字。"],
                ['cat' => 'money', 'q' => "有折扣吗？", 'short' => "按年付便宜两个月。", 'a' => "按年付费是 :yearly，而不是 \$108。学生和非营利组织可以写信给支持团队。自托管仍然是最大的折扣：100%。"],
                ['cat' => 'plans', 'q' => "有终身方案吗？", 'short' => "有。:lifetime，一次付清。", 'a' => "终身版就是无需续费的托管版 Monica。只要托管版 Monica 还在，就包含未来的每个版本，你也可以随时转为自托管。"],
                ['cat' => 'plans', 'q' => "托管版和自托管版有区别吗？", 'short' => "同一个 Monica。", 'a' => "同样的代码，同样的功能。唯一的区别在于，由谁来运行服务器、安装更新和保管备份。"],
                ['cat' => 'plans', 'q' => "有企业方案吗？", 'short' => "没有。", 'a' => "Monica 是为你自己的生活准备的个人 CRM。销售团队用销售工具会更合适。"],
                ['cat' => 'selfHosting', 'q' => "Monica 真的是开源的吗？", 'short' => "是的，自 2017 年起。", 'a' => "完整源代码在 AGPL 下公开。你可以阅读、运行、修改，也可以参与贡献。"],
                ['cat' => 'selfHosting', 'q' => "自托管免费吗？", 'short' => "完全免费。", 'a' => "没有许可证密钥，没有功能限制，没有试用期。你只需要为自己的服务器（如果有的话）和自己的时间付出成本。"],
                ['cat' => 'selfHosting', 'q' => "可以从托管版转到自托管吗？", 'short' => "可以，随时。", 'a' => "导出你的账户，再导入到你自己的 Monica。两边的格式相同，所以途中不会丢失任何东西。"],
                ['cat' => 'selfHosting', 'q' => "订阅是否支持这个开源项目？", 'short' => "直接支持。", 'a' => "托管收入用于支付服务器，以及持续开发 Monica 的人，包括自托管用户免费使用的那些部分。"],
                ['cat' => 'data', 'q' => "Monica 会保存我的支付信息吗？", 'short' => "不会。", 'a' => "付款由支付处理方负责。Monica 从不查看或保存你的银行卡号。"],
                ['cat' => 'data', 'q' => "我的数据会被用于广告吗？", 'short' => "绝不会。", 'a' => "没有广告，没有追踪器，也没有第三方在读你写下的关于家人的内容。"],
                ['cat' => 'data', 'q' => "我的数据会被用来训练 AI 模型吗？", 'short' => "不会。", 'a' => "你写下的关于生活中那些人的内容不是训练素材，无论对 Monica 还是对与 Monica 合作的任何一方都是如此。"],
                ['cat' => 'data', 'q' => "包含备份吗？", 'short' => "托管方案每天备份。", 'a' => "托管版和终身版账户每天都会备份。自托管的 Monica，备份由你自己安排。"],
                ['cat' => 'data', 'q' => "可以导出全部内容吗？", 'short' => "全部。", 'a' => "联系人、笔记、提醒、关系、文件。每个方案都可以导出，取消之后也可以。"],
                ['cat' => 'leaving', 'q' => "可以随时取消吗？", 'short' => "可以，点一下按钮即可。", 'a' => "不用打电话，不用填挽留表单。你的账户在已付费周期结束前仍然可用。"],
                ['cat' => 'leaving', 'q' => "取消要收费吗？", 'short' => "不收。", 'a' => "取消不花一分钱。回来也一样。"],
                ['cat' => 'leaving', 'q' => "付款失败会怎么样？", 'short' => "什么都不会消失。", 'a' => "你会收到一封邮件，并有一段宽限期来更新银行卡。你的数据原封不动。"],
                ['cat' => 'leaving', 'q' => "退款是怎么处理的？", 'short' => "30 天内提出即可。", 'a' => "如果 Monica 不适合你，在付款后 30 天内写信给支持团队，款项将全额退还。"],
                ['cat' => 'leaving', 'q' => "可以删除我的账户吗？", 'short' => "可以，永久删除。", 'a' => "删除账户会从服务器上移除你的数据。包含这些数据的备份会按正常周期过期。"],
            ],
        ],
    ],

    'personalCrm' => [
        'eyebrow' => "实用指南",
        'title' => "什么是个人 CRM？",
        'lede' => "个人 CRM 是一个私密的地方，用来记住你生活中那些人的背景：他们对你说过什么，什么对他们重要，以及你打算跟进什么。",
        'intro' => "和销售 CRM 不同，它为关系而建，而不是为销售管道。重点不是管理人，而是给你的记忆一点帮助，让你带着更多背景去见面。",

        'toc' => [
            'label' => "本指南内容",
            'items' => [
                ['id' => 'definition', 'title' => "简短定义"],
                ['id' => 'comparison', 'title' => "与其他工具有何不同"],
                ['id' => 'contents', 'title' => "里面可以记些什么"],
                ['id' => 'fit', 'title' => "适合哪些人"],
                ['id' => 'approaches', 'title' => "主要的思路"],
                ['id' => 'history', 'title' => "它从何而来"],
                ['id' => 'privacy', 'title' => "隐私与伦理"],
                ['id' => 'hosting', 'title' => "云端还是自托管"],
                ['id' => 'choosing', 'title' => "如何选择"],
                ['id' => 'monica', 'title' => "Monica 的思路"],
            ],
        ],

        'definition' => [
            'label' => "简短定义",
            'title' => "个人 CRM 记住的，不只是联系方式。",
            'body' => "你的通讯录能告诉你 Sam 的电话号码。个人 CRM 还能提醒你，Sam 正在为半程马拉松训练，她女儿叫 Maya，而你答应过要把那本书的名字发给她。",
            'body2' => "它把事实和一段关系的历史联系起来。视工具而定，可以包括笔记、对话、活动、重要日期、提醒、人与人之间的关系，以及你认为重要的自定义信息。",
            'aside' => "好用的个人 CRM 帮你记住。它不会去判断一个人值多少钱。",
        ],

        'comparison' => [
            'label' => "三种不同的工作",
            'title' => "通讯录、个人 CRM 和传统 CRM 并不是一回事。",
            'body' => "三者都存储关于人的信息，但围绕的问题各不相同。把它们统称为联系人管理，就掩盖了最重要的部分：这些信息是拿来做什么的。",
            'cards' => [
                [
                    'title' => "通讯录",
                    'question' => "我怎样才能联系到这个人？",
                    'body' => "姓名、电话号码、邮箱地址、通信地址，也许还有生日。简单、熟悉，对很多人来说已经够用。",
                ],
                [
                    'title' => "个人 CRM",
                    'question' => "我想记住哪些背景？",
                    'body' => "这个人、你们的关系、发生过什么，以及你之后想记住或去做的事。",
                ],
                [
                    'title' => "传统 CRM",
                    'question' => "这位客户的关系进展如何？",
                    'body' => "线索、客户账户、交易、服务请求、收入、团队活动，以及业务流程的各个阶段。",
                ],
            ],
            'tableTitle' => "个人 CRM 与传统 CRM 对比",
            'tableHeadings' => ["", "个人 CRM", "传统 CRM"],
            'rows' => [
                ["主要目的", "记住个人背景并跟进落实", "协调销售、营销或客户服务"],
                ["涉及的人", "朋友、家人、邻居、同事，以及你生活中的其他人", "线索、客户、客户账户和商务联系人"],
                ["典型信息", "关系、回忆、对话、日期、笔记和提醒", "交易、收入、营销活动、支持历史和销售管道阶段"],
                ["成功的样子", "需要的时候，你手边有需要的背景", "业务流程向前推进，并且可以衡量"],
                ["通常由谁使用", "一个人，有时是一个家庭", "一家公司或一个团队"],
            ],
            'closing' => "传统 CRM 在它被设计的工作上是有用的工具。麻烦出在把销售的语言和激励带进私人生活。你的朋友不是线索，安静的一个月也不是停滞的销售管道。",
        ],

        'contents' => [
            'label' => "里面放什么",
            'title' => "留下足够有用的背景，不要更多。",
            'body' => "个人 CRM 可能变成对别人生活的详细记录。这是要有所取舍的理由，而不是把每个字段都填满的理由。存下一条信息，是因为它能帮你记住或跟进，而不是因为软件给了你一个空格子。",
            'groups' => [
                ['title' => "身份和联系方式", 'body' => "姓名、人称代词、电话号码、邮箱地址、所在地，以及对方实际使用的称呼。"],
                ['title' => "关系", 'body' => "你们怎么认识的，与对方有联系的人，以及有助于理解其余信息的家庭或同住关系。"],
                ['title' => "重要日期", 'body' => "生日、纪念日、搬家、毕业，或者任何对那个人或你们共同经历很重要的日子。"],
                ['title' => "对话和笔记", 'body' => "你们聊过什么，对方推荐过的东西，对方说起的一件烦心事，或者你不想再问第三遍的一个细节。"],
                ['title' => "活动和回忆", 'body' => "聚餐、通话、旅行、拜访、项目，以及其他你之后可能想放回时间线上的时刻。"],
                ['title' => "承诺和提醒", 'body' => "你许下的一个承诺，借出或借来的东西，一个礼物点子，或者一条提醒你问问某件事进展如何的提醒。"],
            ],
            'note' => "敏感信息值得设更高的门槛。如果把它读给当事人听时，记录它会让人觉得是一种背叛，那种感觉本身就是有用的信息。",
        ],

        'example' => [
            'label' => "一个小例子",
            'title' => "使用个人 CRM 实际是什么样子",
            'body' => "有用的部分通常很平常。它与其说是建一个完美的数据库，不如说是把你的记忆本来会留着不管的小事一件件收尾。",
            'steps' => [
                ["number" => "01", 'title' => "朋友提到一场面试", 'body' => "聊完之后，你记一条简短的笔记。不是逐字记录，只是你想记住的背景。"],
                ["number" => "02", 'title' => "你设置一条提醒", 'body' => "提醒与这个人关联，在面试结束后出现，那时去问一句最合适。"],
                ["number" => "03", 'title' => "你带着背景去跟进", 'body' => "你问起面试怎么样，因为你在乎。软件记住了时间，而这段关系仍然是你的。"],
            ],
        ],

        'fit' => [
            'label' => "适合度",
            'title' => "有些人需要一个。很多人并不需要。",
            'body' => "个人 CRM 只有在解决真实的记忆或跟进问题时，才值得拥有。它应该减轻你的心理负担，而不是制造一项新的行政爱好。",
            'goodTitle' => "如果你符合以下情况，它可能有帮助……",
            'good' => [
                "在乎的人多到无法可靠地装在工作记忆里；",
                "朋友或家人分散在不同的城市、国家或人生阶段；",
                "经常忘记名字、日期、承诺，或者别人分享的细节；",
                "做导师、做志愿者、组织社区，或者照顾一个大家庭；",
                "想要一个私密的地方，收拢散落在笔记和日历里的关系背景。",
            ],
            'notTitle' => "如果你符合以下情况，可能不需要……",
            'not' => [
                "通讯录和日历已经涵盖了你会忘的事；",
                "维护记录比它要解决的问题更让你觉得沉重；",
                "你只想要一个存电话号码和生日的地方；",
                "你想要团队销售管道、群发触达、销售预测或客户分析。这些工作更适合用传统 CRM。",
            ],
        ],

        'approaches' => [
            'label' => "一个有用的框架",
            'title' => "不同的个人 CRM 有不同的取舍。",
            'body' => "个人 CRM 是一个宽泛的类别，而不是一套标准规范。下面这些思路是比较产品的一种方式，不是行业的官方标签。许多工具会同时结合其中几种。",
            'items' => [
                ['title' => "人脉优先", 'body' => "围绕职场人脉、引荐和保持联系来构建。当工作依赖许多长期关系时很有用，但可能把销售语言带进私人生活。"],
                ['title' => "自动化优先", 'body' => "从邮件、日历、社交账户或其他服务中提取背景。它减少了手动录入，同时要求更广泛的访问权限，有时收集的内容也超出你的本意。"],
                ['title' => "效率优先", 'body' => "把跟进当作任务和周期性提醒。清晰、可执行，但如果每次互动都成了一项义务，关系就可能开始像一个收件箱。"],
                ['title' => "记忆优先", 'body' => "以笔记、活动、日期和共同的历史为核心。它需要你更有意识地录入，但哪些内容成为记录的一部分，由你决定。"],
                ['title' => "个人数据库", 'body' => "让你自己设计记录、字段和关联。足够灵活，能适应不寻常的生活，代价是更多的设置和维护。"],
            ],
        ],

        'history' => [
            'label' => "简史",
            'title' => "个人 CRM 借用了商业软件的记忆，然后改变了它的用途。",
            'body' => "个人 CRM 并没有公认的发明者。这个类别是从通讯录、联系人管理器、商业 CRM 软件和个人信息工具中逐渐生长出来的。",
            'items' => [
                ['date' => "软件出现之前", 'title' => "人们把关系背景记在纸上", 'body' => "通讯录、往来信件档案、日历和做了批注的卡片，把联系方式和“记住其他一切”这件靠不住的事分开来。"],
                ['date' => "1987", 'title' => "联系人管理进入个人电脑", 'body' => "Act! 把它的第一款联系人管理产品追溯到 1987 年。在 CRM 成为通用术语之前，早期工具常被描述为数字化的 Rolodex。"],
                ['date' => "1990 年代中期", 'title' => "CRM 成为一个商业类别", 'body' => "学术史把“客户关系管理”这一术语的出现定在 1990 年代中期，当时联系人记录成了更大的销售和服务系统的一部分。"],
                ['date' => "1999 年起", 'title' => "CRM 走向云端", 'body' => "Salesforce 于 1999 年推出基于网页的 CRM。云软件让共享记录、自动更新和集成成为这个类别的常态。"],
                ['date' => "2010 年代", 'title' => "个人 CRM 成为一个可识别的标签", 'body' => "新产品把其中一些思路用到个人的职业和私人关系上。到 2019 年，这个类别已经足够成熟，既引来了热情，也引来了对“优化友谊”的不安。"],
            ],
            'sourcesLabel' => "本时间线的来源",
            'sources' => [
                ['label' => "Act! 公司历史", 'url' => 'https://www.act.com/about-us/'],
                ['label' => "CRM 的学术史", 'url' => 'https://www.sciencedirect.com/science/article/pii/S0963868707000182'],
                ['label' => "Salesforce 公司历史", 'url' => 'https://www.salesforce.com/company/our-story'],
                ['label' => "Axios 关于 2019 年个人 CRM 的报道", 'url' => 'https://www.axios.com/2019/08/27/startups-new-frontier-optimizing-your-friendships'],
            ],
        ],

        'privacy' => [
            'label' => "隐私与伦理",
            'title' => "账户是你的。里面的很多信息，却是关于别人的。",
            'body' => "这让个人 CRM 格外敏感。它可能包含地址、家庭关系、私人对话、健康细节，或者别人私下托付的回忆。密码是必要的，但良好的判断在任何东西被保存之前就该开始了。",
            'principles' => [
                ['title' => "少收集", 'body' => "只保留有明确用途的内容。更完整不等于更有用。"],
                ['title' => "尊重最初的情境", 'body' => "私下对话中分享的信息，不会因为你能复制它，就变成可以用来补充、分析或扩散的对象。"],
                ['title' => "了解自动化会把数据送往何处", 'body' => "邮件同步、转写、信息补全和 AI 功能可能涉及其他服务。弄清楚什么数据离开了应用、为什么、保留多久，以及是否被用于训练模型。"],
                ['title' => "为丢失和离开做好准备", 'body' => "使用严格的访问控制和备份。确保你能以有用的格式导出数据，并在离开时将其删除。"],
                ['title' => "为可能的读者而写", 'body' => "一个好的检验方法是：你能否当着笔记所描述的那个人的面解释这条笔记，而不必躲在软件后面。"],
            ],
            'closing' => "个人 CRM 本身既不一定体贴，也不一定令人毛骨悚然。区别往往在于你收集什么、信息是怎么进来的、谁能访问，以及你用它来做什么。",
        ],

        'hosting' => [
            'label' => "在哪里运行",
            'title' => "云端和自托管，只是把责任挪了个位置。",
            'body' => "托管服务由服务商来运营应用。自托管让你掌控服务器，并把服务商从日常运营中拿掉。两种选择都不会自动更安全。安全取决于更新、访问控制、备份、监控，以及负责这些的人。",
            'tableHeadings' => ["", "托管服务", "自托管"],
            'rows' => [
                ["维护", "服务商运行并更新服务", "你自己安装、更新和监控"],
                ["控制权", "你在服务商的产品和政策范围内使用", "你控制服务器、配置和部署"],
                ["备份", "通常由服务商管理；请确认包含哪些内容", "你自己配置、保护并测试"],
                ["可用性", "通常无需管理基础设施即可访问", "取决于你所运营的基础设施"],
                ["数据位置", "取决于服务商及其子处理方", "取决于你选择的服务器和服务"],
                ["最适合", "你想用这个工具，但不想运营一项服务", "你有能力也有意愿自己来运营"],
            ],
            'note' => "自托管给你更多控制权，也给你更多犯严重错误的机会。选择它，是因为你愿意承担这份责任，而不是因为这个标签本身让人觉得安全。",
        ],

        'choosing' => [
            'label' => "选择工具之前",
            'title' => "先想好你想养成的习惯，再去审视软件。",
            'body' => "最长的功能清单，很少能告诉你哪款个人 CRM 经得起你真实生活的考验。一个你一直在用的朴素工具，胜过一套你不愿打开的完美系统。",
            'questions' => [
                ['title' => "你想让它帮你记住什么？", 'body' => "名字和日期所需的工具，与详细的历史记录、跟进提醒或灵活的个人数据库所需的并不相同。"],
                ['title' => "记录要花多少功夫？", 'body' => "想清楚你更喜欢有意识的手动笔记、大范围的自动导入，还是介于两者之间。"],
                ['title' => "它请求哪些访问权限？", 'body' => "查看它是否会读取邮件、日历、联系人、社交账户或消息，以及每项权限是否必要。"],
                ['title' => "它如何使用 AI？", 'body' => "弄清楚哪些数据被发送给了哪家模型服务商、保留了什么、是否允许用于训练，以及该功能能否关闭。"],
                ['title' => "你能离开吗？", 'body' => "留意是否支持完整导出、格式是否易懂、能否删除账户，以及产品是否有可信的长期维护计划。"],
                ['title' => "谁来运营它？", 'body' => "比较托管服务的便利，与自托管带来的控制权和工作量。把备份和更新也算进决定里。"],
                ['title' => "它能适应你的人际关系吗？", 'body' => "固定字段可能更简单。自定义记录可能更合适。选你真正会用到的灵活程度。"],
            ],
        ],

        'monica' => [
            'label' => "Monica 的观点",
            'title' => "记忆胜过自动化。关系胜过人脉。",
            'body' => "Monica 是对个人 CRM 这个问题的一种回答，而不是这个类别的定义。它始于一个简单的想法：记住那些能帮你关心朋友和家人的细节，而不把这些人变成潜在客户，也不把他们的生活交给广告系统。",
            'principles' => [
                ['title' => "背景比联系数据更重要", 'body' => "Monica 把人与笔记、活动、提醒、重要日期以及他们周围的关系联系起来。"],
                ['title' => "由你决定哪些内容进入记录", 'body' => "Monica 偏向有意识的记忆，而不是无形的信息补全。目标不是摄入所有可能的信号。"],
                ['title' => "所有权是产品的一部分", 'body' => "Monica 是开源的，可以自托管，也为不想运行服务器的人提供托管选项。"],
                ['title' => "不同的生活需要不同的结构", 'body' => "Monica v3 正围绕更可自定义的记录和关联来构建，同时保持项目的隐私和所有权原则。"],
            ],
            'currentCta' => "看看 Monica 能记住什么",
            'v3Cta' => "了解 Monica v3",
            'privacyCta' => "阅读 Monica 的隐私政策",
            'finalTitle' => "个人 CRM 应该帮你留意身边的人，然后退到一边。",
            'finalBody' => "如果 Monica 的思路符合你想要记住别人的方式，你可以使用托管服务，也可以自己运行这个开源应用。",
            'primaryCta' => "开始使用 Monica",
            'secondaryCta' => "在 GitHub 上查看 Monica",
        ],

        'faq' => [
            'label' => "常见问题",
            'title' => "在你为自己的社交生活打造“第二大脑”之前，几句坦诚的回答。",
            'items' => [
                ['q' => "使用个人 CRM 是不是有点让人毛骨悚然？", 'a' => [
                    "有可能。悄悄收集敏感信息、不加留意地导入私人对话，或者给人打分，对很多人来说都越过了合理的界限。",
                    "一小套私密的笔记和提醒，也可以只是普通的记忆辅助。你收集什么、信息怎么来的、怎么使用，比它叫什么更重要。",
                ]],
                ['q' => "我可以用通讯录、日历或笔记应用来代替吗？", 'a' => "可以。如果这些工具能解决问题，就继续用它们。当你希望把人、背景、历史和跟进连在同一个地方时，个人 CRM 才变得有用。"],
                ['q' => "个人 CRM 只适合职场人脉吗？", 'a' => "不是。有些产品主要为职业关系而建，另一些则专注于朋友、家人、社区，或者几者混合。合适的选择取决于你实际拥有的人际关系和习惯。"],
                ['q' => "自托管更私密吗？", 'a' => "它可以减少涉及的服务商数量，并给你更多控制权。但它不会替你配置更新、备份、加密或访问控制。隐私和安全仍取决于系统是如何运营的。"],
                ['q' => "我应该记录多少信息？", 'a' => "从能解决你问题的最少量开始。对很多人来说，日期、几条笔记和偶尔的提醒就够了。只有当结构值得它的维护成本时，再增加结构。"],
            ],
        ],
    ],

    /**
     * The people in the drawings on the feature pages. Every drawing reads a
     * name from here, so a name is spelled one way per language.
     * `listSeparator` joins a list of names in running text.
     */
    'cast' => [
        'rachel' => ['first' => "Rachel", 'full' => "Rachel Green"],
        'ross' => ['first' => "Ross", 'full' => "Ross Geller"],
        'monica' => ['first' => "Monica", 'full' => "Monica Geller"],
        'chandler' => ['first' => "Chandler", 'full' => "Chandler Bing"],
        'joey' => ['first' => "Joey", 'full' => "Joey Tribbiani"],
        'phoebe' => ['first' => "Phoebe", 'full' => "Phoebe Buffay"],
    ],
    'listSeparator' => "、",

    'templates' => [
        'fields' => [
            'cake' => "最爱的蛋糕",
            'cannotEat' => "不能吃",
            'coffee' => "咖啡口味",
            'shoeSize' => "鞋码",
            'nameDay' => "命名日",
            'giftIdeas' => "礼物点子",
            'idea' => "点子",
            'given' => "已送出",
            'howWeMet' => "我们如何认识",
        ],
        'types' => [
            'shortText' => "短文本",
            'longText' => "长文本",
            'number' => "数字",
            'multipleChoice' => "多选",
            'recurringDate' => "重复日期",
            'repeater' => "重复组",
            'checkbox' => "复选框",
        ],
        'section' => "值得记住的小事",
        'addField' => "添加字段",
        'fieldCount' => ":count 个字段",
        'publish' => "发布此版本",
        'draft' => "草稿",
        'published' => "已发布",
        'friends' => "朋友",

        'hero' => [
            'title' => "你的联系人，你做主。",
            'lede' => "记住对你重要的事。用你自己的字段、分区和标签页来搭建联系人模板，让每个人的页面都有位置，放下你想留住的细节。",
            'cta' => "创建你的账户",
            'label' => "Monica 中 Rachel Green 的联系人页面，停在“小事”标签页上，旁边是“朋友”模板中为这一页提供字段的分区。",
            'meta' => "“朋友”模板 · 3 年前添加",
            'tabs' => ["概览", "联系方式", "小事", "计划"],
            'values' => [
                'cake' => "芝加哥 Mama’s Little Bakery 的芝士蛋糕",
                'cannotEat' => ["龙虾", "生洋葱"],
                'coffee' => "拿铁，在 Central Perk",
                'shoeSize' => "38",
            ],
            'story' => "她在逃婚离开 Barry 的那天，穿着婚纱浑身湿透地闯进了 Central Perk。当晚她就搬了进来。",
            'behind' => "背后的模板",
        ],

        'birthday' => [
            'title' => "生日很有用，知道对方最爱的蛋糕也一样。",
            'body' => "通讯录里存着电话号码。你或许还想记住你们是怎么认识的，对方正在为什么努力，或者有哪种食物他们不能吃。",
            'close' => "用 Monica，联系人页面上放什么，由你来决定。",
            'label' => "通讯录中的一条记录，只有电话号码和生日；旁边是 Monica 里 Ross Geller 的页面，上面还有他最爱的蛋糕、你们如何认识、他正在努力的目标，以及他不能吃的东西。",
            'addressBook' => "通讯录",
            'rows' => [
                ['label' => "电话", 'value' => "+1 212 555 0174"],
                ['label' => "生日", 'value' => "1967 年 10 月 18 日"],
            ],
            'monica' => [
                ['label' => "生日", 'value' => "10 月 18 日 · 三周后"],
                ['label' => "最爱的蛋糕", 'value' => "胡萝卜蛋糕，多加核桃"],
                ['label' => "我们如何认识", 'value' => "Monica 的哥哥，大学时就认识"],
                ['label' => "正在努力", 'value' => "纽约大学的终身教职"],
                ['label' => "不能吃", 'value' => ["猕猴桃", "龙虾"]],
            ],
        ],

        'people' => [
            'title' => "不同的人，不同的细节。",
            'close' => "为生活中不同的人创建不同的模板。每个模板都可以有自己的结构。",
            'cards' => [
                [
                    'title' => "朋友",
                    'body' => "他们喜欢的东西，夏天的计划，以及你们是怎么认识的。",
                    'label' => "基于“朋友”模板的联系人页面，带有“最爱”“夏天”和“我们的故事”三个标签页。",
                    'tabs' => ["最爱", "夏天", "我们的故事"],
                    'rows' => [
                        ['label' => "乐队", 'value' => "Khruangbin"],
                        ['label' => "书", 'value' => "《长日将尽》"],
                        ['label' => "夏天的计划", 'value' => "7 月骑行卢瓦尔河"],
                    ],
                ],
                [
                    'title' => "家人",
                    'body' => "他们看重的传统，重要的日子，以及一直说要寄给你的食谱。",
                    'label' => "基于“家人”模板的联系人页面，带有“传统”“日期”和“食谱”三个标签页。",
                    'tabs' => ["传统", "日期", "食谱"],
                    'rows' => [
                        ['label' => "平安夜", 'value' => "先吃生蚝，再去午夜弥撒"],
                        ['label' => "命名日", 'value' => "7 月 26 日"],
                        ['label' => "答应过的食谱", 'value' => "Grand-mère 的克拉芙缇"],
                    ],
                ],
                [
                    'title' => "职场联系人",
                    'body' => "他们的专业领域，你们第一次交谈的地方，以及你想在下次接着聊的话题。",
                    'label' => "基于职场联系人模板的联系人页面，带有“工作”“联系方式”和“下次”三个标签页。",
                    'tabs' => ["工作", "联系方式", "下次"],
                    'rows' => [
                        ['label' => "专长", 'value' => "食品零售业的供应链"],
                        ['label' => "第一次交谈", 'value' => "里昂，一场物流论坛上"],
                        ['label' => "下次接着聊", 'value' => "她的冷链试点项目"],
                    ],
                ],
            ],
        ],

        'room' => [
            'title' => "为重要的事留出空间。",
            'body' => [
                "添加文本、日期、数字或列表单选的字段，名字由你取，怎么顺手怎么来。",
                "把相关的字段归入分区，把分区排进标签页，一切按你喜欢的顺序摆放。对于会出现多条的细节，可以使用重复组。",
            ],
            'close' => "一个叫“值得记住的小事”的分区？完全合理。",
            'label' => "Monica 中的模板编辑器，“朋友”模板的草稿停在“小事”页上。“不能吃”字段已选中，旁边的面板显示它的名称、类型和选项列表。",
            'version' => "v2 · 基于 v1",
            'saved' => "4 秒前已保存",
            'import' => "导入分区",
            'pages' => [
                ['name' => "概览", 'count' => 5],
                ['name' => "小事", 'count' => 6],
                ['name' => "计划", 'count' => 3],
            ],
            'addPage' => "添加页面",
            'field' => "字段",
            'name' => "名称",
            'type' => "类型",
            'choices' => "选项",
            'choiceList' => ["花生", "麸质", "贝类", "乳制品", "生洋葱"],
            'addChoice' => "添加选项",
            'note' => "你所做的更改只会应用于这份草稿。",
        ],

        'reuse' => [
            'title' => "做一次，反复用。",
            'body' => [
                "模板让多个联系人页面拥有相同的结构，而每个人仍保留各自的信息。",
                "在“朋友”模板里加上“我们如何认识”，每位朋友的页面上就多了一处，可以写下各不相同的故事。为每个保险库选择一个默认模板，新联系人就有了合适的起点。",
            ],
            'label' => "“朋友”模板中的一个“我们如何认识”字段，在三位朋友的页面上填着各不相同的故事；“朋友”模板被选为“朋友”保险库中新联系人的默认模板。",
            'template' => "“朋友”模板",
            'stories' => [
                'rachel' => "穿着婚纱闯进了 Central Perk。",
                'ross' => "Monica 的哥哥，大学时就认识。",
                'joey' => "应了 Chandler 招租空房的启事。",
            ],
            'default' => "默认模板",
            'defaultBody' => "“朋友”保险库中的新联系人从这里开始",
        ],

        'versions' => [
            'title' => "改变主意，也不会丢掉笔记。",
            'body' => [
                "你可能想加一个细节、给字段改名，或者挪动一个分区。你的模板可以跟着你一起改变。",
                "先准备一份草稿，准备好了再发布。已有的联系人会停留在当前版本，直到你选择更新它们。",
                "从模板中移除一个字段，你已经填写的信息依然保留。你仍然可以找到它，把字段加回来后，它还会回到页面上。",
            ],
            'label' => "一个模板的版本历史：草稿 v3 等待发布，34 位联系人仍停留在 v2；Rachel Green 的页面保留着她来自已移除字段的鞋码，旁边有一个把字段加回来的按钮。",
            'history' => "版本历史",
            'rows' => [
                ['version' => "v3", 'text' => "添加了“命名日”，将“过敏”改名为“不能吃”", 'status' => 'draft'],
                ['version' => "v2", 'text' => "6 月 2 日发布 · 34 位联系人", 'status' => 'published'],
                ['version' => "v1", 'text' => "1 月 9 日发布 · 3 位联系人", 'status' => null],
            ],
            'notice' => "发布 v3 后，34 位联系人会继续停留在 v2，直到你更新它们。",
            'values' => [
                'cake' => "Mama’s Little Bakery 的芝士蛋糕",
                'coffee' => "拿铁，在 Central Perk",
            ],
            'kept' => "来自已移除字段，予以保留",
            'restore' => "把字段加回来",
        ],

        'share' => [
            'title' => "分享模板，细节留给自己。",
            'body' => [
                "做出了好用的模板？你可以导出整个模板或其中一个分区，让别人导入到自己的账户里。",
                "文件包含你搭建的结构，包括标签和选项列表。你的联系人和他们的信息仍然只属于你。",
            ],
            'label' => "正在导出“值得记住的小事”分区。文件包含该分区、它的六个字段标签和类型，以及“不能吃”的选项列表。你的 34 位联系人和他们页面上写的一切都留在你这里。",
            'export' => "导出此分区",
            'inFile' => "文件中包含",
            'inFileItems' => ["分区及其名称", "6 个字段标签和类型", "“不能吃”的选项列表"],
            'stays' => "留在你这里",
            'staysItems' => ["你的 34 位联系人", "他们页面上写的一切"],
            'file' => "little-things-worth-remembering.json · 3 KB",
            'download' => "下载",
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
            'title' => "记住那些要紧的细节。",
            'lede' => "对方的电话号码在你手机里。但他们新伴侣的名字、最爱的一餐，还有上次告诉你的事，或许就没那么好找了。",
            'close' => "把这些细节都放在 Monica 里，为下一次交谈做好准备。",
            'cta' => "创建你的账户",
            'label' => "Monica 中 Rachel Green 的联系人页面，停在“概览”标签页上。她的伴侣是 Joshua，最爱的一餐是不加牛肉的 Monica 千层面，她在 Bloomingdale’s 的采购团队工作。六天前的一条笔记写着，她下个月要去巴黎面试。",
            'vault' => "个人",
            'people' => "联系人",
            'meta' => [
                ['label' => "分类", 'value' => "朋友"],
                ['label' => "生日", 'value' => "5 月 5 日 · 三周后"],
                ['label' => "上次联系", 'value' => "六天前"],
            ],
            'edit' => "编辑联系人",
            'tabs' => ["概览", "基本信息", "联系方式", "关系"],
            'personal' => "个人详情",
            'rows' => [
                ['label' => "伴侣", 'value' => "Joshua，从 2 月开始"],
                ['label' => "最爱的一餐", 'value' => "Monica 的千层面，不加牛肉"],
                ['label' => "工作单位", 'value' => "Bloomingdale’s，采购团队"],
            ],
            'lastTime' => "她上次告诉你的事",
            'note' => "下个月去巴黎面试，应聘 Louis Vuitton 的一份工作。还没告诉她爸爸。想在 Marais 附近找一套公寓。",
            'added' => "六天前添加",
        ],

        'audition' => [
            'title' => "“试镜怎么样了？”",
            'body' => [
                "Joey 上周提到过一场试镜。你记得这件事对他很重要。他的页面上有这条细节，你就有了接着聊下去的由头。",
                "把别人告诉你的事记下来：一份新工作，即将到来的搬家，一个他们说个不停的项目。",
            ],
            'label' => "Joey Tribbiani 页面上的两条笔记：周四一场医院剧的试镜，以及夏末前要搬出公寓。笔记下方是今天到期的提醒，要问 Joey 试镜怎么样了。",
            'notes' => "笔记",
            'entries' => [
                ['text' => "周四试镜一部医院剧里的角色。第二轮复试。他一直在屋顶上练习哭戏。", 'added' => "8 天前添加"],
                ['text' => "夏末前要搬出公寓。正在看皇后区的房子。", 'added' => "3 周前添加"],
            ],
            'reminder' => "问问 Joey 试镜怎么样了",
            'today' => "今天",
            'remembered' => "我记得",
            'forgot' => "我忘了",
        ],

        'little' => [
            'title' => "小事也值得有个位置。",
            'lead' => "Rachel 最爱的花。Chandler 的咖啡怎么喝。Ross 最新的研究项目叫什么。",
            'body' => "有些细节很实用，有些只是让你想起对方是怎样的人。想留多少就留多少，用你自己的话来写。",
            'cards' => [
                ['field' => "最爱的花", 'value' => "牡丹。绝不要百合。", 'note' => "第六大道那个摊位的白色牡丹。", 'label' => "Rachel Green 最爱的花：牡丹，绝不要百合。第六大道那个摊位的白色牡丹。"],
                ['field' => "咖啡", 'value' => "黑咖啡，两块糖", 'note' => "用橙色的杯子，如果洗干净了的话。", 'label' => "Chandler Bing 的咖啡怎么喝：黑咖啡，两块糖，如果橙色杯子洗干净了就用它。"],
                ['field' => "研究项目", 'value' => "白垩纪晚期的沉积层", 'note' => "问问蒙大拿的发掘现场。预留二十分钟。", 'label' => "Ross Geller 的研究项目：白垩纪晚期的沉积层。问问蒙大拿的发掘现场，并预留二十分钟。"],
            ],
        ],

        'own' => [
            'title' => "给每个人一个专属页面。",
            'body' => [
                "把联系方式、重要日期和个人信息放在一起。添加一张照片，再用适合你想记住的内容的模板整理其余部分。",
                "晚饭前打开 Monica Geller 的页面，查看她的地址、生日，或者你答应带去的那道菜。",
            ],
            'label' => "Monica 中 Monica Geller 的联系人页面：她的地址和电话号码，她的生日和纪念日，以及昨天的一条笔记，写着你答应周五晚饭带去的甜点。",
            'meta' => [
                ['label' => "分类", 'value' => "朋友"],
                ['label' => "生日", 'value' => "4 月 22 日"],
                ['label' => "提醒", 'value' => "今天 1 条"],
            ],
            'connect' => [
                'title' => "联系方式",
                'rows' => [
                    ['label' => "地址", 'value' => "90 Bedford Street, Apt 20\nNew York, NY 10014"],
                    ['label' => "电话", 'value' => "+1 212 555 0187"],
                ],
            ],
            'dates' => [
                'title' => "重要日期",
                'rows' => [
                    ['label' => "生日", 'value' => "1969 年 4 月 22 日"],
                    ['label' => "纪念日", 'value' => "5 月 15 日，和 Chandler"],
                ],
            ],
            'dinner' => [
                'title' => "周五的晚饭",
                'text' => "你答应带甜点。不是那个 trifle。她已经列好了一份可以接受的清单。",
                'added' => "昨天添加",
            ],
        ],

        'people' => [
            'title' => "给他们身边的人留出位置。",
            'lead' => "记住一个人，往往也意味着记住他身边的人。",
            'body' => "把 Ross 和 Monica 关联为姐弟，把 Rachel 关联为他的前任伴侣，把 Emma 关联为他的女儿。当你知道某个人存在却还没见过时，可以只用名字，甚至不用名字，把这层关系记下来。",
            'label' => "Monica 中 Ross Geller 的关系。家人：他的姐姐 Monica，以及他的女儿 Emma。前任伴侣：Rachel。尚未见面：同事 Charlie（只知道名字），以及一位来自 Long Island 的表亲（不知道名字）。",
            'heading' => "Ross Geller 的人际关系",
            'add' => "添加",
            'groups' => [
                ['title' => "家人", 'people' => [
                    ['name' => "Monica Geller", 'detail' => "Monica 是 Ross 的姐姐。"],
                    ['name' => "Emma Geller-Green", 'detail' => "Emma 是 Ross 的女儿。"],
                ]],
                ['title' => "前任伴侣", 'people' => [
                    ['name' => "Rachel Green", 'detail' => "Rachel 是 Ross 的前任伴侣。"],
                ]],
                ['title' => "尚未见面", 'people' => [
                    ['name' => "Charlie", 'detail' => "Ross 的同事 · 只有名字", 'known' => false],
                    ['name' => "不知道名字", 'detail' => "Ross 的表亲，来自 Long Island", 'known' => false, 'named' => false],
                ]],
            ],
        ],

        'moments' => [
            'title' => "让时刻与细节相伴。",
            'body' => [
                "一个联系人页面，既能放日常的事实，也能放发生过的事。",
                "记录和 Phoebe 的晚餐，和 Chandler 的一通电话，或是全体朋友的一次旅行。把在场的每个人都加进来，这件事就会出现在每个人的时间线上。",
            ],
            'close' => "下次见面时，你有一条路可以回到上一次的谈话。",
            'label' => "Monica 中的一条时间线，2026 年有三条记录：10 月 3 日和 Phoebe 的晚餐，9 月 21 日和 Chandler 的电话，8 月 14 日和 Ross、Rachel、Monica、Chandler、Joey 一起在 Montauk 度过的周末。旁边显示，Montauk 周末出现在他们五个人的时间线上。",
            'timeline' => "时间线",
            'year' => "2026",
            'addEvent' => "添加生活事件",
            'entries' => ":count 条记录",
            'events' => [
                ['title' => "和 Phoebe 的晚餐", 'date' => "10 月 3 日", 'body' => "Grove Street 上的那家泰国餐厅。她又在写关于她出租车的歌了。"],
                ['title' => "和 Chandler 的电话", 'date' => "9 月 21 日", 'body' => "四十分钟。他在考虑辞掉数据重组的工作。"],
                ['title' => "Montauk 的周末", 'date' => "8 月 14 日", 'body' => "又租了那栋海滩小屋。Joey 把车钥匙丢在了沙滩上。"],
            ],
            'with' => "与 :names 一起",
            'onTimelines' => "出现在 :count 条时间线上",
        ],

        'cta' => [
            'title' => "你不必记住所有事。",
            'body' => "从一个人和几条你想留住的细节开始。每当有什么值得记住，再随时添加。",
            'button' => "创建你的账户",
        ],
    ],

    'reminders' => [
        // Words more than one drawing uses.
        'remembered' => "我记得",
        'forgot' => "我忘了",
        'overdue' => "已逾期",
        'today' => "今天",
        'add' => "添加提醒",
        'day' => "日期",
        'at' => "时间",
        'timeZone' => "时区",
        'repeats' => "重复",
        'says' => "提醒内容",
        'optional' => "可选",

        'hero' => [
            'title' => "记得主动联系。",
            'lede' => "一个生日。一个大日子。一位你一直想打电话给的朋友。",
            'close' => "在 Monica 中设置一个提醒，到时间就轻轻提醒你一下。",
            'cta' => "创建你的账户",
            'label' => "Monica 中“个人”保险库的提醒，本周三条。已逾期：给 Phoebe 打电话，两天前，带有“我记得”和“我忘了”两个回答按钮。未来七天内：周二问问 Joey 试镜的事，以及五天后 Chandler 的生日。旁边是 Monica 在周二 09:00 发出的提醒邮件，提醒你关于 Joey 的事，并带有打开他页面的按钮。",
            'vault' => "个人",
            'count' => "本周 3 条提醒",
            'overdueTitle' => "已逾期",
            'overdue' => [
                ['text' => "给 Phoebe 打电话", 'when' => "2 天前"],
            ],
            'upcomingTitle' => "未来七天",
            'upcoming' => [
                ['text' => "问问 Joey 试镜的事。", 'when' => "周二"],
                ['text' => "Chandler 的生日", 'when' => "5 天后"],
            ],
            'inbox' => "在你的收件箱里，周二 09:00",
            'from' => "来自 Monica",
            'email' => "你要求今天提醒你关于 Joey Tribbiani 的事。",
            'open' => "打开 Joey 的页面",
        ],

        'once' => [
            'title' => "Joey 的试镜在周二。",
            'lead' => "你没法帮他拿到角色，但你可以记得问问结果如何。",
            'body' => "在 Joey 的页面上添加一个提醒，选好日期和时间，再写下你希望 Monica 告诉你的话：“问问 Joey 试镜的事。”",
            'label' => "在 Monica 中为 Joey Tribbiani 的页面添加提醒：10 月 14 日周二 18:00，提醒内容是“问问 Joey 试镜的事。”只提醒一次。",
            'heading' => "为 Joey 添加提醒",
            'day' => "10 月 14 日周二",
            'at' => "18:00",
            'says' => "问问 Joey 试镜的事。",
            'summary' => "提醒时间：:when，仅一次。",
            'when' => "10 月 14 日周二 18:00",
            'cancel' => "取消",
        ],

        'yearly' => [
            'title' => "有些日子年年都会到来。",
            'body' => "保存 Chandler 的生日，并为这个日期开启提醒。Monica 会在每年的当天提醒你。",
            'close' => "如果你之后更正了日期，提醒也会随之更新。",
            'label' => "Monica 中 Chandler Bing 的生日，1968 年 4 月 8 日，已为这个日期开启提醒。它每年 09:00（纽约时间）重复，提醒内容是“Chandler 的生日”。下一次在 2027 年 4 月 8 日。",
            'birthday' => "生日",
            'date' => "1968 年 4 月 8 日",
            'noYear' => "我不知道是哪一年",
            'remind' => "提醒我这个日期",
            'repeats' => "每年",
            'at' => "09:00",
            'zone' => "纽约",
            'says' => "Chandler 的生日",
            'summary' => "下一次提醒：:when，就在当天。",
            'when' => "2027 年 4 月 8 日 09:00",
        ],

        'habit' => [
            'title' => "让保持联系成为习惯。",
            'lead' => "每个月给 Phoebe 打个电话。每三周和 Rachel 聊聊近况。",
            'body' => "提醒可以只发生一次，也可以每隔几周、几个月或几年重复。为每个人选一个合适的节奏。",
            'label' => "Monica 中的两个重复提醒：每月给 Phoebe 打电话，下一次在 11 月 3 日；每三周和 Rachel 聊聊近况，下一次在 10 月 24 日。旁边是选择提醒重复方式的菜单，当前选的是每 3 周。",
            'rows' => [
                ['text' => "给 Phoebe 打电话", 'detail' => "11 月 3 日 · 三周后 · 每月"],
                ['text' => "和 Rachel 聊聊近况", 'detail' => "10 月 24 日 · 十一天后 · 每 3 周"],
            ],
            'options' => ["仅一次", "每周", "每 3 周", "每月", "每年"],
            // The option drawn as chosen, counted from zero.
            'chosen' => 2,
        ],

        'zone' => [
            'title' => "按你的时间，无论他们在哪里。",
            'lead' => "每个提醒都有自己的时间和时区。",
            'body' => "如果 Ross 在伦敦出差，你可以按他那边的一天来设置提醒。即使你出门旅行或更改了自己的设置，它也会保持那个时区。",
            'label' => "Monica 中的一个提醒：祝 Ross Geller 讲座顺利，10 月 23 日周四 08:30，伦敦时间。也就是 Ross 在伦敦的 08:30，以及你在纽约的 03:30。",
            'heading' => "祝 Ross 讲座顺利",
            'day' => "10 月 23 日周四",
            'at' => "08:30",
            'zone' => "伦敦",
            'them' => "Ross 在伦敦",
            'you' => "你在纽约",
            'yours' => "03:30",
        ],

        'channels' => [
            'title' => "选择提醒送达你的方式。",
            'lead' => "通过电子邮件接收提醒，或在使用 Monica 时接收。",
            'body' => "如果你的 Monica 实例启用了 Telegram 和短信，也可以使用。选择适合你的渠道，并给自己发一条测试消息，确认已连通。",
            'label' => "Monica 中的通知设置。电子邮件已连接，带有发送测试的按钮。Monica 内通知已开启。此实例已启用 Telegram 和短信，各有一个连接按钮。",
            'heading' => "通知",
            'sub' => "提醒送达你的地方",
            'rows' => [
                ['name' => "电子邮件", 'detail' => "monica@geller.example", 'status' => "已连接", 'action' => "发送测试"],
                ['name' => "Monica 内", 'detail' => "每个页面顶部的铃铛", 'status' => "已开启"],
                ['name' => "Telegram", 'detail' => "此实例已启用", 'action' => "连接"],
                ['name' => "短信", 'detail' => "此实例已启用", 'action' => "连接"],
            ],
        ],

        'answer' => [
            'title' => "你记得吗？",
            'body' => "提醒的日子到了，你可以告诉 Monica 结果如何。",
            'remembered' => [
                'body' => "你给 Chandler 打了电话，祝 Rachel 生日快乐，或者问了 Joey 试镜的事。当天就可以把它标记为已记得。",
                'label' => "Monica 中今天到期的一个提醒：问问 Joey 试镜的事，10 月 14 日周二 18:00，仅一次，带有回答“我记得”的按钮。",
                'reminder' => "问问 Joey 试镜的事。",
                'detail' => "10 月 14 日周二 · 18:00 · 仅一次",
            ],
            'forgot' => [
                'body' => "这一天不知不觉就过去了。从第二天起，你可以把它标记为已忘记。",
                'label' => "Monica 中一个已逾期的提醒：Phoebe 的生日，2 月 16 日，两天前。它每年重复，下一次在 2027 年 2 月 16 日。按钮可回答“我记得”或“我忘了”。",
                'reminder' => "Phoebe 的生日",
                'detail' => "2 月 16 日 · 2 天前 · 每年 · 下一次在 2027 年 2 月 16 日",
            ],
            'notes' => [
                "你的回答会把这一次提醒移入你的历史记录。如果不回答，它会一直保持逾期，方便你之后回来处理。",
                "对于重复的提醒，下一个日期依然会到来。今年忘了 Phoebe 的生日，不会取消明年的提醒。",
            ],
        ],

        'attention' => [
            'title' => "看清哪些事需要你关注。",
            'body' => [
                "在某个人的页面上查看他的提醒，或打开保险库的提醒，把所有人的提醒放在一起看。",
                "看看哪些已逾期，哪些今天到期，哪些即将到来。回顾你的历史记录，看看你记得的提醒和忘记的提醒。",
            ],
            'label' => "Monica 中一个保险库的提醒页面。过去 12 个月的 24 条提醒中，75% 记得，25% 忘记。筛选项：全部 5、已逾期 1、今天 1、即将到来 3、历史 18。已逾期：给 Phoebe 打电话，10 月 11 日，两天前，每月。即将到来，按时间先后排列：明天问问 Joey 试镜的事，十一天后和 Rachel 聊聊近况，以及 2027 年 4 月 8 日 Chandler 的生日，它跟随他的生日。",
            'heading' => "提醒",
            'stats' => [
                ['value' => "75%", 'label' => "记得"],
                ['value' => "25%", 'label' => "忘记"],
            ],
            'period' => "过去 12 个月的 24 条提醒",
            'filters' => ["全部", "已逾期", "今天", "即将到来", "历史"],
            'overdueNote' => "这一天已经过去，尚未回答。",
            'overdue' => ['text' => "给 Phoebe 打电话", 'detail' => "10 月 11 日 · 2 天前 · 每月"],
            'upcomingTitle' => "即将到来",
            'upcomingNote' => "最近的排在最前。",
            'upcoming' => [
                ['text' => "问问 Joey 试镜的事。", 'detail' => "10 月 14 日 · 明天 · 仅一次"],
                ['text' => "和 Rachel 聊聊近况", 'detail' => "10 月 24 日 · 十一天后 · 每 3 周"],
                ['text' => "Chandler 的生日", 'detail' => "2027 年 4 月 8 日 · 6 个月后 · 每年 · 跟随生日"],
            ],
        ],

        'cta' => [
            'title' => "在落实上，帮你一把。",
            'body' => "你想过要给 Chandler 打个电话。给这个念头定下日期和时间吧。",
            'button' => "创建你的账户",
        ],
    ],

    'timeline' => [
        // Words more than one drawing uses.
        'with' => "与 :names 一起",
        'add' => "添加生活事件",
        'optional' => "可选",

        'hero' => [
            'title' => "留住值得记住的时刻。",
            'intro' => "和朋友的晚餐。一份新工作。那个大家至今还在聊的下午。",
            'lede' => "记录发生了什么、谁在场，以及你想留住的细节。Monica 会把这些时刻汇集成一条时间线，供你随时回看。",
            'cta' => "创建你的账户",
            'label' => "Monica 中“个人”保险库的时间线，共 102 条记录，其中 2 条需要你关注。2026 年：11 月 26 日在 Monica 家过感恩节，地点是纽约 Bedford Street 90 号，Joey 穿了松紧裤，没人提起那个 trifle，在场的有 Rachel、Ross、Chandler、Joey 和 Phoebe。还有 10 月 3 日和 Phoebe 的一次咖啡，本来说好很快，结果三个小时后她把你整个春天都安排好了。旁边是当年更早的 Monica 和 Chandler 的婚礼，5 月 15 日：先在 Moondance Diner，再到屋顶，由 Joey 担任司仪（在网上获得了任命），共有 43 位宾客。",
            'vault' => "个人",
            'tabs' => ["你的时间线", "需要你关注"],
            'year' => "2026",
            'count' => "2 条记录",
            'events' => [
                ['title' => "在 Monica 家过感恩节", 'date' => "26/11", 'place' => "纽约 Bedford Street 90 号", 'note' => "Joey 穿了松紧裤。没人提起那个 trifle。"],
                ['title' => "和 Phoebe 喝咖啡", 'date' => "03/10", 'note' => "本来说好很快。三个小时后，她把我整个春天都安排好了。"],
            ],
            'earlier' => "当年更早",
            'wedding' => [
                'title' => "Monica 和 Chandler 的婚礼",
                'type' => "结婚 · 5 月 15 日",
                'facts' => [
                    ['label' => "地点", 'value' => "Moondance Diner，然后是屋顶"],
                    ['label' => "司仪", 'value' => "Joey，在网上获得任命"],
                ],
                'more' => "另有 38 位",
            ],
        ],

        'milestones' => [
            'title' => "重大的里程碑，平凡的周二。",
            'body' => [
                "Monica 和 Chandler 的婚礼值得一条记录。和 Phoebe 那场聊了三个小时的咖啡也一样。",
                "从 40 种内置事件类型中选择，包括通话、用餐、拜访、旅行和新工作。这里既容得下日常的小时刻，也容得下人人都会写进日历的大日子。",
            ],
            'label' => "在 Monica 中添加生活事件的第一步：选择发生了什么。共五个分类，已选中“亲密关系与家庭”，以及它的事件类型：通话、消息、用餐、拜访、相聚、结婚和出生，每个类型都标明所需填写的字段数。",
            'step' => "第 1 步，共 2 步 · 选择发生了什么",
            'categoriesTitle' => "分类",
            'categories' => ["亲密关系与家庭", "工作与教育", "健康与身心", "休闲与文化", "旅行与体验"],
            'types' => [
                ['name' => "通话", 'fields' => "3 个字段"],
                ['name' => "消息", 'fields' => "3 个字段"],
                ['name' => "用餐", 'fields' => "3 个字段"],
                ['name' => "拜访", 'fields' => "2 个字段"],
                ['name' => "相聚", 'fields' => "1 个字段"],
                ['name' => "结婚", 'fields' => "3 个字段"],
                ['name' => "出生", 'fields' => "1 个字段"],
            ],
        ],

        'moment' => [
            'title' => "一个时刻，所有在场的人。",
            'lead' => "在 Monica 家过的感恩节有 Rachel、Ross、Chandler、Joey 和 Phoebe 参加。你只应该记录一次。",
            'body' => "添加参与的人，这件事就会出现在每个人的时间线上。之后如果你更新了细节，同样的更改会出现在它所属的每一条时间线上。",
            'label' => "2026 年 11 月 26 日在 Monica 家过的感恩节，只记录一次，参与者是 Rachel、Ross、Chandler、Joey 和 Phoebe。下方是其中三个人的时间线，每条都显示同一个感恩节：Rachel 的，上面是 11 月 12 日的一通电话；Joey 的，上面是 10 月 14 日的一场试镜；Phoebe 的，上面是 10 月 3 日和 Phoebe 的一次咖啡。",
            'event' => "在 Monica 家过感恩节",
            'when' => "2026 年 11 月 26 日 · 仅记录一次",
            'date' => "26/11",
            'timeline' => ":name 的时间线",
            // The entry under Thanksgiving on each timeline, in the order the
            // template draws them: Rachel, Joey, Phoebe.
            'before' => ["通话 · 12/11", "试镜 · 14/10", "和 Phoebe 喝咖啡 · 03/10"],
        ],

        'story' => [
            'title' => "留住的不只是日期。",
            'lead' => "你去了哪里？是什么让它难忘？",
            'body' => "添加地点、描述，以及适合这个场合的细节。当你记得 Chandler 在最后两英里一路抱着两个孩子时，Hudson Highlands 的那次远足就不只是一个日期了。",
            'close' => "写一句短短的话，或者留下整个故事。",
            'label' => "在 Monica 中添加生活事件的第二步，相聚的细节：2010 年 5 月 15 日，在纽约 Hudson Highlands 的一次远足。正在写描述：六英里，最后两英里 Chandler 一路抱着两个孩子。Ross 一路上都在讲解岩层。在山脊上吃了午饭。",
            'heading' => "相聚",
            'step' => "第 2 步，共 2 步 · 细节",
            'what' => ['label' => "发生了什么", 'value' => "Hudson Highlands 的一次远足"],
            'when' => ['label' => "时间", 'value' => "2010 年 5 月 15 日"],
            'where' => ['label' => "地点", 'value' => "纽约 Hudson Highlands"],
            'description' => ['label' => "描述", 'value' => "六英里，最后两英里 Chandler 一路抱着两个孩子。Ross 一路上都在讲解岩层。在山脊上吃了午饭。"],
            'back' => "返回",
            'add' => "添加生活事件",
        ],

        'years' => [
            'title' => "逐年回望。",
            'body' => [
                "保险库的时间线把你记录的事件汇集在一起，最近的排在最前，更早的记录按年份分组。",
                "从游泳课到开学第一天，顺着故事一路看下去。打开某个人的页面，可以看到他参与过的事件。",
            ],
            'close' => "日期给你顺序，你的笔记带回记忆。",
            'label' => "Monica 中的一条时间线，最近的在前，按年份分组。2010 年：5 月 15 日在 Hudson Highlands 的一次远足。2009 年：双胞胎 9 月 8 日上幼儿园，Erica 6 月 11 日摔断了胳膊。2008 年：7 月 17 日的游泳课。每条记录都有地点和一则笔记。",
            // Newest first. Each event's icon and colour is in the template,
            // in this order.
            'years' => [
                ['year' => "2010", 'count' => "1 条记录", 'events' => [
                    ['title' => "Hudson Highlands 的一次远足", 'date' => "15/05", 'place' => "纽约 Hudson Highlands", 'note' => "六英里，最后两英里 Chandler 一路抱着两个孩子。"],
                ]],
                ['year' => "2009", 'count' => "2 条记录", 'events' => [
                    ['title' => "双胞胎上幼儿园", 'date' => "08/09", 'place' => "威彻斯特的一所小学", 'note' => "Jack 和 Judy 开车过来，看着他们走进校门。"],
                    ['title' => "Erica 摔断了胳膊", 'date' => "11/06", 'place' => "威彻斯特的一家医院", 'note' => "从攀爬架上摔下来，当时想赶在 Jack 前面爬到顶。"],
                ]],
                ['year' => "2008", 'count' => "1 条记录", 'events' => [
                    ['title' => "游泳课", 'date' => "17/07", 'place' => "威彻斯特的一个游泳池", 'note' => "Joey 主动提出来教他们。Monica 请了别人。"],
                ]],
            ],
        ],

        'traditions' => [
            'title' => "为你自己的传统留出位置。",
            'lead' => "“用餐”也行，“Monica 的感恩节”或许更贴切。",
            'body' => "创建你自己的事件类型，把它们归入分类，再选一个图标和颜色，方便一眼认出。你也可以修改 Monica 提供的类型，或者关掉你用不到的。",
            'label' => "Monica 中的生活事件类型。在“我们的传统”分类下有两个你自己的类型：Monica 的感恩节和圣诞树之夜；然后是 Monica 提供的“用餐”，以及已关闭的“面试”。旁边是正在编辑的“Monica 的感恩节”：记录时提供，礼物图标，从八种颜色中选了橙色，分类为“我们的传统”。",
            'heading' => "生活事件类型",
            'add' => "添加类型",
            'category' => "我们的传统",
            'types' => [
                ['name' => "Monica 的感恩节"],
                ['name' => "圣诞树之夜"],
                ['name' => "用餐", 'badge' => "系统提供"],
                ['name' => "面试", 'status' => "已关闭"],
            ],
            'offered' => "记录时提供",
            'icon' => "图标",
            'colour' => "颜色",
            'categoryLabel' => "分类",
        ],

        'fields' => [
            'title' => "选择每个事件包含哪些细节。",
            'lead' => "一通电话和一顿感恩节晚餐，需要的细节不一样。",
            'body' => [
                "对于和 Rachel 的通话，你可以记下通话渠道，以及聊了什么的笔记。对于感恩节，你可以加上谁做东、你带了什么，以及 Joey 有没有把火鸡吃完。",
                "添加你自己的字段，把它们排成组，并选择哪些是必填。更改只对之后记录的事件生效；更早的记录保留它们当时记录的字段。",
            ],
            'label' => "Monica 中两个生活事件类型的字段。“通话”有三个：渠道（下拉选项：电话、视频，或应用内语音通话）、方向（下拉选项）和聊了什么（长文本）。“Monica 的感恩节”在名为“晚餐”的分组中有三个：谁做东（联系人，必填）、你带了什么（短文本），以及 Joey 有没有把火鸡吃完（下拉选项：有、没有或有人帮忙），正在编辑中。保存后只对之后记录的事件生效，去年的记录保留原来的字段。",
            'count' => "3 个字段",
            'required' => "必填",
            'call' => [
                'name' => "通话",
                'rows' => [
                    ['label' => "渠道", 'type' => "下拉选项", 'options' => ["电话", "视频", "应用内语音通话"]],
                    ['label' => "方向", 'type' => "下拉选项"],
                    ['label' => "聊了什么", 'type' => "长文本"],
                ],
            ],
            'thanksgiving' => [
                'name' => "Monica 的感恩节",
                'group' => "晚餐",
                'rows' => [
                    ['label' => "谁做东", 'type' => "联系人"],
                    ['label' => "你带了什么", 'type' => "短文本"],
                    ['label' => "Joey 有没有把火鸡吃完？", 'type' => "下拉选项", 'options' => ["有", "没有", "有人帮忙"]],
                ],
                'note' => "只对你之后记录的事件生效。去年的记录保留原来的字段。",
                'save' => "保存更改",
            ],
        ],
    ],
    'relationships' => [
        // Words more than one drawing uses.
        'add' => "添加关系",
        'sibling' => "兄弟姐妹",

        'hero' => [
            'title' => "看清人与人之间的联系。",
            'intro' => "她的姐姐。他的伴侣。介绍你们认识的那位朋友。",
            'lede' => "记下某个人身边的人，让每一段关系从两边看都说得通。",
            'cta' => "创建你的账户",
            'label' => "Monica 中 Ross Geller 的关系，共 8 条。家人：他的妹妹 Monica Geller、他的父亲 Jack Geller、他的母亲 Judy Geller，以及他的女儿 Emma Geller-Green。恋爱：他的伴侣 Rachel Green。朋友：Chandler Bing、Joey Tribbiani 和 Phoebe Buffay。",
            'count' => "8 条关系",
            // The people in each group are in the template, in this order.
            'groups' => [
                ['title' => "家人", 'roles' => ["妹妹", "父亲", "母亲", "女儿"]],
                ['title' => "恋爱", 'roles' => ["伴侣"]],
                ['title' => "朋友", 'roles' => ["朋友", "朋友", "朋友"]],
            ],
        ],

        'sides' => [
            'title' => "Ross 的妹妹是 Monica。Monica 的哥哥是 Ross。",
            'lead' => "只需添加一次关系，Monica 就会在两个人的页面上都显示出来。",
            'body' => "选择类型，确认每个人担任的角色，再把两个人关联起来。家人、朋友、伴侣和同事，都有各自的位置。",
            'label' => "在 Monica 中添加一段关系。类型是兄弟姐妹，双方都一样，Ross Geller 是其中一方，正在选择 Monica Geller 作为另一方，旁边有一个按钮可以交换两个角色。下方是两个人页面上的结果：在 Ross 的页面上是他的妹妹 Monica Geller，在 Monica 的页面上是她的哥哥 Ross Geller。",
            'typeLabel' => "关系类型",
            'type' => "兄弟姐妹 ↔ 兄弟姐妹",
            'swap' => "交换两个角色",
            'cancel' => "取消",
            'submit' => "添加关系",
            // One card per person, Ross's first.
            'pages' => [
                ['title' => "在 Ross 的页面上", 'role' => "妹妹"],
                ['title' => "在 Monica 的页面上", 'role' => "哥哥"],
            ],
        ],

        'tree' => [
            'title' => "有些联系，一眼就能看清。",
            'body' => [
                "家谱把父母、伴侣和子女放在一起，你不必再从零散的笔记里拼凑，就能顺着联系看下去。",
                "打开 Ross 的页面，就能看到 Monica、他的父母和 Emma 各自在哪个位置。他的直系亲属也会显示在他的概览里。",
            ],
            'label' => "Monica 中 Ross Geller 的家谱：他的父母 Jack 和 Judy Geller 在他上方，他的妹妹 Monica Geller 和伴侣 Rachel Green 在他身旁，他的女儿 Emma Geller-Green 在他下方。这里只画出亲子关系和伴侣关系。旁边是他概览中的直系亲属：父母 Jack（68 岁）和 Judy（66 岁），妹妹 Monica（57 岁），现任伴侣 Rachel（57 岁），以及女儿 Emma（24 岁）。",
            'heading' => "家谱",
            'note' => "这里只画出亲子关系和伴侣关系。朋友和同事留在列表里。",
            'family' => "直系亲属",
            'add' => "添加",
            'groups' => ["父母", "兄弟姐妹", "现任伴侣", "子女"],
        ],

        'unknown' => [
            'title' => "你不必现在就认识每一个人。",
            'lead' => "Joey 提到过一个姐妹。哪怕你从没见过她，也想记住这层联系。",
            'body' => [
                "选择 Monica 里已有的人，按名字添加一个人，或者在只知道对方角色时，记录一位没有名字的人。",
                "如果你只是为了记住这层联系，可以把对方保留为部分联系人，不放进你的主联系人列表。",
            ],
            'label' => "在 Monica 中为 Joey Tribbiani 添加关系：一位兄弟姐妹，有三种方式说明是谁。选中的是“我不知道对方的名字”，只记录角色，不记别的。其他两种是“我知道对方的名字”，以及选择已经记下的人。下方有一个未勾选的复选框，用来为这个人创建联系人记录。",
            'subtitle' => "说明某个人和 Joey Tribbiani 是什么关系。",
            // The first is the one selected.
            'options' => [
                ['title' => "我不知道对方的名字", 'hint' => "只记录角色，不记别的"],
                ['title' => "我知道对方的名字", 'hint' => "只写名字也够了"],
                ['title' => "选择已经记下的人", 'hint' => "把你已有的两个人关联起来"],
            ],
            'record' => [
                'title' => "为这个人创建联系人记录",
                'hint' => "不勾选的话，对方不会出现在你的联系人列表里，但仍然有一个属于自己的页面。",
            ],
        ],

        'history' => [
            'title' => "关系是有历史的。",
            'lead' => "人们会走到一起，也会分开。联系会变。",
            'body' => "记下一段关系何时开始、何时结束，把过去的关系和现在的放在一起。Ross 的前任伴侣依然是他故事的一部分。",
            'label' => "Monica 中 Ross Geller 的恋爱历史。现在：Rachel Green，他的伴侣，从 2004 年 5 月 6 日起。过去，均已结束：Emily Waltham，他的配偶，1998 年至 1999 年；Carol Willick，他的配偶，1987 年至 1993 年。旁边正在填写他与 Emily 婚姻的日期：开始于 1998 年，结束于 1999 年。",
            'heading' => "恋爱历史",
            'current' => "现在",
            'past' => "过去",
            // The people are in the template, in this order: Rachel, Emily, Carol.
            'partners' => ["伴侣 · 自 2004 年 5 月 6 日起", "配偶 · 1998 年至 1999 年", "配偶 · 1987 年至 1993 年"],
            'ended' => "已结束",
            'started' => "开始",
            'endedLabel' => "结束",
            'optional' => "可选",
        ],

        'types' => [
            'title' => "用合适的词。",
            'lead' => "“朋友”只是个开头。有时候，“室友”说得更多。",
            'body' => [
                "创建你自己的关系类型，并按类别整理。你可以选择这段关系从两边看是同一个词，比如 Monica 和 Rachel 互为室友；还是各用不同的词，比如教父母和教子女。",
                "你还可以调整现有类型的措辞和顺序，也可以不再提供用不上的类型，而不会删掉已经记录的关系。",
            ],
            'label' => "Monica 中的关系类型。在“朋友”中，随账户提供：朋友，系统提供；室友，你自己的；笔友，不再提供。在“教父母”中，你自己的类别：教父母和教子女，你自己的。旁边是正在编辑的“室友”：从两边看是同一个词，所以 Monica Geller 是 Rachel Green 的室友，Rachel Green 也是 Monica Geller 的室友。",
            'heading' => "关系类型",
            'add' => "添加类型",
            'categories' => [
                ['name' => "朋友", 'note' => "随账户提供", 'types' => [
                    ['name' => "朋友", 'pair' => "朋友 ↔ 朋友", 'badge' => "系统提供"],
                    ['name' => "室友", 'pair' => "室友 ↔ 室友", 'badge' => "你的"],
                    ['name' => "笔友", 'pair' => "笔友 ↔ 笔友", 'badge' => "不再提供"],
                ]],
                ['name' => "教父母", 'note' => "你的类别", 'types' => [
                    ['name' => "教父母 / 教子女", 'pair' => "教父母 → 教子女", 'badge' => "你的"],
                ]],
            ],
            'reads' => "读起来是",
            // The first is the one selected.
            'options' => [
                ['title' => "两边一样", 'hint' => "两个人用同一个词来描述，比如兄弟姐妹或朋友。"],
                ['title' => "两边不同", 'hint' => "两个人各用不同的词来描述，比如父母和子女。"],
            ],
            'roleLabel' => "角色，两边相同",
            'role' => "室友",
            'sentences' => ["Monica Geller 是 Rachel Green 的室友。", "Rachel Green 是 Monica Geller 的室友。"],
        ],
    ],

    'vaults' => [
        // Words more than one drawing uses. A vault's tile shows the first
        // letter of its name.
        'personal' => "个人",
        'work' => "工作",
        'default' => "默认",
        'heading' => "你的保险库",

        'hero' => [
            'title' => "生活的每一部分，各有各的位置。",
            'intro' => "朋友和家人。工作中认识的人。本地俱乐部的成员。",
            'lede' => "你可以把他们放在一起，也可以给每个圈子一个单独的空间。保险库帮你围绕自己的生活来整理 Monica。",
            'cta' => "创建你的账户",
            'label' => "Monica 中你的保险库。个人，默认保险库，1 小时前打开，有 Rachel、Chandler、Ross、Joey 和另外 20 人，没有待办任务，本月有 2 个日期。工作，2 天前打开，有 Marcel、Inès、Sam 和另外 6 人，3 项待办任务，本月有 1 个日期。还有一处可以新建保险库的空位。",
            'new' => "新建保险库",
            // Personal first, then Work. The people are in the template.
            'vaults' => [
                ['opened' => "1 小时前打开", 'more' => "另外 20 人"],
                ['opened' => "2 天前打开", 'more' => "另外 6 人"],
            ],
            'stats' => ["待办任务", "本月日期"],
            'another' => [
                'title' => "再建一个保险库",
                'body' => "工作、俱乐部、另一边的家人。里面的内容，在这里都看不到。",
            ],
        ],

        'one' => [
            'title' => "也许一个保险库就够了。",
            'lead' => "Monica 一开始会给你一个“个人”保险库。你可以把所有人都放在里面，然后继续用下去。",
            'body' => "想要一个单独的空间时，再创建一个保险库。给它起个名字，选一种颜色，一眼就能认出来。",
            'label' => "在 Monica 中创建保险库。名称是“工作”，描述是：餐厅、供应商，以及和我一起受训的人。颜色是青绿色，从八种颜色中选出，旁边的预览用这种颜色显示“工作”的图块。",
            'create' => "创建保险库",
            'name' => "名称",
            'description' => "描述",
            'optional' => "可选",
            'value' => "餐厅、供应商，以及和我一起受训的人。",
            'colour' => "颜色",
            'cancel' => "取消",
            'submit' => "创建保险库",
        ],

        'split' => [
            'title' => "Central Perk 放在一个里，餐厅放在另一个里。",
            'lead' => "Monica Geller 可能会把 Rachel、Chandler 和朋友圈里的其他人放在“个人”里，把餐厅的同事放在“工作”里。",
            'body' => "每个保险库都有自己的联系人列表、关系、时间线和提醒。搜索只在你正在使用的保险库里进行，让你专注于生活的那一部分。",
            'label' => "Monica 中并排的两个保险库。在“个人”中：Rachel Green，室友；Chandler Bing，伴侣；Ross Geller，哥哥；Joey Tribbiani 和 Phoebe Buffay，朋友。在“工作”中，搜索 Rachel 没有找到任何人，因为搜索只在当前保险库里进行。里面的人是 Marcel Duval，副主厨；Inès Ortega，糕点师；Sam Whitfield，餐厅老板。",
            'people' => "联系人",
            'search' => "搜索“个人”",
            'query' => "Rachel",
            'empty' => [
                'title' => "“工作”里没有叫 Rachel 的人",
                'body' => "搜索只在当前保险库里进行。切换到其他保险库，就能在那里搜索。",
            ],
            // The people are in the template, in this order.
            'personalRoles' => ["室友", "伴侣", "哥哥", "朋友", "朋友"],
            'workRoles' => ["副主厨", "糕点师", "餐厅老板"],
        ],

        'templates' => [
            'title' => "不同的空间，可以记不同的细节。",
            'lead' => "对一位亲密的朋友和一位同事，你记住的事大概并不一样。",
            'body' => "为每个保险库选择一个默认的联系人模板。新联系人会从你选好的结构开始，不管是爱吃的东西和共同的回忆，还是职位和专长。",
            'label' => "Monica 中的两位联系人，来自不同的保险库。“个人”里的 Rachel Green 使用“朋友和家人”模板：她爱吃的是 trifle，只要里面没有牛肉，共同的回忆是她 1994 年穿着婚纱来到 Central Perk。“工作”里的 Marcel Duval 使用“同事”模板：他的职位是副主厨，专长是酱汁和鱼类。下方，“工作”的默认模板设为“同事”。",
            // Rachel first, then Marcel.
            'cards' => [
                ['template' => "个人 · “朋友和家人”模板", 'fields' => [
                    ['label' => "爱吃的东西", 'value' => "Trifle，只要里面没有牛肉"],
                    ['label' => "共同的回忆", 'value' => "1994 年穿着婚纱来到 Central Perk"],
                ]],
                ['template' => "工作 · “同事”模板", 'fields' => [
                    ['label' => "职位", 'value' => "副主厨"],
                    ['label' => "专长", 'value' => "酱汁和鱼类"],
                ]],
            ],
            'defaultFor' => "“工作”的默认模板",
            'choice' => "同事",
        ],

        'switch' => [
            'title' => "想从哪里继续，就从哪里继续。",
            'lead' => "切换保险库，就能看到属于那里的人、事件和提醒。",
            'body' => "选择一个默认保险库，让你最常用的空间成为起点。",
            'label' => "Monica 中的保险库切换器，当前在“工作”中。你的保险库：“个人”，默认保险库，24 人；“工作”，已选中，9 人；然后是全部保险库。下方是默认保险库设置，“个人”：登录后进入的保险库。",
            'counts' => ["24 人", "9 人"],
            'all' => "全部保险库",
            'defaultLabel' => "默认保险库",
            'hint' => "登录后进入的保险库。",
        ],

        'apart' => [
            'title' => "空间各自独立，仍是你的账户。",
            'lead' => "保险库在你的账户内整理信息。它们只属于你：别人无法加入，也无法登录查看你记下的内容。",
            'body' => "添加某个人之前，先想好他属于哪里。联系人目前不能在保险库之间移动，关系只连接同一个保险库里的人。",
        ],
    ],

    'sharing' => [
        // Words more than one drawing uses.
        'optional' => "可选",
        'stops' => "失效时间",
        'week' => "7 天后",
        'password' => "密码",
        'cancel' => "取消",
        'address' => "地址",
        'phone' => "电话",
        // The sections of Joey's page, in the order the selection lists them.
        'sections' => ["联系方式", "饮食偏好", "个人资料", "工作", "笔记", "你标记为敏感的字段"],

        'hero' => [
            'title' => "只分享你选定的内容。",
            'intro' => "有人需要一个地址、一个电话号码，或者几条有用的细节。",
            'lede' => "通过只读链接，分享联系人页面上选定的分区。你来决定它显示什么、有效多久，以及何时停止访问。",
            'cta' => "创建你的账户",
            'label' => "在 Monica 中分享“个人”保险库里 Joey Tribbiani 的页面。链接始终是只读的：打开它的人不需要账户，不会加入任何东西，也无法修改任何内容。链接名为“Joey 的生日”，对象是 Rachel Green，7 天后失效，没有设置密码。将要分享的内容：6 个分区中的 2 个，以及他的姓名，没有其他内容。",
            'readOnly' => "始终只读",
            'heading' => "分享 Joey Tribbiani",
            'body' => "一个只指向这一页的私密链接。打开它的人不需要账户，不会加入任何东西，也无法修改任何内容。",
            'vault' => "个人 · 朋友和家人",
            'link' => "链接本身",
            'linkBody' => "这两项只有你能看到。打开链接的人看不到它们。",
            'name' => "给这个链接起个名字",
            'nameValue' => "Joey 的生日",
            'who' => "分享给谁",
            'passwordHint' => "打开页面之前会先询问",
            'out' => "将要分享的内容",
            'summary' => "6 个分区中的 2 个，以及他的姓名。没有其他内容。",
            'create' => "创建分享链接",
            'note' => "之后你可以修改它显示的内容，也可以撤销它。",
        ],

        'visitor' => [
            'title' => "Rachel 正在筹备 Joey 的生日。",
            'lead' => "她需要他的地址和电话号码。你记的那些关于他试镜的笔记，可以只留给自己。",
            'body' => "创建一个指向 Joey 页面的链接，选好 Rachel 需要的分区。她不需要 Monica 账户就能打开，也无法修改任何内容。",
            'label' => "Rachel 看到的 Joey Tribbiani 的页面，由 Monica Geller 分享给她，只读，有效期至 2026 年 10 月 20 日。联系方式：他的地址 495 Grove Street, Apt 19, New York，以及他的电话号码。一条说明写着，这是某个人私人记录中的一页，没有需要登录的地方，也没有需要回复的地方。",
            'by' => "Monica Geller 与你分享",
            'until' => "只读 · 2026 年 10 月 20 日失效",
            'oldAddress' => "495 Grove Street, Apt 19, New York",
            'notice' => "这是某个人私人记录中的一页，按今天的样子分享给你。这里没有需要登录的地方，也没有需要回复的地方。",
        ],

        'selection' => [
            'title' => "多一点，或者少一点，由你决定。",
            'lead' => "每个链接都有自己选定的分区。把联系信息分享给一个人，把另一组细节分享给另一个人。",
            'body' => [
                "你标记为敏感的字段默认不包含在内。需要时，你可以选择把它们加进来。",
                "生活事件、关系、提醒、照片、附件和修改历史，不会出现在分享的页面上。",
            ],
            'label' => "指向 Joey 页面的两个链接，各有自己的分区。给 Rachel 的“Joey 的生日”：联系方式和饮食偏好，个人资料、工作、笔记和你标记为敏感的字段不包含在内。给经纪人的“宣传照和合同”：联系方式和工作。分享页面上永远不会出现：生活事件、关系、提醒、照片、附件和修改历史。",
            // Which sections each link shows, by their place in `sections`,
            // is in the template.
            'links' => [
                ['title' => "给 Rachel", 'meta' => "Joey 的生日 · 2 个分区"],
                ['title' => "给经纪人", 'meta' => "宣传照和合同 · 2 个分区"],
            ],
            'sensitive' => "敏感",
            'never' => "分享页面上永远不会出现",
            'kept' => ["生活事件", "关系", "提醒", "照片", "附件", "修改历史"],
        ],

        'expiry' => [
            'title' => "给链接设一个失效日期。",
            'lead' => "让 Rachel 的链接有效七天、三十天或三个月。你也可以让链接一直开着，直到你撤销它。",
            'body' => "想要多一层保护时，可以加上密码。任何拿到未设密码的链接的人都能打开它，所以请谨慎分享。",
            'label' => "选择链接何时失效：已选中 7 天后，即 2026 年 10 月 20 日。其他选项是 30 天后（2026 年 11 月 12 日）、3 个月后（2027 年 1 月 13 日），以及直到你撤销为止。下方已设置密码，打开页面之前会先询问。",
            // The first is the one selected.
            'options' => [
                ['label' => "7 天后", 'date' => "2026 年 10 月 20 日"],
                ['label' => "30 天后", 'date' => "2026 年 11 月 12 日"],
                ['label' => "3 个月后", 'date' => "2027 年 1 月 13 日"],
            ],
            'forever' => "直到你撤销",
            'hint' => "打开页面之前会先询问。",
        ],

        'send' => [
            'title' => "用你自己的方式发出去。",
            'lead' => "复制链接，通过你平时用的对话发给对方。",
            'body' => "Monica 不会给收件人发邮件，也不会发出邀请。如果你加了密码，请另外告诉对方。",
            'label' => "Monica 中新建的分享链接：链接已生效。请现在复制，因为只有这一次能完整显示，所以丢失的链接只能重新创建，无法找回。有复制链接和以访客身份打开的按钮。不会发送任何邮件：如果你设了密码，请单独告诉 Rachel，不要和地址一起发。",
            'heading' => "链接已生效",
            'warning' => "请现在复制。只有这一次能完整显示，所以丢失的链接只能重新创建，无法找回。",
            'copy' => "复制链接",
            'open' => "以访客身份打开",
            'note' => "不会发送任何邮件。如果你设了密码，请单独告诉 Rachel，不要和地址一起发。",
        ],

        'update' => [
            'title' => "让细节保持最新。",
            'lead' => "Joey 搬家了。在 Monica 里更新他的地址，Rachel 下次打开分享的页面时，就会看到新地址。",
            'body' => "你也可以修改链接显示的分区、密码或失效日期，而不用改变链接的地址。",
            'label' => "在你的 Monica 中编辑 Joey 的地址，改为 90 Bedford Street, Apt 20, New York。旁边是 Rachel 的分享页面，用的是同一个链接，已经显示了新地址，电话号码不变。",
            'edit' => "编辑地址",
            'where' => "在你的 Monica 中",
            'newAddress' => "90 Bedford Street, Apt 20, New York",
            'save' => "保存更改",
            'shared' => "Rachel 的分享页面",
            'same' => "同一个链接",
        ],

        'visits' => [
            'title' => "看看链接是什么时候被打开的。",
            'lead' => "每个链接都有访问记录，包括它何时被打开，以及访问大致来自哪里。输错密码的尝试也会出现在那里。",
            'body' => "记录里是访问，并不能确认背后是谁。收件人不需要登录。",
            'label' => "一个分享链接的访问记录，共 3 条：今天 09:42 从美国纽约打开；今天 09:41 输错密码，一次失败的尝试，来自纽约；昨天 21:15 从纽约打开。位置只是大致范围，不会记录访客的任何信息。",
            'heading' => "访问记录",
            'total' => "共 3 条",
            // Newest first.
            'entries' => [
                ['what' => "已打开", 'when' => "今天 09:42 · 美国纽约"],
                ['what' => "密码错误", 'when' => "今天 09:41 · 美国纽约", 'badge' => "尝试失败"],
                ['what' => "已打开", 'when' => "昨天 21:15 · 美国纽约"],
            ],
            'note' => "位置只是大致范围。不会记录访客的任何信息。",
        ],

        'revoke' => [
            'title' => "用完之后，就停止访问。",
            'lead' => "生日已经过去了。撤销 Rachel 的链接，它会立即失效。",
            'body' => "你可以随时撤销链接，即使当初没有给它设失效日期。如果有人需要再次访问，就创建一个新的。",
            'label' => "在 Monica 中撤销 Rachel 的链接。你一按下这里，链接就会失效，而且无法撤回。Joey 的页面保持原样。",
            'heading' => "撤销 Rachel 的链接？",
            'warning' => "你一按下这里，链接就会失效，而且无法撤回。Joey 的页面保持原样。",
            'confirm' => "撤销这个链接",
        ],
    ],

    /**
     * The API and MCP page, "Your contacts, connected to your tools". The
     * assistants' names (Claude, ChatGPT, Gemini) are product names and are
     * the same in every language, so they are in the template. So are the
     * tool names and the request in the code sample, which are code.
     */
    'api' => [
        // Words more than one drawing uses.
        'explore' => "探索 API",

        'hero' => [
            'title' => "让你的联系人，连接你的工具。",
            'intro' => "在 Claude、ChatGPT、Gemini 或你自己的脚本里使用 Monica。用你已经在用的工具，查找联系人、记录一个时刻，或设置提醒。",
            'lede' => "在你的助手支持 MCP 的地方通过 MCP 连接，也可以用 API 搭建你自己的连接。",
            'cta' => "创建你的账户",
            'label' => "与 Claude 的一段对话，内容是接下来一周，已连接 Monica。你说：Joey 周三要试镜，下周二提醒我问问他心情怎么样。Claude 使用 Monica 的 create_reminder 工具，在“个人”保险库里添加了提醒“问问 Joey 试镜的事”，日期是 10 月 20 日周二，并回复说 Monica 会在那天提醒你。",
            'chat' => "接下来的一周",
            'connected' => "已连接 Monica",
            'ask' => "Joey 周三要试镜。下周二提醒我问问他心情怎么样。",
            'reminder' => "问问 Joey 试镜的事",
            'when' => "10 月 20 日周二 · 个人",
            'done' => "好了。Monica 会在 10 月 20 日周二提醒你，问问 Joey 试镜的事。",
        ],

        'conversation' => [
            'title' => "让 Monica 贴近你的对话。",
            'lead' => "你正在和助手聊接下来的一周，聊到了 Joey 的试镜。趁着想起来，设一个提醒。",
            'body' => [
                "Monica 的 MCP 服务器为兼容的助手提供工具，用来处理你的账户。",
                "助手会使用 Monica 现有的工具来完成你的请求。",
            ],
            'label' => "三个示例请求，以及每个请求用到的 Monica 工具。在我的“个人”保险库里找到 Chandler Bing：search_contacts。记录昨天和 Phoebe 在 Central Perk 吃晚饭：create_life_event。提醒我下周二问问 Joey 试镜的事：create_reminder。",
            'examples' => "示例请求",
            // The tool each request uses is in the template, in this order.
            'requests' => [
                "“在我的‘个人’保险库里找到 Chandler Bing。”",
                "“记录昨天和 Phoebe 在 Central Perk 吃晚饭。”",
                "“提醒我下周二问问 Joey 试镜的事。”",
            ],
        ],

        'assistants' => [
            'title' => "Claude、ChatGPT、Gemini，还有更多可能。",
            'lead' => "MCP 是一种通用的连接标准，让助手可以和 Monica 这样的应用协同工作。",
            'body' => [
                "请使用支持连接 Monica 远程 MCP 服务器的客户端。根据产品、套餐和设置的不同，这可能是 Claude、ChatGPT、基于 Gemini 的工具，或其他兼容 MCP 的应用。",
                "各个客户端的支持情况并不一致：光有助手的名字，并不能保证它能连接。请按照 Monica 的连接指南确认具体要求。",
            ],
            'guide' => "阅读助手连接指南",
            'label' => "可以连接 Monica 的助手：Claude、ChatGPT、基于 Gemini 的工具，以及其他兼容 MCP 的客户端。",
            'gemini' => "基于 Gemini 的工具",
            'others' => "其他兼容 MCP 的客户端",
        ],

        'scripts' => [
            'title' => "你的脚本也可以加入。",
            'lead' => "JSON API 让你自己的软件也能使用 Monica。",
            'body' => [
                "创建联系人和保险库，记录生活事件，管理提醒，或构建模板。把联系人从另一个系统导入，或让 Monica 接入你已有的工作流程。",
                "请求使用 API 密钥，响应以 JSON 返回。",
            ],
            'label' => "向 Monica 的 API 发出的一个请求：在某个保险库里创建名为 Gunther 的联系人，使用 API 密钥授权。以及响应：201 Created，包含新联系人的 id、名字和所在的保险库。",
        ],

        'coverage' => [
            'title' => "今天已经好用，还在不断完善。",
            'lead' => "通过这些连接，你目前可以使用 Monica 的这些部分：",
            'caption' => "JSON API 和 MCP 覆盖了 Monica 的多少功能",
            'operations' => "支持的用户操作",
            'feature' => "功能覆盖率",
            // JSON API first, then MCP.
            'operationsValues' => ["76 项中的 55 项", "76 项中的 34 项"],
            'featureValues' => ["72.4%", "44.7%"],
            'tools' => "Monica 提供 :tools，覆盖 :endpoints。",
            'toolsCount' => "87 个 MCP 工具",
            'endpoints' => "143 个 API 端点中的 60.8%",
            'audit' => "这些数据来自日期为 :date 的源代码审计。功能覆盖率依据一份包含 76 项用户操作的清单；端点覆盖率统计的是单个 API 路由。它们衡量的是可用性，而不是可靠性或助手的成功率。",
            'date' => "2026 年 10 月 13 日",
        ],

        'scope' => [
            'title' => "了解你能做什么。",
            'lead' => "两种连接都支持查找和创建联系人、记录生活事件、管理手动提醒，以及处理模板。",
            'body' => [
                "有些事仍需在网页应用里完成：查看或编辑联系人的全部自定义信息、管理人与人之间的关系，以及创建分享链接。",
                "API 还支持管理保险库和模板标签页。MCP 暂时还没有提供这些操作。",
            ],
            'label' => "每种连接能做什么。API 和 MCP 都可以：查找联系人、创建联系人、记录生活事件、管理手动提醒，以及处理模板。目前只有 API 可以：管理保险库和管理模板标签页。只能在网页应用里完成：联系人的全部自定义信息、人与人之间的关系，以及分享链接。",
            'groups' => [
                ['title' => "API 和 MCP", 'items' => ["查找联系人", "创建联系人", "记录生活事件", "管理手动提醒", "处理模板"]],
                ['title' => "目前仅限 API", 'items' => ["管理保险库", "管理模板标签页"]],
                ['title' => "在网页应用里", 'items' => ["联系人的全部自定义信息", "人与人之间的关系", "分享链接"]],
            ],
        ],

        'access' => [
            'title' => "访问权限由你决定。",
            'lead' => "在设置里创建和撤销 API 密钥。查看已连接的助手，用完就断开。",
            'body' => "连接在你的账户内运行，只通过 Monica 开放的操作工作。助手取得的信息会传给运行该助手的服务，所以请选择你信任的服务来处理这些细节。",
            'label' => "Monica 设置里的连接。已连接的助手：Claude，4 分钟前使用过；ChatGPT，3 天前使用过，两者各有一个断开按钮。API 密钥：一个名为“从旧通讯录导入”的密钥，以 3f9a 结尾，带有撤销按钮，另有一个创建新密钥的按钮。",
            'assistants' => "已连接的助手",
            // Claude first, then ChatGPT.
            'used' => ["4 分钟前使用", "3 天前使用"],
            'disconnect' => "断开连接",
            'keys' => "API 密钥",
            'newKey' => "新建密钥",
            'keyName' => "从旧通讯录导入",
            'revoke' => "撤销",
        ],

        'closing' => [
            'title' => "从一件有用的小事开始。",
            'body' => "记录和 Phoebe 的晚饭。为 Joey 的试镜设一个提醒。用你自己的脚本添加一个联系人。",
            'connect' => "连接一个助手",
        ],
    ],

    'privacyFeatures' => [
        // Words more than one drawing uses.
        'sensitive' => "敏感",
        'phone' => "电话",
        'healthNote' => "健康笔记",

        'hero' => [
            'title' => "个人的细节，值得一个私密的地方。",
            'lede' => "你记下关于某些人的事，是因为他们对你很重要。保留什么、分享什么，以及哪些工具可以访问，都由你选择。",
            'cta' => "创建你的账户",
            'label' => "Monica 中 Rachel Green 的页面，在“个人”保险库里。显示了她的电话号码和生日。她的健康笔记被标记为敏感，所以内容隐藏在“显示”按钮后面。",
            'vault' => "个人 · 朋友",
            'birthday' => "生日",
            'birthdayValue' => "1970 年 5 月 5 日",
            'reveal' => "显示",
        ],

        'audience' => [
            'title' => "你的联系人不会变成观众。",
            'lead' => "把 Chandler 添加到 Monica，不会给他发邀请，也不会告诉他你写了什么。",
            'body' => "你的账户只属于你。没有人会加入你的保险库，你记录的人也无法打开他们的页面，除非你选择把某些内容分享给他们。",
            'label' => "Chandler Bing 已添加到“个人”保险库。他的页面里有一条关于他想辞职的笔记，没有任何分享链接，所以 Chandler 无法打开它。",
            // :name is Chandler's name, drawn in bold.
            'added' => ":name 已添加到“个人”。",
            'notes' => "笔记",
            'notesValue' => "在考虑辞掉统计分析和数据重组的工作。",
            'links' => "分享链接",
            'linksValue' => "无。Chandler 无法打开这个页面。",
        ],

        'hidden' => [
            'title' => "有些细节，应该藏起来。",
            'lead' => "Rachel 的电话号码，和一条关于她健康的私人笔记，值得区别对待。",
            'body' => [
                "把字段标记为敏感，它的内容就会在屏幕上保持隐藏，直到你选择显示。敏感的值不会出现在联系人列表的列里，也不会包含在分享链接中，除非你明确选择包含。",
                "这有助于防止意外暴露。任何登录了你账户的人，仍然可以显示这些值。",
            ],
            'label' => "正在编辑“健康笔记”字段，已勾选“标记为敏感”：在屏幕上隐藏，直到你选择显示，也不会出现在列表的列和分享链接中。旁边的联系人列表显示姓名和电话号码，并说明“健康笔记”因为是敏感字段，无法添加为列。",
            'edit' => "编辑字段",
            'fieldLabel' => "标签",
            'mark' => "标记为敏感",
            'markBody' => "在屏幕上隐藏，直到你选择显示。不会出现在列表的列和分享链接中。",
            'name' => "姓名",
            'column' => "健康笔记是敏感字段，无法添加为列。",
        ],

        'share' => [
            'title' => "分享一点，其余的留给自己。",
            'lead' => "Rachel 需要 Joey 的地址，来筹备他的生日派对。她不需要他页面上的其他内容。",
            'body' => "创建一个只读的分享链接，选好要显示的分区，还可以设置密码和失效日期。需要时可以修改它显示的内容，不再需要访问时就撤销它。",
            'label' => "一个名为“Joey 的生日”的分享链接，对象是 Rachel Green。它显示“联系方式”，隐藏 Joey 页面上的其他所有内容。打开页面之前会先询问密码，链接于 2026 年 10 月 20 日失效，即 7 天后。有修改和撤销它的按钮。",
            'link' => "Joey 的生日",
            'change' => "修改",
            'for' => "对象",
            'shows' => "显示",
            'showsValue' => "联系方式",
            'hidden' => "隐藏",
            'hiddenValue' => "Joey 页面上的其他所有内容",
            'password' => "密码",
            'passwordValue' => "打开页面之前会先询问",
            'ends' => "失效时间",
            'endsValue' => "2026 年 10 月 20 日，7 天后",
            'revoke' => "撤销这个链接",
        ],

        'tools' => [
            'title' => "有意识地连接你的工具。",
            'lead' => "通讯录应用、脚本或助手，都可以通过你给它的连接访问信息。",
            'body' => [
                "你可以选择 API 密钥是否能读取敏感字段的值，撤销不再使用的密钥，并在设置里断开助手的连接。",
                "助手获取信息时，会把这些信息传给运行它的服务。选择连接时，请把这一点考虑进去。",
            ],
            'label' => "正在创建一个名为“手机通讯录”的 API 密钥，“可以读取敏感字段的值”没有勾选。下方，Claude 列为已连接的助手，通过 OAuth 连接，旁边有断开连接的按钮。",
            'create' => "创建密钥",
            'keyName' => "给这个密钥起个名字",
            'keyValue' => "手机通讯录",
            'sensitive' => "可以读取敏感字段的值",
            'sensitiveBody' => "除非工具需要，否则请保持关闭。",
            'assistants' => "已连接的助手",
            'via' => "通过 OAuth 连接",
            'disconnect' => "断开连接",
        ],

        'protect' => [
            'title' => "守好入口。",
            'lead' => "使用通行密钥，或为你的账户添加双重验证。把恢复码存放在安全的地方，这样你总有办法重新登录。",
            'body' => "密码以单向哈希的形式存储。双重验证的密钥和恢复码经过加密。Monica 也把 API 密钥和分享链接令牌以哈希的形式存储，而不是保留它们可读的原文。",
            'label' => "登录方式：MacBook Air 上的一个通行密钥，2 天前添加，已启用；一个验证器应用，可以开启；以及恢复码，设备丢失时重新登录的办法。Monica 如何存储：密码为单向哈希，双重验证密钥和恢复码经过加密，API 密钥和分享链接令牌为哈希。",
            // In the order they are drawn: a passkey, an authenticator app,
            // recovery codes. The first action is a badge, the others buttons.
            'methods' => [
                ['title' => "通行密钥", 'body' => "MacBook Air · 2 天前添加", 'action' => "已启用"],
                ['title' => "验证器应用", 'body' => "每次登录都要求输入验证码。", 'action' => "开启"],
                ['title' => "恢复码", 'body' => "设备丢失时，重新登录的办法。", 'action' => "显示"],
            ],
            'stores' => "Monica 如何存储",
            'rows' => [
                ["密码", "单向哈希"],
                ["双重验证密钥", "已加密"],
                ["恢复码", "已加密"],
                ["API 密钥", "哈希"],
                ["分享链接令牌", "哈希"],
            ],
        ],

        'admins' => [
            'title' => "了解管理员能看到什么。",
            'lead' => "Monica 的管理界面会显示账户信息，例如你的姓名、邮箱地址、登录活动和存储用量。",
            'body' => [
                "它们无法访问你的联系人、提醒、文件，或保险库里的细节。",
                "这个区别很重要：它说的是管理界面。这并不意味着服务运营者在技术上无法访问存储在服务器上的数据。",
            ],
            'label' => "Monica Geller 的账户在管理空间里：她的邮箱地址，今天 08:12 的最近一次登录，以及 48 MB 的存储用量。联系人、提醒、文件和保险库细节不会在那里显示。",
            'space' => "管理空间",
            'email' => "邮箱",
            'signIn' => "最近登录",
            'signInValue' => "今天 08:12",
            'storage' => "存储",
            'storageValue' => "48 MB",
            'notice' => "联系人、提醒、文件和保险库细节不会在这里显示。",
        ],

        'hosting' => [
            'title' => "选择 Monica 住在哪里。",
            'lead' => "使用托管服务，或者在你自己的服务器上运行 Monica。",
            'body' => "自托管让你选择信息存储在哪里，以及由谁来运营服务。它也把更新、服务器安全和备份交到你手里。",
            'label' => "运行 Monica 的两种方式。托管服务由 Monica 运营，更新、安全和备份都替你处理。在你自己的服务器上，由你或你选择的人来运营，更新、安全和备份由你负责。",
            'operated' => "运营者",
            'upkeep' => "更新、安全、备份",
            'options' => [
                ['title' => "托管服务", 'operated' => "Monica", 'upkeep' => "替你处理"],
                ['title' => "你自己的服务器", 'operated' => "你，或你选择的人", 'upkeep' => "由你负责"],
            ],
        ],

        'logs' => [
            'title' => "查看你账户上的活动。",
            'lead' => "账户日志让你查看记录下来的活动，包括时间和网络地址。你也可以看到 Monica 发给你的邮件副本。",
            'body' => "当有什么看起来不熟悉时，这些记录能让你核对发生了什么。",
            'label' => "Monica 账户的活动日志：今天 08:12 使用通行密钥登录，昨天 19:40 创建了 API 密钥，2026 年 10 月 11 日 21:05 从另一个地址连接了助手，2026 年 10 月 7 日 10:31 修改了密码。第二个标签页列出 Monica 发出的邮件。",
            'activity' => "活动",
            'emails' => "已发邮件",
            // What happened and when, newest first. The addresses beside them
            // are in the template, because they are not copy.
            'entries' => [
                ["使用通行密钥登录", "今天 08:12"],
                ["创建了 API 密钥", "昨天 19:40"],
                ["连接了助手", "2026 年 10 月 11 日 21:05"],
                ["修改了密码", "2026 年 10 月 7 日 10:31"],
            ],
        ],
    ],

    'languages' => [
        'hero' => [
            'title' => "你的语言，他们的名字。",
            'lede' => "用你用着最自在的语言使用 Monica。让每个人的名字保持他们自己使用的形式，并选择日期、时间和数字的显示方式。",
            'body' => "你生活中的人并不都遵循同一套习惯。你的通讯录应该为此留出空间。",
            'cta' => "创建你的账户",
            'label' => "Monica 中的联系人列表，界面为法语。列出了 Chandler Bing、Élodie Durand、Dr. Ross Geller 和 Kim Ji-woo，其中 Ji-woo 的名字还用韩文写出。",
            // The drawing is the product in French, whatever the language of
            // the page around it, because it shows somebody who chose French.
            // Leave these four in French in every language file.
            'window' => [
                'title' => "Personnes",
                'search' => "Rechercher",
                'chandler' => "Anniversaire le 8 avril",
                'elodie' => "Vue il y a 3 jours",
                'ross' => "Anniversaire le 18 octobre",
            ],
        ],

        'language' => [
            'title' => "在这里，像在家一样。",
            'lead' => "Monica 提供 30 多种语言，包括法语、西班牙语、德语、日语、韩语和中文。",
            'body' => "在偏好设置中选择你的语言。它会跟随你，出现在你登录的每台设备上，Monica 也会按这种语言的排序规则整理你的联系人。",
            'label' => "语言设置，展开的列表中每种语言都用自己的文字书写，已选中法语。",
            'field' => "语言",
            // What each language is called in the reader's language, next to
            // its own name for itself. The keys are language codes.
            'names' => [
                'es' => "西班牙语",
                'de' => "德语",
                'fr' => "法语",
                'ja' => "日语",
                'ko' => "韩语",
                'zh' => "中文",
            ],
        ],

        'names' => [
            'title' => "名字值得被正确书写。",
            'lead' => "并不是每个人都把名放在前面。也不是每个名字都能整齐地放进两个格子里。",
            'body' => [
                "为每位联系人选择先写名还是先写姓，或者让它遵循你的默认偏好。需要时可以分开填写各个部分，也可以直接输入应当显示的完整姓名。",
                "还有位置留给称谓、后缀、昵称和婚前姓名。Ross 可以保留他的“Dr.”，其他人可以自己决定用不用。",
            ],
            'label' => "两种姓名形式。Ross Geller 的带有称谓 Dr.，并遵循默认的姓名顺序。Kim Ji-woo 的设为先写姓，昵称是 Jiji。",
            'optional' => "可选",
            'prefix' => "称谓",
            'prefixValue' => "Dr.",
            'suffix' => "后缀",
            'suffixPlaceholder' => "Jr, PhD",
            'first' => "名",
            'last' => "姓",
            'readsAs' => "显示为",
            'follow' => "遵循我的偏好",
            'familyFirst' => "先写姓",
            'nickname' => "昵称",
            'maiden' => "婚前姓名",
        ],

        'forms' => [
            'title' => "同一个人，不止一种写法。",
            'lead' => "把名字保存为它原本的文字，同时保留另一种写法、音译或发音提示。",
            'body' => [
                "音译让你可以用另一种文字记录这个名字。发音提示则帮你记住怎么念。",
                "这些写法都属于同一位联系人。由你自己填写，还可以加上可选的语言和文字标签，让它们一目了然。",
            ],
            'label' => "Kim Ji-woo 的名字有三种写法：韩文 김지우，拉丁字母 Kim Ji-woo，以及一条发音提示。",
            'heading' => "姓名",
            'hint' => "同一个名字的不同写法。",
            'written' => "书写形式 · 韩语 · 韩文",
            'transliteration' => "音译 · 拉丁字母",
            'pronunciation' => "发音提示",
            // How Ji-woo's name sounds, spelled for a reader of this language.
            'pronunciationValue' => "jin zhi-wu",
            'add' => "添加这个名字的另一种写法",
        ],

        'display' => [
            'title' => "选择你想看到的名字。",
            'lead' => "选一种已保存的写法作为联系人的显示名称。Monica 会在列表、页面标题、通知和首字母头像中使用它。",
            'body' => "其他写法仍保留在联系人上。更改界面语言，不会替你换成另一个名字。",
            'label' => "音译 Kim Ji-woo 被选为显示名称，并出现在联系人列表、页面标题和生日通知中。",
            'written' => "书写形式",
            'transliteration' => "音译",
            'badge' => "显示名称",
            'list' => "列表",
            'pageTitle' => "页面标题",
            'notification' => "通知",
            'birthday' => ":name 的生日是明天",
        ],

        'dates' => [
            'title' => "日期，不必再猜。",
            'lead' => "04/05 是 4 月 5 日，还是 5 月 4 日？选一种你读起来顺眼的格式。",
            'body' => "设置日期格式，选择 12 小时制或 24 小时制，并选择数字中使用的分隔符。这些偏好与你的语言相互独立，所以你可以按自己喜欢的方式搭配。",
            'label' => "日期、时间和数字设置，日在月之前，24 小时制，千位之间用空格分隔。预览显示：:preview",
            'heading' => "日期、时间和数字",
            'format' => "日期格式",
            'formatLong' => "2026年10月13日",
            'clock' => "时钟",
            'twelve' => "12 小时制 · 下午 6:30",
            'twentyFour' => "24 小时制 · 18:30",
            'numbers' => "数字",
            'preview' => "预览",
            'previewValue' => "和 Phoebe 吃晚饭，04/05/2026 19:00",
        ],

        'timezone' => [
            'title' => "你的一天，按你的时区。",
            'lead' => "搜索城市、使用地图，或沿用设备上的设置，来选择你的时区。",
            'body' => "Monica 会据此显示日期和时间。已有的提醒保留各自的时区，所以更改偏好不会悄悄挪动你早已设好的提醒。",
            'label' => "通过搜索城市选择时区：已高亮里斯本。下方是每周日 18:00 给妈妈打电话的提醒，它保持纽约时区。",
            'tabs' => ["搜索城市", "地图", "来自此设备"],
            // The first letters of the city typed so far. Both cities below
            // should start with them in this language.
            'query' => "里",
            'lisbon' => "里斯本，葡萄牙",
            'lismore' => "里斯莫尔，澳大利亚",
            'reminder' => "给妈妈打电话",
            'reminderWhen' => "每周日 18:00 · 保持 America/New_York",
        ],
    ],

    'footer' => [
        // The closing line ends every page, so it is two short sentences rather
        // than a pitch. Each one is its own line.
        'closing' => ["Monica 替你记着。", "你去外面走走。"],
        'start' => "开始使用 Monica",
        'github' => "在 GitHub 上查看",

        'tagline' => "开源个人 CRM。AGPL-3.0。",
        'productLabel' => "产品",
        'developersLabel' => "开发者",
        'companyLabel' => "公司",
        'personalCrm' => "什么是个人 CRM？",
        'changelog' => "更新日志",
        'mcp' => "MCP",
        'api' => "API",
        'contactSales' => "联系销售",
        'privacy' => "隐私",
        'terms' => "条款",
        'team' => "团队",

        'art' => "湖边的一片草地，熊猫们在草丛中闲躺，在树上小憩",
        'copyright' => "© :year Monica。没有熊猫被追踪。",
        'languageLabel' => "切换语言",
    ],

    'blog' => [
        'title' => "博客",
        'lede' => "关于构建 Monica、保护个人数据隐私，以及保持联系的那些小门道。",

        'allPosts' => "全部文章",
        'keepReading' => "继续阅读",
        'onThisPage' => "本页内容",
        'latest' => "最新文章",

        'readingTime' => "阅读约 :count 分钟",

        // Every post so far has the same author. Kept in lang/ rather than in
        // each post's front matter for that reason: it is a label on the site,
        // and it has to be translated like one.
        'authorRole' => "创始人",

        'copyLink' => "复制链接",
        'copyLinkDone' => "已复制",

        'showing' => "显示第 :from 至 :to 篇，共 :total 篇文章",
        'pageOf' => "第 :page 页，共 :total 页",
        'rssFeed' => "RSS 订阅",
        'newerPosts' => "较新的文章",
        'olderPosts' => "较早的文章",

        'tryMonica' => [
            'title' => "试试 Monica",
            'body' => "一款私密、开源的个人 CRM，帮你记住重要的人。可以自托管，也可以交给我们来运行。",
            'bodyPost' => "记录你生活中的人，而不必把他们交给广告数据库。",
            'cta' => "开始使用",
            'note' => "30 天试用 · 无需信用卡",
        ],


        'openSource' => [
            'title' => "开源",
            'body' => "Monica 从一开始就是开源的。你可以阅读代码、运行自己的实例、提交补丁。",
        ],
    ],

    /**
     * Copied verbatim from the terms published at monicahq.com/terms. This is
     * the authoritative wording; the other three locales are translations of
     * it. Change it here first.
     */
    'terms' => [
        'title' => "我们的使用条款",
        'updated' => "最后更新：:date",
        'updatedOn' => "2018 年 4 月 12 日",

        'sections' => [
            [
                'title' => "服务范围",
                'blocks' => [
                    ['text' => "Monica 支持以下浏览器："],
                    ['items' => [
                        "Internet Explorer（11 及以上）",
                        "Firefox（50 及以上）",
                        "Chrome（最新版）",
                        "Safari（最新版）",
                    ]],
                    ['text' => "我不保证本站能在其他浏览器上正常运行，但很可能可以直接使用。"],
                ],
            ],
            [
                'title' => "权利",
                'blocks' => [
                    ['text' => "注册账户时，你无需提供真实姓名。但如果你想把账户升级为付费版本，或通过电子邮件接收提醒，则需要提供有效的电子邮件地址。"],
                    ['text' => "你有权随时关闭你的账户。"],
                    ['text' => "你有权随时以 SQL 格式导出你的数据。"],
                    ['text' => "你的数据不会被有意展示给其他用户，也不会与第三方共享。"],
                    ['text' => "未经你的同意，你的个人数据不会与任何人共享。"],
                    ['text' => "你的数据每小时备份一次。"],
                    ['text' => "如果本站停止运营，你将在本站关闭之前获得导出全部数据的机会。"],
                    ['text' => "任何会影响隐私的新功能都将严格采用选择加入的方式。"],
                ],
            ],
            [
                'title' => "责任",
                'blocks' => [
                    ['text' => "你不得使用本站存储根据加拿大法律（或任何法律）属于非法的信息或数据。"],
                    ['text' => "你必须年满 18 周岁，才能创建账户并使用本站。"],
                    ['text' => "你不得滥用本站，明知故犯地发布可能危害你自己或其他用户的恶意代码。"],
                    ['text' => "你只能使用本站去做被广泛认可为道德上良善的事情。"],
                    ['text' => "你不得对本站发起自动化请求。"],
                    ['text' => "你不得滥用邀请系统。"],
                    ['text' => "你有责任保障自己账户的安全。"],
                    ['text' => "我保留关闭滥用系统（例如数千个联系人配上数十万条提醒）或以不合理方式使用系统的账户的权利。"],
                ],
            ],
            [
                'title' => "其他重要的法律事项",
                'blocks' => [
                    ['text' => "尽管我想提供出色的服务，但关于这项服务，有些事情我无法承诺。例如，服务和软件按“现状”提供，使用风险由你自行承担，不附带任何明示或暗示的保证或条件。我也不提供任何适销性、特定用途适用性或不侵权的保证。对于因你访问或使用服务或软件而导致的任何计算机系统损害、数据丢失或损坏，或其他损害，Monica 概不负责。"],
                    ['text' => "这些条款可能随时变更，但我绝不会因此做个混蛋。运营这个网站对我来说是梦想成真，我希望能尽可能长久地运营下去。"],
                ],
            ],
        ],
    ],

    /**
     * Copied verbatim from the policy published at monicahq.com/privacy. This
     * is the authoritative wording; the other three locales are translations of
     * it. Change it here first.
     *
     * One untitled section: the published policy is a flat run of paragraphs
     * with no headings, and inventing some would be editing a legal document.
     */
    'privacy' => [
        'title' => "我们的隐私政策",
        'updated' => "最后更新：:date",
        'updatedOn' => "2026 年 8 月 6 日",

        'sections' => [
            [
                'blocks' => [
                    ['text' => "Monica 是一个开源项目。托管版本设有高级套餐，让我们能够收费以支付服务器和附加服务的开支，但主要目标并不是赚钱（否则我们就不会将它开源了）。"],
                    ['text' => "Monica 有两种使用方式：你可以使用我们的托管版本，也可以下载后自行运行。在后一种情况下，我们不会追踪任何内容，甚至不知道你下载过这个产品。你想怎么用都可以（但请遵守当地法律）。"],
                    ['text' => "在我们的托管版本上创建账户时，你会向本站提供由我们收集的个人信息，包括你的姓名、电子邮件地址和密码，其中密码在存储前会被加密。我们不会存储任何其他个人信息。"],
                    ['text' => "你登录服务时，我们使用 cookie 来记住你的登录凭据。这是 cookie 唯一的用途。"],
                    ['text' => "Monica 运行在 Fortrabbit 上，除 Fortrabbit 的员工外，我们是唯一能访问这些服务器的人。"],
                    ['text' => "我们每小时备份一次数据库。"],
                    ['text' => "你的密码使用 bcrypt 加密，这是一种安全性很高的密码哈希算法。如果你需要额外一层安全保护，也可以为账户启用双因素认证。除这些加密机制之外，你的数据在数据库中并未加密。如果有人获得了数据库的访问权限，就能读取你的数据。我们会尽力确保这种情况永远不会发生，但它仍有可能发生。"],
                    ['text' => "如果发生数据泄露，我们会联系受影响的用户，向他们告知此次泄露。"],
                    ['text' => "事务性电子邮件通过 Postmark 发送。"],
                    ['text' => "我们使用一个名为 Sentry 的开源工具来追踪生产环境中发生的错误。他们的服务会记录这些错误，但除了账户 ID（我据此排查问题）之外，他们无法访问任何信息。"],
                    ['text' => "本站目前不展示广告，将来也绝不会展示。本站也不会、并且无意向第三方出售数据，无论是否经过你的同意。我们就是反对这种做法。去他的广告。"],
                    ['text' => "无论是营销网站还是托管版本，我们都不使用任何追踪用户行为或数据的第三方追踪服务，例如 Google Analytics 或 Intercom。我们坚决反对它们的原则，因为它们会利用这些数据为你建立用户画像，而我们完全反对这一点。"],
                    ['text' => "你放在 Monica 上的所有数据都属于你。我们对这些数据不享有任何权利。请不要在上面放置非法内容，否则我们会有麻烦。"],
                    ['text' => "你放在 Monica 上的所有联系人信息都只有你自己可见。我们不会在账户之间交叉关联信息，也不会用某个账户中的信息去填充另一个账户（例如 Facebook 就会这样做）。"],
                    ['text' => "我们使用 Stripe 收取访问付费版本的款项。我们不会在服务器上存储信用卡信息，也不存储与交易本身有关的任何内容。不过，按照我们用于处理付款的开源库（Laravel Cashier）的做法，我们会存储信用卡的最后 4 位数字和品牌名称（VISA 或 MasterCard）。作为用户，你在 Stripe 上由他们生成并使用的一串随机数字来标识。"],
                    ['text' => "关于付款，你可以随时降级到免费套餐。降级时，Stripe 会自动更新，即使我们想再次向你收费也做不到。我们接触的付款信息越少，就越开心。"],
                    ['text' => "你可以随时导出你的数据。如果你知道怎么做，也可以使用 API 导出你的全部数据。你还可以请求由我们代为处理并发送给你。你的数据将以 SQL 格式导出。"],
                    ['text' => "当你关闭账户时，我们会立即从生产数据库中销毁你的所有个人信息，但你的信息会保留在我们保存 30 天的备份中。30 天后，你的信息将被彻底销毁。虽然这一操作由你掌控，但如果你提出请求，我们也可以替你删除账户。"],
                    ['text' => "在某些情况下，我们可能需要根据公共机构的合法请求披露个人数据，包括为满足国家安全或执法的要求。我们只希望这种情况永远不会发生。"],
                    ['text' => "如果你违反使用条款，我们会终止你的账户并通知你。不过，只要你遵守“别当混蛋”的原则，你就不会遇到任何事情，大家都会开心。"],
                    ['text' => "Monica 只使用主要托管在 Github 上的开源项目。"],
                    ['text' => "一旦引入新的信息处理方式，我们就会更新这份隐私政策。届时，我们会向你账户中填写的电子邮件地址发送一封电子邮件。我们绝不会因此做个混蛋，也绝不会在我们所做的事情中引入任何会影响你绝对隐私权的内容。"],
                ],
            ],
        ],
    ],


    /**
     * The mission text is the copy published at monicahq.com/team, word for
     * word, including its grammar. This is the canonical wording; the other
     * three locales are translations of it.
     *
     * The two stat values that were numbers on the old page are words here.
     * Nothing in this build can count contributors across a repository whose
     * history was reset, or contacts on a server it never talks to, and a
     * figure that is wrong a week after it ships is worse than an honest
     * magnitude.
     */
    'team' => [
        'eyebrow' => "团队",
        'title' => "Monica 是一支 2 人的团队，背后有数百位贡献者。",

        'stats' => [
            ['value' => "2016", 'label' => "第一行代码"],
            ['value' => "蒙特利尔", 'label' => "总部"],
            ['value' => "2", 'label' => "正式成员"],
            ['value' => "数百", 'label' => "开源贡献者"],
            ['value' => "数百万", 'label' => "已管理的联系人"],
        ],

        'missionLabel' => "我们的使命",
        'mission' => [
            "我们的使命是以不伤害人际关系的方式使用技术，不像大型社交网络那样。",
            "在一个人人都有成千上万虚拟好友的时代，我们希望提供一款工具，帮助人们与其中少数几位好友加深关系，让每一段友谊都分量十足。",
            "Monica 源于一个个人需求：我想了解那些住在其他国家的朋友们的生活近况。做出第一个版本之后，我决定将它开源，并在 Hacker News 上推广，之后的事情大家都知道了。",
            "Monica 如今是一个健康的开源项目。我们很幸运拥有一个出色的社区，有数十位贡献者和数百次代码贡献。它也带来了一点收入，我们在这个项目上赚到的每一美元都会重新投入项目，用来支付开销并推动后续开发。",
            "感谢你来了解这个项目。",
        ],
        'signature' => "Regis Freyd 和 Alexis Saettler",
    ],

    'notFound' => [
        'title' => "页面未找到。",
        'body' => "这个地址没有指向任何地方。它可能已被移走，也可能从未存在过。",
    ],
];
