<?php

/**
 * Spanish copy. Neutral Castilian with "tú": Monica is a personal tool, and
 * "usted" would put a desk between the reader and their own memories. Opening
 * ¿ and ¡ are required, and the FAQ questions carry them.
 */

return [
    'meta' => [
        'imageAlt' => "Monica: recuerda a las personas que te importan. El CRM personal de código abierto.",

        'home' => [
            'title' => "Monica — el CRM personal de código abierto",
            'description' => "Monica te ayuda a recordar a las personas que te importan: qué está pasando en su vida, las fechas importantes, vuestras conversaciones anteriores y cuándo volver a hablar. Privado, de código abierto, alojable por ti.",
        ],

        'pricing' => [
            'title' => "Precios de Monica — un plan alojado, o autoalojamiento gratis",
            'description' => "Monica alojada cuesta 9 USD al mes o 90 USD al año, con contactos ilimitados y sin precio por contacto. O aloja gratis la aplicación de código abierto en tu propia infraestructura.",
        ],

        'privacy' => [
            'title' => "Política de privacidad — Monica",
            'description' => "Cómo trata Monica tus datos: qué recogemos, dónde se almacena, quién puede verlo y qué ocurre cuando cierras tu cuenta. Sin publicidad, sin rastreadores, sin venta de datos.",
        ],

        'team' => [
            'title' => "Equipo — Monica",
            'description' => "Monica la construyen dos personas en Montreal, con cientos de personas colaboradoras de código abierto. Por qué hacemos un CRM personal que no daña las relaciones humanas.",
        ],

        'terms' => [
            'title' => "Condiciones de uso — Monica",
            'description' => "Las condiciones de uso de Monica, el CRM personal de código abierto: qué cubre el servicio, tus derechos sobre tus datos, tus responsabilidades y la letra pequeña legal.",
        ],

        'blog' => [
            'title' => "El blog de Monica — notas de versión y decisiones de producto",
            'description' => "Qué publicamos, por qué lo construimos así y cómo es de verdad llevar una pequeña empresa de código abierto. Escrito por quienes hacen Monica.",
        ],

        // Un artículo trae su propio título y su propia descripción: aquí solo
        // queda el marco que el sitio pone alrededor.
        'post' => [
            'title' => ":title — el blog de Monica",
        ],

        // La página 2 de una lista no es la lista. Sin esto, cuatro páginas del
        // blog compiten por un mismo resultado bajo un mismo título.
        'paginated' => ":title (página :page de :total)",

        'v3' => [
            'title' => "Monica v3 — reconstruida para los próximos diez años",
            'description' => "Monica v3 es una reconstrucción completa del CRM personal de código abierto: fichas que diseñas tú, un diario conectado con todo lo demás, una API completa y una experiencia móvil de verdad. Sigue siendo de código abierto. Antes de que acabe 2026.",
        ],
    ],

    'announcement' => [
        'headline' => "Monica v3 llega antes de que acabe 2026.",
        'detail' => "Reconstruida desde cero. Sigue siendo de código abierto.",
        'cta' => "Ver lo que viene",
    ],

    'nav' => [
        'label' => "Principal",
        'product' => "Producto",
        'v3' => "Monica v3",
        'pricing' => "Precios",
        'blog' => "Blog",
        'docs' => "Documentación",
        'signIn' => "Iniciar sesión",
        'getStarted' => "Empezar",
        'stars' => ":count estrellas",
    ],

    'hero' => [
        'eyebrow' => "El CRM personal de código abierto",
        'title' => "Recuerda a las personas que te importan.",
        'lede' => "Monica te ayuda a seguir la pista de las personas de tu vida: lo que te cuentan, los momentos que compartís y las promesas que sin duda pensabas recordar.",
        'lede2' => "Privada por diseño. De código abierto. Alojable por ti. Sin anuncios, sin reventa de datos, sin notificaciones incómodas para «reengancharte».",
        'primaryCta' => "Empezar con Monica",
        'githubCta' => "Ver en GitHub · :count estrellas",
        'note' => "Alojarla tú es gratis · Versión alojada disponible",
    ],

    'proof' => [
        'starsLabel' => "Estrellas en GitHub",
        'since' => "2017",
        'sinceLabel' => "De código abierto desde",
        'featured' => "Repositorio de la semana",
        'featuredLabel' => "Destacado varias veces",
        'launch' => "Product Hunt",
        'launchLabel' => "Lanzamiento destacado",
        'aside' => "Por lo visto, bastante gente también olvida los cumpleaños.",
    ],

    'notALead' => [
        'title' => "Un CRM donde nadie es un cliente potencial.",
        'body' => "Los CRM tradicionales ayudan a las empresas a recordar a sus clientes. Monica te ayuda a recordar a amigos, familia, compañeros de trabajo, vecinos y a todas las demás personas que importan.",
        'aside' => "Ser atento es más fácil cuando tu memoria tiene copia de seguridad.",
        'listTitle' => "Guarda los detalles que de otro modo olvidarías:",
        'items' => [
            "qué está pasando en su vida;",
            "de qué os conocéis;",
            "las fechas importantes;",
            "vuestras conversaciones anteriores;",
            "regalos, deudas, promesas e ideas;",
            "recordatorios para retomar el contacto.",
        ],
    ],

    'showcase' => [
        'title' => "Todo sobre alguien. En un solo lugar.",
        'aside' => "Las personas son complicadas. Sus fichas también tienen derecho a ser algo complicadas.",
        'card' => [
            'name' => "Élise Aubert",
            'meta' => "Hermana · Lyon · Última conversación hoy",
            'badge' => "Familia",
            'birthdayLabel' => "Cumpleaños",
            'birthday' => "18 de marzo · cumple 39 en 7 meses",
            'metLabel' => "De qué os conocéis",
            'met' => "De nacimiento",
            'relationshipsLabel' => "Relaciones",
            'relationships' => [
                ['initials' => "MC", 'label' => "Élise es la pareja de Marc", 'meta' => "10 años"],
                ['initials' => "LA", 'label' => "Élise es madre de Léa", 'meta' => "Desde 2019"],
            ],
            'recentlyLabel' => "Recientemente",
            'timeline' => [
                [
                    'nature' => 'meal',
                    'title' => "Comida en Le Petit Sud",
                    'meta' => "Hoy · está pensando en volver a vivir a Lyon",
                ],
                [
                    'nature' => 'call',
                    'title' => "Llamada sobre Georges",
                    'meta' => "2 de agosto · 22 minutos",
                ],
            ],
            'reminder' => "Preguntar qué tal fue la entrevista",
            'reminderMeta' => "Recordatorio · mañana",
        ],
        'features' => [
            [
                'icon' => 'relationship',
                'title' => "Relaciones",
                'body' => "Entiende familias, parejas, amistades, compañeros de trabajo y los vínculos entre ellos.",
            ],
            [
                'icon' => 'journal',
                'title' => "Notas y diario",
                'body' => "Recuerda lo que pasó sin recorrer seis aplicaciones de mensajería.",
            ],
            [
                'icon' => 'reminder',
                'title' => "Recordatorios",
                'body' => "Llamar a tu madre. Felicitar a tu amigo. Preguntar qué tal fue la entrevista. Monica recuerda; el mérito sigue siendo tuyo.",
            ],
            [
                'icon' => 'activity',
                'title' => "Actividades",
                'body' => "Conserva el historial de comidas, llamadas, viajes, eventos y los pequeños momentos que forman una relación.",
            ],
            [
                'icon' => 'panel',
                'title' => "Información a tu medida",
                'body' => "Guarda los detalles que te importan a ti, no los campos que un CRM de ventas considera importantes.",
            ],
        ],
    ],

    'notSocial' => [
        'title' => "Deliberadamente no es una red social.",
        'body' => "Monica no recomienda amistades, no clasifica relaciones, no inserta publicidad ni avisa a nadie de que has visto su perfil.",
        'body2' => "Es un lugar privado para tus recuerdos y tus relaciones.",
        'quote' => "Sin muro. Sin seguidores. Sin marcas que fingen tener personalidad.",
    ],

    'openSource' => [
        'title' => "Tuyo quiere decir tuyo.",
        'body' => "Monica es de código abierto desde el principio. Eso no va a cambiar.",
        'aside' => "La confianza es útil. El código fuente es mejor.",
        'sourceCta' => "Explorar el código fuente",
        'hostingCta' => "Leer la guía de autoalojamiento",
        'v3Cta' => "Ver todo lo que llega con Monica v3",
        'listTitle' => "Con Monica v3:",
        'items' => [
            "el proyecto sigue siendo totalmente de código abierto;",
            "puedes ejecutarla en tu propio servidor;",
            "el producto alojado usa la misma aplicación;",
            "tus datos se pueden exportar;",
            "el código se puede inspeccionar, modificar y bifurcar.",
        ],
    ],

    'v3' => [
        'title' => "Monica está creciendo. Más o menos.",
        'body' => "Monica v3 se está reconstruyendo desde los cimientos para la próxima década.",
        'body2' => "Será más flexible, más ampliable y mucho mejor en el teléfono, conservando los principios de privacidad y propiedad que hicieron útil a Monica desde el primer día.",
        'listLabel' => "Llega en la v3",
        'features' => [
            [
                'icon' => 'panel',
                'title' => "Fichas que diseñas tú",
                'body' => "Elige las secciones y los campos de una ficha en lugar de aceptar nuestra opinión para siempre.",
            ],
            [
                'icon' => 'relationship',
                'title' => "Más que contactos",
                'body' => "Conecta personas con mascotas, empresas, viviendas, vehículos, proyectos y cualquier otra cosa relevante en su vida.",
            ],
            [
                'icon' => 'journal',
                'title' => "Un diario conectado con todo",
                'body' => "Registra un momento una sola vez y conéctalo con las personas, fichas, fechas y recordatorios implicados.",
            ],
            [
                'icon' => 'tag',
                'title' => "Estructuras creadas por la comunidad",
                'body' => "Instala estructuras útiles hechas por otras personas usuarias de Monica y luego modifica tu copia libremente.",
            ],
            [
                'icon' => 'code',
                'title' => "Una API completa y un servidor MCP",
                'body' => "Todo lo que esté disponible en la interfaz debería estarlo también de forma programática.",
            ],
            [
                'icon' => 'phone',
                'title' => "Una experiencia móvil de verdad",
                'body' => "Primero una aplicación web adaptable y después aplicaciones nativas para iOS y Android.",
            ],
        ],
        'cta' => "Descubrir Monica v3",
        'note' => "Prevista antes de que acabe 2026 · El acceso beta se abrirá progresivamente",
    ],

    /** La página /v3. La clave `v3` de arriba es la sección de la portada. */
    'v3page' => [
        'badge' => "Monica v3 · En desarrollo",
        'timing' => "Antes de que acabe 2026",
        'title' => "Monica se está reconstruyendo para los próximos diez años.",
        'lede' => "Monica ha ayudado a miles de personas a recordar lo que importa de quienes las rodean. Ahora se está reconstruyendo desde cero: más flexible, más privada, más fácil de ampliar y mejor en cualquier pantalla.",
        'lede2' => "Seguirá siendo de código abierto. Y todo lo que hacía que Monica mereciera la pena se queda.",

        'form' => [
            'label' => "Correo electrónico",
            'placeholder' => "tu@ejemplo.com",
            'cta' => "Avísame cuando esté lista",
            'note' => "Un solo correo, cuando se lance Monica v3. Sin boletín, sin píxel de seguimiento, sin ruido.",
        ],

        'proof' => [
            'stars' => ":count estrellas en GitHub",
            'openSource' => "De código abierto desde 2017",
            'selfHostable' => "Alojable por ti",
        ],

        'coming' => [
            'label' => "Lo que viene",
            'title' => "Cambian muchas cosas. Monica se vuelve más tuya.",
            'body' => "Monica v3 no es un lavado de cara. Es una base nueva, pensada para que el producto sea más flexible sin volverse más complicado.",
            'features' => [
                [
                    'icon' => 'panel',
                    'title' => "Adapta Monica a tu vida",
                    'body' => "Crea las secciones y los campos que tengan sentido para ti. Mantén Monica sencilla, o construye fichas detalladas para aquello que quieres recordar.",
                ],
                [
                    'icon' => 'relationship',
                    'title' => "Registra algo más que personas",
                    'body' => "Las personas siguen en el centro de Monica, pero no existen de forma aislada. Conéctalas con mascotas, empresas, viviendas, vehículos, proyectos o cualquier otra ficha que cuente en su vida.",
                ],
                [
                    'icon' => 'journal',
                    'title' => "Recuerda lo que pasó",
                    'body' => "Llamadas, comidas, viajes, momentos difíciles, pequeños detalles que merece la pena guardar: añádelos a un diario que se conecta con naturalidad a personas, fechas y recordatorios.",
                ],
                [
                    'icon' => 'tag',
                    'title' => "Empieza con estructuras hechas por otros",
                    'body' => "Instala plantillas listas para usar creadas por la comunidad, adáptalas libremente y mantén el control completo de tu propia versión.",
                ],
                [
                    'icon' => 'code',
                    'title' => "Construye sobre una base abierta",
                    'body' => "Todo lo que esté disponible en la interfaz lo estará también a través de la API. Monica será más fácil de integrar, automatizar y ampliar, sin depender de puntos de acceso ocultos o privados.",
                ],
                [
                    'icon' => 'phone',
                    'title' => "Usa Monica de verdad en cualquier pantalla",
                    'body' => "La aplicación web estará diseñada para el móvil desde el principio. Después llegarán aplicaciones nativas para iOS y Android, hechas como aplicaciones de verdad y no como una web envuelta.",
                ],
            ],
        ],

        'principles' => [
            'label' => "Lo que no cambia",
            'title' => "Los principios no se están reescribiendo.",
            'body' => "Monica v3 es ambiciosa, pero sigue siendo Monica. Los compromisos que hay detrás de :count estrellas en GitHub siguen formando parte de los cimientos.",
            'items' => [
                [
                    'icon' => 'code',
                    'title' => "De código abierto, y seguirá siéndolo",
                    'body' => "Monica seguirá siendo totalmente de código abierto y alojable por ti. El código se podrá leer, modificar, bifurcar y mejorar, igual que hoy.",
                ],
                [
                    'icon' => 'lock',
                    'title' => "Tus datos siguen siendo tuyos",
                    'body' => "Sin publicidad. Sin venta de datos personales. Sin ningún modelo entrenado con tus contactos. Tu vida privada no es un modelo de negocio.",
                ],
                [
                    'icon' => 'download',
                    'title' => "Expórtalo todo",
                    'body' => "Exporta tu información cuando la necesites, incluidas las estructuras, secciones y campos personalizados que hayas creado.",
                ],
                [
                    'icon' => 'people',
                    'title' => "Hecha para que la use todo el mundo",
                    'body' => "La navegación por teclado, los lectores de pantalla, la localización y los diseños adaptables son requisitos del producto, no trabajo aplazado para más adelante.",
                ],
                [
                    'icon' => 'arrowRight',
                    'title' => "Quienes ya usan Monica no se quedan atrás",
                    'body' => "El objetivo es ofrecer un camino de migración claro para las cuentas de Monica existentes, incluidos contactos, notas, recordatorios y otra información esencial.",
                ],
            ],
        ],

        'follow' => [
            'title' => "Sigue la reconstrucción desde el principio.",
            'body' => "Monica v3 aún está en desarrollo y muchas decisiones importantes se toman en abierto. Apúntate a la lista de lanzamiento o sigue el repositorio para ver el trabajo según avanza.",
            'note' => "Código abierto · Alojable por ti · Desarrollada en público",
            'primaryCta' => "Recibir el correo de lanzamiento",
            'secondaryCta' => "Seguir a Monica en GitHub",
        ],
    ],

    'founder' => [
        'title' => "La creé porque tengo mala memoria.",
        'body' => "Creé Monica porque no dejaba de olvidar detalles sobre personas que de verdad me importaban.",
        'body2' => "No porque fueran poco importantes. Porque la vida va llena, la memoria es poco fiable y, por lo visto, el cerebro humano no vino con función de búsqueda.",
        'body3' => "Monica empezó como un proyecto personal en 2017. Desde entonces se ha convertido en uno de los proyectos de CRM personal de código abierto más seguidos, sostenido y mejorado por colaboradores de todo el mundo.",
        'signature' => "— Régis, fundador y persona que todavía olvida cosas de vez en cuando",
    ],

    'faq' => [
        'title' => "Las preguntas que se hacen de verdad.",
        'items' => [
            [
                'q' => "¿Monica es realmente gratis?",
                'a' => "El código es gratuito y siempre lo será. Puedes ejecutarlo en tu propio servidor sin pagar nada. La versión alojada es una suscripción de pago, porque los servidores y las copias de seguridad cuestan dinero y porque financia el trabajo en el proyecto de código abierto.",
            ],
            [
                'q' => "¿Hace falta saber de tecnología para usarla?",
                'a' => "Para la versión alojada no: creas una cuenta y empiezas. Alojarla tú pide algo más: Docker, o un entorno PHP que sepas mantener. La documentación explica ambos caminos.",
            ],
            [
                'q' => "¿Quién puede ver mis datos en la versión alojada?",
                'a' => "Nadie los consulta. El soporte solo puede acceder a una cuenta con tu permiso explícito y para un problema concreto. Tus datos no se venden nunca, no se usan para publicidad y no se usan para entrenar ningún modelo.",
            ],
            [
                'q' => "¿Puedo llevarme mis datos?",
                'a' => "En cualquier momento y por completo, incluidas las estructuras que hayas creado. Exportar es una función, no una carrera de obstáculos para retenerte.",
            ],
            [
                'q' => "¿Puedo importar los contactos que ya tengo?",
                'a' => "Sí, archivos vCard y CSV. Los duplicados se te muestran antes de fusionar nada, porque fusionar a las dos personas equivocadas es una forma memorable de arruinar una tarde.",
            ],
            [
                'q' => "¿Qué pasa con mi cuenta cuando llegue la v3?",
                'a' => "El objetivo es un camino de migración claro para las cuentas existentes, con contactos, notas, recordatorios y demás información esencial. No se borra nada y no se te impone nada de un día para otro.",
                'link' => ['label' => "Leer sobre Monica v3", 'page' => 'v3'],
            ],
            [
                'q' => "¿Hay aplicación móvil?",
                'a' => "La aplicación web ya funciona en el teléfono. Las aplicaciones nativas de iOS y Android llegarán después de la v3: aplicaciones de verdad, no un sitio web dentro de una carcasa.",
            ],
            [
                'q' => "¿Monica hace algo con la IA?",
                'a' => "Monica v3 expone un servidor MCP, así que puedes apuntar tu propio asistente a tus propios datos si quieres. Monica no envía tus relaciones a ningún modelo por iniciativa propia.",
            ],
        ],
    ],

    'plans' => [
        'title' => "Nuestro servidor. O el tuyo.",
        'hosted' => [
            'title' => "Monica alojada",
            'body' => "Para quien quiere Monica sin gestionar un servidor.",
            'items' => [
                "actualizaciones automáticas;",
                "copias de seguridad gestionadas;",
                "ningún trabajo de infraestructura;",
                "financia el desarrollo del proyecto de código abierto.",
            ],
            'cta' => "Crear una cuenta",
        ],
        'selfHosted' => [
            'title' => "Aloja Monica tú",
            'body' => "Para quien disfruta siendo dueño de su infraestructura, o al menos eso dice.",
            'items' => [
                "control total;",
                "código abierto;",
                "sin suscripción a Monica;",
                "instalación con Docker o manual.",
            ],
            'cta' => "Alojar Monica yo",
        ],
    ],

    'finalCta' => [
        'title' => "Sé mejor amigo. Con apoyo administrativo.",
        'body' => "Recuerda los detalles importantes. Retoma el contacto cuando importa. Mantén tus relaciones fuera de las bases de datos publicitarias.",
        'primaryCta' => "Empezar con Monica",
        'secondaryCta' => "Ver Monica v3",
        'note' => "Código abierto · Alojable por ti · Sin tarjeta de crédito",
    ],

    /** La página /precios. Los precios vienen del diseño; cámbialos aquí, por locale. */
    'pricing' => [
        'eyebrow' => "Precios sencillos",
        'title' => "Un solo plan alojado. Sin precios por relación.",
        'lede' => "Usa Monica en nuestros servidores por un precio predecible, o alójala tú mismo gratis.",
        'lede2' => "No cobramos por contacto, por recordatorio, por cumpleaños importante ni por persona a la que intentas no defraudar.",
        'currency' => "Precios en USD",
        'taxFootnote' => "Los precios se muestran en USD. Los impuestos aplicables se calculan antes del pago.",

        'billing' => [
            'label' => "Periodo de facturación",
            'yearly' => "Anual — 2 meses gratis",
            'monthly' => "Mensual",
        ],

        'hosted' => [
            'title' => "Monica alojada",
            'body' => "Para quien quiere Monica sin mantener un servidor.",
            'yearlyPrice' => "90 $",
            'yearlyPeriod' => "USD / año",
            'yearlyNote' => "Dos meses gratis con facturación anual.",
            'monthlyPrice' => "9 $",
            'monthlyPeriod' => "USD / mes",
            'monthlyNote' => "Facturación mensual. Cambia a anual y consigue dos meses gratis.",
            'taxNote' => "Pueden aplicarse impuestos según tu país.",
            'cta' => "Empezar con Monica",
            'trial' => "Prueba de 30 días · Sin tarjeta durante la prueba",
            'listTitle' => "Todo lo necesario para recordar a las personas que importan:",
            'items' => [
                "contactos ilimitados;",
                "notas ilimitadas;",
                "recordatorios ilimitados;",
                "actividades y entradas de diario ilimitadas;",
                "gestión de relaciones;",
                "campos y secciones personalizados;",
                "archivos adjuntos;",
                "exportación de datos;",
                "actualizaciones automáticas;",
                "copias de seguridad gestionadas;",
                "soporte por correo;",
                "acceso desde móvil, tableta y ordenador;",
                "todas las funciones alojadas futuras incluidas.",
            ],
            'aside' => "Sin recargo por tener una familia grande.",
            'footnote' => "Cancela cuando quieras. Tus contactos no quedarán secuestrados.",
        ],

        'selfHosted' => [
            'title' => "¿Prefieres tu propio servidor?",
            'body' => "Monica es de código abierto y se instala en la infraestructura que tú controles.",
            'price' => "0 $",
            'period' => "por parte de Monica",
            'aside' => "Puede que tu proveedor de alojamiento sí quiera dinero. Todavía no hemos derrotado al capitalismo.",
            'cta' => "Ver la guía de autoalojamiento",
            'sourceCta' => "Ver el código en GitHub · :count estrellas",
            'listTitle' => "La aplicación es gratuita. Tú pones el servidor, las actualizaciones, las copias de seguridad, la supervisión, los parches de seguridad y la tranquilidad de saber exactamente dónde viven tus datos.",
            'items' => [
                "la aplicación de código abierto completa;",
                "contactos ilimitados;",
                "tantos usuarios como permita tu infraestructura;",
                "control total sobre tus datos;",
                "importación y exportación de datos;",
                "documentación de la comunidad;",
                "soporte de la comunidad;",
                "la posibilidad de inspeccionar y modificar el código.",
            ],
            'footnote' => "La edición autoalojada no es una demo recortada. Es Monica funcionando en tu infraestructura.",
            'footnote2' => "Las copias de seguridad gestionadas, el envío de correo, la supervisión de la infraestructura y el soporte directo forman parte del servicio alojado.",
        ],

        'compare' => [
            'title' => "La misma Monica. Otra persona a cargo del servidor.",
            'rowHeader' => "Qué",
            'hosted' => "Monica alojada",
            'selfHosted' => "Monica autoalojada",
            'rows' => [
                ['label' => "Software Monica", 'hosted' => "Incluido", 'selfHosted' => "Incluido"],
                ['label' => "Contactos", 'hosted' => "Ilimitados", 'selfHosted' => "Ilimitados"],
                ['label' => "Actualizaciones", 'hosted' => "Automáticas", 'selfHosted' => "Las instalas tú"],
                ['label' => "Copias de seguridad", 'hosted' => "Gestionadas por Monica", 'selfHosted' => "Las gestionas tú"],
                ['label' => "Mantenimiento del servidor", 'hosted' => "Gestionado por Monica", 'selfHosted' => "Lo gestionas tú"],
                ['label' => "Ubicación de los datos", 'hosted' => "Infraestructura de Monica", 'selfHosted' => "Tu infraestructura"],
                ['label' => "Conocimientos técnicos necesarios", 'hosted' => "Ninguno", 'selfHosted' => "Algunos"],
                ['label' => "Soporte", 'hosted' => "Soporte por correo", 'selfHosted' => "Soporte de la comunidad"],
                ['label' => "Coste", 'hosted' => "Suscripción mensual o anual", 'selfHosted' => "Software gratuito más costes de alojamiento"],
                ['label' => "Ideal para", 'hosted' => "Quien quiere que Monica funcione", 'selfHosted' => "Quien disfruta con los servidores, o no tiene alternativa"],
            ],
        ],

        'whyPay' => [
            'title' => "¿Por qué pagar si Monica es de código abierto?",
            'body' => "El código abierto te permite ejecutar, inspeccionar y modificar Monica, y contribuir a ella. No hace desaparecer los servidores, las copias de seguridad, el envío de correo, el trabajo de seguridad ni el soporte.",
            'body2' => "Una suscripción alojada paga la infraestructura que hace funcionar tu cuenta y financia el desarrollo continuo de Monica para todo el mundo, incluidas las personas que la autoalojan.",
            'quote' => "Nos pagas por operar Monica, no por desbloquear tus propios datos.",
            'aside' => "Los servidores son solo ordenadores que envían facturas.",
        ],

        'noCharge' => [
            'title' => "Cosas por las que no cobramos",
            'items' => [
                ['title' => "Más contactos", 'body' => "Tu precio no sube porque conozcas a más gente."],
                ['title' => "Más recordatorios", 'body' => "Acordarse de los aniversarios ya es bastante estresante."],
                ['title' => "Exportar datos", 'body' => "Llevarte tus datos es un derecho, no una función de pago."],
                ['title' => "La privacidad básica", 'body' => "No vendemos una mejora de privacidad. La privacidad es lo predeterminado."],
                ['title' => "Cancelar", 'body' => "No hay penalizaciones por cancelar ni llamada de ruptura ceremonial."],
                ['title' => "Usar la API", 'body' => "La API es parte del producto, no una negociación aparte."],
            ],
        ],

        'leaving' => [
            'title' => "Tu suscripción puede terminar. Tu acceso a tus datos, no.",
            'body' => "Puedes exportar tus datos en cualquier momento.",
            'body2' => "Al cancelar, tu cuenta sigue accesible hasta el final del periodo pagado. Después la mantenemos disponible durante un periodo de gracia definido antes de eliminarla.",
            'steps' => [
                ['label' => "Cancelar", 'body' => "Tu plan sigue activo hasta el final del periodo de facturación."],
                ['label' => "Exportar", 'body' => "Descarga tus datos antes o después de cancelar, durante el periodo de gracia."],
                ['label' => "Eliminar", 'body' => "Elimina tu cuenta al instante desde Ajustes cuando quieras."],
            ],
            'note' => "El periodo de gracia, los formatos de exportación y los plazos de eliminación se detallan en la política de conservación.",
        ],

        'trackRecord' => [
            'title' => "De código abierto antes de que fuera una estrategia de precios",
            'body' => "Monica se desarrolla en público desde 2017.",
            'body2' => "El proyecto ha reunido :count estrellas en GitHub, ha sido elegido varias veces repositorio de la semana, ha llegado a lo más alto de Product Hunt y ha recibido reconocimiento de la comunidad de código abierto.",
            'starsLabel' => "Estrellas en GitHub",
            'since' => "2017",
            'sinceLabel' => "De código abierto desde",
            'launch' => "N.º 1 del día",
            'launchLabel' => "Product Hunt",
            'featured' => "Repositorio de la semana",
            'featuredLabel' => "Destacado varias veces",
            'cta' => "Ver Monica en GitHub",
        ],

        'faq' => [
            'title' => "Preguntas sobre pagar por Monica",
            'items' => [
                ['q' => "¿Cuánto cuesta Monica?", 'a' => [
                    "Monica alojada cuesta 9 USD al mes o 90 USD al año.",
                    "También puedes alojar Monica gratis en una infraestructura que gestiones tú.",
                ]],
                ['q' => "¿El precio es por usuario o por contacto?", 'a' => "No. El plan alojado tiene un único precio por cuenta e incluye contactos ilimitados."],
                ['q' => "¿Monica es realmente de código abierto?", 'a' => [
                    "Sí. El código de Monica es público y el proyecto tiene :count estrellas en GitHub.",
                    "Monica v3 seguirá siendo de código abierto y alojable por ti.",
                ], 'link' => ['label' => "Leer sobre Monica v3", 'page' => 'v3']],
                ['q' => "¿Autoalojar es gratis?", 'a' => "Monica no cobra por el software autoalojado. El servidor y los costes de infraestructura corren de tu cuenta."],
                ['q' => "¿La versión alojada es distinta de la autoalojada?", 'a' => [
                    "Usan la misma aplicación.",
                    "El servicio alojado incluye infraestructura, actualizaciones gestionadas, copias de seguridad, supervisión, envío de correo y soporte. Algunas integraciones que dependen de infraestructura operada por Monica pueden existir solo en el servicio alojado.",
                ]],
                ['q' => "¿Puedo pasar de alojada a autoalojada?", 'a' => "Sí. Puedes exportar tus datos de Monica e importarlos en una instalación autoalojada compatible."],
                ['q' => "¿Puedo cancelar cuando quiera?", 'a' => "Sí. Cancela desde los ajustes de tu cuenta. Tu suscripción sigue activa hasta el final del periodo en curso."],
                ['q' => "¿Hay penalizaciones por cancelar?", 'a' => "No. Marcharse no debería costar un rescate."],
                ['q' => "¿Qué pasa si falla mi pago?", 'a' => [
                    "Te avisaremos y volveremos a intentar el cobro antes de restringir la cuenta.",
                    "Tus datos no se eliminan porque haya caducado una tarjeta.",
                ]],
                ['q' => "¿Cómo funcionan los reembolsos?", 'a' => [
                    "Si se te ha cobrado por error o has olvidado cancelar, escríbenos en un plazo de 30 días. Revisaremos la solicitud como personas razonables.",
                    "Las suscripciones anuales pueden reembolsarse dentro del plazo definido en nuestra política de reembolsos. No hay reembolso para cuentas que hayan abusado gravemente del servicio.",
                ]],
                ['q' => "¿Subirá el precio?", 'a' => [
                    "Los precios pueden cambiar a medida que Monica evoluciona, pero avisaremos con antelación a quienes ya estén suscritos.",
                    "No cambiamos los precios en silencio esperando que nadie se dé cuenta.",
                ]],
                ['q' => "¿Los impuestos están incluidos?", 'a' => "Que los precios mostrados incluyan o excluyan impuestos depende de tu país y de la ley aplicable. El importe final se muestra antes del pago."],
                ['q' => "¿Monica guarda mis datos de pago?", 'a' => "Los datos de pago los procesa nuestro proveedor. Monica no almacena números de tarjeta completos."],
                ['q' => "¿Se usan mis datos para publicidad?", 'a' => "No. Monica no vende tus datos personales, no muestra publicidad y no usa a las personas de tu cuenta para crear perfiles publicitarios."],
                ['q' => "¿Se usan mis datos para entrenar modelos de IA?", 'a' => "Ningún modelo se entrena con el contenido privado de tu cuenta de Monica."],
                ['q' => "¿Las copias de seguridad están incluidas?", 'a' => [
                    "Sí, el servicio alojado incluye copias de seguridad gestionadas.",
                    "En las instalaciones autoalojadas tienes que configurar y probar tus propias copias.",
                ]],
                ['q' => "¿Puedo exportarlo todo?", 'a' => "Puedes exportar contactos, relaciones, notas, recordatorios, actividades, campos personalizados y otros datos admitidos de la cuenta. Los adjuntos se incluyen con el formato de exportación documentado."],
                ['q' => "¿Puedo eliminar mi cuenta?", 'a' => "Sí. La eliminación de la cuenta está en Ajustes y no requiere contactar con soporte."],
                ['q' => "¿Ofrecéis descuentos?", 'a' => "Por ahora no. Preferimos un precio comprensible a un sistema en el que cada cual negocia por su cuenta."],
                ['q' => "¿Ofrecéis planes de por vida?", 'a' => "No. Los servidores siguen teniendo gastos cuando acaban las campañas de lanzamiento motivadoras."],
                ['q' => "¿Ofrecéis un plan enterprise?", 'a' => [
                    "No hace falta ninguna llamada comercial para usar Monica.",
                    "Para cuestiones de seguridad, compras o alojamiento a gran escala, escríbenos.",
                ]],
                ['q' => "¿Puedo pagar en otra moneda?", 'a' => "La facturación es actualmente en USD. Tu banco puede convertir el importe y cobrar una comisión de cambio."],
                ['q' => "¿Suscribirse apoya al proyecto de código abierto?", 'a' => "Sí. Las suscripciones alojadas financian la infraestructura, el mantenimiento, el soporte y el desarrollo abierto continuo de Monica."],
            ],
        ],

        'finalCta' => [
            'title' => "Tu memoria ya ha hecho suficientes horas no pagadas.",
            'body' => "Usa la versión alojada y deja que gestionemos la infraestructura, o instala Monica en tu propio servidor.",
            'body2' => "En cualquiera de los dos casos, tus contactos siguen siendo personas, no clientes potenciales.",
            'primaryCta' => "Empezar con Monica",
            'secondaryCta' => "Autoalojar Monica",
            'note' => "Un plan alojado sencillo · Autoalojamiento gratuito · Código abierto",
        ],
    ],

    'footer' => [
        'tagline' => "Un CRM personal privado y de código abierto para recordar a las personas que importan.",
        'productLabel' => "Producto",
        'buildLabel' => "Desarrollar",
        'projectLabel' => "Proyecto",
        'api' => "API",
        'selfHosting' => "Autoalojamiento",
        'github' => "GitHub",
        'privacy' => "Privacidad",
        'terms' => "Condiciones de uso",
        'team' => "Equipo",
        'copyright' => "© :year Monica",
        'since' => "De código abierto desde 2017",
        'ownership' => "Tus datos siguen siendo tuyos.",
        'languageLabel' => "Cambiar de idioma",
    ],

    'blog' => [
        'title' => "Blog",
        'lede' => "Notas sobre la construcción de Monica, sobre mantener privados los datos personales y sobre la pequeña mecánica de seguir en contacto.",

        'allPosts' => "Todos los artículos",
        'keepReading' => "Seguir leyendo",
        'onThisPage' => "En esta página",
        'latest' => "Últimos artículos",

        'readingTime' => ":count min de lectura",

        // Hasta ahora todos los artículos tienen la misma autoría. La etiqueta
        // vive aquí y no en la cabecera de cada artículo porque es una etiqueta
        // del sitio y debe traducirse como tal.
        'authorRole' => "Fundador",

        'copyLink' => "Copiar enlace",
        'copyLinkDone' => "Copiado",

        'showing' => "Artículos :from a :to de :total",
        'pageOf' => "Página :page de :total",
        'newerPosts' => "Artículos más recientes",
        'olderPosts' => "Artículos más antiguos",

        'tryMonica' => [
            'title' => "Probar Monica",
            'body' => "Un CRM personal privado y de código abierto para recordar a las personas que importan. Aloja tú la instancia, o deja que la llevemos nosotros.",
            'bodyPost' => "Sigue el hilo de las personas de tu vida sin entregarlas a una base de datos publicitaria.",
            'cta' => "Empezar",
            'note' => "Prueba de 30 días · Sin tarjeta de crédito",
        ],


        'openSource' => [
            'title' => "Código abierto",
            'body' => "Monica es de código abierto desde el principio. Lee el código, ejecuta tu propia instancia, envía un parche.",
        ],
    ],

    /**
     * Traducción de las condiciones publicadas en monicahq.com/terms. La
     * versión inglesa de lang/en.php es la que prevalece: es la que se publicó,
     * y es la que hay que modificar primero.
     */
    'terms' => [
        'title' => "Nuestras condiciones de uso",
        'updated' => "Última actualización: :date",
        'updatedOn' => "12 de abril de 2018",

        'sections' => [
            [
                'title' => "Alcance del servicio",
                'blocks' => [
                    ['text' => "Monica es compatible con los siguientes navegadores:"],
                    ['items' => [
                        "Internet Explorer (11+)",
                        "Firefox (50+)",
                        "Chrome (última versión)",
                        "Safari (última versión)",
                    ]],
                    ['text' => "No garantizo que el sitio funcione con otros navegadores, pero es muy probable que sencillamente funcione."],
                ],
            ],
            [
                'title' => "Derechos",
                'blocks' => [
                    ['text' => "No tienes que facilitar tu nombre real al registrar una cuenta. Sí necesitas, en cambio, una dirección de correo válida si quieres pasar tu cuenta a la versión de pago o recibir recordatorios por correo."],
                    ['text' => "Tienes derecho a cerrar tu cuenta en cualquier momento."],
                    ['text' => "Tienes derecho a exportar tus datos en cualquier momento, en formato SQL."],
                    ['text' => "Tus datos no se mostrarán intencionadamente a otras personas usuarias ni se compartirán con terceros."],
                    ['text' => "Tus datos personales no se compartirán con nadie sin tu consentimiento."],
                    ['text' => "Se hace una copia de seguridad de tus datos cada hora."],
                    ['text' => "Si el sitio deja de funcionar, tendrás la oportunidad de exportar todos tus datos antes de que desaparezca."],
                    ['text' => "Cualquier función nueva que afecte a la privacidad será estrictamente voluntaria."],
                ],
            ],
            [
                'title' => "Responsabilidades",
                'blocks' => [
                    ['text' => "No usarás el sitio para almacenar información o datos ilegales según la legislación canadiense (ni según ninguna otra legislación)."],
                    ['text' => "Debes tener al menos 18 años para crear una cuenta y usar el sitio."],
                    ['text' => "No debes abusar del sitio publicando a sabiendas código malicioso que pueda perjudicarte a ti o a otras personas usuarias."],
                    ['text' => "Solo debes usar el sitio para hacer cosas ampliamente aceptadas como moralmente buenas."],
                    ['text' => "No puedes hacer peticiones automatizadas al sitio."],
                    ['text' => "No puedes abusar del sistema de invitaciones."],
                    ['text' => "Eres responsable de mantener tu cuenta segura."],
                    ['text' => "Me reservo el derecho de cerrar las cuentas que abusen del sistema (miles de contactos con cientos de miles de recordatorios, por ejemplo) o que lo usen de forma poco razonable."],
                ],
            ],
            [
                'title' => "Otras cuestiones legales importantes",
                'blocks' => [
                    ['text' => "Aunque quiero ofrecer un gran servicio, hay ciertas cosas que no puedo prometer sobre él. Por ejemplo, los servicios y el software se proporcionan «tal cual», bajo tu propia responsabilidad, sin garantía ni condición expresa o implícita de ningún tipo. También rechazo cualquier garantía de comerciabilidad, de idoneidad para un fin concreto o de no infracción. Monica no asumirá responsabilidad alguna por daños a tu sistema informático, por la pérdida o corrupción de datos, ni por cualquier otro perjuicio derivado de tu acceso a los servicios o al software, o de su uso."],
                    ['text' => "Estas condiciones pueden cambiar en cualquier momento, pero nunca me portaré como un cabrón al hacerlo. Sacar adelante este sitio es un sueño hecho realidad para mí, y espero poder mantenerlo tanto tiempo como pueda."],
                ],
            ],
        ],
    ],

    /**
     * Traducción de la política publicada en monicahq.com/privacy. La versión
     * inglesa de lang/en.php es la que prevalece: es la que se publicó, y es la
     * que hay que modificar primero.
     */
    'privacy' => [
        'title' => "Nuestra política de privacidad",
        'updated' => "Última actualización: :date",
        'updatedOn' => "30 de mayo de 2019",

        'sections' => [
            [
                'blocks' => [
                    ['text' => "Monica es un proyecto de código abierto. La versión alojada tiene un plan de pago que nos permite ingresar dinero para pagar los servidores y otros servicios, pero el objetivo principal no es ganar dinero (de lo contrario no habríamos abierto el código)."],
                    ['text' => "Monica viene en dos modalidades: puedes usar nuestra versión alojada, o descargarla y ejecutarla tú. En este segundo caso no rastreamos absolutamente nada. Ni siquiera sabemos que has descargado el producto. Haz con él lo que quieras (pero respeta las leyes de tu país)."],
                    ['text' => "Cuando creas tu cuenta en nuestra versión alojada, facilitas al sitio información sobre ti que recogemos. Incluye tu nombre, tu dirección de correo y tu contraseña, que se cifra antes de almacenarse. No almacenamos ninguna otra información personal."],
                    ['text' => "Cuando inicias sesión en el servicio, usamos cookies para recordar tus credenciales. Ese es el único propósito de las cookies."],
                    ['text' => "Monica funciona en Fortrabbit y somos los únicos, aparte del personal de Fortrabbit, con acceso a esos servidores."],
                    ['text' => "Hacemos copias de seguridad de la base de datos cada hora."],
                    ['text' => "Tu contraseña se cifra con bcrypt, un algoritmo de hash de contraseñas muy seguro. También puedes activar la autenticación en dos pasos en tu cuenta si quieres una capa de seguridad adicional. Al margen de esos mecanismos de cifrado, tus datos no están cifrados en la base de datos. Si alguien accede a la base de datos, podrá leer tus datos. Hacemos todo lo posible para que eso no ocurra nunca, pero puede ocurrir."],
                    ['text' => "Si se produce una filtración de datos, avisaremos a las personas usuarias afectadas para advertirlas."],
                    ['text' => "Los correos transaccionales se envían a través de Postmark."],
                    ['text' => "Usamos una herramienta de código abierto llamada Sentry para seguir los errores que se producen en producción. Su servicio registra los errores, pero no tienen acceso a ninguna información salvo el identificador de la cuenta, que me permite depurar qué está pasando."],
                    ['text' => "El sitio no muestra publicidad ahora mismo y nunca la mostrará. Tampoco vende datos a terceros, con o sin tu consentimiento, ni tiene intención de hacerlo. Sencillamente estamos en contra. A la mierda la publicidad."],
                    ['text' => "No usamos servicios de rastreo de terceros, como Google Analytics o Intercom, que sigan comportamientos o datos de las personas usuarias, ni en el sitio de marketing ni en la versión alojada. Estamos profundamente en contra de sus principios, porque usarían esos datos para perfilarte, algo a lo que nos oponemos por completo."],
                    ['text' => "Todos los datos que pones en Monica te pertenecen. No tenemos ningún derecho sobre ellos. Por favor, no pongas ahí nada ilegal, o tendremos problemas."],
                    ['text' => "Toda la información sobre los contactos que pones en Monica es privada y tuya. No cruzamos información entre cuentas ni usamos información de una cuenta para rellenar otra (a diferencia de Facebook, por ejemplo)."],
                    ['text' => "Usamos Stripe para cobrar los pagos que dan acceso a la versión de pago. No almacenamos en nuestros servidores datos de tarjetas ni nada relativo a las transacciones en sí. Sin embargo, tal como prevé la biblioteca de código abierto que usamos para procesar los pagos (Laravel Cashier), guardamos los 4 últimos dígitos de la tarjeta y el nombre de la marca (VISA o MasterCard). Como usuario, Stripe te identifica mediante un número aleatorio que ellos generan y utilizan."],
                    ['text' => "En cuanto a los pagos, puedes volver al plan gratuito cuando quieras. Al hacerlo, Stripe se actualiza automáticamente y no tenemos forma de volver a cobrarte, ni aunque quisiéramos. Cuanto menos tratemos con información de pago, más contentos estamos."],
                    ['text' => "Puedes exportar tus datos en cualquier momento. También puedes usar la API para exportarlos todos si sabes cómo hacerlo. Y puedes pedirnos que lo hagamos nosotros y te los enviemos. Tus datos se exportarán en formato SQL."],
                    ['text' => "Cuando cierras tu cuenta, destruimos de inmediato toda tu información personal de la base de datos de producción, pero tu información permanece en las copias de seguridad que conservamos durante 30 días. Pasados esos 30 días, tu información quedará completamente destruida. Aunque esto está en tus manos, podemos borrar una cuenta por ti si nos lo pides."],
                    ['text' => "En determinadas situaciones podemos vernos obligados a revelar datos personales en respuesta a solicitudes legítimas de autoridades públicas, incluidas las que responden a requisitos de seguridad nacional o de aplicación de la ley. Solo esperamos que eso no ocurra nunca."],
                    ['text' => "Si incumples las condiciones de uso, cerraremos tu cuenta y te lo notificaremos. Ahora bien, si sigues la norma de «no seas un cabrón», no debería pasarte nunca nada y todos tan contentos."],
                    ['text' => "Monica solo utiliza proyectos de código abierto, alojados en su mayoría en Github."],
                    ['text' => "Actualizaremos esta política de privacidad en cuanto introduzcamos nuevas prácticas en el tratamiento de la información. Si lo hacemos, enviaremos un correo a la dirección indicada en tu cuenta. Nunca nos portaremos como unos cabrones al hacerlo y jamás, jamás, introduciremos nada en lo que hacemos que afecte a tu derecho a una privacidad absoluta."],
                ],
            ],
        ],
    ],

    'team' => [
        'eyebrow' => "Equipo",
        'title' => "Monica es un equipo de 2. Con cientos de personas colaboradoras.",

        'stats' => [
            ['value' => "2016", 'label' => "Primera línea de código"],
            ['value' => "Montreal", 'label' => "Sede"],
            ['value' => "2", 'label' => "Miembros oficiales"],
            ['value' => "Cientos", 'label' => "Personas que contribuyen"],
            ['value' => "Millones", 'label' => "Contactos gestionados"],
        ],

        'missionLabel' => "Nuestra misión",
        'mission' => [
            "Nuestra misión es usar la tecnología de una forma que no dañe las relaciones humanas, como sí pueden hacerlo las grandes redes sociales.",
            "En una época en la que la gente tiene miles de amigos virtuales, queremos ofrecer una herramienta que ayude a reforzar la relación con solo unos pocos de ellos. Que cada amistad importe de verdad.",
            "Monica nació de una necesidad personal: seguir la pista de lo que hacían con su vida los amigos que vivían en otros países. Después de construir la primera versión de la herramienta, decidí abrir su código, presentarla en Hacker News y el resto es historia.",
            "Monica es hoy un proyecto de código abierto con buena salud. Hemos tenido la suerte de contar con una gran comunidad, con decenas de personas colaboradoras y cientos de contribuciones al código. También genera algo de dinero: cada dólar que ganamos con el proyecto se reinvierte en él, para pagar las facturas y seguir desarrollándolo.",
            "Gracias por interesarte por el proyecto.",
        ],
        'signature' => "Regis Freyd y Alexis Saettler",
    ],

    'notFound' => [
        'title' => "Página no encontrada.",
        'body' => "Esta dirección no lleva a ninguna parte. Puede que se haya movido, o puede que nunca haya existido.",
    ],
];
