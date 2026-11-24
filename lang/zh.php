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
            'support' => "支持",
            'about' => "关于 Monica",
            'privacy' => "隐私政策",
            'personalCrm' => "个人 CRM 指南",
            'templates' => "联系人模板",
            'details' => "联系人详情",
            'reminders' => "提醒",
            'timeline' => "时间线",
            'people' => "人",
            'timelineReminders' => "时间线与提醒",
            'possessions' => "物品",
            'inventory' => "清单与标签",
            'locations' => "位置",
            'maintenanceLoans' => "维护与借出",
            'knowledge' => "知识",
            'relationships' => "关系",
            'vaults' => "保险库",
            'sharing' => "分享",
            'api' => "API 和 MCP",
            'privacyFeatures' => "隐私与安全",
            'languages' => "语言与格式",
            'aiMemory' => "AI 记忆",
            'personalData' => "个人数据管理",
            'mcpServer' => "MCP 服务器",
            'handbook' => "手册",
            'contribute' => "参与贡献",
            'page' => "第 :number 页",
            'label' => "面包屑导航",
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
            'title' => "开源个人 CRM 与个人数据库 — Monica",
            'description' => "Monica 是你的个人数据库：记录联系人、你拥有的一切，以及所有需要记住的事。私密、开源、可自托管。",
            'ogTitle' => "你的人。你的物。你的记忆 — Monica",
            'ogDescription' => "在 Monica 中把联系人、物品和日常细节放在一起。一个个人数据库，可以自己使用，也可以连接你的 AI 助手。",

            'ogImage' => [
                'eyebrow' => "个人 CRM + AI 记忆",
                'title' => "你的人。你的物。",
                'accent' => "你的记忆。",
                'description' => "联系人、物品和日常细节，为你和你的 AI 助手集中保存。",
                'alt' => "Monica：你的人、你的物、你的记忆。一只熊猫把照片放进木制文件柜，旁边是联系人、笔记和记忆卡片。",
            ],
        ],

        'pricing' => [
            'title' => "Monica 价格：托管方案与免费自托管",
            'description' => "免费自托管 Monica，或选择托管：每月 \$9、每年 \$90，或一次性 \$250。所有方案包含全部功能，不按联系人收费。",
            'ogTitle' => "你的服务器，或我们的。由你选择 — Monica",
            'ogDescription' => "免费自托管 Monica，或选择按月、按年或终身托管。所有方案包含全部功能，不按联系人收费。",

            'ogImage' => [
                'eyebrow' => "价格",
                'title' => "你的服务器，或我们的。",
                'accent' => "由你选择。",
                'description' => "免费自托管 Monica，或选择按月、按年或终身托管。所有方案包含全部功能。",
            ],
        ],

        'privacy' => [
            'title' => "隐私政策 — Monica",
            'description' => "Monica 如何处理你的数据：我们收集什么、存放在哪里、谁能看到，以及你关闭账户后会发生什么。没有广告，没有追踪器，不转售数据。",
            'ogTitle' => "隐私政策 — Monica",
            'ogDescription' => "Monica 如何处理你的数据：我们收集什么、存放在哪里、谁能看到，以及你关闭账户后会发生什么。没有广告，没有追踪器，不转售数据。",

            'ogImage' => [
                'eyebrow' => "法律",
                'title' => "隐私政策",
                'description' => "我们收集什么、存放在哪里、谁能看到。没有广告，没有追踪器，不转售数据。",
            ],
        ],

        'about' => [
            'title' => "关于 Monica：一个独立的开源项目",
            'description' => "认识 Régis 和 Alexis，他们是 Monica 背后的人。了解这个独立的开源个人数据库如何开始，以及什么在指引它的开发。",
            'ogTitle' => "两个人，一个个人数据库 — Monica",
            'ogDescription' => "认识 Monica 背后的人，了解项目如何开始，以及它为何保持开源、独立、没有广告。",

            'ogImage' => [
                'eyebrow' => "关于 Monica",
                'title' => "两个人，",
                'accent' => "一个个人数据库。",
                'description' => "项目如何开始，以及它为何保持开源、独立、没有广告。",
            ],
        ],

        'team' => [
            'title' => "团队 — Monica",
            'description' => "Monica 由两个人在蒙特利尔打造，背后还有数百位开源贡献者。为什么我们要做一个不伤害人际关系的个人 CRM。",
            'ogTitle' => "Monica 是两个人的团队，加上数百位贡献者。",
            'ogDescription' => "Monica 由两个人在蒙特利尔打造，背后还有数百位开源贡献者。为什么我们要做一个不伤害人际关系的个人 CRM。",

            'ogImage' => [
                'eyebrow' => "团队",
                'title' => "一个两人团队。",
                'accent' => "加上数百位贡献者。",
                'description' => "在蒙特利尔打造，一个不伤害人际关系的个人 CRM。",
            ],
        ],

        'contribute' => [
            'title' => "参与 Monica：代码、文档和翻译",
            'description' => "用代码、文档、翻译或修复帮助构建 Monica。了解为这个独立的开源个人数据库做贡献的实用方式。",
            'ogTitle' => "帮我们把 Monica 继续做下去。",
            'ogDescription' => "好文档、用心的翻译和有用的修复都有帮助。无论你是否写代码，都能找到参与 Monica 的方式。",

            'ogImage' => [
                'eyebrow' => "参与贡献",
                'title' => "帮我们把",
                'accent' => "Monica 继续做下去。",
                'description' => "文档、翻译和修复都有帮助，无论你是否写代码。",
            ],
        ],

        'support' => [
            'title' => "Monica 支持与文档",
            'description' => "周一至周五给打造 Monica 的人写信，或先看文档：使用 Monica、API、MCP，以及 CardDAV 和 CalDAV。",
            'ogTitle' => "Monica 的帮助，来自打造它的人",
            'ogDescription' => "任何不符合你预期的地方都可以写信告诉我们，或者先看应用内自带的文档。",

            'ogImage' => [
                'eyebrow' => "支持",
                'title' => "Monica 的帮助，",
                'accent' => "来自打造它的人。",
                'description' => "任何不符合你预期的地方，都可以写信告诉我们。",
            ],
        ],

        'terms' => [
            'title' => "使用条款 — Monica",
            'description' => "Monica（开源个人数据库）的使用条款：服务范围、你对数据的权利、你的责任，以及法律细则。",
            'ogTitle' => "使用条款 — Monica",
            'ogDescription' => "Monica（开源个人数据库）的使用条款：服务范围、你对数据的权利、你的责任，以及法律细则。",

            'ogImage' => [
                'eyebrow' => "法律",
                'title' => "使用条款",
                'description' => "服务范围、你对数据的权利，以及你的责任。",
            ],
        ],

        'blog' => [
            'title' => "Monica 博客：版本更新与产品决策",
            'description' => "我们发布了什么、为什么这样做，以及经营一家小型开源公司的真实样子。由打造 Monica 的人撰写。",
            'ogTitle' => "打造 Monica，一次一个决定",
            'ogDescription' => "版本更新、产品决策，以及经营小型开源项目时偶尔得到的教训。由打造 Monica 的人撰写。",

            'ogImage' => [
                'eyebrow' => "博客",
                'title' => "打造 Monica，",
                'accent' => "一次一个决定。",
                'description' => "版本更新、产品决策，以及经营小型开源项目时偶尔得到的教训。",
            ],
        ],

        // A post brings its own title and description, so this is only the
        // frame the site puts around them.
        'post' => [
            'title' => ":title：Monica 博客",
        ],

        'handbook' => [
            'title' => "Monica 手册：这个项目如何运作",
            'description' => "项目是什么、背后的原则、如何盈利、为什么开源，以及营销和优先事项如何决定。由维护者撰写。",
            'ogTitle' => "Monica 手册",
            'ogDescription' => "Monica 如何构建和运营：一个独立开源项目背后的原则、取舍和日常决定。",

            'ogImage' => [
                'eyebrow' => "手册",
                'title' => "Monica",
                'accent' => "如何构建和运营。",
                'description' => "一个独立开源项目背后的原则、取舍和日常决定。",
            ],
        ],

        // Like a post, an article brings its own title and description.
        'handbookArticle' => [
            'title' => ":title：Monica 手册",
        ],

        // Page 2 of a list is not the list. Without this, four pages of the
        // blog compete for one result under one title.
        'paginated' => ":title（第 :page 页，共 :total 页）",
        'paginatedDescription' => "浏览 Monica 博客第 :page 页，共 :total 页：版本更新、产品决策，以及打造 Monica 的人的记录。",

        'v3' => [
            'title' => "Monica v3：为未来十年重新构建",
            'description' => "了解 Monica v3 的重新构建：自定义记录、互联的日记、完整的 API 和更好的移动体验。开源，将于 2026 年底前推出。",
            'ogTitle' => "Monica v3：我们正在重建什么",
            'ogDescription' => "看看 Monica v3 带来什么：由你设计的记录、互联的日记、完整的 API 和更好的移动体验。依然开源。",

            'ogImage' => [
                'eyebrow' => "接下来",
                'title' => "Monica v3：",
                'accent' => "我们正在重建什么。",
                'description' => "由你设计的记录、互联的日记、完整的 API 和更好的移动体验。",
            ],
        ],

        'templates' => [
            'title' => "联系人模板与自定义字段 — Monica",
            'description' => "用你自己的字段、分区和标签页构建联系人模板。为朋友、家人和工作使用不同模板，准备好再发布版本。",
            'ogTitle' => "你的联系人，你的方式 — Monica",
            'ogDescription' => "记住对你重要的事。用自己的字段、分区和标签页构建联系人模板，让每个人的页面都有地方放你想保留的细节。",

            'ogImage' => [
                'eyebrow' => "模板",
                'title' => "你的联系人，",
                'accent' => "你的方式。",
                'description' => "用自己的字段、分区和标签页构建联系人模板。",
            ],
        ],

        'details' => [
            'title' => "联系方式和个人背景集中在一处 — Monica",
            'description' => "在灵活的联系人页面里保存姓名、联系方式、喜好和个人笔记。用 Monica 选择你想记住的细节。",
            'ogTitle' => "小事也值得有个位置 — Monica",
            'ogDescription' => "记下一个人的背景，从名字到让下次聊天更轻松的细节。",
            'ogImage' => [
                'eyebrow' => "联系方式",
                'title' => "记住那些小事。",
                'description' => "姓名、喜好和个人背景。",
                'alt' => "Monica 的熊猫正在把卡片放进文件柜，旁边写着“记住那些小事。”",
            ],
        ],

        'reminders' => [
            'title' => "生日提醒与个人跟进 — Monica",
            'description' => "为生日、重要的日子或一直想联系的朋友设置提醒。可以只提醒一次或按节奏重复，通过邮件或在 Monica 中提醒。",
            'ogTitle' => "记得去联系 — Monica",
            'ogDescription' => "一个生日。一个重要的日子。一位你一直想联系的朋友。",

            'ogImage' => [
                'eyebrow' => "提醒",
                'title' => "记得",
                'accent' => "去联系。",
                'description' => "一个生日。一个重要的日子。一位你一直想联系的朋友。",
            ],
        ],

        'timeline' => [
            'title' => "个人时间线与人生事件 — Monica",
            'description' => "记录发生了什么、谁在场，以及你想保留的细节。人生事件同时出现在每个人的时间线上，还有自定义类型和字段。",
            'ogTitle' => "留住值得记住的时刻 — Monica",
            'ogDescription' => "记录发生了什么、谁在场，以及你想保留的细节。Monica 把这些时刻汇集到一条你可以随时回看的时间线上。",

            'ogImage' => [
                'eyebrow' => "时间线",
                'title' => "留住",
                'accent' => "值得记住的时刻。",
                'description' => "记录发生了什么、谁在场，以及你想保留的细节。",
            ],
        ],

        'people' => [
            'title' => "日常生活中的个人联系人管理 — Monica",
            'description' => "把联系方式、人际关系、共同时刻和后续跟进放在一起。一个你可以自己使用、也可以配合兼容 AI 助手使用的个人 CRM。",
            'ogTitle' => "你生活中的人，多一点背景 — Monica",
            'ogDescription' => "名字、联系和你们共同的时刻。在你的个人数据库里给这些关系留一个位置。",
            'ogImage' => [
                'eyebrow' => "人",
                'title' => "记住这个人。",
                'description' => "细节、关系和共同时刻。",
                'alt' => "Monica 的熊猫正在把卡片放进文件柜，旁边写着“记住这个人。”",
            ],
        ],

        'timelineReminders' => [
            'title' => "个人时间线与跟进提醒 — Monica",
            'description' => "记录共同的时刻，为接下来的事设好提醒。了解 Monica 的人生事件、联系人时间线和跟进提醒。",
            'ogTitle' => "发生了什么，接下来打算做什么 — Monica",
            'ogDescription' => "把共同时刻记进时间线，给下一个生日或跟进定个日期。",
            'ogImage' => [
                'eyebrow' => "时间线与提醒",
                'title' => "把事情跟进到底。",
                'description' => "共同的时刻，有用的提醒。",
                'alt' => "Monica 的熊猫正在把卡片放进文件柜，旁边写着“把事情跟进到底。”",
            ],
        ],

        'possessions' => [
            'title' => "个人物品清单与物品管理 — Monica",
            'description' => "记录你拥有的东西、放在哪里、保养情况和借出记录。在 Monica 中整理日常物品，用不用 AI 助手都可以。",
            'ogTitle' => "你的东西也有自己的故事 — Monica",
            'ogDescription' => "你拥有什么、放在哪里、发生过什么。把有用的细节放在一起。",
            'ogImage' => [
                'eyebrow' => "物品",
                'title' => "了解你的东西。",
                'description' => "细节、位置和一点历史。",
                'alt' => "Monica 的熊猫正在把卡片放进文件柜，旁边写着“了解你的东西。”",
            ],
        ],

        'inventory' => [
            'title' => "带自定义字段和标签的个人物品清单 — Monica",
            'description' => "为书、自行车、器材和日常物品建立个人清单。在 Monica 中用类型、自定义字段和标签整理物品。",
            'ogTitle' => "给值得记下的东西一个位置 — Monica",
            'ogDescription' => "一份能容纳各种东西的清单，配上对你有意义的细节和标签。",
            'ogImage' => [
                'eyebrow' => "清单与标签",
                'title' => "你的东西，井井有条。",
                'description' => "类型、有用的字段和标签。",
                'alt' => "Monica 的熊猫正在把卡片放进文件柜，旁边写着“你的东西，井井有条。”",
            ],
        ],

        'locations' => [
            'title' => "物品位置与位置历史 — Monica",
            'description' => "记录物品存放在哪里，从一栋房子到一个架子或一只箱子。在 Monica 的个人物品清单中保留物品当前和过去的位置。",
            'ogTitle' => "放哪儿了？给自己留个线索 — Monica",
            'ogDescription' => "给你的物品记录位置，搬动时保留历史。",
            'ogImage' => [
                'eyebrow' => "位置",
                'title' => "一个你能再找到的地方。",
                'description' => "记录下来的位置，附带一点历史。",
                'alt' => "Monica 的熊猫正在把卡片放进文件柜，旁边写着“一个你能再找到的地方。”",
            ],
        ],

        'maintenanceLoans' => [
            'title' => "物品维护记录与借出跟踪 — Monica",
            'description' => "保留物品的维护历史和借出记录。在 Monica 中，把日期、费用、品相、借用人和归还情况与你的物品记在一起。",
            'ogTitle' => "上次保养，目前借出，终于记住了 — Monica",
            'ogDescription' => "把维护记录和借出记录与它们所属的物品放在一起，从自行车维修到借出的一本书。",
            'ogImage' => [
                'eyebrow' => "维护与借出",
                'title' => "留一点历史。",
                'description' => "做过的活。借出的东西。留住的细节。",
                'alt' => "Monica 的熊猫正在把卡片放进文件柜，旁边写着“留一点历史。”",
            ],
        ],

        'knowledge' => [
            'title' => "含笔记和列表的个人知识库 — Monica",
            'description' => "把有用的说明、推荐和参考信息保存在个人知识库里。在 Monica 中用文件夹整理笔记和列表。",
            'ogTitle' => "给那些你庆幸自己记下来的事一个家 — Monica",
            'ogDescription' => "把日常知识放进笔记和列表，供你和你选择的兼容助手随时取用。",
            'ogImage' => [
                'eyebrow' => "知识",
                'title' => "留住你知道的。",
                'description' => "笔记、列表和日常有用的信息。",
                'alt' => "Monica 的熊猫正在把卡片放进文件柜，旁边写着“留住你知道的。”",
            ],
        ],

        'relationships' => [
            'title' => "个人关系与家庭联系 — Monica",
            'description' => "用双向关系、家谱和关系历史记录家人、朋友和伴侣。自定义适合你生活中每个人的关系类型。",
            'ogTitle' => "理解人与人如何联系 — Monica",
            'ogDescription' => "记录某个人身边的人，让关系从双方看都说得通。",

            'ogImage' => [
                'eyebrow' => "关系",
                'title' => "理解人与人",
                'accent' => "如何联系。",
                'description' => "记录某个人身边的人，让关系从双方看都说得通。",
            ],
        ],

        'vaults' => [
            'title' => "用独立保险库整理联系人 — Monica",
            'description' => "把朋友、家人和同事放在一起，或给每个群体单独的空间。每个保险库有自己的联系人、时间线、提醒和默认模板。",
            'ogTitle' => "为生活的每个部分留一个位置 — Monica",
            'ogDescription' => "放在一起，或给每个群体单独的空间。保险库帮你围绕自己的生活来整理 Monica。",

            'ogImage' => [
                'eyebrow' => "保险库",
                'title' => "为生活的每个部分",
                'accent' => "留一个位置。",
                'description' => "全部放在一起，或给每个群体单独的空间。",
            ],
        ],

        'sharing' => [
            'title' => "私密分享选定的联系人详情 — Monica",
            'description' => "通过只读链接分享联系人页面的选定分区。选择展示什么，设置截止日期或密码，查看何时被打开，随时撤销。",
            'ogTitle' => "只分享你选择的内容 — Monica",
            'ogDescription' => "通过只读链接分享联系人页面的选定分区。选择它展示什么、有效多久，以及何时停止访问。",

            'ogImage' => [
                'eyebrow' => "分享",
                'title' => "只分享",
                'accent' => "你选择的内容。",
                'description' => "用只读链接分享联系人页面中你选定的分区，有效期由你决定。",
            ],
        ],

        'api' => [
            'title' => "个人 CRM API 与助手集成 — Monica",
            'description' => "让 Monica 配合 Claude、ChatGPT、Gemini 或你自己的脚本使用。通过 MCP 服务器连接助手，或用 JSON API 自建连接。",
            'ogTitle' => "你的联系人，连接你的工具 — Monica",
            'ogDescription' => "让 Monica 配合 Claude、ChatGPT、Gemini 或你自己的脚本使用。在你已有的工具里查找联系人、记录时刻或设置提醒。",

            'ogImage' => [
                'eyebrow' => "API 和 MCP",
                'title' => "你的联系人，",
                'accent' => "连接你的工具。",
                'description' => "让 Monica 配合 Claude、ChatGPT、Gemini 或你自己的脚本使用。",
            ],
        ],

        'privacyFeatures' => [
            'title' => "个人 CRM 的隐私与安全控制 — Monica",
            'description' => "在 Monica 中控制敏感字段、分享的分区和助手访问。用通行密钥和双重验证保护账户，并查看其活动。",
            'ogTitle' => "个人细节值得一个私密的地方 — Monica",
            'ogDescription' => "你记录关于别人的事，是因为他们对你重要。选择保留什么、分享什么，以及哪些工具可以访问。",

            'ogImage' => [
                'eyebrow' => "隐私",
                'title' => "个人细节值得",
                'accent' => "一个私密的地方。",
                'description' => "选择保留什么、分享什么，以及哪些工具可以访问。",
            ],
        ],

        'languages' => [
            'title' => "多语言个人 CRM 与姓名格式 — Monica",
            'description' => "以 30 多种语言使用 Monica。按人们使用的顺序和形式书写姓名，选择显示名称，设置日期、时间、数字和时区偏好。",
            'ogTitle' => "你的语言。他们的名字 — Monica",
            'ogDescription' => "用让你有归属感的语言使用 Monica。按人们使用的形式保存姓名，并选择日期、时间和数字的显示方式。",

            'ogImage' => [
                'eyebrow' => "语言",
                'title' => "你的语言。",
                'accent' => "他们的名字。",
                'description' => "用让你有归属感的语言使用 Monica，并按人们的写法保存姓名。",
            ],
        ],

        'aiMemory' => [
            'title' => "个人 AI 记忆，供你的助手共用 — Monica",
            'description' => "通过 MCP 服务器，让 Claude、ChatGPT 等兼容助手共用一份持久的个人记忆。开源，可自托管，无需 AI 也能用。",
            'ogTitle' => "助手可以换，你的记忆属于你 — Monica",
            'ogDescription' => "给兼容的 AI 助手一个共享的地方，记住你身边的人和日常细节。你也可以打开 Monica 亲自整理，有没有 AI 都行。",

            'ogImage' => [
                'eyebrow' => "AI 记忆",
                'title' => "助手可以换。",
                'accent' => "你的记忆属于你。",
                'description' => "一个共享的地方，让兼容的 AI 助手记住你身边的人和日常细节。",
            ],
        ],

        'mcpServer' => [
            'title' => "MCP 服务器，连接你的个人数据 — Monica",
            'description' => "用远程 MCP 服务器、236 个工具、OAuth 或 API 密钥，把 AI 助手连接到 Monica 的开源个人数据库，也支持自托管。",
            'ogTitle' => "你的个人数据，连接你的 AI 智能体 — Monica",
            'ogDescription' => "通过 MCP 把兼容的助手连接到 Monica。用 OAuth 或 API 密钥，在授权范围内读取和更新结构化的个人记录。",

            'ogImage' => [
                'eyebrow' => "MCP 服务器",
                'title' => "你的个人数据，",
                'accent' => "连接你的 AI 智能体。",
                'description' => "通过 OAuth 或 API 密钥，在授权范围内读取和更新结构化的个人记录。",
            ],
        ],

        'personalData' => [
            'title' => "个人信息管理软件 — Monica",
            'description' => "把联系人、物品、笔记、生活事件和日常细节整理在一个个人数据库里。认识 Monica，开源的数字生活整理工具。",
            'ogTitle' => "给生活细节一个家 — Monica",
            'ogDescription' => "人、笔记、物品、重要时刻和提醒。一个属于你的地方，放下所有你不想忘记的事。",

            'ogImage' => [
                'eyebrow' => "个人数据管理",
                'title' => "给生活细节",
                'accent' => "一个家。",
                'description' => "人、笔记、物品、重要时刻和提醒，都在一个属于你的地方。",
            ],
        ],

        'personalCrm' => [
            'title' => "什么是个人 CRM？实用指南 — Monica",
            'description' => "什么是个人 CRM，它与通讯录和销售 CRM 有何不同，该存什么，隐私上的取舍，以及如何选择合适的做法。",
            'ogTitle' => "什么是个人 CRM，你会用吗？ — Monica",
            'ogDescription' => "通讯录记住号码，个人 CRM 帮你记住这个人。了解该保留什么、省略什么，以及如何选择。",

            'ogImage' => [
                'eyebrow' => "指南",
                'title' => "什么是个人 CRM，",
                'accent' => "你会用吗？",
                'description' => "通讯录记住号码，个人 CRM 帮你记住这个人。",
            ],
        ],
    ],

    // The cookie notice in the bottom right corner (`_partials/cookie-notice`).
    'cookies' => [
        'label' => "Cookie 提示",
        'title' => "法律规定必须有的 Cookie 横幅",
        'body' => "Monica 不会跟踪你的人际关系。没有第三方 Cookie，没有吓人的广告追踪器，只有一块自家烤的小饼干。",
        'private' => "你的私人生活依然属于你自己。",
        'europe' => "欧洲会很满意",
        'close' => "关闭 Cookie 提示",
    ],

    'nav' => [
        'label' => "主导航",
        'product' => "产品",
        'personalCrm' => "什么是个人 CRM",
        'v3' => "Monica v3",
        'features' => "功能",
        'pricing' => "价格",
        'blog' => "博客",
        'handbook' => "手册",
        'docs' => "文档",
        'contribute' => "参与贡献",
        'signIn' => "登录",
        'toDark' => "切换到深色模式",
        'toLight' => "切换到浅色模式",
        'github' => ":count 星，Monica 的 GitHub 仓库",
        'getStarted' => "注册",
        'stars' => ":count 星",

        // 功能菜单：人、物品和知识，每个空间都有的功能，以及 MCP 服务器的卡片。
        'menu' => [
            'groups' => [
                [
                    'icon' => 'people',
                    'title' => "人",
                    'body' => "你认识的每个人，以及你对他们的了解。",
                    'items' => [
                        ['icon' => 'profile', 'title' => "联系方式", 'body' => "电话、地址、生日、宠物。"],
                        ['icon' => 'relationship', 'title' => "关系", 'body' => "家谱，以及谁认识谁。"],
                        ['icon' => 'reminder', 'title' => "时间线与提醒", 'body' => "记一次，到时候就会提醒你。"],
                    ],
                ],
                [
                    'icon' => 'tag',
                    'title' => "物品",
                    'body' => "你拥有什么、放在哪里、在谁手上。",
                    'items' => [
                        ['icon' => 'layers', 'title' => "清单与标签", 'body' => "书、唱片、工具，应有尽有。"],
                        ['icon' => 'place', 'title' => "位置", 'body' => "哪个房间、哪个架子、哪个箱子。"],
                        ['icon' => 'calendar-repeat', 'title' => "保养与借出", 'body' => "保养日期，以及谁借了什么。"],
                    ],
                ],
                [
                    'icon' => 'journal',
                    'title' => "知识",
                    'body' => "你学到的东西，记在找得到的地方。",
                    'items' => [
                        ['icon' => 'note', 'title' => "笔记", 'body' => "记下来，关联到任何人。"],
                        ['icon' => 'tasks', 'title' => "清单", 'body' => "礼物点子、行李、待办事项。"],
                        ['icon' => 'file', 'title' => "文件夹与整理", 'body' => "按你的思路归类。"],
                    ],
                ],
            ],
            'spaces' => [
                'label' => "每个空间都有",
                'items' => [
                    ['icon' => 'divider', 'title' => "模板"],
                    ['icon' => 'vault', 'title' => "保险库"],
                    ['icon' => 'link', 'title' => "共享"],
                    ['icon' => 'text', 'title' => "语言"],
                    ['icon' => 'lock', 'title' => "隐私"],
                ],
            ],
            'assistant' => [
                'label' => "新功能",
                'title' => "让你的 AI 助手使用 Monica",
                'body' => "询问你在 Monica 中记录的人和物。由你决定它能读取哪些保险库。",
                'question' => "Lucie 的生日是哪天？",
                'answer' => "3 月 14 日，还有三周。她一月份提到想要一件新雨衣。",
                'cta' => "连接你的助手",
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
            'title' => "Monica 是你的个人 CRM 和数据库。",
            'subtitle' => "记下你认识的人、你拥有的东西，以及你想记住的一切。",
            'lede' => "默认注重隐私。开源。可自托管。没有广告，不转售数据，也没有尴尬的“互动”通知。",
            'start' => "开始使用 Monica",
            'github' => "在 GitHub 上查看",
            'sales' => "联系销售",
            'salesJoke' => "开玩笑的。",
            'salesTruth' => "我们没有销售团队。",
        ],

        'product' => [
            // The product picture under the headline. The sidebar switches
            // between six real screens; each screen is read out as its label,
            // because it is a picture of the interface rather than a working copy.
            'screensLabel' => "Monica 的各个界面",
            'search' => "搜索",
            'docs' => "文档",
            'marketplace' => "市场",
            'admin' => "管理空间",
            'vault' => "个人",
            'sections' => ['vault' => "此保险库", 'people' => "联系人", 'things' => "物品", 'knowledge' => "知识库"],
            'nav' => [
                'dashboard' => "仪表盘",
                'reminders' => "提醒",
                'settings' => "保险库设置",
                'people' => "联系人",
                'animals' => "动物",
                'groups' => "群组",
                'possessions' => "所有物品",
                'knowledge' => "知识库",
            ],
            'settingsCrumb' => "设置",

            'dashboard' => [
                'label' => "“个人”保险库的仪表盘：按年份排列的人生事件、三位最爱的联系人，以及最近查看过的人。",
                'add' => "添加联系人",
                'stats' => ["25 位联系人", "本周有 1 条提醒", "3 位收藏", "过去三个月有 0 个人生事件"],
                'timeline' => "你的时间线",
                'attention' => "需要你留意",
                'addEvent' => "添加人生事件",
                'with' => "与",
                'years' => [
                    [
                        'count' => "1 条记录",
                        'events' => [
                            ['title' => "在 Hudson Highlands 徒步", 'date' => "5月15日", 'place' => "Hudson Highlands, New York", 'body' => "走了六英里，最后两英里 Chandler 一个人抱着两个孩子。"],
                        ],
                    ],
                    [
                        'count' => "2 条记录",
                        'events' => [
                            ['title' => "双胞胎开始上幼儿园", 'date' => "9月8日", 'place' => "一所小学，Westchester", 'body' => "Jack 和 Judy 开车过来，看着他们走进教室。"],
                            ['title' => "Erica 摔断了胳膊", 'date' => "6月11日", 'place' => "一家医院，Westchester", 'body' => "为了赶在 Jack 之前爬到顶，从攀爬架上摔了下来。在医院住了一晚。"],
                        ],
                    ],
                    [
                        'count' => "2 条记录",
                        'events' => [
                            ['title' => "游泳课", 'date' => "7月17日", 'place' => "一座游泳池，Westchester", 'body' => "Joey 主动说要教他们。Monica 请了专业的人。"],
                            ['title' => "双胞胎得了水痘", 'date' => "2月14日", 'place' => "Westchester 的家", 'body' => "两个人一起得，还是在情人节。Phoebe 带来了燕麦粥。"],
                        ],
                    ],
                ],
                'favourites' => "收藏的联系人",
                'recent' => "最近查看",
                'today' => "今天",
            ],

            'reminders' => [
                'label' => "“个人”保险库的提醒：一个已逾期的给 Chandler Bing 的电话，随后是接下来的几条，包括 Joey 和 Phoebe 的生日。",
                'tabs' => ["即将到来", "已发送", "历史"],
                'groupedBy' => "分组方式",
                'byWhen' => "发送时间",
                'byContact' => "联系人",
                'overdue' => "已逾期",
                'overdueCount' => "1 条提醒",
                'upcoming' => "即将到来",
                'upcomingCount' => "12 条提醒",
                'remembered' => "我记得",
                'forgot' => "我忘了",
                'more' => "更多",
                'items' => [
                    ['month' => "11月", 'repeat' => "每月", 'title' => "打电话问 Bedford Street 那套公寓的事", 'when' => "1 天前"],
                    ['month' => "12月", 'repeat' => "每月", 'title' => "打电话问 Bedford Street 那套公寓的事", 'when' => "4 周后"],
                    ['month' => "12月", 'repeat' => "仅一次", 'title' => "问问 Tulsa 的事", 'when' => "1 个月后"],
                    ['month' => "1月", 'repeat' => "每年", 'title' => "Joey 的生日", 'when' => "1 个月后"],
                    ['month' => "2月", 'repeat' => "每年", 'title' => "Phoebe 的生日", 'when' => "3 个月后"],
                ],
            ],

            'settings' => [
                'label' => "“个人”保险库的设置：名称、描述和颜色，新联系人所用的模板，以及如何导出。",
                'title' => "保险库设置",
                'intro' => "“个人”叫什么名字，新联系人从什么模板开始，如何导出，以及如何删除。",
                'nameCard' => "这个保险库叫什么",
                'name' => "名称",
                'description' => "描述",
                'optional' => "可选",
                'descriptionValue' => "与我有关系的所有人，以及跟着他们一起出现的人。",
                'hint' => "一两句话即可。",
                'colour' => "颜色",
                'save' => "保存更改",
                'templateCard' => "新联系人从什么开始",
                'template' => "默认模板",
                'templateValue' => "版本 1（最新）",
                'exportCard' => "导出此保险库",
                'exportBody' => "一个文件，包含此保险库的联系人、实体、关系、人生事件、提醒和文件，以及它们所用的模板。可在“导出与导入”中下载，保留七天。",
            ],

            'people' => [
                'label' => "“个人”保险库里的联系人：三位收藏，然后是其他所有人，附有邮箱、电话号码和上次联系的时间。",
                'title' => "联系人",
                'add' => "添加联系人",
                'filters' => ["所有人", "收藏", "不完整的联系人"],
                'searchNames' => "搜索姓名和昵称",
                'categories' => "分类",
                'categoryNames' => ["家人", "挚友", "朋友", "熟人"],
                'show' => "显示这些联系人",
                'columns' => ["姓名", "邮箱", "电话号码", "上次联系"],
                'favourites' => "收藏",
                'everybodyElse' => "其他所有人",
                'notYet' => "还没有",
                'phoneKinds' => ['mobile' => "手机", 'home' => "家庭", 'work' => "工作"],
            ],

            'possessions' => [
                'label' => "“个人”保险库里的物品：七件放在“我的家”，按房间分开，其中主厨刀具套装和订婚戒指被特别展示。",
                'title' => "所有物品",
                'add' => "添加物品",
                'summary' => "10 件物品，分布在 6 个位置，申报价值 $7,285。",
                'locations' => "位置",
                'manage' => "管理",
                'all' => "所有位置",
                'house' => "我的家",
                'rooms' => ["浴室", "卧室", "厨房", "客厅", "储物间"],
                'noSpot' => "没有固定位置",
                'count' => "物品",
                'declared' => "申报价值",
                'total' => "$7,285",
                'featured' => "在此特别展示",
                'keptAt' => "存放在“我的家”",
                'featuredItems' => [
                    ['title' => "主厨刀具套装", 'meta' => "厨房 · $520", 'body' => "Monica 的，从烹饪学校带回来的。Chandler 不许碰。"],
                    ['title' => "订婚戒指", 'meta' => "卧室 · $4,800", 'body' => "Chandler 先把它藏在香槟杯里，后来又改了主意。"],
                ],
                'items' => [
                    ['title' => "一瓶 Château Margaux", 'meta' => "葡萄酒 · 厨房", 'value' => "$900"],
                    ['title' => "主厨刀具套装", 'meta' => "工具和设备 · 厨房", 'value' => "$520"],
                    ['title' => "洗碗机", 'meta' => "家用电器 · 厨房", 'value' => "$650"],
                    ['title' => "桌上足球台", 'meta' => "运动和户外 · 客厅", 'value' => "$300"],
                    ['title' => "节日犰狳服装", 'meta' => "服装和配饰 · 储物间", 'value' => "$75"],
                ],
            ],

            'knowledge' => [
                'label' => "“个人”保险库里的知识库：八个文件夹的笔记和清单，从“关于我”到日本旅行的回忆和 Wi-Fi 信息。",
                'searchNotes' => "搜索笔记和清单",
                'contents' => "目录",
                'intro' => "知识库里的每个文件夹、笔记和清单。笔记还会显示它们的标题，方便你直接跳转。",
                'summary' => "8 个文件夹，17 篇笔记，13 份清单",
                'notesAndLists' => ":count 篇笔记和清单",
                'note' => "笔记",
                'list' => ":count 项的清单",
                'edited' => "2 分钟前编辑",
                'folders' => [
                    [
                        'name' => "个人",
                        'items' => [
                            ['title' => "关于我", 'headings' => ["简短版本", "别人应该知道的事"]],
                            ['title' => "喜欢的东西", 'headings' => []],
                            ['title' => "人生目标", 'headings' => ["工作", "家庭"]],
                            ['title' => "个人偏好", 'headings' => []],
                        ],
                    ],
                    [
                        'name' => "旅行",
                        'items' => [
                            ['title' => "去过的国家", 'headings' => []],
                            ['title' => "日本旅行的回忆", 'headings' => ["东京", "京都"]],
                            ['title' => "想去的地方", 'headings' => []],
                            ['title' => "旅行心愿单", 'headings' => []],
                        ],
                    ],
                    [
                        'name' => "家",
                        'items' => [
                            ['title' => "家电", 'headings' => []],
                            ['title' => "房屋维护", 'headings' => ["这个季节"]],
                            ['title' => "维护计划", 'headings' => []],
                            ['title' => "Wi-Fi 信息", 'headings' => []],
                        ],
                    ],
                    [
                        'name' => "健康与健身",
                        'items' => [
                            ['title' => "健康目标", 'headings' => []],
                            ['title' => "训练记录", 'headings' => []],
                            ['title' => "训练计划", 'headings' => []],
                        ],
                    ],
                    [
                        'name' => "书和电影",
                        'items' => [
                            ['title' => "喜欢的书", 'headings' => []],
                            ['title' => "电影推荐", 'headings' => []],
                            ['title' => "看过的电影", 'headings' => []],
                            ['title' => "阅读清单", 'headings' => []],
                        ],
                    ],
                ],
            ],
            'profile' => [
                'label' => "Chandler Bing 的页面：他的人生事件、直系亲属、所属群组和提醒。",
                'pick' => "Chandler Bing 的页面",
                'edit' => "编辑联系人",
                'category' => "分类",
                'categoryValue' => "家人",
                'birthday' => "生日",
                'birthdayValue' => "1968年4月8日",
                'lastInTouch' => "上次联系",
                'never' => "从未",
                'reminders' => "提醒",
                'awaiting' => "1 条等待回复",
                'tabs' => ["概览", "常规", "联系方式", "信息", "关系"],
                'timeline' => "时间线",
                // 2010 and 2009 are the dashboard's own events; 2007 is his alone.
                'earlier' => [
                    'count' => "2 条记录",
                    'events' => [
                        ['title' => "双胞胎开始上幼儿园", 'date' => "9月5日", 'place' => "一所幼儿园，Westchester", 'body' => "Monica 给每样东西都贴了标签。Chandler 在车里哭了。"],
                        ['title' => "Montauk 的家庭假期", 'date' => "7月12日", 'place' => "Montauk, New York", 'body' => "还是那栋海边小屋，十年后。这次没人被蜇。"],
                    ],
                ],
                'familyTitle' => "直系亲属",
                'add' => "添加",
                'children' => "孩子",
                'partner' => "现任伴侣",
                'groupsTitle' => "群组",
                'addToGroup' => "添加到群组",
                'groups' => [
                    ['name' => "Central Perk 常客", 'meta' => "自 1994年9月22日起"],
                    ['name' => "公寓 20", 'meta' => "1999年11月4日至 2004年5月6日"],
                    ['name' => "公寓 19", 'meta' => "室友 · 至 1999年11月4日"],
                ],
                'left' => "已离开",
                'reminderTabs' => ["全部", "已逾期", "今天", "即将到来"],
                'overdue' => "已逾期",
                'reminderWhen' => "2026年11月11日 · 昨天",
            ],
            'group' => [
                'label' => "Central Perk 常客小组的页面：它的七位成员、一条关于小组的笔记，以及这个小组自 1994 年以来一起做过的事。",
                'title' => "Central Perk 常客",
                'description' => "橙色沙发上的六个人，和柜台后面的那个人。",
                'members' => "共 7 位成员",
                'since' => "自 1994年9月22日起",
                'edit' => "编辑小组",
                'tabs' => ["概览", "成员", "文件"],
                'activity' => "动态",
                'note' => "笔记",
                'question' => "你想记住这个小组的什么？",
                'placeholder' => "他们通常在哪里碰头，谁有备用钥匙，该带些什么。",
                'savedOn' => "只保存在小组上，不会出现在任何人自己的页面里。",
                'save' => "保存笔记",
                'remindersEmpty' => "没有需要提醒的事。比如组织下一场比赛，或者寄出节日贺卡。",
                'files' => "文件",
                'filesEmpty' => "一张合影、一份日程表或一份报名表，和小组放在一起。",
                'history' => "共同的经历",
                'historyHint' => "小组一起做过的事，以及你为此写下的笔记，最新的在前。",
                // Newest first: 2004, 1999, 1994. A note has no place and nobody "with".
                'years' => [
                    [
                        'count' => "2 条记录",
                        'events' => [
                            ['title' => "在橙色沙发上喝最后一杯咖啡", 'date' => "5月6日", 'place' => "Central Perk, New York", 'body' => "Monica 和 Chandler 在同一周搬走了。Gunther 留下了他们的马克杯。"],
                            ['title' => "Phoebe 周四的演出", 'date' => "3月15日", 'place' => "", 'body' => "Smelly Cat 是压轴曲。在那之前点这首歌不受欢迎。"],
                        ],
                    ],
                    [
                        'count' => "1 条记录",
                        'events' => [
                            ['title' => "Joey 的第一篇影评，当众朗读", 'date' => "3月12日", 'place' => "Central Perk, New York", 'body' => "Rachel 读了两遍。Joey 把好评的那一半装了框。"],
                        ],
                    ],
                    [
                        'count' => "1 条记录",
                        'events' => [
                            ['title' => "第一次一起喝咖啡", 'date' => "9月22日", 'place' => "Central Perk, New York", 'body' => "Rachel 穿着婚纱走了进来。所有人都留了下来。"],
                        ],
                    ],
                ],
            ],
        ],

        'awards' => [
            'label' => "网上的陌生人都说好",
            'github' => "GitHub Trending：当日第 1 名仓库",
            'hn' => "Hacker News：历史得票最高链接第 65 名",
            'ph' => "Product Hunt：当日第 4 名产品",
            'docker' => "Docker Hub：1400 万次下载",
            // The popover under the GitHub badge, on hover or focus.
            'trendingPopover' => "我们多次登上“当日最佳仓库”“本周最佳仓库”“本月最佳仓库”和“年度最佳仓库”。超酷的，约会时还能拿来当开场白。从来没用。",
            // The popover under the Hacker News badge: two paragraphs.
            'hnPopover' => [
                "没有登上 Hacker News 首页，就不算真正成功。",
                "我们在首页的第 1 名位置待了整整两天。没错，这是真的。",
            ],

            // The popover under the Product Hunt badge, which links nowhere on purpose.
            'phPopover' => "抱歉，这个链接点不了。我们在那个网站上人气很高，但我们讨厌 Product Hunt，不想给他们带去任何流量。",
            // The popover under the Docker Hub badge.
            'dockerPopover' => "我们是少数拥有官方 Docker 镜像的项目之一。对开发者来说，这是梦寐以求的认可。",
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
            'lifetime' => "\$250",
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
            'eyebrow' => "联系方式",
            'title' => "小事也值得有个位置。",
            'lede' => "对方的号码在你手机里。可对方最喜欢的花、新伴侣的名字、上次跟你说过的事，可能就没那么好找了。",
            'body' => "把帮你记住这个人的细节，放在一个随时能回来看的页面上。",
            'cta' => "开始使用 Monica",
            'people' => "了解“人”",
            'label' => "Rachel 的联系方式、她最喜欢的花，以及一条关于她新工作的笔记。",
            'screen' => [
                'birthday' => "5月5日",
                'lastInTouch' => "4 天前",
                'hobbies' => ["戏剧", "旅行"],
                'topics' => "时尚，以及做时尚的人",
                'idea' => "百合",
                'ideaNote' => "她最喜欢的花",
                'dishes' => "英式乳脂松糕，不要牛肉那层",
                'drinks' => "拿铁",
                'note' => "开始了新工作；问问她第一周怎么样。",
                'noteAdded' => "添加于 2026-11-18",
            ],
        ],
        'ui' => [
            'vault' => "个人",
            'people' => "人员",
            'birthday' => "生日",
            'lastInTouch' => "最后联系",
            'reminders' => "提醒",
            'noneWaiting' => "没有待回答",
            'editContact' => "编辑联系人",
            'edit' => "编辑",
            'interests' => "兴趣",
            'hobbies' => "爱好",
            'topics' => "这个人热爱的话题",
            'giftIdeas' => "礼物创意",
            'ideas' => "创意",
            'notes' => "备注",
            'freeNotes' => "自由备注",
            'atTable' => "饮食场合",
            'dishes' => "喜爱的菜肴",
            'drinks' => "喜爱的饮品",
            'diet' => "饮食偏好",
            'allergies' => "需要了解的过敏情况",
            'notRecorded' => "未记录",
            'landmarks' => "个人关键信息",
            'languagesSpoken' => "使用的语言",
            'contactDetails' => "联系方式",
            'emails' => "邮件",
            'phones' => "电话",
            'personal' => "个人",
            'home' => "住宅",
            'work' => "工作",
            'howWeMet' => "我们如何认识",
            'place' => "地点或场合",
            'introducedBy' => "介绍人",
            'friendsTemplate' => "朋友与家人",
            'professionalTemplate' => "职业人脉",
            'currentRole' => "当前角色",
            'jobRole' => "职位",
            'organisation' => "机构",
            'industry' => "行业",
            'hospitality' => "酒店餐饮",
            'workContact' => "工作联系方式",
            'workAddress' => "工作地址",
            'changeName' => "更改名称",
            'name' => "名称",
            'nameHelp' => "同一姓名的不同写法。所选写法将显示在列表、页面标题、通知和姓名缩写中。",
            'displayName' => "显示名称",
            'phoneticNote' => "读音不能作为联系人的显示名称。",
            'remove' => "删除",
            'addForm' => "添加此姓名的另一种写法",
            'friendsTabs' => ["概览", "日常", "喜好与关注点", "关系"],
            'professionalTabs' => ["概览", "职业档案", "关系", "关系"],
            'finds' => "搜索其中任何一个姓名都能找到 Phoebe。",
        ],
        'useful' => [
            'title' => "有用的细节不一定是大细节。",
            'body' => "你们是怎么认识的。对方咖啡怎么喝。对方不能吃什么。总在打断你们通话的那只猫叫什么。",
            'closing' => "记下你真正用得上的背景。几条用心的细节，比满页的空字段更有用。",
            'label' => "Phoebe Buffay 页面上的两个栏目：你们如何认识，以及她的饮食，过敏情况未记录。",
            'screen' => [
                'place' => "在 Central Perk 门口唱歌",
                'drinks' => "花草茶",
                'diet' => "素食",
            ],
        ],
        'templates' => [
            'title' => "不同的人，不同的页面。",
            'body' => "同事可以记职位和公司，朋友可以记共同爱好，动物可以记照料信息。:link让你选择合适的标签页、栏目和字段。",
            'linkLabel' => "联系人模板",
            'body2' => "用现成的模板起步，或者自己搭一个。需要结构时就加上，不需要就省掉。",
            'label' => "两个联系人模板，分别为一位朋友和一位工作联系人显示不同的细节。",
            'more' => "了解联系人模板如何运作",
            'screen' => [
                'rachelBirthday' => "1969年5月5日",
                'rachelLanguages' => ["英语", "意大利语"],
                'guntherRole' => "经理",
            ],
        ],
        'names' => [
            'title' => "名字也需要空间。",
            'body' => "按对方使用的形式记下名字，必要时加上另一种写法或读音提示。选择你希望在 Monica 各处看到的那种写法。",
            'link' => "了解姓名、语言和格式",
            'label' => "Phoebe 编辑页上的姓名面板：她的原文写法（即显示名称）、同一姓名的西里尔字母写法，以及读音。",
            'screen' => [
                'english' => "英语 · 拉丁字母 · 原文写法",
                'russian' => "俄语 · 西里尔字母 · 原文写法",
                'ipa' => "英语 · 读音 (国际音标)",
            ],
        ],
        'context' => [
            'title' => "把细节放进背景里。",
            'body' => "一个人身边的人，以及你们共同经历的事，让页面上的其他内容更有意义。添加:relationships，再把共同经历记进:timeline。",
            'relationships' => "关系",
            'timeline' => "时间线",
            'body2' => "家务说明或按主题保存的菜谱，请用:notes。它们有自己的位置，和联系人的笔记分开。",
            'notes' => "知识笔记",
        ],
        'assistant' => [
            'title' => "聊天需要时，马上找到那个细节。",
            'prompt' => "“在 Monica 里找到 Rachel 的联系人页面，看看她最喜欢什么花。”",
            'body' => "通过你的连接，:link可以查找支持的联系信息。能否访问敏感字段，取决于你给它的权限。",
            'linkLabel' => "兼容的 AI 助手",
            'name' => "你的助手",
            'connected' => "已连接 Monica",
            'answer' => "百合。它记在 Rachel 页面的礼物创意里，备注是“她最喜欢的花”。",
            'label' => "向助手询问 Rachel 最喜欢的花，以及它从 Monica 中找到的回答。",
        ],
        'faq' => [
            'title' => "几个有用的回答。",
            'items' => [
                [
                    'q' => "每个字段都要填吗？",
                    'a' => "不用。想记多少就记多少。你可以用模板调整结构。",
                ],
                [
                    'q' => "可以在屏幕上隐藏敏感细节吗？",
                    'a' => "你可以把支持的字段标记为敏感。这能避免不小心被人看到，但对已登录你账户的人来说，内容仍然可以访问。:link。",
                    'link' => [
                        'label' => "查看隐私功能",
                        'page' => "privacyFeatures",
                    ],
                ],
            ],
        ],
        'cta' => [
            'title' => "给下次的自己留点有用的东西。",
            'body' => "一个名字，一条笔记，脑子里少记一件事。",
            'button' => "开始使用 Monica",
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
    /** The people page: who someone is to you, and the way into the feature pages about them. */
    'people' => [
        'hero' => [
            'eyebrow' => "人",
            'title' => "记住这个人，而不只是电话号码。",
            'lede' => "一个联系人不只是一个名字和一种联系方式。记下细节、人际联系和共同时刻，下次见面能接着上次的话题聊下去。",
            'body' => "Monica 为你生活中的人留出专属的位置，与你的:possessions和:knowledge放在一起。你可以自己打开查看，也可以让兼容的助手使用你保存的信息。",
            'possessions' => "物品",
            'knowledge' => "个人知识",
            'cta' => "开始使用 Monica",
            'plans' => "查看方案",
            'label' => "Rachel 的联系人页面：个人信息、家庭关系、一次共同的晚餐和一条跟进提醒。",
            'screen' => [
                'birthdayValue' => "5月5日",
                'lastValue' => "4 天前",
                // Rachel's timeline, newest first, as the overview tab shows it.
                'timeline' => [
                    [
                        'year' => "2026",
                        'count' => "3 个条目",
                        'events' => [
                            [
                                'type' => "meal",
                                'title' => "在 Monica 家吃晚饭",
                                'date' => "11月20日",
                                'detail' => "Monica 的公寓，格林威治村",
                                'with' => ["Monica", "Ross"],
                            ],
                            [
                                'type' => "call",
                                'title' => "聊了聊那份工作邀约",
                                'date' => "11月12日",
                                'detail' => "45 分钟",
                                'with' => [],
                            ],
                            [
                                'type' => "together",
                                'title' => "在 Bloomingdale’s 购物",
                                'date' => "10月3日",
                                'detail' => "Bloomingdale’s，曼哈顿",
                                'with' => ["Monica", "Phoebe"],
                            ],
                        ],
                    ],
                    [
                        'year' => "2025",
                        'count' => "2 个条目",
                        'events' => [
                            [
                                'type' => "together",
                                'title' => "Emma 第一天上学",
                                'date' => "9月3日",
                                'detail' => "布鲁克林",
                                'with' => ["Ross", "Emma"],
                            ],
                            [
                                'type' => "trip",
                                'title' => "巴黎周末",
                                'date' => "6月14日",
                                'detail' => "法国巴黎",
                                'with' => ["Emma"],
                            ],
                        ],
                    ],
                ],
                'reminder' => "问问新工作怎么样",
                'reminderWhen' => "11月27日 · 3 天后",
            ],
        ],
        'ui' => [
            'vault' => "个人",
            'people' => "人员",
            'tabs' => ["概览", "日常", "喜好与关注点", "关系"],
            'birthday' => "生日",
            'lastInTouch' => "最后联系",
            'reminders' => "提醒",
            'noneWaiting' => "没有待回答",
            'edit' => "编辑联系人",
            'timeline' => "时间线",
            'addEvent' => "添加活动",
            'oneEntry' => "1 个条目",
            'immediateFamily' => "直系亲属",
            'add' => "添加",
            'children' => "子女",
            'reminderTabs' => ["全部", "已逾期", "今天", "即将到来"],
            'oneTime' => "仅一次",
            'everyYear' => "每年",
            'with' => "与",
            'contactDetails' => "联系方式",
            'phones' => "电话",
            'emails' => "邮件",
            'home' => "住宅",
            'personal' => "个人",
            'howWeMet' => "我们如何认识",
            'dateWeMet' => "相识日期",
            'place' => "地点或场合",
            'introducedBy' => "介绍人",
            'giftIdeas' => "礼物创意",
            'ideas' => "创意",
            'editSection' => "编辑",
            'family' => "家庭",
            'manage' => "管理",
            'parent' => "父母",
            'auntUncle' => "姑姨舅叔伯",
            'familyTree' => "家谱",
            'treeNote' => "这里只画血亲和伴侣关系。朋友和同事留在列表中。",
        ],
        'details' => [
            'title' => "记下那些有用的小事。",
            'body' => "你们是怎么认识的。对方最喜欢的花。上次让对方兴奋的那个项目叫什么。用适合这个人的联系人模板，记下能帮你关心对方、把事情跟进到底的信息。",
            'closing' => "页面可以很简单。没人会检查你有没有填“最喜欢的汤”。",
            'link' => "了解联系人详情",
            'label' => "Rachel 联系人页面上的三个栏目：她的电话和邮箱、你们如何认识，以及记作礼物创意的百合。",
            'screen' => [
                'dateMet' => "1994年9月22日",
                'place' => "Central Perk，穿着婚纱",
                'idea' => "百合",
                'ideaNote' => "她最喜欢的花",
            ],
        ],
        'relationships' => [
            'title' => "弄清他们身边都有谁。",
            'body' => "家人、朋友、伴侣和同事也是故事的一部分。一段关系只需记录一次，就能从双方的角度看到。重要的过往关系可以保留，也可以给还没见过的人留出位置。",
            'label' => "Ross、Rachel、Emma 和 Monica 之间的家庭关系。",
            'link' => "查看关系和家庭联系",
        ],
        'moments' => [
            'title' => "记住那些时刻。给下一个念头定个日期。",
            'body' => "和朋友吃晚饭只需记录一次，在场的人都会有。为生日或那通一直想打的电话设个提醒。历史记录给你背景，提醒推你一把。",
            'link' => "了解时间线和提醒",
            'label' => "Rachel 时间线上的一次朋友聚餐，以及她的提醒：每年 Emma 的生日，和给 Ross 回电话。",
            'screen' => [
                'event' => [
                    'title' => "和朋友吃晚饭",
                    'date' => "11月21日",
                    'place' => "Central Perk",
                    'with' => ["Ross", "Chandler", "Joey"],
                ],
                'reminders' => [
                    [
                        'title' => "Emma 的生日",
                        'when' => "12月6日 · 12 天后",
                    ],
                    [
                        'title' => "给 Ross 回电话",
                        'when' => "11月29日 · 5 天后",
                    ],
                ],
            ],
        ],
        'assistant' => [
            'title' => "让你的助手帮你核对细节。",
            'body' => "兼容且已连接的助手可以读取支持的记录，并帮你更新它们。同样的信息，你随时可以在 Monica 中打开。",
            'closing' => "这段关系仍然属于你。那通有点尴尬的电话也是。",
            'link' => "了解 Monica 如何与 AI 助手配合",
            'label' => "向助手提出的一个问题，以及它从 Monica 中找到的关于 Rachel 新工作的回答。",
            'prompt' => "“在 Monica 里找到 Rachel，看看关于她新工作的那条笔记。”",
            'name' => "你的助手",
            'connected' => "已连接 Monica",
            'answer' => "找到了。3 月 12 日你记下：Rachel 下个月要去一家时装公司做买手，她有点担心通勤。",
        ],
        'faq' => [
            'title' => "几个有用的回答。",
            'items' => [
                [
                    'q' => "我的联系人需要 Monica 账户吗？",
                    'a' => "不需要。这些是你的记录。添加某个人不会邀请对方，也不会给对方任何访问权限。:link是另一项单独的选择。",
                    'link' => [
                        'label' => "分享联系人的部分内容",
                        'page' => "sharing",
                    ],
                ],
                [
                    'q' => "我可以自定义联系人页面吗？",
                    'a' => "可以。用:link选择标签页、栏目和字段。不同的人可以使用不同的模板。",
                    'link' => [
                        'label' => "联系人模板",
                        'page' => "templates",
                    ],
                ],
                [
                    'q' => "这是销售 CRM 吗？",
                    'a' => "Monica 是为个人背景和人际关系而做的。:link更详细地介绍了这种思路。",
                    'link' => [
                        'label' => "个人 CRM 指南",
                        'page' => "personalCrm",
                    ],
                ],
            ],
        ],
        'cta' => [
            'title' => "从一个你已经认识的人开始。",
            'body' => "添加一个人，再加上几条你想记住的细节。这已经是一个相当像样的数据库了。",
            'button' => "开始使用 Monica",
        ],
    ],

    /** The timeline and reminders page: two separate records, and the way into the pages about each. */
    'timelineReminders' => [
        'hero' => [
            'eyebrow' => "时间线与提醒",
            'title' => "记住那些时刻，也记得下一次。",
            'lede' => "有已经发生的事，也有你打算之后去做的事。Monica 为两者都留了位置：时间线记录共同经历，提醒帮你把想做的事做完。",
            'cta' => "开始使用 Monica",
            'people' => "了解“人”",
            'label' => "一顿已记录的晚餐，旁边是一条单独的跟进提醒。",
            'moment' => "记录发生过的事",
            'nudge' => "提醒接下来要做的事",
            'screen' => [
                'event' => [
                    'title' => "和 Rachel 吃晚饭",
                    'date' => "11月18日",
                    'detail' => "Central Perk，纽约",
                    'with' => ["Rachel"],
                ],
                'reminder' => "问问新工作怎么样",
                'reminderWhen' => "11月25日 · 2 天后",
            ],
        ],
        'ui' => [
            'reminders' => "提醒",
            'add' => "添加",
            'oneTime' => "仅一次",
            'with' => "与",
            'timeline' => "时间线",
            'addEvent' => "添加活动",
            'addReminder' => "添加提醒",
            'what' => "要提醒你什么？",
            'required' => "必填",
            'date' => "日期",
            'repeat' => "重复",
            'once' => "一次",
            'notificationTime' => "通知时间：",
            'change' => "更改",
            'notify' => "我们会在这一天通知你，不会提前通知。",
            'cancel' => "取消",
            'addReminderButton' => "添加提醒",
            'oneEntry' => "1 个条目",
            'about' => "关于 Rachel Green",
        ],
        'dinner' => [
            'title' => "一顿晚饭，在场的每个人。",
            'body' => "记录一个共同时刻，附上日期、参与者和有用的细节。同一个事件会出现在每位参与者的时间线上，你不必把那晚写好几遍。",
            'closing' => "感恩节的剩菜已经够多了。",
            'link' => "了解时间线",
            'label' => "一顿感恩节晚餐，和六个人一起记录了一次，分别出现在 Rachel、Ross、Chandler 和 Joey 的时间线上。",
            'caption' => "写一次，六位参与者。",
            'event' => [
                'title' => "感恩节：Monica 头上的火鸡",
                'date' => "1998年11月19日",
            ],
        ],
        'reminders' => [
            'title' => "给“我该打个电话”定个日期。",
            'body' => "一个生日、一场面试、一位你一直想联系的朋友。创建一次性提醒，或选择重复的节奏。设置时间和时区，再从你的实例提供的通知渠道中选择。",
            'label' => "一个人生事件（一顿晚饭），以及单独设置的跟进提醒。",
            'link' => "了解提醒",
            'screen' => [
                'event' => [
                    'title' => "在 Monica 家吃晚饭",
                    'date' => "11月20日",
                    'detail' => "纽约 Bedford Street 90 号 20 号公寓",
                    'with' => ["Monica", "Ross", "Phoebe"],
                ],
                'reminder' => "问 Rachel 新工作怎么样",
                'date' => "2026/11/25",
            ],
        ],
        'context' => [
            'title' => "有了背景，跟进更容易。",
            'body' => "打电话前，打开对方的:details，看看你上次记了什么。打完之后，补上想留到下次的内容。",
            'details' => "联系方式",
            'body2' => "如果你在用:assistant，趁你还记得，让它查一下背景，或创建一条支持的提醒。",
            'assistant' => "已连接的助手",
            'prompt' => "“在 Monica 里创建一条提醒：11 月 25 日多伦多时间下午 6 点，问 Rachel 新工作怎么样。”",
            'name' => "你的助手",
            'connected' => "已连接 Monica",
            'answer' => "好了。提醒已加在 Rachel 的页面上，时间是 11 月 25 日 18:00，America/Toronto。",
            'label' => "请助手为 Rachel 创建提醒，以及 Monica 的确认。",
        ],
        'faq' => [
            'title' => "几个有用的回答。",
            'items' => [
                [
                    'q' => "人生事件会自动创建提醒吗？",
                    'a' => "时间线条目和提醒是两条独立的记录。先记下发生了什么，需要提醒时再创建提醒。",
                ],
                [
                    'q' => "提醒依赖我的 AI 助手一直开着吗？",
                    'a' => "不。Monica 有自己的提醒系统。通知能否送达，取决于你的实例和账户配置的渠道。",
                ],
            ],
        ],
        'cta' => [
            'title' => "给自己留一点背景，再加一个有用的提醒。",
            'body' => "从一个时刻或一条提醒开始。两个都要也行。这里没有效率评分。",
            'button' => "开始使用 Monica",
        ],
    ],

    /** The possessions page: what you own, where it is kept and what happened to it. */
    'possessions' => [
        'hero' => [
            'eyebrow' => "物品",
            'title' => "多了解一点你的东西。",
            'lede' => "你借出去的那本书。你送去保养的那辆自行车。只有东西坏了才用得上的型号。",
            'body' => "记下你的物品、它们的细节，以及值得留下的历史。你的记性还有别的事要做。",
            'cta' => "开始使用 Monica",
            'plans' => "查看方案",
            'label' => "一辆自行车的物品页面，包括详情、位置和历史。",
        ],
        'ui' => [
            'vault' => "个人",
            'allPossessions' => "全部物品",
            'keptIn' => "存放于",
            'addTag' => "添加关键词",
            'edit' => "编辑",
            'photos' => "照片将在以后的版本中提供。",
            'details' => "详情",
            'type' => "类型",
            'keptInFact' => "存放位置",
            'status' => "状态",
            'owned' => "拥有",
            'acquired' => "获得",
            'bicycles' => "自行车",
            'books' => "图书",
            'locationsHelp' => "物品现在存放的位置,以及自记录以来去过的所有位置。",
            'manageLocations' => "管理位置",
            'moveElsewhere' => "移到别处",
            'keptNowIn' => "当前存放于",
            'correct' => "修正",
            'since' => "自",
            'timeThere' => "停留时长",
            'why' => "在那里的原因",
            'noReason' => "未记录原因",
            'everyStay' => "所有停留",
            'newestFirst' => "最新优先",
            'hereNow' => "此刻在这里",
            'delete' => "删除",
            'servicing' => "保养",
            'cost' => "费用",
            'performedBy' => "执行人",
            'performed' => "执行日期",
            'condition' => "品相",
            'nextDue' => "下次到期",
            'lentTo' => "借给",
            'returned' => "已归还",
            'conditionOut' => "借出时的品相",
            'conditionBack' => "归还时的品相",
            'deposit' => "押金",
            'notRecorded' => "未记录",
            'likeNew' => "几乎全新",
            'used' => "二手",
            'sections' => [
                'overview' => "概览",
                'timeline' => "时间线",
                'transactions' => "交易",
                'insurance' => "保险",
                'valuations' => "估值",
                'provenance' => "流转记录",
                'maintenance' => "维护",
                'loans' => "借出",
                'locations' => "位置",
                'documents' => "文档",
            ],
            'fieldsFrom' => "自行车 类型的字段。",
        ],
        'bike' => [
            'name' => "城市自行车",
            'leaf' => "自行车架",
            'at' => "，位于 我家",
            'path' => "我家 › 门厅 › 自行车架",
            'tags' => [
                ["通勤", "teal"],
                ["周末", "green"],
            ],
            'acquired' => "购买, 2024年3月2日",
            'added' => "添加于 2024年3月2日",
            'groups' => [
                [
                    "识别信息",
                    [
                        ["品牌", "Gazelle"],
                        ["型号", "Ultimate C8"],
                        ["年份", "2021"],
                        ["用途", "城市"],
                    ],
                ],
                [
                    "设备",
                    [
                        ["车架尺寸", "54 cm"],
                        ["轮径", "700c"],
                        ["刹车", "碟刹"],
                        ["电助力", "不"],
                    ],
                ],
            ],
            'since' => "2026年11月12日",
            'stays' => [
                [
                    'head' => "我家 › 门厅 ›",
                    'leaf' => "自行车架",
                    'period' => "从 2026年11月12日 到 现在",
                    'length' => "11 天",
                ],
                [
                    'head' => "我家 ›",
                    'leaf' => "储物间",
                    'period' => "从 2024年3月2日 到 2026年11月12日",
                    'length' => "2 年 8 个月",
                ],
            ],
            'stayCount' => "2 个位置，共 2 次存放",
            'service' => [
                'title' => "年度保养，换新链条",
                'cost' => "US\$85.00",
                'by' => "Bowery Bikes",
                'on' => "2026年10月3日",
                'condition' => "有磨损 → 几乎全新",
                'next' => "2027年10月3日",
            ],
            'loan' => [
                'period' => "从 2026年11月1日 到 2026年11月9日",
                'length' => "8 天",
            ],
        ],
        'book' => [
            'name' => "Be Your Own Windkeeper",
            'groups' => [
                [
                    "出版信息",
                    [
                        ["作者", "未知"],
                    ],
                ],
                [
                    "此件详情",
                    [
                        ["已签名", "不"],
                        ["初版", "不"],
                    ],
                ],
            ],
        ],
        'inventory' => [
            'title' => "给你的东西建一份像样的档案。",
            'body' => "为你在乎的东西建立清单。用物品类型和它们的字段记下每件东西该有的细节，再加上标签来整理。",
            'closing' => "一本书和一辆自行车有用的细节不一样。两者都不需要职位名称。",
            'link' => "了解清单和标签",
            'label' => "两件不同类型的物品：一本书及其出版信息，一辆城市自行车及其配置和标签。",
        ],
        'locations' => [
            'title' => "记住你把它放在哪里。",
            'body' => "按你的实际情况搭建位置，从一栋房子到一个房间、一个架子或一个盒子。记下物品放在哪里，搬动时保留之前的位置。",
            'label' => "一辆自行车当前和之前记录的位置。",
            'link' => "了解位置",
        ],
        'history' => [
            'title' => "让历史跟着物品走。",
            'body' => "需要时记下保养内容、费用和下次到期日。记录借给某位联系人的物品，还回来时标记为已归还。",
            'link' => "了解保养和借出",
            'label' => "城市自行车的一条保养记录，含费用和下次到期日，以及一次已归还的借出给 Ross Geller 的记录。",
        ],
        'together' => [
            'title' => "你的人、你的东西和你的知识，都在同一个应用里。",
            'body' => "一次借出把一件物品和你的某位:contacts连在一起。家务说明可以放在:knowledge里。兼容的助手可以通过:mcp读取和更新支持的记录。",
            'contacts' => "联系人",
            'knowledge' => "知识",
            'mcp' => "Monica 的 MCP 服务器",
            'closing' => "你也可以自己打开这条记录。有时候，一个再普通不过的界面正是你需要的。",
            'prompt' => "“在 Monica 里找到那辆城市自行车，看看它上次是什么时候保养的。”",
            'name' => "你的助手",
            'connected' => "已连接 Monica",
            'label' => "向助手询问自行车上次保养的时间，以及它从 Monica 中找到的回答。",
            'answer' => "城市自行车上次保养是 10 月 3 日：年度保养并换了新链条，85 美元。下次保养在 2027 年 10 月 3 日。",
        ],
        'faq' => [
            'title' => "几个有用的回答。",
            'items' => [
                [
                    'q' => "我需要把所有东西都登记吗？",
                    'a' => "不需要。从你经常需要查细节的东西开始：家用设备、喜欢的书、工具，或者你在乎的收藏。",
                ],
                [
                    'q' => "Monica 会自动知道物品在哪里吗？",
                    'a' => "不会。位置反映的是你或已连接的工具维护的记录。Monica 不追踪实物。",
                ],
                [
                    'q' => "不用 AI 也能用吗？",
                    'a' => "可以。你可以在网页应用里直接管理同样的个人信息。",
                ],
            ],
        ],
        'cta' => [
            'title' => "从那件你总要去查的东西开始。",
            'body' => "给它一个存放细节的地方。",
            'button' => "开始使用 Monica",
        ],
    ],

    /** The inventory page: possession types, their fields and tags. */
    'inventory' => [
        'hero' => [
            'eyebrow' => "清单与标签",
            'title' => "建一份适合你的东西的清单。",
            'lede' => "书、自行车、家具，还有那台你永远记不住型号的设备。给:link各自一份记录。",
            'linkLabel' => "你在乎的物品",
            'body' => "你可以从一件东西开始。厨房抽屉不必放进第一阶段。",
            'cta' => "开始使用 Monica",
            'label' => "一份个人物品清单，包括一辆自行车、一本平装书和一把躺椅，按类型和标签整理。",
            'screen' => [
                'summary' => "3 件物品，分布于 1 个位置，申报价值 US\$1,078。",
                'rooms' => [
                    ["客厅", "2"],
                    ["厨房", "0"],
                    ["卧室", "0"],
                    ["浴室", "0"],
                    ["储物间", "0"],
                    ["门厅", "1"],
                ],
                'items' => [
                    ["城市自行车", "自行车", "我家 › 门厅 › 自行车架", "US\$650"],
                    ["The Shining — 平装本", "图书", "我家 › 客厅", "US\$8"],
                    ["客厅躺椅", "家具", "我家 › 客厅", "US\$420"],
                ],
            ],
        ],
        'ui' => [
            'allPossessions' => "全部物品",
            'addPossession' => "添加物品",
            'locations' => "位置",
            'manage' => "管理",
            'allLocations' => "全部位置",
            'myHouse' => "我家",
            'everythingElse' => "其他物品",
            'possessionTypes' => "物品类型",
            'importJson' => "导入 JSON",
            'newType' => "新类型",
            'books' => "图书",
            'possessionTags' => "物品关键词",
            'yourTags' => "你的关键词列表",
            'edit' => "编辑",
            'delete' => "删除",
            'details' => "详情",
            'backToTypes' => "返回物品类型",
            'exportJson' => "导出为 JSON",
            'fieldGroups' => "字段群组",
            'fieldGroupsHelp' => "把相关字段归到一个名称下，例如“购买”或“技术详情”。",
            'fieldName' => "字段名称",
            'kind' => "类型",
            'addField' => "添加字段",
            'keptIn' => "存放于",
            'addTag' => "添加关键词",
            'fieldsFrom' => "图书 类型的字段。",
        ],
        'types' => [
            'title' => "不同的东西需要不同的细节。",
            'body' => "用物品类型给每类物品配上相关字段。书可能需要作者和版本，设备可能需要型号。填上你以后还会用到的细节。",
            'closing' => "类型提供结构，物品记录保存你手上那件东西的信息。",
            'label' => "设置中的物品类型：书籍、汽车、自行车和家具，各自标出字段和分组数量。",
            'screen' => [
                ["图书", "7 个字段 · 2 个群组"],
                ["汽车", "13 个字段 · 3 个群组"],
                ["自行车", "10 个字段 · 2 个群组"],
                ["家具", "11 个字段 · 3 个群组"],
            ],
        ],
        'book' => [
            'name' => "The Shining — 平装本",
            'leaf' => "客厅",
            'at' => "，位于 我家",
            'tag' => "最爱的书",
            'groups' => [
                [
                    "出版信息",
                    [
                        ["作者", "Stephen King"],
                        ["版本", "平装本"],
                    ],
                ],
                [
                    "此件详情",
                    [
                        ["已签名", "不"],
                        ["初版", "不"],
                    ],
                ],
            ],
            'typeSummary' => "7 个字段 · 2 个群组",
            'groupCount' => "4 个字段",
            'typeFields' => [
                ["作者", "文本"],
                ["版本", "文本"],
                ["ISBN", "文本"],
            ],
        ],
        'copy' => [
            'title' => "记录你手上的那一件。",
            'body' => "一条记录可以保存你这件东西的细节和状态，而不只是描述一款通用产品。两件同样的东西经历不同时，分开记录能让它们的历史各自独立。",
            'closing' => "那本崭新的平装书和被 Joey 借走的那本，值得这样区分。",
            'label' => "一本书的清单记录，旁边是为“书籍”物品类型设置的字段。",
        ],
        'tags' => [
            'title' => "用标签把东西归到一起。",
            'body' => "按你看待自己物品的方式打标签：最爱的书、露营装备、新家要用的东西。标签能整理清单，而不必把每个类别都变成一种新的物品类型。",
            'closing' => "一套藏书，可以用你逐本记录的书和给它们打的标签来表示。",
            'label' => "设置中的物品标签：露营装备、通勤、最爱的书和新家用品，各有颜色。",
            'screen' => [
                'count' => "4 个关键词，按名称排序。",
                'tags' => [
                    ["新家用品", "amber"],
                    ["最爱的书", "plum"],
                    ["通勤", "teal"],
                    ["露营装备", "green"],
                ],
            ],
        ],
        'grow' => [
            'title' => "需要时，让记录慢慢丰富。",
            'body' => "需要知道东西放在哪里时，添加:locations。东西需要保养或借出时，保留:care。",
            'locations' => "位置",
            'care' => "保养和借出记录",
            'body2' => "对于你想读而不是已经拥有的书，从:list开始可能更简单。",
            'list' => "知识清单",
        ],
        'assistant' => [
            'title' => "趁还记得，把细节加上。",
            'prompt' => "“在 Monica 里添加一件“书籍”类型的物品，名叫 The Shining，并记下它是平装本。”",
            'body' => "借助:link，你可以创建和更新支持的物品记录。之后可以在 Monica 中查看并编辑这条记录。",
            'linkLabel' => "兼容的助手",
            'name' => "你的助手",
            'connected' => "已连接 Monica",
            'answer' => "好了。The Shining 已作为书籍加入你的清单，版本设为平装本。",
            'label' => "请助手把一本书加入清单，以及 Monica 的确认。",
        ],
        'faq' => [
            'title' => "几个有用的回答。",
            'items' => [
                [
                    'q' => "有单独的“收藏”功能吗？",
                    'a' => "这一页介绍的是物品记录、类型和标签。用它们来整理你拥有的收藏，不需要单独的收藏记录。",
                ],
                [
                    'q' => "愿望清单和物品清单是一回事吗？",
                    'a' => "物品清单描述的是你已登记为物品的东西。想法或未来要买的东西可以放在:link里。",
                    'link' => [
                        'label' => "知识",
                        'href' => "#",
                    ],
                ],
            ],
        ],
        'cta' => [
            'title' => "从一个书架、一个爱好或一件有用的东西开始。",
            'body' => "按自己的节奏，建立你需要的清单。",
            'button' => "开始使用 Monica",
        ],
    ],

    /** The locations page: the places belongings are kept in, and their stays there. */
    'locations' => [
        'hero' => [
            'eyebrow' => "位置",
            'title' => "“某个安全的地方”也该有个地址。",
            'lede' => "房子、房间、架子、箱子。记录你的物品放在哪里，细到足以帮你再找到它们。",
            'body' => "Monica 保存你记录的位置，以及你选择添加的历史。柜子还得你自己去开。",
            'cta' => "开始使用 Monica",
            'possessions' => "了解物品",
            'label' => "一本书被记录在客厅书柜的上层搁板上，处于一个位置层级之中。",
        ],
        // The application's own words, as Erica translates them.
        'ui' => [
            'locations' => "位置",
            'locationsDescription' => "存放你的物品的地方：房子、房间、架子、箱子。一个位置可以放在另一个位置里面。",
            'newLocation' => "新位置",
            'edit' => "编辑",
            'manage' => "管理",
            'allLocations' => "全部位置",
            'locationsHelp' => "物品现在存放的位置，以及自记录以来去过的所有位置。",
            'manageLocations' => "管理位置",
            'moveElsewhere' => "移到别处",
            'keptNowIn' => "当前存放于",
            'correct' => "修正",
            'since' => "自",
            'timeThere' => "停留时长",
            'why' => "在那里的原因",
            'noReason' => "未记录原因",
            'everyStay' => "所有停留",
            'newestFirst' => "最新优先",
            'hereNow' => "此刻在这里",
            'delete' => "删除",
            'keptIn' => "存放于",
            'addTag' => "添加关键词",
            'details' => "详情",
            'name' => "名称",
            'sitsInside' => "位于",
            'address' => "地址",
            'addressPlaceholder' => "1725 Slough Avenue",
            'optional' => "可选",
            'cancel' => "取消",
            'saveChanges' => "保存更改",
            'books' => "图书",
            'furniture' => "家具",
            'musicalInstruments' => "乐器",
            'fieldsFrom' => "家具 类型的字段。",
        ],
        // The locations of the account, as the tree in settings lists them,
        // in the order Erica sorts them (by name, in the reader's language):
        // name, depth, and the line under the name.
        'tree' => [
            ["我家", 0, "90 Bedford Street, New York · 内部有 2 个位置"],
            ["客厅", 1, "我家 的地址 · 内部有 1 个位置"],
            ["书柜", 2, "我家 的地址 · 内部有 2 个位置"],
            ["上层搁板", 3, "我家 的地址"],
            ["下层搁板", 3, "我家 的地址"],
            ["书房", 1, "我家 的地址"],
        ],
        'book' => [
            'name' => "The Shining — 平装本",
            'at' => "，位于 我家",
            'head' => "我家 › 客厅 › 书柜 ›",
            'leaf' => "上层搁板",
            'since' => "2026年9月3日",
            'length' => "2 个月 20 天",
        ],
        'places' => [
            'title' => "按你使用的方式描述地方。",
            'body' => "位置可以放在其他位置里面。先从一栋房子开始，再添加房间，需要更多细节时再加架子或箱子。层级的数量没有固定上限。",
            'closing' => "你不必给每个抽屉都起名字。除非那正是你理想中的周日。",
            'label' => "保险库物品旁边的位置：我家，其中的客厅有一个书柜和两层搁板，还有书房，各自标出所存物品的数量。",
            // The same tree beside the possessions: name, depth, and the
            // possessions kept there or anywhere inside it.
            'nav' => [
                ["我家", 0, "9"],
                ["客厅", 1, "6"],
                ["书柜", 2, "4"],
                ["上层搁板", 3, "3"],
                ["下层搁板", 3, "1"],
                ["书房", 1, "3"],
            ],
            'all' => "9",
        ],
        'separate' => [
            'title' => "把地方和里面的东西分开记录。",
            'body' => "书柜可以说明东西存放在哪里。你拥有的书柜也可以有一条带自己详情的:link。这是两条独立的记录：一条描述地方，另一条描述东西。",
            'linkLabel' => "物品记录",
            'body2' => "位置属于你的账户，所以你可以在不同的:link中用同一套位置结构来存放物品。",
            'vaults' => "保险库",
            'label' => "同一个书柜出现两次：一次是在设置中编辑的位置，位于我家的客厅里；一次是“家具”类型的物品，带有自己的详情。",
            'placeCaption' => "一个地方，用来存放东西",
            'thingCaption' => "一件东西，带有自己的详情",
            'form' => [
                'title' => "编辑“书柜”",
                'name' => "书柜",
                'parent' => "我家 › 客厅",
                'addressHelp' => "留空则使用 我家 的地址（90 Bedford Street, New York）。",
            ],
            'thing' => [
                'name' => "书柜",
                'leaf' => "客厅",
                'at' => "，位于 我家",
                'groups' => [
                    [
                        "识别信息",
                        [
                            ["分类", "架子"],
                            ["品牌", "IKEA"],
                            ["型号或系列", "Billy"],
                        ],
                    ],
                    [
                        "尺寸与材质",
                        [
                            ["宽度 (cm)", "80"],
                            ["高度 (cm)", "202"],
                            ["颜色或饰面", "白色"],
                        ],
                    ],
                ],
            ],
        ],
        'moving' => [
            'title' => "搬家不必抹掉旧地址。",
            'body' => "物品被挪动时，记录一次新的位置停留。保留它在上一个位置待过的时间段，带上日期和有用的备注。",
            'closing' => "这比一张写着“储藏室”的标签多得多。它告诉你这件东西什么时候在那里。",
            'label' => "两条带日期的位置停留记录，显示一把吉他从客厅搬到了书房。",
            'guitar' => [
                'name' => "民谣吉他",
                'leaf' => "书房",
                'at' => "，位于 我家",
                'since' => "2026年11月12日",
                'stayCount' => "2 个位置共停留 2 次",
                'stays' => [
                    [
                        'head' => "我家 ›",
                        'leaf' => "书房",
                        'period' => "从 2026年11月12日 到 现在",
                        'length' => "11 天",
                        'reason' => "更安静的角落，适合练习",
                    ],
                    [
                        'head' => "我家 ›",
                        'leaf' => "客厅",
                        'period' => "从 2026年11月1日 到 2026年11月12日",
                        'length' => "11 天",
                        'reason' => null,
                    ],
                ],
            ],
        ],
        'assistant' => [
            'title' => "问问最后记录的位置。",
            'prompt' => "“在 Monica 里查一下我的 The Shining，看看它记录的位置。”",
            'body' => "借助:link，你可以检索支持的物品和位置记录。它的回答只和你保存的信息一样新。",
            'linkLabel' => "兼容的已连接助手",
            'body2' => "如果一本书被朋友借走了，在:link里记录谁拿着它更合适。位置和保管回答的是不同的问题。",
            'loanLabel' => "借出记录",
            'name' => "你的助手",
            'connected' => "已连接 Monica",
            'answer' => "最后记录的位置是 我家、客厅、书柜、上层搁板，自 9 月 3 日起。",
            'label' => "向助手询问一本书存放在哪里，以及 Monica 的回答。",
        ],
        'faq' => [
            'title' => "几个有用的回答。",
            'items' => [
                [
                    'q' => "Monica 会自动追踪物品吗？",
                    'a' => "不会。它只保存你或已连接的工具记录的位置和移动。",
                ],
                [
                    'q' => "我可以让多件物品共用一个位置吗？",
                    'a' => "可以。一个架子可以存放不止一件已记录的物品。",
                ],
            ],
        ],
        'cta' => [
            'title' => "给“某个地方”多一点细节。",
            'body' => "从一件你总得找的东西的位置开始。",
            'button' => "开始使用 Monica",
        ],
    ],

    /**
     * The maintenance and loans page: the jobs done on a possession and the
     * times it left your hands. Every drawing is a piece of Erica's
     * Maintenance or Loans section of a possession, so `ui` holds the
     * application's own words, as Erica translates them.
     */
    'maintenanceLoans' => [
        'hero' => [
            'eyebrow' => "维护与借出",
            'title' => "把历史和物品放在一起。",
            'lede' => "自行车上次保养是什么时候？书在谁那里？上次维修花了多少钱？",
            'body' => "把维护和借出记录与你的:link放在一起，这样下一次的答案就不用靠你记对去年春天的事。",
            'possessionsLabel' => "物品",
            'cta' => "开始使用 Monica",
            'possessions' => "了解物品",
            'serviced' => "上次保养",
            'borrowed' => "目前借出",
            'label' => "两件物品，各自来自 Monica 中它自己的页面。城市自行车最近的一条维护记录：维修，调整刹车，US\$45.00，由 Central Bike Shop 于 2026年11月12日 执行，下次到期 2027年5月12日。以及一本 The Shining 平装本的借出记录：Joey Tribbiani 自 2026年11月18日 起持有，应于 2026年12月5日 归还。",
        ],
        'ui' => [
            'keptIn' => "存放于",
            'bicycles' => "自行车",
            'books' => "图书",
            'maintenance' => "维护",
            'maintenanceLead' => "这件物品历来进行过的作业，以及每次作业前后的品相。",
            'maintenanceRecord' => "维护记录",
            'cost' => "费用",
            'noCost' => "无费用",
            'performedBy' => "执行人",
            'performed' => "执行日期",
            'condition' => "品相",
            'nextDue' => "下次到期",
            'notRecorded' => "未记录",
            'notScheduled' => "未安排",
            'repair' => "维修",
            'servicing' => "保养",
            'cleaning' => "清洁",
            'editRecord' => "编辑维护记录",
            'recordedOn' => "记录于 城市自行车",
            'type' => "类型",
            'title' => "标题",
            'costField' => "费用",
            'currency' => "货币",
            'conditionBefore' => "作业前品相",
            'conditionAfter' => "作业后品相",
            'nextDueHelp' => "这项作业下次应在何时进行。",
            'description' => "描述",
            'optional' => "可选",
            'saveChanges' => "保存更改",
            'cancel' => "取消",
            'loans' => "借出",
            'addLoan' => "添加借用",
            'markReturned' => "标记为已归还",
            'notLent' => "目前没有借给任何人。",
            'everyLoan' => "所有借用",
            'newestFirst' => "最新优先",
            'lentTo' => "借给",
            'withThem' => "目前在对方手中",
            'returned' => "已归还",
            'conditionOut' => "借出时的品相",
            'conditionBack' => "归还时的品相",
            'dueBack' => "应归还日期",
            'deposit' => "押金",
            'likeNew' => "几乎全新",
            'used' => "二手",
            'worn' => "有磨损",
        ],
        'bike' => [
            'name' => "城市自行车",
            'leaf' => "自行车架",
            'at' => "，位于 我家",
        ],
        'book' => [
            'name' => "The Shining — 平装本",
            'leaf' => "上层搁板",
            'at' => "，位于 我家",
        ],
        // The jobs done on the city bike, newest first, as its Maintenance
        // section lists them. `type` names the job's type in `ui`, which
        // also decides its colour. `parts` are performed by, performed,
        // condition and next due, each with whether it is set.
        'records' => [
            [
                'type' => 'repair',
                'title' => "调整刹车",
                'cost' => "US\$45.00",
                'parts' => [["Central Bike Shop", true], ["2026年11月12日", true], ["二手 → 几乎全新", true], ["2027年5月12日", true]],
                'description' => "后盘式刹车有摩擦声。卡钳已重新对齐，刹车片已检查，两者的磨损余量都还很充足。",
            ],
            [
                'type' => 'servicing',
                'title' => "年度保养，换新链条",
                'cost' => "US\$85.00",
                'parts' => [["Bowery Bikes", true], ["2026年10月3日", true], ["有磨损 → 几乎全新", true], ["2027年10月3日", true]],
                'description' => null,
            ],
            [
                'type' => 'cleaning',
                'title' => "清洁并润滑链条",
                'cost' => null,
                'parts' => [["未记录", false], ["2026年6月3日", true], ["未记录", false], ["未安排", false]],
                'description' => null,
            ],
        ],
        'work' => [
            'title' => "记下做了什么，而不只是修好了。",
            'body' => "保留日期、作业类型、执行人、费用和描述。需要时记录作业前后的品相。",
            'closing' => "一次检查、清洁、维修或修复，都会成为该物品维护历史的一部分。回头查看时，不用再破译笔记里的“自行车的事，大概是四月”。",
            'label' => "Monica 中城市自行车的维护部分，最新的在前。一次维修，调整刹车，US\$45.00，由 Central Bike Shop 于 2026年11月12日 执行，品相由二手变为几乎全新，下次到期 2027年5月12日，附有一条说明所做工作的备注。一次保养，年度保养，换新链条，US\$85.00，由 Bowery Bikes 于 2026年10月3日 执行。一次清洁，清洁并润滑链条，日期为 2026年6月3日，无费用。",
        ],
        'due' => [
            'title' => "让下次到期日一直在视野里。",
            'body' => "一条维护记录可以包含该物品下次应当检查的日期。回顾历史时，这是有用的背景信息。",
            'body2' => "到期日记录的是预期的时间，它本身并不意味着已经安排了通知。:link是另一项功能。",
            'linkLabel' => "Monica 的提醒",
            'label' => "正在编辑城市自行车调整刹车记录的表单：一次由 Central Bike Shop 于 2026年11月12日 执行的维修，费用 45.00 美元，作业前品相二手、作业后几乎全新，下次到期 2027年5月12日，附有描述。",
            // The values in the form, as the browser draws its fields in
            // this language.
            'form' => [
                'performed' => "2026/11/12",
                'cost' => "45.00",
                'currency' => "USD — 美元",
                'next' => "2027/05/12",
            ],
        ],
        'loans' => [
            'title' => "知道谁拿着它，什么时候还回来的。",
            'body' => "记录借给你某位:link的物品，或是从他们那里借来的东西。保留开始日期、可选的应归还日期和重要的细节。",
            'contacts' => "联系人",
            'closing' => "一次借出可以是计划中、进行中或已归还。东西还回来时，记录归还和它的品相。大家还能做朋友。书还是你的。",
            'before' => "借出期间",
            'after' => "归还之后",
            'label' => "一本 The Shining 平装本的借出记录，展示两次。借出期间：Joey Tribbiani 自 2026年11月18日 起持有，应于 2026年12月5日 归还，旁边有标记为已归还的按钮。归还之后：没有人持有，这条借出记录显示 2026年12月3日 已归还，历时 15 天，品相为二手。两者下方是更早之前借给 Monica Geller 的一次，8 月归还。",
            'count' => "2 笔借用，2 件借出",
            'sentence' => "Joey Tribbiani 自 2026年11月18日 起持有。",
            'dueLine' => "2026年12月5日 应归还，还有 12 天",
            'purpose' => "电影之夜前要读。",
            'joey' => [
                'active' => "从 2026年11月18日 到 现在",
                'returned' => "从 2026年11月18日 到 2026年12月3日",
                'length' => "15 天",
                'due' => "2026年12月5日",
            ],
            'monica' => [
                'period' => "从 2026年8月2日 到 2026年8月30日",
                'length' => "28 天",
            ],
        ],
        'assistant' => [
            'title' => "让助手帮你查记录。",
            'prompts' => [
                "“在 Monica 里查一下城市自行车最近的维护记录。”",
                "“找出我那本 The Shining 当前的借出记录。”",
            ],
            'body' => "借助:link，可以处理受支持的维护和借出操作。它使用你记录的历史，但看不到 Joey 家的茶几。",
            'linkLabel' => "兼容的助手",
            'name' => "你的助手",
            'connected' => "已连接 Monica",
            'answer' => "Joey Tribbiani 自 11 月 18 日起一直持有你那本 The Shining 平装本，应于 12 月 5 日归还。",
            'label' => "向助手提出的两个问题，分别关于城市自行车最近的维护记录和 The Shining 当前的借出记录，以及 Monica 对第二个问题的回答。",
        ],
        'faq' => [
            'title' => "几个有用的回答。",
            'items' => [
                [
                    'q' => "借出会改变所有权吗？",
                    'a' => "不会。借出记录的是由谁保管，不会改变物品归谁所有。",
                ],
                [
                    'q' => "我能保留更早的借出和维修记录吗？",
                    'a' => "可以。这些记录各有自己的日期，所以你可以保留一件物品随时间积累的历史。它的:link是单独记录的。",
                    'link' => ['label' => "位置历史", 'page' => 'locations'],
                ],
            ],
        ],
        'cta' => [
            'title' => "为下次你想知道时，留一条记录。",
            'body' => "一次维修或一次借出就足够开始。",
            'button' => "开始使用 Monica",
        ],
    ],

    /**
     * The knowledge page: notes and lists, in folders. Every drawing is a
     * piece of Erica's Knowledge screens, filled with the demo vault's own
     * Knowledge (Monica Geller's), to which the water shutoff note and the
     * paint list are added in her Home folder. `ui` holds the application's
     * own words, as Erica translates them.
     */
    'knowledge' => [
        'hero' => [
            'eyebrow' => "知识",
            'title' => "把你知道的，放在找得到的地方。",
            'lede' => "那份食谱。那个涂料编号。只有大家都不在时你才用得上的说明。",
            'body' => "让有用的信息在 Monica 的个人知识库里有个家。写笔记，建列表，再把它们放进以后一眼就能认出的文件夹。",
            'cta' => "开始使用 Monica",
            'plans' => "查看方案",
            'label' => "Monica 中的知识库。旁边是各个文件夹，其中“家”已展开，显示它的备注和列表：电器、家居维护、维护计划、涂料参考、关闭水阀和 Wi-Fi 信息。目录列出每一项的类型和上次编辑的时间，备注还会显示其中的标题。",
        ],
        'ui' => [
            'knowledge' => "知识库",
            'search' => "搜索备注和列表",
            'contents' => "目录",
            'contentsLead' => "知识库中的所有文件夹、备注和列表。备注还会显示其中的标题，方便直接跳转。",
            'summary' => "8 个文件夹、18 条备注、14 个列表",
            'note' => "备注",
            'list' => "列表",
            'edit' => "编辑",
            'editColumns' => "编辑列",
            'addItem' => "添加条目",
        ],
        // The folders, in the order Monica has put them in: Home moved to
        // the top. `count` is the line beside a folder in the contents.
        'folders' => [
            ['name' => "家", 'count' => "6"],
            ['name' => "个人", 'count' => "4"],
            ['name' => "旅行", 'count' => "4"],
            ['name' => "健康与健身", 'count' => "3"],
            ['name' => "图书与电影", 'count' => "4"],
            ['name' => "美食与食谱", 'count' => "4"],
            ['name' => "科技", 'count' => "4"],
            ['name' => "创意与项目", 'count' => "3"],
        ],
        'homeCount' => "6 个备注和列表",
        'personalCount' => "4 个备注和列表",
        // The documents of a folder, sorted by title as Erica sorts them in
        // this language: kind (note or list), title, the kind line, when it
        // was edited, and a note's headings.
        'home' => [
            ['list', "电器", "包含 4 个条目的列表", "编辑于 1个月前", []],
            ['note', "家居维护", "备注", "编辑于 2天前", ["本季"]],
            ['list', "维护计划", "包含 3 个条目的列表", "编辑于 3周前", []],
            ['list', "涂料参考", "包含 4 个条目的列表", "编辑于 3周前", []],
            ['note', "关闭水阀", "备注", "编辑于 2周前", ["总阀", "长途旅行前"]],
            ['note', "Wi-Fi 信息", "备注", "编辑于 1个月前", []],
        ],
        'personal' => [
            ['note', "关于我", "备注", "编辑于 2个月前", ["简短版本", "大家该知道的事"]],
            ['note', "喜欢的东西", "备注", "编辑于 2个月前", []],
        ],
        'note' => [
            'folder' => "家",
            'title' => "关闭水阀",
            'edited' => "编辑于 2周前",
            'valve' => "总阀",
            'valveBody' => "在前门旁的柜子里，吸尘器后面。顺时针拧到底。",
            'trip' => "长途旅行前",
            // Each task, and whether it is ticked.
            'tasks' => [
                ["关闭总阀", true],
                ["关闭室外水龙头，在厨房水槽下面", true],
                ["打开最低处的水龙头，把水管排空", false],
            ],
        ],
        'list' => [
            'folder' => "家",
            'title' => "涂料参考",
            'edited' => "编辑于 3周前",
            'count' => "4 个条目",
            'description' => "每个房间用的涂料，下次补漆时才对得上色。",
            'columns' => ["房间", "颜色", "光泽"],
            'items' => [
                ["客厅", "紫色，编号 412", "蛋壳光"],
                ["厨房", "淡鼠尾草绿，编号 214", "缎光"],
                ["浴室", "暖白", "柔光"],
                ["走廊", "石灰灰，编号 87", "哑光"],
            ],
        ],
        'notes' => [
            'title' => "有些知识需要一段话。",
            'body' => "把说明、想法和参考信息记在一条笔记里。用标题、列表和链接，让你回头看时读得顺畅。",
            'closing' => "“关闭水阀：前门旁的柜子”已经是一条有用的笔记。它不需要前言。",
            'link' => "了解笔记",
        ],
        'lists' => [
            'title' => "有些知识适合排成行。",
            'body' => "要读的书。要去的地方。每个房间的涂料名称和光泽。按你需要的列建一个列表，把细节放在一起。",
            'link' => "了解列表",
            'label' => "并排的两页知识库。备注“关闭水阀”，在“家”文件夹里：总阀在哪里、怎么关，然后是长途旅行前的三项任务，其中两项已勾选。还有列表“涂料参考”，分为房间、颜色和光泽三列，里面有四个房间。",
        ],
        'folderSection' => [
            'title' => "给每个主题一个位置。",
            'body' => "把笔记和列表归入有名字的文件夹。你可以浏览目录，也可以在知识库中搜索已保存信息里的词。",
            'closing' => "先建几个对你有意义的文件夹。“家”就是个好名字。“优化的家庭智能框架”打起来可就费劲了。",
            'link' => "了解文件夹与整理",
            'query' => "水阀",
            'label' => "搜索了“水阀”一词的知识库文件夹。只剩下一个文件夹“家”，里面有唯一匹配的备注：关闭水阀。",
        ],
        'assistant' => [
            'title' => "有用的信息，有没有助手都行。",
            'body' => "兼容的助手可以通过你的连接，搜索并处理受支持的知识库记录。你也可以直接在 Monica 中打开、编辑和整理它们。",
            'link' => "了解个人 AI 记忆如何运作",
            'prompt' => "“在 Monica 里找一下关闭水阀的说明。”",
            'name' => "你的助手",
            'connected' => "Monica 已连接",
            'answer' => "你的备注“关闭水阀”写着，总阀在前门旁的柜子里，吸尘器后面。顺时针拧到底。",
            'label' => "向助手询问关闭水阀的说明，以及它根据 Monica 中的备注给出的回答。",
        ],
        'faq' => [
            'title' => "几个有用的答案。",
            'items' => [
                [
                    'q' => "知识库和联系人备注有什么不同？",
                    'a' => "知识库按主题保存信息。:link用来记录与某个人有关的背景。请选择最容易日后找到这条信息的地方。",
                    'link' => ['label' => "联系方式和备注", 'page' => 'details'],
                ],
                [
                    'q' => "笔记可以作为结构化记录直接链接到联系人或物品吗？",
                    'a' => "知识库中的笔记目前只包含文字和普通网页链接。它们不提供与联系人、物品或其他笔记之间的结构化关系。",
                ],
                [
                    'q' => "我能把它和工作信息分开吗？",
                    'a' => "知识库位于一个:link之中，所以不同的保险库可以保存不同的信息。",
                    'link' => ['label' => "保险库", 'page' => 'vaults'],
                ],
            ],
        ],
        'cta' => [
            'title' => "存下一件你总要反复去找的事。",
            'body' => "未来的你，已经开了足够多的标签页。",
            'button' => "开始使用 Monica",
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

    /**
     * The AI memory page, "One memory for your AI assistants" (route key
     * `aiMemory`). The pictures on it are drawings of the product and of two
     * assistants talking to it, so each carries a `label` that a screen
     * reader reads instead of the drawing itself.
     *
     * The example runs through the page: your copy of The Shining, lent to
     * Chandler, due back on 5 December. Keep the name, the object and the
     * date in step between `how`, `see`, `structure` and `visibility`.
     */
    'aiMemory' => [
        // Words more than one drawing uses.
        // The examples are the demo vault's, as on the homepage: the
        // reader lent Chandler their copy of The Shining, which lives in
        // the freezer, as it does in his and Joey's flat. Chandler rather
        // than Joey because the vault has his photo.
        'borrower' => "Chandler Bing",
        'book' => "《闪灵》",
        'due' => "12 月 5 日前归还",

        /**
         * Where the illustrations go until they are drawn: the reference, the
         * name and the brief the design gives each one, shown in a dashed
         * frame exactly as the design draws its placeholders.
         */
        'illustrations' => [
            'problem' => [
                'ref' => "I02 · 插图 · 可选",
                'title' => "岛屿与桥",
                'brief' => "两座岛各有各的笔记本，用桥连到中央的一座图书馆，一只熊猫在那里整理它们。不要暗示导入或同步对话。",
            ],
        ],

        'hero' => [
            'eyebrow' => "开源的个人 AI 记忆",
            'title' => "给你的 AI 助手，一份共用的记忆。",
            'lede' => "你的 AI 助手可能会换，你的记忆不该跟着换。",
            'body' => "Monica 为兼容的 AI 助手提供一份共享、持久的个人记忆：一个存放你的人际关系、知识、物品和日常生活的地方。你自己也可以打开它、整理它、使用它，哪怕完全不用 AI。",
            'cta' => "免费开始",
            'how' => "看看它如何运作",
            'note' => "开源。可自托管。免费账户也包含 MCP 访问。",
        ],

        'problem' => [
            'title' => "你的生活，不该困在某一次对话里。",
            'body' => [
                "你会告诉 AI 助手你的家人、你的偏好、你的项目，以及你在乎的事。久而久之，这些信息会成为之后对话里有用的背景。",
                "但你可能不止用一个助手。你可能会换服务商，开一段新对话，或者只是想查点东西，根本不想问 AI。",
                "所以 Monica 给你的个人信息一个属于它自己的家。你不必只依赖每个助手内置的记忆，而是可以把信息存进 Monica，需要时再通过兼容的助手取回。",
            ],
            'closing' => "少重复几遍。在你选用的各种工具之间，多一份连贯。",
        ],

        'how' => [
            'title' => "告诉一个助手，问另一个助手。",
            'lead' => "有了 Monica，个人 AI 记忆可以跨对话、跨兼容的 AI 平台保留下来。今天存下一条信息，之后让另一个已连接的助手去查。",
            'connected' => "已连接 Monica",
            'steps' => [
                [
                    'title' => "用 Claude 存下一件事",
                    'prompt' => "我今天把我那本《闪灵》借给 Chandler 了。他 12 月 5 日还。把这个存到 Monica 里。",
                    'body' => "你的助手会在你的 Monica 账户里记录这次借出、借用的人和预计归还的日期。",
                    'label' => "与 Claude 的一段对话，已连接 Monica。你请 Claude 记下：你把自己的那本《闪灵》借给了 Chandler，12 月 5 日归还。Claude 使用 Monica 的 create-possession-loan 工具，并确认借出已保存。",
                    'reply' => "已保存。Monica 现在显示《闪灵》借给了 Chandler，12 月 5 日归还。",
                ],
                [
                    'title' => "在 Monica 里查看",
                    'prompt' => null,
                    'body' => "这次借出是 Monica 里的一条真实记录，关联着这本书和借书的人。你可以直接打开它，自己查看或更新。",
                    'label' => "Monica 中你那本《闪灵》的页面，存放在冰箱冷冻室里。它的借出部分显示这本书借给了 Chandler Bing，12 月 5 日归还。",
                    'reply' => null,
                ],
                [
                    'title' => "用 ChatGPT 取回",
                    'prompt' => "查一下 Monica。我那本《闪灵》在谁手里？",
                    'body' => "你已连接的助手可以查到记录下来的借出，告诉你书在谁手里、预计什么时候还。",
                    'label' => "与 ChatGPT 的一段新对话，已连接 Monica。你问你那本《闪灵》在谁手里。ChatGPT 使用 Monica 的 list-possession-loans 工具，回答说在 Chandler 手里，12 月 5 日归还。",
                    'reply' => "你的《闪灵》在 Chandler 那里。12 月 5 日归还。",
                ],
            ],
            'garage' => "存放在冰箱冷冻室",
            'loans' => "借出",
            'onLoan' => "已借出",
            'closing' => "对话换了，记忆还在。",
            'note' => "这个例子用的是连接到同一个 Monica 账户的两个助手。助手的兼容性和访问权限可能取决于它们的配置和订阅。存入和取回信息，需要助手使用 Monica 的工具。",
        ],

        'remember' => [
            'title' => "为日常生活准备的个人 AI 记忆。",
            'lead' => "你的生活不只是一堆对话。Monica 给你的助手准备了不同的地方，用来存放不同类型的个人信息，从你认识的人到你拥有的东西。",
            'try' => "试着这样问",
            // The glyph, the page each item links to and the colour of its
            // vignette are in the template, in this order. `chips` are the two
            // labels drawn in the vignette: what Monica would record.
            'items' => [
                [
                    'title' => "人和关系",
                    'body' => "记住你生活里的人、他们彼此之间的关系，以及你们共度的时刻。记录新的相识和家人关系，并在下一次交谈前取回相关信息。",
                    'ask' => "Ross 和 Rachel 刚刚有了一个女儿，叫 Emma。在 Monica 里记录她是他们的女儿。",
                    'chips' => ["Emma", "Ross 和 Rachel 的女儿"],
                ],
                [
                    'title' => "个人知识",
                    'body' => "用文件夹、笔记和清单建立你自己的知识库。把有用的说明、推荐、想法和参考信息存下来，以后还能找到。",
                    'ask' => "把 Phoebe 奶奶的巧克力脆片饼干食谱存进我的“食谱”笔记。",
                    'chips' => ["食谱", "奶奶的饼干"],
                ],
                [
                    'title' => "你的物品",
                    'body' => "记录你拥有什么、花了多少钱、放在哪里、什么时候保养过，以及谁借走了。",
                    'ask' => "在 Monica 里记录我们新买的躺椅。花了 \$1,200，放在客厅，对着电视。",
                    'chips' => ["躺椅", '$1,200'],
                ],
                [
                    'title' => "生活事件",
                    'body' => "为那些重要的经历、里程碑和时刻建立一条时间线，包括和你共度这些时刻的人。",
                    'ask' => "记录我们去伦敦参加 Ross 婚礼的旅行，Chandler 和 Joey 也在。",
                    'chips' => ["伦敦", "Ross 的婚礼"],
                ],
                [
                    'title' => "你的偏好",
                    'body' => "记下你的口味、习惯和偏好，让你的助手在帮你做决定时可以查阅。",
                    'ask' => "在我的偏好笔记里记一下：我吃素，在 Central Perk 总是坐橙色沙发。",
                    'chips' => ["橙色沙发", "吃素"],
                ],
                [
                    'title' => "要记得的事",
                    'body' => "为重要的约定和周期性的场合创建提醒。Monica 可以用它自己的提醒系统提醒你，不依赖你的助手。",
                    'ask' => "在 Monica 里创建一个提醒，每天早上喂小鸡和小鸭。",
                    'chips' => ["小鸡和小鸭", "每天早上"],
                ],
            ],
        ],

        'see' => [
            'title' => "一份你真的看得见的记忆。",
            'body' => [
                "Monica 是一个可以直接使用的个人 AI 记忆应用。你的助手存下的信息不会消失在某次对话里，而是成为你在 Monica 里的个人记录的一部分。",
                "打开一个联系人。查看一个生活事件。更新一条笔记。找到你拥有的某样东西。更正不再准确的信息。",
                "你不必每次想查自己的信息，都去和 AI 助手对话。Monica 是一个独立的应用，连不连助手都能用。",
            ],
            'closing' => "你的助手可以使用 Monica。但 Monica 是为你而造的。",
            // The drawing: the Maintenance section of the recliner's page, as
            // the application draws it (possessions/maintenance.blade.php).
            'label' => "Monica 中一张躺椅页面的维护部分。躺椅属于家具，放在客厅。记录了两项工作。一次清洁，皮面清洁，费用 \$80：由 Central Perk Upholstery 于 2026 年 9 月 12 日完成，状况从使用过变为几乎全新，下次到期 2027 年 3 月 12 日。一次维修，脚踏维修，费用 \$45：由 Joey Tribbiani 于 2026 年 5 月 2 日完成，状况从损坏变为使用过，没有安排下次日期。",
            'type' => "家具",
            'keptIn' => "存放在",
            'place' => "客厅",
            'item' => "躺椅",
            'title' => "维护",
            'lead' => "这件物品随时间做过的工作，以及每次工作前后的状况。",
            'costLabel' => "费用",
            'parts' => ["执行人", "执行日期", "状况", "下次到期"],
            'records' => [
                ['type' => "清洁", 'title' => "皮面清洁", 'cost' => '$80', 'parts' => [["Central Perk Upholstery", true], ["2026 年 9 月 12 日", true], ["使用过 → 几乎全新", true], ["2027 年 3 月 12 日", true]]],
                ['type' => "维修", 'title' => "脚踏维修", 'cost' => '$45', 'parts' => [["Joey Tribbiani", true], ["2026 年 5 月 2 日", true], ["损坏 → 使用过", true], ["未安排", false]]],
            ],
        ],

        'structure' => [
            'title' => "不只是一份记忆清单。",
            'lead' => "你的生活有结构。你的记忆也应该有。",
            'body' => [
                "Monica 把信息存进有意义的记录里。人与人之间可以有家人关系。生活事件可以涉及好几个人。物品可以有位置、维护记录和借出记录。笔记和清单可以按主题整理有用的信息。",
                "兼容的助手查找信息时，可以取回这些记录，并沿着受支持的关系去了解更多背景。信息有变化时，它可以更新受支持的记录，而不是把同一个事实再添加一个版本。",
                "当你想用自己的方式整理信息时，Monica 还提供可自定义的模板和记录类型。",
            ],
            'label' => "示意图：Chandler Bing 通过一次借出与你的那本《闪灵》相连，并通过参与与感恩节晚餐相连，同时还有 Monica、Rachel 和 Ross",
            'belonging' => "物品",
            'garage' => "存放在冰箱冷冻室",
            'loan' => "借出",
            'dueShort' => "12 月 5 日归还",
            'person' => "联系人",
            'tookPart' => "参与了",
            'withYou' => "和你，以及另外三个人",
            'event' => "生活事件 · 2025 年 11 月 27 日",
            'dinner' => "感恩节晚餐",
            'caption' => "记录在 Monica 里如何相互连接。这是示意图，不是应用的界面。",
            'closing' => "一个为真实生活准备的个人数据库，而不只是一堆聊天摘要。",
        ],

        'retrieval' => [
            'title' => "今天有用，几个月后依然有用。",
            'lead' => "持久的 AI 记忆，在你需要再次用到信息时才显出价值。无论你在准备一场会面、照看家里，还是在做计划，都可以让已连接的助手去查 Monica。",
            'badge' => "示例",
            'ask' => "问",
            'items' => [
                [
                    'title' => "会面之前",
                    'ask' => "查一下 Monica。我上次见 Janice 是什么时候，我们聊了什么？",
                    'body' => "取回之前的生活事件和已有的联系信息，为下一次交谈做准备。",
                ],
                [
                    'title' => "去保养之前",
                    'ask' => "在 Monica 里查一下那辆保时捷的保养记录。上次保养是什么时候？",
                    'body' => "找到已记录的保养日期、费用和下次到期日，不用再翻旧对话。",
                ],
                [
                    'title' => "规划旅行之前",
                    'ask' => "订去巴黎的机票之前，先查一下 Monica 里我的旅行偏好笔记。",
                    'body' => "把你存下的偏好带进一段新对话，即使你用的是另一个兼容的助手。",
                ],
            ],
            'note' => "这些是在相关信息已存入 Monica 之后，你可以提出的请求示例。",
        ],

        'visibility' => [
            'title' => "看清你的 AI 助手到底做了什么。",
            'body' => [
                "把助手连接到你的个人信息，是一个重要的决定。你应该能查看它用这份访问权限做了什么。",
                "Monica 会记录已连接助手发出的调用。你可以查看是哪个助手发出的请求、发生在什么时候、用了哪个工具，以及记录下来的请求和响应（敏感值会被遮盖）。助手调用历史保留 90 天。",
                "你可以单独断开某个助手，或撤销它们的 API 密钥，而不会删除你已存下的信息，也不会断开你的其他助手。",
            ],
            'warningTitle' => "了解你授予的是什么访问权限。",
            'warning' => "已连接的助手通常可以访问你的整个账户，而不是只访问选定的保险库，也不是只读视图。标记为敏感的字段，不会提供给通过 OAuth 登录连接的助手。只连接你信任的助手。",
            'label' => "Monica 的助手调用历史。列出三次调用：ChatGPT 今天 09:14 使用了 list-possession-loans，Claude 昨天 18:02 使用了 create-possession-loan，Claude 昨天 17:58 使用了 search-records。ChatGPT 的那次调用已展开，显示它的请求和响应，其中一个敏感值被遮盖。下方是已连接的助手 Claude 和 ChatGPT，各有一个断开连接按钮。",
            'history' => "助手调用历史",
            'kept' => "最近 90 天",
            'calls' => [
                ['ChatGPT', 'list-possession-loans', "今天 09:14"],
                ['Claude', 'create-possession-loan', "昨天 18:02"],
                ['Claude', 'search-records', "昨天 17:58"],
            ],
            'request' => "请求",
            'response' => "响应",
            'assistants' => "已连接的助手",
            'used' => ["昨天使用过", "今天使用过"],
            'disconnect' => "断开连接",
        ],

        'start' => [
            'title' => "三步连接你的 AI 助手。",
            'lead' => "你不需要自己搭建记忆基础设施。Monica 提供开箱即用的个人信息应用，以及一个远程的 AI 记忆 MCP 服务器。",
            'step' => "第 :number 步",
            'steps' => [
                [
                    'title' => "创建你的 Monica 账户",
                    'body' => "从免费的托管账户开始，或者如果你想自托管，就在自己的基础设施上运行 Monica。",
                ],
                [
                    'title' => "连接你的助手",
                    'body' => "Monica 使用 Model Context Protocol（MCP），这是一个开放标准，让兼容的助手可以与外部应用交互。请按你所用客户端的连接指南操作。支持的连接方式包括 OAuth 登录和 API 密钥。",
                ],
                [
                    'title' => "存下你的第一条记忆",
                    'body' => "让你的助手在 Monica 里存点什么。然后打开 Monica 查看这条记录，或者在另一段对话里让你的助手取回它。",
                ],
            ],
            'starter' => "起步提示词",
            'starterPrompt' => "把 Phoebe 加到 Monica 里，并记录她今晚在 Central Perk 唱了《Smelly Cat》。",
            'clientsTitle' => "在找 ChatGPT 和 Claude 的 AI 记忆吗？",
            'clients' => [
                "Monica 为 ChatGPT、Claude Desktop、Claude Code、Cursor、Codex 和 VS Code 提供连接指南。你可以把多个兼容的远程 MCP 客户端连到同一个账户，并从每一个客户端访问同样的已存信息。",
                "客户端的支持情况、可用的操作和设置要求，取决于助手及其套餐。Monica 使用基于 Streamable HTTP 的远程 MCP，所以客户端必须支持这种传输方式和兼容的认证方式。",
            ],
            'guides' => "阅读 MCP 连接指南",
            'account' => "创建免费账户",
            'clientsLabel' => "有连接指南的客户端",
        ],

        'open' => [
            'title' => "开源的 AI 记忆。由你做主。",
            'lead' => "你选哪个 AI 助手，不该决定你的个人信息存在哪里。",
            'body' => [
                "Monica 以 AGPL-3.0 许可开源。你可以使用托管服务，也可以用 Docker 搭建自己的实例。MCP 服务器在自托管实例上同样可用，所以你可以在自己管理的基础设施上搭建一份自托管的 AI 记忆。",
                "Monica 不运行自己的 AI 模型。它的工作是存储和整理你的信息，并让你连接的兼容助手可以访问。",
                "如果你换了助手或服务商，你存在 Monica 里的信息依然在那里。需要时，再连接另一个兼容的助手。如果你干脆不再用 AI，也仍然可以直接使用 Monica。",
            ],
            'closing' => "助手可以换。你的生活不会。",
            'github' => "在 GitHub 上了解 Monica",
            'selfHosting' => "了解自托管",
        ],

        'compare' => [
            'title' => "Monica 在 AI 记忆的世界里处于什么位置。",
            'lead' => "不同的记忆方式解决不同的问题。Monica 的设计，是让你的个人信息有一个独立于任何单次对话或助手的家。",
            'items' => [
                [
                    'title' => "助手内置的记忆",
                    'body' => "内置记忆可以帮助助手让回答更贴近你。它的表现取决于服务商、设置，以及该助手能获得的信息。Monica 另外提供一个保存个人记录的地方，兼容的助手可以按需访问。",
                ],
                [
                    'title' => "面向开发者的记忆基础设施",
                    'body' => "AI 记忆基础设施通常侧重于帮助开发者构建应用和智能体工作流。Monica 是一个成品的个人信息管理应用，有面向人的界面，也有原生的 MCP 服务器。你不需要自己构建应用就能开始。",
                ],
                [
                    'title' => "Monica 的个人 AI 记忆",
                    'body' => "Monica 把结构化的个人记录、你自己就能使用的界面、多个助手连接，以及助手调用历史结合在一起。它是为想把有用的个人信息独立于任何一家 AI 服务商保存的人设计的。",
                ],
            ],
            'goodToKnow' => "需要了解",
            'notice' => "Monica 是对助手现有记忆的补充。它不会自动导入、替代或同步那份记忆，自己也不会进行自动记忆提取或语义检索。",
        ],

        'faq' => [
            'title' => "关于 AI 记忆的常见问题。",
            'items' => [
                ['q' => "什么是 AI 记忆？", 'a' => "AI 记忆是让助手使用当前对话之外的信息的一种方式。在 Monica 里，这些信息存放在一个独立的个人数据库中。已连接的助手可以把受支持的信息存进去，之后再通过 Monica 的工具取回。"],
                ['q' => "可以跨平台共享 AI 记忆吗？", 'a' => "可以。多个兼容的助手可以连接到同一个 Monica 账户。一个助手存下的信息，另一个助手也可以取回，前提是它有访问权限并使用 Monica 的工具。这与各个助手的内置记忆无关。"],
                ['q' => "可以把 Monica 用作 ChatGPT 或 Claude 的 AI 记忆吗？", 'a' => "Monica 为 ChatGPT 和 Claude，以及其他远程 MCP 客户端提供了连接指南。可用的连接选项和支持的操作，取决于你的助手的能力、配置和订阅。设置说明请查看 MCP 文档。"],
                ['q' => "Monica 会自动记住我告诉助手的一切吗？", 'a' => "不会。Monica 不会读取或监控你的对话。信息是在你的助手调用 Monica 的工具去保存时才会存入。你可以明确要求助手把某件事存进 Monica，或者在回答问题时去查 Monica。至于它会不会自动这样做，取决于助手。"],
                ['q' => "助手可以在 Monica 里存哪些信息？", 'a' => "助手可以创建受支持的记录，例如按姓名创建联系人、家人关系、生活事件、提醒、知识库笔记和清单、物品、借出和位置。目前通过 MCP 有些操作还受限，包括写入电话号码、生日和联系人笔记这类联系信息。这些信息可以直接在 Monica 里管理。"],
                ['q' => "Monica 如何搜索我的个人记忆？", 'a' => "助手可以对受支持的记录使用关键词搜索，查找笔记和清单，并浏览或筛选其他信息。Monica 不提供语义搜索或向量搜索。用哪些工具和搜索词，由助手决定。"],
                ['q' => "什么是 AI 记忆 MCP 服务器？", 'a' => "MCP 服务器开放一些工具，供兼容的 AI 助手调用。Monica 的远程 MCP 服务器让助手可以读取和写入受支持的个人记录，因此 Monica 可以作为助手之外的持久个人记忆。"],
                ['q' => "不用 AI 也能使用 Monica 吗？", 'a' => "可以。Monica 是一个独立的个人信息管理应用。你可以直接创建、查看、编辑和整理记录，不必连接助手。"],
                ['q' => "我可以自托管我的 AI 记忆吗？", 'a' => "可以。Monica 以 AGPL-3.0 许可开源，可以用 Docker 部署在你自己的基础设施上。它的 MCP 服务器在自托管实例上也可用。保护和维护你自己的部署，是你的责任。"],
                ['q' => "Monica 会用我的个人信息训练 AI 模型吗？", 'a' => "Monica 不运行也不训练 AI 模型。已连接的助手取回信息时，这些信息会发送给该助手，适用其服务商的隐私、保留和训练政策。"],
                ['q' => "我能控制助手可以访问哪些信息吗？", 'a' => "你可以单独撤销每个助手的连接。标记为敏感的字段，不会提供给通过 OAuth 登录连接的助手。除此之外，连接通常可以访问整个账户，目前不提供按保险库或只读的访问。"],
                ['q' => "我可以导出我的个人记忆吗？", 'a' => "Monica 支持账户和保险库的 JSON 导出，以及单个联系人的 Markdown 导出。知识库和物品记录目前不包含在账户或保险库的 JSON 导出中。"],
                ['q' => "Monica 的 AI 记忆免费吗？", 'a' => "免费的托管账户包含 MCP 访问，受免费方案的常规限制约束。自托管实例没有 Monica 施加的方案限制。AI 助手的服务商可能有它自己的订阅要求或使用限制。"],
                ['q' => "如果我换了 AI 助手会怎样？", 'a' => "你存在 Monica 里的信息会留在你的账户中。你可以断开之前的助手，连接另一个兼容的助手，不必把 Monica 里的记录迁移到别的记忆系统里。"],
            ],
        ],

        'closing' => [
            'title' => "给你的记忆一个属于它们自己的家。",
            'body' => "把对你重要的人、知识和日常细节放在一个地方。你，以及你选择的兼容 AI 助手，都可以访问。",
            'lead' => "用 Monica 开始建立你的个人 AI 记忆。",
            'cta' => "免费开始",
            'selfHosting' => "了解自托管",
            'note' => "开源。不依赖任何单一的 AI 助手。为人而造。",
        ],
    ],

    /**
     * The personal data management page, "Your life. Beautifully organized."
     * (route key `personalData`). English only, like the AI memory page.
     *
     * Its examples come from the demo vault, as the homepage's do, with the
     * same dry asides: Chandler, Joey's recliner Rosita, Monica's hall
     * closet, the Moist Maker. The drawings of the product each carry a
     * `label` that a screen reader reads instead of the drawing itself.
     */
    'personalData' => [
        'hero' => [
            'eyebrow' => "有人情味的个人信息管理",
            'title' => "你的生活，井井有条，赏心悦目。",
            'lede' => "你在乎的人。你拥有的东西。值得记住的时刻。还有那些总在需要时找不到的有用细节。",
            'body' => "Monica 把你的个人信息汇集到一个地方，让你的生活不必散落在各处的笔记、表格和你的记忆里。",
            'cta' => "免费开始",
            'organize' => "看看你能整理什么",
            'note' => "开源 · 可自托管 · 为日常生活而造",
        ],

        'problem' => [
            'eyebrow' => "是不是很熟悉？",
            'title' => "那些小细节，到处都是。",
            'body' => "你知道自己把那条推荐记下来了。在某个地方。洗衣机的型号可能在一封旧邮件里。总是给你送咖啡的那个人叫什么，埋在某段对话里（他叫 Gunther）。至于那个重要时刻的日期？你很确定自己记得。",
            'lead' => "你的生活里有很多值得保存的信息，却很少有一套好用的归档方式。",
            'items' => [
                ['title' => "散落在太多地方", 'body' => "笔记、消息、表格和快被遗忘的文档，各自装着你生活的不同片段。"],
                ['title' => "事后很难找到", 'body' => "存下来很容易。难的是六个月后还记得存在哪里。"],
                ['title' => "看不到全貌", 'body' => "一个名字、一个地点和一件事，在现实中可能彼此相关，存起来却各是各的。"],
            ],
            'closing' => "你不需要另一套复杂的系统。",
            'closingMuted' => "你需要一个说得通的个人空间。",
        ],

        'organize' => [
            'eyebrow' => "真实生活的一站式空间",
            'title' => "重要的一切，各归其位。",
            'lead' => "Monica 是围绕人们真正想记住的东西构建的个人信息管理软件。不只是文档，不只是任务。而是你的人、你的知识、你的物品，以及把它们连在一起的时刻。",
            'example' => "示例",
            'crm' => "了解 Monica 的个人 CRM",
            // The glyph, the colour and the drawing of each item are in the
            // template, in this order.
            'items' => [
                [
                    'title' => "人和关系",
                    'body' => "即使生活忙碌，也让生活里的人离你很近。保存联系信息，理解家人和其他关系，回顾你们共度的时刻。",
                    'example' => "记住是谁介绍你们认识的、你们怎么认识的，以及 Ross 和 Rachel 当时是“暂时分开”。",
                ],
                [
                    'title' => "笔记和知识",
                    'body' => "给有用的信息一个家。创建文件夹，用 Markdown 写笔记，为推荐、想法、参考资料和你想回头再看的东西建立清单。",
                    'example' => "列一份想读的书单，再留一份真正重要的感恩节剩菜食谱。",
                ],
                [
                    'title' => "物品和购买",
                    'body' => "记录你拥有什么、放在哪里、花了多少钱，以及它随时间发生了什么。记录购买、维护、保险信息，以及你借给别人的东西。",
                    'example' => "查到那张躺椅花了多少钱，或者想起是谁借走了你的节日犰狳服装。",
                ],
                [
                    'title' => "时刻和里程碑",
                    'body' => "记住的不只是日期。留下一份个人的历史：拜访、旅行、谈话、成就和重要的变化，以及其中的人。",
                    'example' => "回顾那次伦敦之旅，或者自那只火鸡扣在 Monica 头上的那次以来的每一个感恩节。",
                ],
                [
                    'title' => "地点和空间",
                    'body' => "整理你的物品放在哪里，从一所房子到一个房间、一个柜子或一层架子。东西挪了地方，就更新它的位置。",
                    'example' => "知道圣诞彩灯放在哪一层架子上，也知道走廊储物柜里到底有什么。",
                ],
                [
                    'title' => "日期和提醒",
                    'body' => "有些事值得在合适的时候被记起。设置与联系人相关的一次性或周期性提醒，并记下你有没有做到。",
                    'example' => "每年 5 月 5 日记得 Rachel 的生日，或者每个周日记得给你妈妈回电话。",
                ],
            ],
            // What the six small drawings show.
            'screens' => [
                'contact' => [
                    'label' => "Monica 中 Chandler Bing 的页面。他住在对门的 19 号公寓，你们是他搬进来时认识的，他的室友是 Joey Tribbiani，他的伴侣是 Monica Geller。他最近的生活事件是 11 月 27 日的感恩节晚餐。",
                    'name' => "Chandler Bing",
                    'meta' => "19 号公寓，对门",
                    'rows' => [
                        ['who' => "Joey Tribbiani", 'what' => "室友"],
                        ['who' => "Monica Geller", 'what' => "伴侣"],
                    ],
                    'last' => "上次见面是在感恩节晚餐",
                ],
                'knowledge' => [
                    'label' => "Monica 中名为“20 号公寓”的知识库文件夹，里面有一篇名为 The Moist Maker 的笔记和一份名为“想读的书”的清单。",
                    'folder' => "20 号公寓",
                    'entries' => [
                        ['kind' => 'note', 'name' => "The Moist Maker", 'meta' => "笔记 · 昨天编辑"],
                        ['kind' => 'list', 'name' => "想读的书", 'meta' => "清单 · 2 项"],
                        ['kind' => 'note', 'name' => "感恩节座位表", 'meta' => "笔记 · 1997 年编辑"],
                    ],
                ],
                'possession' => [
                    'label' => "Monica 中一张名为 Rosita 的躺椅，放在客厅，对着电视，购买价 \$1,200。它从未借出。",
                    'name' => "Rosita",
                    'kind' => "躺椅",
                    'facts' => [['位置', "客厅"], ['价格', '$1,200']],
                    'status' => "从未借出",
                ],
                'event' => [
                    'label' => "Monica 中的一个生活事件：11 月 27 日的感恩节晚餐，参加的有 Monica、Rachel、Ross 和 Chandler。它的笔记写着火鸡来晚了。",
                    'name' => "感恩节晚餐",
                    'date' => "11 月 27 日",
                    'note' => "火鸡来晚了。Ross 也是。",
                ],
                'places' => [
                    'label' => "Monica 中嵌套的位置：20 号公寓，然后是走廊储物柜，里面放着节日犰狳服装和圣诞彩灯。",
                    'path' => ["20 号公寓", "走廊储物柜"],
                    'items' => ["节日犰狳服装", "圣诞彩灯", "别问"],
                ],
                'reminder' => [
                    'label' => "Monica 中 Rachel Green 生日的提醒，每年 5 月 5 日，通过邮件发送，下一次在 23 天后。",
                    'who' => "Rachel Green",
                    'what' => "生日",
                    'when' => "每年 5 月 5 日",
                    'next' => "23 天后",
                    'channel' => "通过邮件",
                ],
            ],
        ],

        'questions' => [
            'eyebrow' => "为你真正会问的问题而造",
            'title' => "那些你会庆幸自己留住的小事。",
            'lead' => "一个好的个人整理应用，不是为了收集信息而收集信息。而是在日常生活需要答案时，你能找到它。",
            'items' => [
                ['q' => "谁拿了我的节日犰狳服装？", 'a' => "让你的物品和借出记录与借走它们的人关联起来，包括预计归还的日期。"],
                ['q' => "我上次和 Gunther 聊天是什么时候？", 'a' => "回顾共度的时刻，更清楚地看到你们是怎样保持联系的。即使对方主要是给你送咖啡的人。"],
                ['q' => "桌上足球台我们花了多少钱？", 'a' => "把购买记录、识别信息和维护历史，与物品本身放在一起。"],
                ['q' => "我把那些伦敦的推荐放哪儿了？", 'a' => "把想法和参考笔记存进有条理的知识库文件夹和清单，需要时随时可用。"],
            ],
            'closing' => "不是每个细节都得装在你脑子里。有些事只是需要一个可靠的地方待着。",
        ],

        'structure' => [
            'eyebrow' => "是一个真正的应用，不只是一个笔记文件夹",
            'title' => "给你的信息一些结构。",
            'body' => [
                "普通的笔记有用。但一个人不只是一条笔记。一件物品不只是表格里的一行。一件有意义的事，往往也不止涉及一个人。",
                "Monica 给不同种类的个人信息各自的位置。关系把人连起来。生活事件有日期和参与者。物品可以带有购买记录、保险记录、维护历史和位置。",
            ],
            'closing' => "正是这种结构，让 Monica 成为一个个人数据库，而不只是另一个写东西的地方。",
            'caption' => "一个放细节、历史，以及你生活中这些事物背后的背景的地方。",
            'benefits' => [
                ['title' => "相互关联的信息", 'body' => "让人、经历、物品和地点之间的关系，待在它们本来所属的地方。"],
                ['title' => "有用的历史", 'body' => "看看随时间发生了什么变化，从和朋友共度的时间，到对一件物品做过的维护。"],
                ['title' => "说得通的细节", 'body' => "使用适合你所保存信息的字段和记录类型。"],
            ],
            // The large drawing: the Timeline section of Rosita's page, as
            // the application draws it (possessions/timeline.blade.php).
            'screen' => [
                'label' => "Monica 中一张名为 Rosita 的躺椅的时间线，这是一件家具，放在客厅，标签为“不外借”。旁边是它页面的各个部分：概览、时间线、交易、保险、估值、来历、维护、借出、位置和文档。时间线汇集了四条记录。2001 年，脚踏由 Joey 修好。1998 年，Rosita 放在 19 号公寓的客厅里（现在仍在那里），投保了意外损坏险，并与另一张躺椅一起购买。",
                'type' => "家具",
                'keptIn' => "存放在",
                'place' => "客厅",
                'name' => "Rosita",
                'tag' => "不外借",
                'sections' => [
                    'overview' => "概览",
                    'timeline' => "时间线",
                    'transactions' => "交易",
                    'insurance' => "保险",
                    'valuations' => "估值",
                    'provenance' => "来历",
                    'maintenance' => "维护",
                    'loans' => "借出",
                    'locations' => "位置",
                    'documents' => "文档",
                ],
                'title' => "时间线",
                'lead' => "这件物品发生过的一切，从它的其他部分汇集而来，并按顺序排好。",
                'all' => "全部",
                'groups' => [
                    [
                        'year' => '2001',
                        'count' => "1 条记录",
                        'entries' => [
                            ['section' => 'maintenance', 'noun' => "维护", 'date' => "2001 年 5 月 2 日", 'title' => "脚踏维修", 'detail' => "Joey Tribbiani · 拉杆卡在半途"],
                        ],
                    ],
                    [
                        'year' => '1998',
                        'count' => "3 条记录",
                        'entries' => [
                            ['section' => 'locations', 'noun' => "位置", 'date' => "1998 年 3 月 14 日", 'badge' => "现在在这里", 'title' => "存放在 19 号公寓 › 客厅", 'detail' => "对着电视"],
                            ['section' => 'insurance', 'noun' => "保险", 'date' => "1998 年 3 月 14 日", 'title' => "由 Greenwich Mutual 承保", 'detail' => "意外损坏"],
                            ['section' => 'transactions', 'noun' => "交易", 'date' => "1998 年 3 月 14 日", 'badge' => "获得", 'title' => "购买", 'detail' => "与另一张躺椅一起购买"],
                        ],
                    ],
                ],
            ],
        ],

        'yours' => [
            'eyebrow' => "你的生活不是一个模板",
            'title' => "用你自己的方式整理信息。",
            'body' => "有些人想记录家人和朋友。另一些人更在意自己的家、收藏，或多年积累的知识。",
            'closing' => "Monica 为这一切都留出了空间。",
            'items' => [
                ['title' => "把生活的不同部分分开", 'body' => "用保险库在你的账户里整理不同的领域，比如个人生活或工作。"],
                ['title' => "保留重要的字段", 'body' => "选择模板并自定义字段，来匹配你要管理的人和其他记录。"],
                ['title' => "创建你自己的记录种类", 'body' => "你的信息并不总是适合某个预设的类别。Monica 支持自定义记录类型，让你围绕自己在乎的事，塑造一个个人信息管理工具。"],
            ],
            // The drawing: Settings, Contacts and more, as the application
            // draws it (settings/account/entity-types/index.blade.php).
            'screen' => [
                'label' => "Monica 中的“联系人及更多”设置。除了内置的、有 84 份档案的联系人，这个账户还创建了三种自己的档案：有 2 份档案的公寓、有 2 份档案的宠物，以及有 3 份档案的节日服装。每一种都可以编辑，拖动各行可以改变它们在保险库导航中的顺序。",
                'title' => "联系人及更多",
                'description' => "你已经有了人的档案。还可以为你想记住的宠物、公司或物品，创建其他种类的档案。每种档案都有自己的信息，分成不同部分，就像联系人一样。",
                'create' => "创建档案类型",
                'createNote' => "先从一个种类开始，比如“宠物”。之后再添加具体的宠物，比如“Garfield”。",
                'list' => "你的档案类型",
                'listNote' => "拖动一行，改变它在保险库导航中的顺序。",
                'contacts' => "联系人",
                'builtIn' => "内置",
                'contactsCount' => "84 份档案",
                'locked' => "无法删除",
                'edit' => "编辑",
                'types' => [
                    ['name' => "公寓", 'count' => "2 份档案"],
                    ['name' => "宠物", 'count' => "2 份档案"],
                    ['name' => "节日服装", 'count' => "3 份档案"],
                ],
            ],
        ],

        'knowledge' => [
            'eyebrow' => "给你所知道的一个家",
            'title' => "留下值得回头再看的知识。",
            'lead' => "一份喜欢的书单。照看房子的说明。一份想去的地方的合集。几条你希望多年前就存下的笔记。",
            'body' => [
                "个人知识管理不一定意味着搭建一个繁复的第二大脑。有时，它只是把一件事写下来，放在你知道以后找得到的地方。",
                "用 Monica，你可以把笔记和清单整理进文件夹，搜索它们的内容，并把参考信息与你个人生活的其余部分放在一起。",
            ],
            'cta' => "免费开始",
            'caption' => "你的笔记和清单，整理得井然有序，需要时就能派上用场。",
            'screen' => [
                'label' => "Monica 的知识库区域。侧边栏列出四个文件夹：20 号公寓、食谱、旅行灵感和书。“食谱”文件夹已打开，里面有一篇名为 The Moist Maker 的笔记，是 Ross 的感恩节剩菜三明治食谱，还有一份名为“想读的书”的清单，《小妇人》已勾选，《闪灵》还没有。",
                'title' => "知识库",
                'folders' => ["20 号公寓", "食谱", "旅行灵感", "书"],
                'open' => 1,
                'note' => "The Moist Maker",
                'noteMeta' => "笔记 · Markdown",
                'noteBody' => [
                    "Ross 的感恩节剩菜三明治。",
                    "火鸡肉、蔓越莓酱，中间再夹一片吸饱肉汁的面包。",
                    "不要把它放在办公室的冰箱里。",
                ],
                'list' => "想读的书",
                'listItems' => [
                    ['done' => true, 'name' => "《小妇人》"],
                    ['done' => false, 'name' => "《闪灵》（放在冷冻室里）"],
                ],
            ],
        ],

        'ownership' => [
            'eyebrow' => "你的信息，你来选",
            'title' => "个人信息，值得一个属于个人的家。",
            'lead' => "你的数字生活是你的。你用来整理它的软件，应该尊重这一点。",
            'body' => [
                "Monica 是一个开源的个人信息管理工具，你可以把它当作托管应用来用，也可以自托管在你自己的基础设施上。",
                "Monica 里没有内置广告，应用在没有 AI 助手的情况下也能用。你完全可以直接打开它，查看你的信息，自己保持更新。",
            ],
            'github' => "了解这个开源项目",
            'items' => [
                ['title' => "开源", 'body' => "查看代码、为项目做贡献，或者自己运行一个实例。"],
                ['title' => "可自托管", 'body' => "想自己管理基础设施？Monica 可以运行在你的服务器上。"],
                ['title' => "为人而造", 'body' => "直接使用应用，不必依赖聊天机器人或自动化来访问你的信息。"],
            ],
        ],

        'ai' => [
            'eyebrow' => "当你想要一点帮助时",
            'title' => "你的信息也可以和 AI 配合。",
            'body' => [
                "Monica 本身就很有用。但如果你使用 AI 助手，也可以通过 Model Context Protocol（MCP），把兼容的助手连接到你的 Monica 账户。",
                "让助手存一条笔记、记录一个生活事件，或查找你已经存下的东西。这些信息仍留在 Monica 里，你可以自己查看和管理。",
            ],
            'link' => "了解个人 AI 记忆",
        ],

        'faq' => [
            'title' => "你可能想知道的几件事。",
            'items' => [
                ['q' => "什么是个人信息管理软件？", 'a' => "个人信息管理软件帮助你存储、整理和查找与日常生活相关的信息。Monica 把联系人、关系、笔记、清单、物品、生活事件、位置和提醒汇集在一个应用里。"],
                ['q' => "Monica 和笔记应用有什么不同？", 'a' => "笔记应用是写东西的好地方。Monica 还给人、关系、事件和物品各自有结构化的记录。你仍然可以在 Monica 的知识库里创建普通的笔记和清单。"],
                ['q' => "Monica 能帮我整理个人生活吗？", 'a' => "能。你可以把 Monica 当作个人整理应用，来记录人、重要时刻、有用的知识、物品、位置和提醒。记录什么、怎么整理，由你决定。"],
                ['q' => "Monica 是个人数据库吗？", 'a' => "是。Monica 把不同类型的个人信息存成结构化的记录，而不是把一切当作一份文本文档。它还支持可自定义的模板和自定义记录类型。"],
                ['q' => "我可以用 Monica 做个人知识管理吗？", 'a' => "可以。Monica 包含知识库文件夹、Markdown 笔记和清单。你可以用它们整理参考信息、推荐、说明，以及其他你想记住的东西。"],
                ['q' => "我可以记录自己的物品吗？", 'a' => "可以。Monica 可以记录物品、购买交易、维护、保险信息、借给别人的记录，以及物品存放的位置。"],
                ['q' => "我可以用 Monica 记录朋友和家人吗？", 'a' => "可以。Monica 起初是个人 CRM，人和关系仍然是这个应用的核心。你可以保存联系信息、关系、提醒和生活事件。"],
                ['q' => "Monica 是家庭整理工具，还是共享的家庭账户吗？", 'a' => "Monica 可以存放关于你的家庭和你生活里的人的信息，但目前一个账户是为一个人设计的。它不提供多人共享的家庭工作空间。"],
                ['q' => "Monica 是开源的吗？", 'a' => "是。Monica 以 AGPL-3.0 许可开源。"],
                ['q' => "我可以自托管 Monica 吗？", 'a' => "可以。你可以在自己的基础设施上运行 Monica，而不使用托管服务。自托管需要你自己管理服务器及其安全、备份和配置。"],
                ['q' => "使用 Monica 需要 AI 助手吗？", 'a' => "不需要。Monica 是一个完整的应用，你可以直接使用。连接 AI 是可选的。"],
                ['q' => "我可以把 ChatGPT 或 Claude 连接到 Monica 吗？", 'a' => "Monica 包含 MCP 服务器，并为兼容的 AI 客户端提供连接指南，包括 ChatGPT 和 Claude。是否可用可能取决于客户端及其套餐。详情请见 AI 记忆页面和 MCP 文档。"],
                ['q' => "Monica 免费吗？", 'a' => "Monica 提供有限制的免费托管档，也有付费选项。你还可以自托管这个开源软件。方案详情请见价格页面。"],
                ['q' => "Monica 会自动导入我所有的联系人和文档吗？", 'a' => "不会。Monica 目前不提供从 Google 通讯录、Apple 通讯录、CSV 文件或任意文档库的通用导入。你可以直接输入信息，并支持某些 Monica 格式的导入。"],
            ],
        ],

        'closing' => [
            'eyebrow' => "把重要的东西放在身边",
            'title' => "一个放下你所有不想忘记的东西的地方。",
            'body' => "你的生活由人、地点、物品、时刻和无数的小细节组成。它们值得的，不止是几条散落的笔记。",
            'lead' => "在 Monica 里，给它们一个家。",
            'cta' => "免费开始",
            'crm' => "了解 Monica 的个人 CRM",
            'note' => "开源 · 可自托管 · 为人而造",
        ],
    ],

    /**
     * The MCP server page, "Your personal data, connected to your AI agents"
     * (route key `mcpServer`). English only, like the AI memory page. The
     * technical sibling of that page: endpoints, tools, authentication.
     *
     * Its examples come from the demo vault, as the homepage's do: the
     * reader lent Ross their Holiday Armadillo costume, due back on 28
     * December. Keep the object, the person and the date in step between
     * `workflow` and `visibility`. Tool names are the product's own.
     */
    'mcpServer' => [
        'endpoint' => "https://my.monicahq.com/mcp",
        'selfHosted' => "https://YOUR-MONICA-HOST/mcp",
        'copy' => "复制",
        'copied' => "已复制",
        'costume' => "节日犰狳服装",
        'borrower' => "Ross Geller",
        'due' => "12 月 28 日前归还",

        'hero' => [
            'eyebrow' => "内置 Model Context Protocol 支持",
            'title' => "你的个人数据，连接你的 AI 智能体。",
            'lede' => "Monica 自带一个内置的 MCP 服务器，让兼容的 AI 助手可以处理你的个人数据，从联系人和关系，到知识、提醒、生活事件和物品。",
            'body' => "一个真正的个人数据库。一个真正的应用。还有一条通过 Model Context Protocol 直达你的智能体的连接。",
            'connect' => "连接 AI 助手",
            'start' => "免费开始",
            'tools' => "了解 MCP 工具",
            'trust' => ["开源", "远程 MCP", "OAuth 和 API 密钥", "可自托管"],
            'endpointLabel' => "托管版 MCP 端点",
        ],

        'unlocks' => [
            'title' => "给你的 AI 助手一些有用的东西去处理。",
            'body' => [
                "Model Context Protocol（MCP）让 AI 助手可以调用其他应用开放的工具。",
                "有了 Monica，这些工具直接连到你的个人信息。助手可以查找一段关系、创建一个有日期的生活事件、维护一条知识笔记、记录一件物品，或查看即将到来的提醒，而 Monica 把这些记录保存在一个你自己也能访问的结构化数据库里。",
            ],
            'closing' => "不用另外搭建记忆服务。不用维护自定义的桥接。MCP 服务器就是 Monica 的一部分。",
            'flow' => [
                ['title' => "你的 AI 助手", 'body' => "在它决定这样做的时候，发出 MCP 工具请求。"],
                ['title' => "Monica MCP 服务器", 'body' => "验证身份，并执行受支持的操作。"],
                ['title' => "你的 Monica 数据", 'body' => "存储并返回结构化的个人记录。"],
            ],
        ],

        'workflow' => [
            'title' => "从一段对话，到之后还能找到的东西。",
            'steps' => [
                [
                    'title' => "问你的助手",
                    'prompt' => "我把节日犰狳服装借给 Ross 了。他 12 月 28 日还。把这个存到 Monica 里。",
                    'body' => "你的助手使用 Monica 的 MCP 工具来记录这次借出，把它关联到那个人，并跟踪预计归还的日期。",
                    'caption' => "一句自然语言的请求，变成一次结构化的 MCP 操作。",
                    'label' => "与 Claude 的一段对话，已连接 Monica。你请 Claude 记下：你把节日犰狳服装借给了 Ross，12 月 28 日归还。Claude 调用 Monica 的 create-possession-loan 工具，并确认借出已保存。",
                    'reply' => "已保存。Monica 显示这件服装借给了 Ross，12 月 28 日归还。",
                ],
                [
                    'title' => "在 Monica 里查看",
                    'prompt' => null,
                    'body' => "在 Monica 里打开这件服装，和这件物品的其他信息一起，看到它的借出历史。",
                    'caption' => "同一条记录，在 Monica 里可见，也可以编辑。",
                    'label' => "Monica 中节日犰狳服装的页面，存放在走廊储物柜里。它的借出部分显示这件服装借给了 Ross Geller，12 月 28 日归还，另有一次更早借给 Ross 的记录，已在去年归还。",
                    'reply' => null,
                ],
                [
                    'title' => "之后再问",
                    'prompt' => "查一下 Monica。我的犰狳服装在谁手里，我该什么时候拿回来？",
                    'body' => "助手读取 Monica 的记录，返回你存下的详细信息。",
                    'caption' => "你的助手可以在之后的对话里取回这些信息。",
                    'label' => "与 ChatGPT 的一段新对话，已连接 Monica。你问你的犰狳服装在谁手里。ChatGPT 调用 Monica 的 list-possession-loans 工具，回答说在 Ross 手里，12 月 28 日归还，而且他以前也借过。",
                    'reply' => "在 Ross 那里，12 月 28 日归还。这已经是连续第二年了。",
                ],
            ],
            'closet' => "存放在走廊储物柜",
            'loans' => "借出",
            'onLoan' => "已借出",
            'returned' => "去年 1 月已归还",
            'connected' => "已连接 Monica",
            'closing' => "助手负责对话。",
            'closingMuted' => "Monica 负责记录。",
        ],

        'tools' => [
            'title' => "236 个 MCP 工具。一个个人数据库。",
            'lead' => "Monica 开放了 236 个已注册的 MCP 工具，涵盖个人信息、关系、知识、日常事件和你拥有的东西。智能体可以通过与 Monica 的 JSON API 相同的应用规则，执行受支持的操作。",
            // The glyph and the colour of each card are in the template.
            'items' => [
                [
                    'title' => "人和关系",
                    'body' => "查找联系人、读取他们的档案、按姓名创建联系人，并管理他们之间的联系。",
                    'prompt' => "Ross 和谁有亲戚关系？说简短点，他已经结过三次婚了。",
                    'names' => ['search-records', 'get-contact-markdown', 'create-contact-relationship'],
                ],
                [
                    'title' => "生活事件和历史",
                    'body' => "记录通话、会面、旅行、里程碑和重要时刻，之后再取回详情。",
                    'prompt' => "记录我和 Phoebe 在 Central Perk 喝咖啡，她还唱了一首关于猫的新歌。",
                    'names' => ['create-life-event', 'list-life-events', 'get-life-event'],
                ],
                [
                    'title' => "知识和笔记",
                    'body' => "创建和更新 Markdown 笔记，整理文件夹，维护值得保存的信息清单。",
                    'prompt' => "把 Moist Maker 的食谱存进我的“食谱”笔记。",
                    'names' => ['create-knowledge-note', 'search-knowledge', 'update-knowledge-note'],
                ],
                [
                    'title' => "物品",
                    'body' => "记录购买、维护、保险记录、位置和借出。",
                    'prompt' => "记录 Rosita 的脚踏今天修好了。别告诉 Joey 是谁弄坏的。",
                    'names' => ['create-possession-maintenance-record', 'list-possessions'],
                ],
                [
                    'title' => "提醒",
                    'body' => "创建周期性或一次性的提醒，查看即将到来的日期，并记录你有没有记得。",
                    'prompt' => "提醒我每天早上喂小鸡和小鸭。",
                    'names' => ['create-contact-reminder', 'list-vault-reminder-occurrences'],
                ],
                [
                    'title' => "自定义结构",
                    'body' => "定义并使用自定义实体类型、模板和结构化字段，反映你整理生活的方式。",
                    'prompt' => "为我的节日服装创建一个记录类型。",
                    'names' => ['create-entity', 'create-entity-type'],
                ],
            ],
            'stats' => [
                ['value' => "236", 'label' => "个已注册的 MCP 工具"],
                ['value' => "Streamable HTTP", 'label' => "远程传输"],
                ['value' => "OAuth + API 密钥", 'label' => "连接方式"],
                ['value' => "一个账户", 'label' => "可在多个助手之间共用"],
            ],
            'docs' => "浏览完整的 MCP 文档",
        ],

        'connect' => [
            'title' => "用 OAuth 或 API 密钥连接。",
            'lead' => "Monica 的远程 MCP 服务器支持两种认证方式，你可以通过交互式的授权流程连接，也可以为面向开发者的客户端配置一个专用密钥。",
            'endpoint' => "端点",
            'firstPrompt' => "第一条提示词",
            'oauth' => [
                'eyebrow' => "方式 A · OAuth",
                'title' => "无需复制密钥就能连接。",
                'body' => "对于支持交互式 OAuth 流程的 MCP 客户端，添加 Monica 的 MCP 端点，登录你的账户，并批准这次连接。",
                'steps' => [
                    "在你助手的连接器设置里，添加 Monica 的远程 MCP 端点。",
                    "出现提示时，登录 Monica。",
                    "核对应用名称和重定向目的地。",
                    "批准访问，然后试一个只读的查询。",
                ],
                'prompt' => "列出我的 Monica 保险库。",
                'caption' => "每个连接，都通过 Monica 授权。",
                'screen' => [
                    'label' => "Monica 的授权界面。Claude 请求连接到你的 Monica 账户，并将重定向到 claude.ai。两个按钮：拒绝和允许。",
                    'title' => "Claude 想要连接到你的 Monica 账户",
                    'body' => "它将能够通过 Monica 的 MCP 工具，读取和修改你账户中的记录。",
                    'redirect' => "重定向到",
                    'host' => "claude.ai",
                    'deny' => "拒绝",
                    'allow' => "允许",
                ],
            ],
            'key' => [
                'eyebrow' => "方式 B · API 密钥",
                'title' => "适用于开发者工具和自定义 MCP 客户端。",
                'body' => "在 Monica 的账户设置里，为你的助手创建一个专用的 API 密钥。按你所选客户端的说明，把这个密钥配置为远程 MCP 端点的 Bearer 凭据。",
                'header' => "Authorization 请求头示意",
                'headerNote' => "这是 HTTP 请求头的概念示意，不是通用的、可直接复制粘贴的客户端配置。具体语法取决于客户端。",
                'prompt' => "在我的“个人”保险库里找到 Gunther。",
                'caption' => "每个助手一个密钥，各自可单独撤销。",
                'screen' => [
                    'label' => "Monica 的 API 密钥设置。列出两个密钥：“我的 AI 助手”，今天创建，一分钟前使用过；以及“工作笔记本上的 Cursor”，10 月创建。每个都有一个撤销按钮。",
                    'title' => "API 密钥",
                    'keys' => [
                        ['name' => "我的 AI 助手", 'meta' => "今天创建 · 一分钟前使用"],
                        ['name' => "工作笔记本上的 Cursor", 'meta' => "10 月 12 日创建 · 昨天使用"],
                    ],
                    'revoke' => "撤销",
                    'create' => "创建密钥",
                ],
            ],
            'selfHosted' => "用你自己的服务器？把托管版端点换成",
            'guides' => "阅读分步连接指南",
        ],

        'clients' => [
            'title' => "带上你已经在用的助手。",
            'body' => "Monica 使用 Model Context Protocol，而不是绑定某一家 AI 服务商的专有集成。它可以连接到兼容的远程 MCP 客户端，文档里包含以下客户端的设置说明：",
            'label' => "有连接指南的客户端",
            'note' => "不同客户端配置 MCP 服务器的方式不同，访问权限也可能取决于客户端或订阅方案。请按照适合你的设置的指南操作。",
            'cta' => "查看客户端设置说明",
        ],

        'structured' => [
            'title' => "给你的智能体的，不只是一堆文字。",
            'body' => [
                "Monica 把信息存进反映日常生活的记录里。人有关系和经历。生活事件有日期和参与者。物品可以有购买记录、维护记录、位置和借出记录。知识存放在笔记、文件夹和清单里。",
                "这样的结构，让你的助手有具体的信息可以查找和更新，也让你有一个熟悉的界面，自己来查看。",
                "助手可以找到一个人，以 Markdown 打开他更完整的档案，沿着他的关系查看，读取他的生活事件，并返回对应 Monica 页面的链接。",
            ],
            'callout' => "结构化的个人数据，人和 AI 助手都能使用。",
            'caption' => "结构化的记录，不会被锁在聊天里。",
            'screen' => [
                'label' => "Monica 中 Ross Geller 的页面。他的关系：Monica Geller，妹妹；Rachel Green，关系复杂；Emma，女儿。他的生活事件：2001 年成为古生物学教授，以及 1999 年在拉斯维加斯的第三次婚礼。他借走了你的节日犰狳服装。",
                'name' => "Ross Geller",
                'meta' => "古生物学家 · 朋友",
                'relationships' => "关系",
                'rows' => [
                    ['who' => "Monica Geller", 'what' => "妹妹"],
                    ['who' => "Rachel Green", 'what' => "关系复杂"],
                    ['who' => "Emma Geller-Green", 'what' => "女儿"],
                ],
                'events' => "生活事件",
                'entries' => [
                    ['what' => "成为古生物学教授", 'when' => "2001"],
                    ['what' => "在拉斯维加斯结婚（第三次）", 'when' => "1999"],
                ],
                'has' => "借走了你的节日犰狳服装",
            ],
        ],

        'visibility' => [
            'title' => "知道你的智能体访问了什么。",
            'lead' => "当你把助手连接到个人信息时，可见性很重要。",
            'body' => [
                "Monica 提供专门的 MCP 历史，显示已连接助手发出的工具调用。你可以查看助手、操作、结果，以及历史中可用的请求和响应详情。",
                "每个已连接的助手都可以单独断开。撤销一个连接，不会抹去已经存在 Monica 里的信息，也不会断开你的其他助手。",
            ],
            'points' => [
                "查看最长 90 天的 MCP 调用历史。",
                "按助手、日期、结果和工具分组并筛选操作。",
                "撤销单个 OAuth 连接或 API 密钥。",
                "把选定的模板字段标记为敏感；通过 OAuth 连接的助手无法读取这些字段的值。",
            ],
            'warning' => "已连接的助手可以访问整个账户。Monica 目前不提供只读或按保险库的 MCP 权限。批准每个连接之前，请先检查。",
            'caption' => "查看你的助手发出的调用，并逐个断开它们。",
            'screen' => [
                'label' => "Monica 的 MCP 调用历史，筛选为最近 7 天。共四次调用：ChatGPT 今天 09:14 使用了 list-possession-loans，Claude 昨天 18:02 使用了 create-possession-loan，Cursor 昨天 11:30 使用了 search-knowledge，Claude 周一使用了 get-contact-markdown，失败了。第一次调用已展开，其中一个敏感值被遮盖。",
                'title' => "MCP 历史",
                'filters' => ["所有助手", "最近 7 天", "所有结果"],
                'calls' => [
                    ['ChatGPT', 'openai', 'list-possession-loans', "今天 09:14", true],
                    ['Claude', 'claude', 'create-possession-loan', "昨天 18:02", true],
                    ['Cursor', 'cursor', 'search-knowledge', "昨天 11:30", true],
                    ['Claude', 'claude', 'get-contact-markdown', "周一 22:47", false],
                ],
                'request' => "请求",
                'response' => "响应",
                'failed' => "失败",
            ],
        ],

        'reference' => [
            'title' => "建立在开放协议之上。为你的环境做好准备。",
            'lead' => "Monica 通过 HTTPS 开放一个使用 Streamable HTTP 的远程 MCP 端点。MCP 工具沿用 Monica 现有的应用 API 行为和账户规则，所以你处理的，就是你在网页应用里看到的同一批个人记录。",
            'head' => ["能力", "Monica MCP 服务器"],
            'rows' => [
                ["协议", "Model Context Protocol（MCP）"],
                ["传输", "基于 HTTPS 的远程 Streamable HTTP"],
                ["端点", "托管版或自托管 Monica 实例上的 /mcp"],
                ["认证", "OAuth 或 Bearer API 密钥"],
                ["工具目录", "236 个已注册的工具"],
                ["MCP 原语", "只有工具；没有公开的 MCP 资源或提示词"],
                ["数据", "人、关系、生活事件、提醒、笔记、清单、物品、地点等"],
                ["托管版请求限制", "每个连接每分钟 60 次 MCP 调用"],
                ["自托管", "可用；应用不设 MCP 速率限制"],
                ["文档", "/docs/mcp 和 /docs/mcp.md"],
            ],
            'hosted' => "远程 MCP 端点",
            'pattern' => "自托管端点格式",
            'note' => "Monica 不是 MCP 框架，也不是自动提取记忆的服务。助手自己决定何时调用工具，以及发送什么信息。",
            'docs' => "打开 MCP 文档",
            'github' => "了解开源代码",
        ],

        'selfHosting' => [
            'title' => "你的服务器。你的个人数据。你来选。",
            'body' => [
                "Monica 以 AGPL-3.0 许可开源，可以自托管。在你控制的基础设施上运行个人数据库及其内置的 MCP 服务器，或者使用 Monica 的托管服务，连接到它的远程端点。",
                "免费托管账户和自托管安装都可使用同样的核心 MCP 集成。如果你自托管，服务器的部署、安全、备份和可用性由你负责。",
            ],
            'cta' => "了解自托管",
        ],

        'compare' => [
            'title' => "不只是一个 MCP 端点。是它背后数据的家。",
            'lead' => "只有当背后的信息依然容易理解、便于管理时，MCP 服务器才有用。Monica 把应用、数据库和智能体连接放在一起提供。",
            'head' => ["独立的 MCP 集成", "Monica"],
            'rows' => [
                ["把助手连接到工具", "是", "是"],
                ["包含好用的个人信息应用", "取决于实现", "是"],
                ["结构化的人、事件和物品", "取决于后端", "内置"],
                ["人能读懂的记录", "取决于后端", "是"],
                ["单个助手的连接历史", "取决于实现", "是"],
                ["开源且可自托管", "取决于项目", "是"],
            ],
            'caption' => "独立的 MCP 集成与 Monica 各自提供的内容",
            'closing' => "为数据所属的人而造，而不只是为访问它的智能体。",
        ],

        'faq' => [
            'title' => "常见问题",
            'items' => [
                ['q' => "什么是 Monica MCP 服务器？", 'a' => "它是 Monica 内置的 Model Context Protocol（MCP）服务器，让兼容的 AI 助手可以使用工具，读取和修改存放在 Monica 里的受支持的个人数据。"],
                ['q' => "Monica 是开源的 MCP 服务器吗？", 'a' => "是。Monica 是以 AGPL-3.0 许可开源的应用，它的 MCP 服务器包含在应用里。你可以使用托管服务，也可以自托管 Monica。"],
                ['q' => "MCP 端点的网址是什么？", 'a' => "在托管服务上，远程 MCP 端点是 https://my.monicahq.com/mcp。自托管实例会在它自己的公开地址上开放 /mcp。"],
                ['q' => "Monica 支持远程 MCP 连接吗？", 'a' => "支持。Monica 使用基于 HTTPS 的 Streamable HTTP。它不提供单独的本地 stdio MCP 服务器。你的客户端需要支持远程 MCP。"],
                ['q' => "我可以把 Claude 或 ChatGPT 连接到 Monica 吗？", 'a' => "Monica 为 Claude Desktop 和 ChatGPT，以及面向开发者的客户端提供设置说明。是否可用和设置要求，取决于客户端，有时还取决于订阅方案。请查阅最新的 MCP 文档，了解受支持的流程。"],
                ['q' => "Monica 支持 OAuth 认证吗？", 'a' => "支持。受支持的客户端可以使用交互式的 OAuth 授权流程。对于需要手动配置的客户端，Monica 也支持 Bearer API 密钥。"],
                ['q' => "我可以让多个 AI 助手使用同一份 Monica 数据吗？", 'a' => "可以。你可以把多个助手连接到同一个 Monica 账户。每个连接都可以单独管理和撤销，助手可以在其连接的权限范围内访问同一份账户数据。"],
                ['q' => "Monica 提供多少个 MCP 工具？", 'a' => "Monica 注册了 236 个 MCP 工具。工具是否可用，取决于账户权限、管理员权限和已启用的功能。"],
                ['q' => "MCP 工具可以处理哪些数据？", 'a' => "受支持的工具涵盖人、关系、生活事件、提醒、知识库笔记和清单、物品、地点、模板，以及其他个人记录类型。网页应用支持的操作，并非都能通过 MCP 使用。"],
                ['q' => "助手可以在 Monica 里存某个人的电话号码或生日吗？", 'a' => "目前的 MCP 工具还不行。助手可以按姓名创建联系人，并管理许多相关的记录，但编辑一个人的详细档案字段，需要使用 Monica 的网页界面或 JSON API。"],
                ['q' => "我可以给 AI 助手只读权限吗？", 'a' => "目前不行。标准的已连接助手拥有范围广泛的、覆盖整个账户的访问权限。Monica 还没有提供只读或按保险库的 MCP 访问设置。部分模板字段可以标记为敏感，这样通过 OAuth 连接的助手就无法读取这些值。"],
                ['q' => "Monica 会自动记住我告诉助手的一切吗？", 'a' => "不会。Monica 不会监听你的对话，也不会自动提取记忆。信息是在你的 AI 助手调用 Monica 的 MCP 工具时才被存储或取回。"],
                ['q' => "免费方案可以使用 MCP 吗？", 'a' => "可以。免费的托管账户可以使用 MCP 服务器，受常规账户限制和服务器端速率限制约束。也可以选择自托管。"],
                ['q' => "我能看到我的 AI 智能体做了什么吗？", 'a' => "能。Monica 提供 MCP 工具调用的历史，包括请求和响应详情，最长保留 90 天。你也可以单独断开各个助手。"],
                ['q' => "我可以在自托管实例上使用 Monica MCP 吗？", 'a' => "可以。把托管版的 MCP 端点换成你实例上的 /mcp 端点。要让你的 MCP 客户端能安全地访问到它，是你的责任。"],
                ['q' => "Monica 提供语义搜索或自动记忆提取吗？", 'a' => "不提供。Monica 提供结构化的记录和关键词搜索。任何自动存储或取回信息的决定，都取决于已连接的助手。"],
            ],
        ],

        'closing' => [
            'title' => "你的个人数据库，已为你的 AI 智能体准备就绪。",
            'body' => "连接一个兼容的助手，了解 Monica 的 MCP 工具，开始建立一个对你和你所选的智能体都好用的个人信息系统。",
            'connect' => "连接 AI 助手",
            'start' => "免费开始",
            'aiMemory' => "想了解 AI 记忆面向人的那一面？",
            'note' => "开源 · 可自托管 · 内置 MCP",
        ],
    ],

    'footer' => [
        // The closing line ends every page, so it is two short sentences rather
        // than a pitch. Each one is its own line.
        'closing' => ["Monica 替你记着。", "你去外面走走。"],
        'start' => "开始使用 Monica",
        'github' => "在 GitHub 上查看",

        'tagline' => "你的开源个人数据库。AGPL-3.0。",
        'productLabel' => "产品",
        'developersLabel' => "开发者",
        'companyLabel' => "公司",
        'personalCrm' => "什么是个人 CRM？",
        'aiMemory' => "AI 记忆",
        'personalData' => "个人数据管理",
        'mcpServer' => "MCP 服务器",
        'changelog' => "更新日志",
        'mcp' => "MCP",
        'api' => "API",
        'contactSales' => "联系销售",
        'privacy' => "隐私",
        'terms' => "条款",
        'team' => "团队",
        'support' => "支持",
        'about' => "关于",

        'art' => "湖边的一片草地，熊猫们在草丛中闲躺，在树上小憩",
        'copyright' => "© :year Monica。没有熊猫被追踪。我们很想说 Monica 是注册商标，但它并不是。请友善一点。",
        'languageLabel' => "切换语言",
        // Under the copyright, on a page that is also published as Markdown.
        'markdown' => "查看 Markdown 版本",
    ],

    'blog' => [
        'title' => "博客",
        'lede' => "关于构建 Monica、保护个人数据隐私，以及保持联系的那些小门道。",

        'morePosts' => "更多文章",
        'previousPost' => "上一篇",
        'nextPost' => "下一篇",
        'latestPost' => "这是最新的一篇",
        'firstPost' => "这是第一篇",
        'seeAllPosts' => "查看全部文章",
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
            'body' => "一款私密、开源的个人数据库，用来记录你的联系人、你拥有的一切，以及你需要记住的一切。可以自托管，也可以交给我们来运行。",
            'bodyPost' => "记录你生活中的人，而不必把他们交给广告数据库。",
            'cta' => "开始使用",
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
        'updatedOn' => "2026 年 11 月 20 日",

        'sections' => [
            [
                'title' => "服务范围",
                'blocks' => [
                    ['text' => "Monica 支持以下浏览器："],
                    ['items' => [
                        "Edge（最新版）",
                        "Firefox（最新版）",
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
                    ['text' => "你有权随时以 JSON 格式导出你的数据。"],
                    ['text' => "你的数据不会被有意展示给其他用户，也不会与第三方共享。"],
                    ['text' => "未经你的同意，你的个人数据不会与任何人共享。"],
                    ['text' => "你的数据每天备份一次。"],
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
                    ['text' => "你不得对本站发起自动化请求，但有一个例外：你可以按照文档的说明，使用 Monica 的 API、MCP 服务器，以及 Monica 为 Claude、ChatGPT、Gemini 和其他兼容的助手与智能体发布的集成和插件。这种访问仍然受这些条款约束，并受合理限制，以便服务对所有人保持可用。"],
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
        'updatedOn' => "2026 年 11 月 20 日",

        'sections' => [
            [
                'blocks' => [
                    ['text' => "Monica 是一个开源项目。托管版本设有高级套餐，让我们能够收费以支付服务器和附加服务的开支，但主要目标并不是赚钱（否则我们就不会将它开源了）。"],
                    ['text' => "Monica 有两种使用方式：你可以使用我们的托管版本，也可以下载后自行运行。在后一种情况下，我们不会追踪任何内容，甚至不知道你下载过这个产品。你想怎么用都可以（但请遵守当地法律）。"],
                    ['text' => "在我们的托管版本上创建账户时，你会向本站提供由我们收集的个人信息，包括你的姓名、电子邮件地址和密码，其中密码在存储前会被加密。我们不会存储任何其他个人信息。"],
                    ['text' => "你登录服务时，我们使用 cookie 来记住你的登录凭据。这是 cookie 唯一的用途。"],
                    ['text' => "Monica 的托管版本运行在 Laravel Cloud 上。除我们之外，只有 Laravel Cloud 及其所依赖的基础设施提供商能访问这些服务器。"],
                    ['text' => "我们每天备份一次数据库。"],
                    ['text' => "你的密码使用 bcrypt 加密，这是一种安全性很高的密码哈希算法。如果你需要额外一层安全保护，也可以为账户启用双因素认证。除这些加密机制之外，你的数据在数据库中并未加密。如果有人获得了数据库的访问权限，就能读取你的数据。我们会尽力确保这种情况永远不会发生，但它仍有可能发生。"],
                    ['text' => "如果发生数据泄露，我们会联系受影响的用户，向他们告知此次泄露。"],
                    ['text' => "事务性电子邮件通过 Resend 发送。"],
                    ['text' => "我们使用 Sentry 来追踪生产环境中发生的错误。它会记录这些错误以及账户 ID，我们据此排查问题。"],
                    ['text' => "我们还使用 Laravel Holdings Inc. 旗下的服务 Laravel Nightwatch 来监控应用程序，并发现和诊断错误与性能问题。Nightwatch 代表我们处理这些数据。它会收到关于发往 Monica 的请求的技术信息（你的 IP 地址、HTTP 标头和浏览器的用户代理）、你的账户 ID，以及我们所发送通知的主题和收件人。它通过你的账户 ID 而不是你的姓名来识别你。我们的依据是保障服务安全、运行良好的正当利益：发现缺陷、诊断错误并改进性能。这些数据存储在美国，并在 30 天后删除。"],
                    ['text' => "本站目前不展示广告，将来也绝不会展示。本站也不会、并且无意向第三方出售数据，无论是否经过你的同意。我们就是反对这种做法。去他的广告。"],
                    ['text' => "无论是营销网站还是托管版本，我们都不使用任何追踪用户行为或数据的第三方追踪服务，例如 Google Analytics 或 Intercom。我们坚决反对它们的原则，因为它们会利用这些数据为你建立用户画像，而我们完全反对这一点。"],
                    ['text' => "你放在 Monica 上的所有数据都属于你。我们对这些数据不享有任何权利。请不要在上面放置非法内容，否则我们会有麻烦。"],
                    ['text' => "你放在 Monica 上的所有联系人信息都只有你自己可见。我们不会在账户之间交叉关联信息，也不会用某个账户中的信息去填充另一个账户（例如 Facebook 就会这样做）。"],
                    ['text' => "你可以通过 Monica 的 MCP 服务器、API，或我们发布的某个集成或插件，把你的账户连接到外部助手或智能体，例如 Claude、ChatGPT、Gemini，或任何其他支持 MCP 的应用。除非你自己设置，否则不会连接任何内容：助手只有在你从 Monica 账户中批准之后才能获得访问权限，API 密钥也只有在你创建之后才会生效。创建 API 密钥时，你还可以选择它是否能读取标记为敏感的字段的值。"],
                    ['text' => "连接之后，助手会通过 Monica 提供的操作在你的账户中工作，以完成你交给它的事情。根据你的请求，它可以检索所需的信息，例如姓名、联系方式、笔记、生活事件、提醒、模板或保险库，也可以代表你在账户中创建或更改信息。我们绝不会自己把你的数据发送给助手：它只会收到它在执行你的请求时检索到的内容。"],
                    ['text' => "助手检索到的信息会离开 Monica，由运行该助手的公司处理（Claude 由 Anthropic，ChatGPT 由 OpenAI，Gemini 由 Google，或你所选工具的提供方），适用该公司自己的条款和隐私政策，而不是本政策。该公司可能会保留这些信息，例如保留在你的对话历史中。请选择你信任的助手来处理这些信息。"],
                    ['text' => "你可以随时撤销这项访问权限。你的设置会列出每一个已连接的助手并让你断开它，也让你撤销自己创建的任何 API 密钥。撤销之后，该助手或密钥就无法再访问你的账户。你也可以在助手自己的设置中移除这个连接。它已经检索到的信息仍留在运行它的公司那里：请在那里删除，例如删除对话。"],
                    ['text' => "我们使用 Stripe 收取访问付费版本的款项。我们不会在服务器上存储信用卡信息，也不存储与交易本身有关的任何内容。不过，按照我们用于处理付款的开源库（Laravel Cashier）的做法，我们会存储信用卡的最后 4 位数字和品牌名称（VISA 或 MasterCard）。作为用户，你在 Stripe 上由他们生成并使用的一串随机数字来标识。"],
                    ['text' => "关于付款，你可以随时降级或取消订阅，也可以删除你的账户。取消时，Stripe 会自动更新，即使我们想再次向你收费也做不到。我们接触的付款信息越少，就越开心。"],
                    ['text' => "你可以随时导出你的数据。如果你知道怎么做，也可以使用 API 导出你的全部数据。你还可以请求由我们代为处理并发送给你。你的数据将以 JSON 格式导出。"],
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
        'art' => "从大西洋上空看到的地球仪：一只熊猫在魁北克旗帜下，另一只在法国的埃菲尔铁塔旁，一架纸飞机沿着两者之间的虚线飞行",
    ],

    /**
     * The about page: who makes Monica, how it started, and what it will never
     * do. The two people are Régis and Alexis in every language, and their
     * photos are the blog's author photos.
     */
    'about' => [
        'hero' => [
            'eyebrow' => "关于",
            'title' => "两个人做的。",
            'lede' => "一个人写下了第一行代码，另一个人让它一直跑下去。",
            'body' => [
                "Monica 是一个开源的个人 CRM，由 Régis 和 Alexis 打造。它背后没有五十人的公司，没有投资人，也没有写在白板上的增长目标。只有两个想把朋友记得更清楚一点的人。",
                "其余的一切都来自使用它的人：自己托管的人，报告问题的人，把它翻译成自己语言的人，还有为托管付费、让我们两个人能继续做下去的人。",
            ],
            'team' => "认识我们两个",
            'history' => "它是怎么开始的",
        ],

        'team' => [
            'title' => "认识团队",
            'lede' => "全部成员。",
            'people' => [
                [
                    'name' => "Régis Freyd",
                    'where' => "联合创始人",
                    'role' => "创建了 Monica，写了大部分 bug",
                    'bio' => "2017 年写下第一个版本，用来记录自己的朋友和家人。至今仍在开发功能、回复支持邮件，并为减少设置项据理力争。",
                    'facts' => [
                        ['k' => "通常在做", 'v' => "产品和应用"],
                        ['k' => "最喜欢的部分", 'v' => "删代码"],
                        ['k' => "最不喜欢的部分", 'v' => "时区"],
                    ],
                ],
                [
                    'name' => "Alexis Saettler",
                    'where' => "联合创始人",
                    'role' => "让 Monica 在各处稳定运行",
                    'bio' => "负责基础设施和真正棘手的难题：Docker 镜像、发布，以及所有只会在别人的服务器上出问题的事情。也修复 Régis 提交的内容中的问题。",
                    'facts' => [
                        ['k' => "通常在做", 'v' => "基础设施和发布"],
                        ['k' => "最喜欢的部分", 'v' => "构建全绿"],
                        ['k' => "最不喜欢的部分", 'v' => "还是时区"],
                    ],
                ],
            ],
        ],

        'facts' => [
            'title' => "用数字看这家公司",
            'lede' => "大多是很小的数字。我们挺喜欢它们。",
            'items' => [
                ['k' => "开始于", 'v' => "2017"],
                ['k' => "人数", 'v' => "2"],
                ['k' => "办公室", 'v' => "没有"],
                ['k' => "投资人", 'v' => "没有"],
                ['k' => "资金来源", 'v' => "订阅"],
                ['k' => "许可证", 'v' => "AGPL"],
                ['k' => "展示的广告", 'v' => "0"],
                ['k' => "出售的数据", 'v' => "0"],
                ['k' => "忘记的生日", 'v' => "一年比一年少"],
            ],
        ],

        'history' => [
            'title' => "通往 Monica 的路",
            'lede' => "个人 CRM 通常始于一次忘记的生日。",
            'items' => [
                ['year' => "2017", 'title' => "第一个版本。", 'body' => "Régis 做了一个小应用，用来记住身边人的点点滴滴，并把代码放上了 GitHub。"],
                ['year' => "2017", 'title' => "托管版 Monica 上线。", 'body' => "不想自己运行服务器的人，可以付费使用。这笔收入至今仍维持着项目的运转。"],
                ['year' => "2018", 'title' => "Alexis 加入。", 'body' => "起初是贡献者，后来成为让 Monica 能在别人的机器上安装、升级并持续运行的人。"],
                ['year' => "后来", 'title' => "数千位贡献者和译者。", 'body' => "Monica 被用户翻译成数十种语言，也被想让某件事换种方式工作的人不断修补。"],
                ['year' => "2026", 'title' => "Monica v3。", 'body' => "一次重写：更安静，更快，更容易托管，并建立在第一个版本积累的全部经验之上。"],
            ],
        ],

        'why' => [
            'title' => "Monica 为什么存在",
            'body' => [
                "我想要一个地方，写下我对在乎的人的了解：朋友新伴侣的名字，某人的母亲什么时候动的手术，上次我们聊了什么。通讯录只存电话号码。笔记应用记不住一条笔记说的是谁。",
                "我也不想让这些内容躺在某家公司的数据库里，被出售、被关停，或被拿去挖掘广告价值。你写下的关于家人的内容，是你最私密的数据。",
                "所以 Monica 是开源的，可以自托管，托管版由使用它的人来付费。房间里没有别人。",
            ],
            'signature' => "Régis",
            'promises' => [
                ['t' => "开源", 'b' => "完整源代码以 AGPL 公开。"],
                ['t' => "可自托管", 'b' => "一条 Docker 命令，就能在你掌控的硬件上运行。"],
                ['t' => "由用户出资", 'b' => "没有投资人，没有广告，除了使用它的人，不对任何人负责。"],
                ['t' => "你的数据属于你", 'b' => "随时完整导出一切。删除之后，就真的没了。"],
            ],
        ],

        'nos' => [
            'title' => "不在路线图上",
            'lede' => "说不，是工作的大部分。",
            'items' => [
                ['t' => "广告", 'b' => "没有人需要在奶奶的生日旁边看到一条广告。"],
                ['t' => "出售你的数据", 'b' => "出多少钱都不卖。"],
                ['t' => "社交网络", 'b' => "Monica 是私密的。你添加的人不会收到任何通知。"],
                ['t' => "按联系人数量计费", 'b' => "认识新朋友不该花钱。"],
                ['t' => "销售管道", 'b' => "做那个的 CRM 已经很多了。这一个是为你的生活准备的。"],
                ['t' => "连续打卡和徽章", 'b' => "给妈妈打电话不是游戏。"],
            ],
        ],

        'openSource' => [
            'eyebrow' => "开源",
            'title' => "代码是公开的，包括我们更想重写的那些部分。",
            'body' => "每一次提交都公开进行。你可以阅读源代码，看看你的数据会发生什么，提交问题，发送补丁，或者 fork 一份自己运行。欢迎贡献，也欢迎有理有据的不同意见。",
            'github' => "在 GitHub 上查看",
            'docs' => "文档",
            'items' => [
                ['t' => "阅读代码", 'b' => "每一行都能看，包括服务端。"],
                ['t' => "参与贡献", 'b' => "欢迎提交问题、补丁和翻译。"],
                ['t' => "自己托管", 'b' => "安装它，运行它，把数据留在你自己的服务器上。"],
                ['t' => "公开构建", 'b' => "发布和变更都会在 GitHub 上公布。"],
            ],
        ],

        'signOff' => [
            'title' => "Monica 是我们一直想要的那本通讯录。",
            'body' => "希望它能帮你给那个一直想联系的人打个电话。",
            'names' => ["Régis", "Alexis"],
        ],
    ],

    // The contribute page, at /en/contribute/. The links are in `links` in config.php.
    'contribute' => [
        'imageAlt' => "一只戴礼帽的熊猫指着你，上方写着：我需要你来改进我",
        'badge' => "开源",
        'since' => "自 2017 年起，利用夜晚和周末。",
        'title' => "帮助我们让 Monica 继续走下去。",
        'lede' => "在 AI 时代，很难预料开源会走向何方。既然现在几乎任何软件都能用几个提示词替换掉，维护开源项目还有什么意义？",
        'body' => [
            "说实话，我们也不知道。开源仍然是我们的热情所在，所以我们愿意在夜晚和周末继续投入。它让我们觉得自己为这个世界贡献了一点美好的东西。",
            "你的理由可能不同，但你或许仍然想以某种方式为 Monica 做出贡献。",
        ],
        // :sponsor is replaced by a link whose text is `sponsorLink`.
        'sponsor' => "你可以:sponsor，也可以用其他方式参与贡献。",
        'sponsorLink' => "在资金上支持这个项目",

        'docs' => [
            'title' => "审阅我们的文档，确保内容准确。",
            'body' => "任何你想做的修改，都可以提交 issue，甚至直接提交 pull request。",
            'link' => "阅读我们的 pull request 指南",
        ],

        'translate' => [
            'title' => "帮助我们翻译应用和营销网站。",
            'body' => "所有翻译都直接放在代码里。我们支持很多语言，但坦白说：它们全部由 AI 完成。所以可能不够准确，而且我们当然看不懂其中大部分。如果你需要新增一种语言，请开一个 issue，我们会让它实现。",
        ],

        // :tracker and :skills are replaced by links whose text is
        // `trackerLink` and `skillsLink`.
        'tokens' => [
            'eyebrow' => "这一项很重要",
            'title' => "花你自己的 token。",
            'body' => "我们相信，开源贡献的未来与 token 息息相关。我们的:tracker里有许多未解决的 bug，也有许多想要实现的功能。所以，请让 Claude 或 ChatGPT 去处理其中一个 issue。请务必使用我们:skills里的 skills，严格遵循我们的规范。",
            'trackerLink' => "缺陷追踪器",
            'skillsLink' => "skills 文件夹",
            'closing' => "用你自己的 token 而不是我们的，会是极大的帮助。我们相信这对我们的帮助最大。",
            'issues' => "浏览未解决的 issue",
            'skillsButton' => "打开 skills 文件夹",
        ],
    ],

    /**
     * The support page. The address itself is not here: it lives in
     * config.php and never reaches the HTML in readable form. See
     * _partials/support/email.blade.php.
     *
     * `docs` is in the same order as `supportDocs` in config.php, which
     * holds each entry's URL and icon.
     */
    'support' => [
        'eyebrow' => "支持",
        'title' => "需要帮助？来找打造 Monica 的人",
        'lede' => "如果有任何地方不符合你的预期，请写信告诉我们，或者先看看应用内自带的文档。",

        'contactTitle' => "联系支持团队",
        'emailLabel' => "电子邮件",
        'emailHelp' => "请告诉我们你当时在做什么、你期望发生什么，以及实际发生了什么。附上截图会比你想象的更有帮助。",
        'emailButton' => "写信给支持团队",
        'hoursLabel' => "服务时间",
        'hours' => "8:00 至 18:00",
        'days' => "周一至周五",
        'hoursHelp' => "在这些时间之外发送的邮件，会在下一个工作日阅读。",

        'docsTitle' => "文档",
        'docsLede' => "四份指南和参考资料，登录后即可在应用内查看。",
        'docs' => [
            ['kind' => "指南", 'title' => "使用 Monica", 'description' => "产品每个部分的用途，从你的第一位联系人，到提醒、模板，以及与他人共享联系人。"],
            ['kind' => "参考", 'title' => "API", 'description' => "用你自己的脚本读取和写入联系人。涵盖每个端点，并附有 cURL、JavaScript 和 PHP 示例。"],
            ['kind' => "参考", 'title' => "MCP", 'description' => "让助手连接到你的实例，它就能读取你的通讯录并在其中记录人物，权限与你相同。"],
            ['kind' => "指南", 'title' => "CardDAV 和 CalDAV", 'description' => "让手机和电脑上的通讯录与日历应用与 Monica 保持同步。"],
        ],
    ],

    'notFound' => [
        'title' => "页面未找到。",
        'body' => "这个地址没有指向任何地方。它可能已被移走，也可能从未存在过。",
    ],

    /**
     * The handbook (`_layouts/handbook`, `_partials/handbook/`). Read in the
     * locales listed in $handbookSlugs in config.php, so a locale that drops
     * out of that list can lose this block with its articles.
     *
     * The articles are Markdown in source/_handbook_<locale>/; this is only
     * the frame around them.
     */
    'handbook' => [
        'title' => "我们的手册",
        'intro' => "这本手册讲的是我做什么、怎么想，以及我想如何推进这个项目。做好准备，它写得很棒。至少我这么觉得。",
        'art' => "一只熊猫坐在一摞书和一杯咖啡之间读书",
        'contents' => "目录",
        'sections' => [
            'general' => "概况",
            'product' => "产品",
            'engineering' => "工程",
            'community' => "社区与开源",
            'privacy' => "隐私与安全",
            'marketing' => "营销",
            'business' => "经营一门生意",
            'relationships' => "人际关系",
        ],
        'articles' => ":count 篇文章",
        'words' => ":count 字",
        'minutes' => "阅读约 :count 分钟",

        'actions' => [
            'label' => "在别处使用这篇文章",
            'copy' => "复制给 LLM",
            'copied' => "已复制为 Markdown",
            'markdown' => "查看 Markdown 版本",
            'claude' => "在 Claude 中打开",
            'chatgpt' => "在 ChatGPT 中打开",

            // The question each assistant is opened with. :url is the
            // article's Markdown file.
            'prompt' => "阅读 :url，并帮我理解它。我可能会有一些问题。",
        ],

        'writtenBy' => "作者",
        'author' => "Régis Freyd",
        'authorRole' => "联合创始人",

        // :percent is the article's length as a share of the book's.
        'comparison' => "这只占 :author 所著《:title》字数的 :percent",

        // One book per article, picked from the article's slug, so the same
        // article always compares itself to the same book. Word counts are
        // rounded, as the comparison is.
        'books' => [
            ['title' => "堂吉诃德", 'author' => "塞万提斯", 'words' => 430000],
            ['title' => "双城记", 'author' => "查尔斯·狄更斯", 'words' => 135000],
            ['title' => "魔戒", 'author' => "托尔金", 'words' => 455000],
            ['title' => "小王子", 'author' => "圣埃克苏佩里", 'words' => 16000],
            ['title' => "哈利·波特与魔法石", 'author' => "J.K. 罗琳", 'words' => 77000],
            ['title' => "霍比特人", 'author' => "托尔金", 'words' => 95000],
            ['title' => "无人生还", 'author' => "阿加莎·克里斯蒂", 'words' => 66000],
            ['title' => "红楼梦", 'author' => "曹雪芹", 'words' => 845000],
            ['title' => "麦田里的守望者", 'author' => "J.D. 塞林格", 'words' => 73000],
            ['title' => "达·芬奇密码", 'author' => "丹·布朗", 'words' => 138000],
        ],

        'factTitle' => "随机冷知识，免得我们蠢死",

        // One per article, picked from its slug like the book above.
        'facts' => [
            "第一个计算机病毒诞生于 1983 年，名叫“Elk Cloner”。它通过软盘感染 Apple II 电脑。",
            "第一台网络摄像头用在剑桥大学，用来监控一个咖啡壶，免得研究人员白跑一趟，去看一只空壶。",
            "Windows 最初的名字是“Interface Manager”（界面管理器）。幸好他们换了个更好记的。",
            "有史以来第一个网站至今仍在线。它由 Tim Berners-Lee 于 1991 年创建，内容就是万维网项目本身。",
            "Firefox 的标志不是狐狸，而是红熊猫。“Firefox”是红熊猫的一个别称。",
            "第一封电子邮件由 Ray Tomlinson 于 1971 年发给他自己，是一条包含随机字母的测试信息。",
            "20 世纪 50 年代，计算机被称为“电子大脑”，编程则被视为“女人的活儿”。",
            "软件里的“bug”一词，源于 1947 年一只真正的飞蛾让哈佛 Mark II 计算机出了故障。",
            "Amazon 最初叫“Cadabra”，取自“abracadabra”。后来因为听起来太像“cadaver”（尸体）而改了名。",
            "第一只电脑鼠标是木头做的，由 Doug Engelbart 于 1964 年发明。",
            "互联网上有超过 15 亿个网站，但活跃的不到 2 亿个。",
            "QWERTY 键盘布局的设计，是为了放慢打字速度，避免机械打字机卡键。",
            "第一个注册的域名是 Symbolics.com，注册于 1985 年 3 月 15 日，至今仍在使用。",
            "电子邮件地址选用“@”符号，是因为它在计算领域很少使用，不会与现有协议冲突。",
            "“冲浪互联网”一词由图书管理员 Jean Armour Polly 于 1992 年创造，她写了一篇题为“Surfing the Internet”的文章。",
            "CAPTCHA 是“Completely Automated Public Turing test to tell Computers and Humans Apart”（全自动区分计算机和人类的公开图灵测试）的缩写。",
            "1980 年发布的第一块 1GB 硬盘，重达 500 多磅，售价 4 万美元。",
            "Google 最初叫“Backrub”，因为这套系统通过检查反向链接来估计网站的重要性。",
            "第一个 YouTube 视频题为“Me at the zoo”，由平台联合创始人之一 Jawed Karim 于 2005 年 4 月 23 日上传。",
            "2023 年最常见的密码仍然是“123456”，紧随其后的是“password”。",
            "最初的《Space Invaders》游戏太受欢迎，一度造成日本 100 日元硬币短缺。",
            "第一位计算机程序员是 19 世纪 40 年代的 Ada Lovelace，那时计算机还没造出来。",
            "垃圾邮件被称为“spam”，源自 Monty Python 的一个短剧，其中这个词被不断重复。",
            "有史以来第一个搜索引擎叫“Archie”，创建于 1990 年，用来为 FTP 站点建立索引。",
            "第一笔在线交易，是 20 世纪 70 年代初斯坦福和麻省理工的学生通过 ARPANET 买卖大麻。",
            "运行时间最长的计算机程序是“Doomsday Flight”模拟，自 1973 年起运行，用来测试航空公司的软件。",
            "“404 错误”得名于 CERN 的一个房间，最初的网络服务器就放在那里。",
            "有史以来第一款电脑游戏是 1962 年的《Spacewar》，由 Steve Russell 在麻省理工开发。",
            "“robot”（机器人）一词来自捷克语“robota”，意思是“强制劳动”或“苦差事”。",
            "“@”符号在意大利语里叫“蜗牛”，在荷兰语里叫“猴尾巴”。",
        ],
    ],
];
