import type { Dictionary } from './en';

/**
 * Spanish copy. Neutral Castilian with "tú" — Monica is a personal tool and
 * "usted" would put a desk between the reader and their own memories. Opening
 * `¿` and `¡` are required; the FAQ questions carry them.
 */
export const es: Dictionary = {
  meta: {
    title: 'Monica — el CRM personal de código abierto',
    description:
      'Monica te ayuda a recordar a las personas que te importan: qué está pasando en su vida, las fechas importantes, vuestras conversaciones anteriores y cuándo volver a hablar. Privado, de código abierto, alojable por ti.',
    /** Alt text for the social sharing card in public/og/. */
    imageAlt:
      'Monica: recuerda a las personas que te importan. El CRM personal de código abierto.',
  },

  announcement: {
    headline: 'Monica v3 llega antes de que acabe 2026.',
    detail: 'Reconstruida desde cero. Sigue siendo de código abierto. Ahora con licencia MIT.',
    cta: 'Ver lo que viene',
  },

  nav: {
    label: 'Principal',
    product: 'Producto',
    v3: 'Monica v3',
    pricing: 'Precios',
    openSource: 'Código abierto',
    blog: 'Blog',
    docs: 'Documentación',
    signIn: 'Iniciar sesión',
    getStarted: 'Empezar',
    stars: (count: string) => `${count} estrellas`,
  },

  hero: {
    eyebrow: 'El CRM personal de código abierto',
    title: 'Recuerda a las personas que te importan.',
    lede: 'Monica te ayuda a seguir la pista de las personas de tu vida: lo que te cuentan, los momentos que compartís y las promesas que sin duda pensabas recordar.',
    lede2:
      'Privada por diseño. De código abierto. Alojable por ti. Sin anuncios, sin reventa de datos, sin notificaciones incómodas para «reengancharte».',
    primaryCta: 'Empezar con Monica',
    githubCta: (count: string) => `Ver en GitHub · ${count} estrellas`,
    note: 'Alojarla tú es gratis · Versión alojada disponible · Con licencia MIT en la v3',
  },

  proof: {
    starsLabel: 'Estrellas en GitHub',
    since: '2017',
    sinceLabel: 'De código abierto desde',
    featured: 'Repositorio de la semana',
    featuredLabel: 'Destacado varias veces',
    launch: 'Product Hunt',
    launchLabel: 'Lanzamiento destacado',
    aside: 'Por lo visto, bastante gente también olvida los cumpleaños.',
  },

  notALead: {
    title: 'Un CRM donde nadie es un cliente potencial.',
    body: 'Los CRM tradicionales ayudan a las empresas a recordar a sus clientes. Monica te ayuda a recordar a amigos, familia, compañeros de trabajo, vecinos y a todas las demás personas que importan.',
    aside: 'Ser atento es más fácil cuando tu memoria tiene copia de seguridad.',
    listTitle: 'Guarda los detalles que de otro modo olvidarías:',
    items: [
      'qué está pasando en su vida;',
      'de qué os conocéis;',
      'las fechas importantes;',
      'vuestras conversaciones anteriores;',
      'regalos, deudas, promesas e ideas;',
      'recordatorios para retomar el contacto.',
    ],
  },

  showcase: {
    title: 'Todo sobre alguien. En un solo lugar.',
    aside:
      'Las personas son complicadas. Sus fichas también tienen derecho a ser algo complicadas.',
    card: {
      name: 'Élise Aubert',
      meta: 'Hermana · Lyon · Última conversación hoy',
      badge: 'Familia',
      birthdayLabel: 'Cumpleaños',
      birthday: '18 de marzo · cumple 39 en 7 meses',
      metLabel: 'De qué os conocéis',
      met: 'De nacimiento',
      relationshipsLabel: 'Relaciones',
      relationships: [
        { initials: 'MC', label: 'Élise es la pareja de Marc', meta: '10 años' },
        { initials: 'LA', label: 'Élise es madre de Léa', meta: 'Desde 2019' },
      ],
      recentlyLabel: 'Recientemente',
      timeline: [
        {
          nature: 'meal' as const,
          title: 'Comida en Le Petit Sud',
          meta: 'Hoy · está pensando en volver a vivir a Lyon',
        },
        {
          nature: 'call' as const,
          title: 'Llamada sobre Georges',
          meta: '2 de agosto · 22 minutos',
        },
      ],
      reminder: 'Preguntar qué tal fue la entrevista',
      reminderMeta: 'Recordatorio · mañana',
    },
    features: [
      {
        icon: 'relationship' as const,
        title: 'Relaciones',
        body: 'Entiende familias, parejas, amistades, compañeros de trabajo y los vínculos entre ellos.',
      },
      {
        icon: 'journal' as const,
        title: 'Notas y diario',
        body: 'Recuerda lo que pasó sin recorrer seis aplicaciones de mensajería.',
      },
      {
        icon: 'reminder' as const,
        title: 'Recordatorios',
        body: 'Llamar a tu madre. Felicitar a tu amigo. Preguntar qué tal fue la entrevista. Monica recuerda; el mérito sigue siendo tuyo.',
      },
      {
        icon: 'activity' as const,
        title: 'Actividades',
        body: 'Conserva el historial de comidas, llamadas, viajes, eventos y los pequeños momentos que forman una relación.',
      },
      {
        icon: 'panel' as const,
        title: 'Información a tu medida',
        body: 'Guarda los detalles que te importan a ti, no los campos que un CRM de ventas considera importantes.',
      },
    ],
  },

  notSocial: {
    title: 'Deliberadamente no es una red social.',
    body: 'Monica no recomienda amistades, no clasifica relaciones, no inserta publicidad ni avisa a nadie de que has visto su perfil.',
    body2: 'Es un lugar privado para tus recuerdos y tus relaciones.',
    quote: 'Sin muro. Sin seguidores. Sin marcas que fingen tener personalidad.',
  },

  openSource: {
    title: 'Tuyo quiere decir tuyo.',
    body: 'Monica es de código abierto desde el principio. Eso no va a cambiar.',
    aside: 'La confianza es útil. El código fuente es mejor.',
    sourceCta: 'Explorar el código fuente',
    hostingCta: 'Leer la guía de autoalojamiento',
    listTitle: 'Con Monica v3:',
    items: [
      'el proyecto sigue siendo totalmente de código abierto;',
      'la licencia pasa a ser MIT;',
      'puedes ejecutarla en tu propio servidor;',
      'el producto alojado usa la misma aplicación;',
      'tus datos se pueden exportar;',
      'el código se puede inspeccionar, modificar y bifurcar.',
    ],
  },

  v3: {
    title: 'Monica está creciendo. Más o menos.',
    body: 'Monica v3 se está reconstruyendo desde los cimientos para la próxima década.',
    body2:
      'Será más flexible, más ampliable y mucho mejor en el teléfono, conservando los principios de privacidad y propiedad que hicieron útil a Monica desde el primer día.',
    listLabel: 'Llega en la v3',
    features: [
      {
        icon: 'panel' as const,
        title: 'Fichas que diseñas tú',
        body: 'Elige las secciones y los campos de una ficha en lugar de aceptar nuestra opinión para siempre.',
      },
      {
        icon: 'relationship' as const,
        title: 'Más que contactos',
        body: 'Conecta personas con mascotas, empresas, viviendas, vehículos, proyectos y cualquier otra cosa relevante en su vida.',
      },
      {
        icon: 'journal' as const,
        title: 'Un diario conectado con todo',
        body: 'Registra un momento una sola vez y conéctalo con las personas, fichas, fechas y recordatorios implicados.',
      },
      {
        icon: 'tag' as const,
        title: 'Estructuras creadas por la comunidad',
        body: 'Instala estructuras útiles hechas por otras personas usuarias de Monica y luego modifica tu copia libremente.',
      },
      {
        icon: 'code' as const,
        title: 'Una API completa y un servidor MCP',
        body: 'Todo lo que esté disponible en la interfaz debería estarlo también de forma programática.',
      },
      {
        icon: 'phone' as const,
        title: 'Una experiencia móvil de verdad',
        body: 'Primero una aplicación web adaptable y después aplicaciones nativas para iOS y Android.',
      },
    ],
    cta: 'Descubrir Monica v3',
    note: 'Prevista antes de que acabe 2026 · El acceso beta se abrirá progresivamente',
  },

  founder: {
    title: 'La creé porque tengo mala memoria.',
    body: 'Creé Monica porque no dejaba de olvidar detalles sobre personas que de verdad me importaban.',
    body2:
      'No porque fueran poco importantes. Porque la vida va llena, la memoria es poco fiable y, por lo visto, el cerebro humano no vino con función de búsqueda.',
    body3:
      'Monica empezó como un proyecto personal en 2017. Desde entonces se ha convertido en uno de los proyectos de CRM personal de código abierto más seguidos, sostenido y mejorado por colaboradores de todo el mundo.',
    signature: '— Régis, fundador y persona que todavía olvida cosas de vez en cuando',
  },

  faq: {
    title: 'Las preguntas que se hacen de verdad.',
    items: [
      {
        q: '¿Monica es realmente gratis?',
        a: 'El código es gratuito y siempre lo será. Puedes ejecutarlo en tu propio servidor sin pagar nada. La versión alojada es una suscripción de pago, porque los servidores y las copias de seguridad cuestan dinero y porque financia el trabajo en el proyecto de código abierto.',
      },
      {
        q: '¿Hace falta saber de tecnología para usarla?',
        a: 'Para la versión alojada no: creas una cuenta y empiezas. Alojarla tú pide algo más: Docker, o un entorno PHP que sepas mantener. La documentación explica ambos caminos.',
      },
      {
        q: '¿Quién puede ver mis datos en la versión alojada?',
        a: 'Nadie los consulta. El soporte solo puede acceder a una cuenta con tu permiso explícito y para un problema concreto. Tus datos no se venden nunca, no se usan para publicidad y no se usan para entrenar ningún modelo.',
      },
      {
        q: '¿Puedo llevarme mis datos?',
        a: 'En cualquier momento y por completo, incluidas las estructuras que hayas creado. Exportar es una función, no una carrera de obstáculos para retenerte.',
      },
      {
        q: '¿Puedo importar los contactos que ya tengo?',
        a: 'Sí, archivos vCard y CSV. Los duplicados se te muestran antes de fusionar nada, porque fusionar a las dos personas equivocadas es una forma memorable de arruinar una tarde.',
      },
      {
        q: '¿Qué pasa con mi cuenta cuando llegue la v3?',
        a: 'El objetivo es un camino de migración claro para las cuentas existentes, con contactos, notas, recordatorios y demás información esencial. No se borra nada y no se te impone nada de un día para otro.',
      },
      {
        q: '¿Hay aplicación móvil?',
        a: 'La aplicación web ya funciona en el teléfono. Las aplicaciones nativas de iOS y Android llegarán después de la v3: aplicaciones de verdad, no un sitio web dentro de una carcasa.',
      },
      {
        q: '¿Monica hace algo con la IA?',
        a: 'Monica v3 expone un servidor MCP, así que puedes apuntar tu propio asistente a tus propios datos si quieres. Monica no envía tus relaciones a ningún modelo por iniciativa propia.',
      },
    ],
  },

  plans: {
    title: 'Nuestro servidor. O el tuyo.',
    hosted: {
      title: 'Monica alojada',
      body: 'Para quien quiere Monica sin gestionar un servidor.',
      items: [
        'actualizaciones automáticas;',
        'copias de seguridad gestionadas;',
        'ningún trabajo de infraestructura;',
        'financia el desarrollo del proyecto de código abierto.',
      ],
      cta: 'Crear una cuenta',
    },
    selfHosted: {
      title: 'Aloja Monica tú',
      body: 'Para quien disfruta siendo dueño de su infraestructura, o al menos eso dice.',
      items: [
        'control total;',
        'código abierto;',
        'sin suscripción a Monica;',
        'instalación con Docker o manual.',
      ],
      cta: 'Alojar Monica yo',
    },
  },

  finalCta: {
    title: 'Sé mejor amigo. Con apoyo administrativo.',
    body: 'Recuerda los detalles importantes. Retoma el contacto cuando importa. Mantén tus relaciones fuera de las bases de datos publicitarias.',
    primaryCta: 'Empezar con Monica',
    secondaryCta: 'Ver Monica v3',
    note: 'Código abierto · Alojable por ti · Sin tarjeta de crédito',
  },

  footer: {
    tagline:
      'Un CRM personal privado y de código abierto para recordar a las personas que importan.',
    productLabel: 'Producto',
    buildLabel: 'Desarrollar',
    projectLabel: 'Proyecto',
    api: 'API',
    selfHosting: 'Autoalojamiento',
    github: 'GitHub',
    privacy: 'Privacidad',
    copyright: (year: number) => `© ${year} Monica`,
    since: 'De código abierto desde 2017',
    ownership: 'Tus datos siguen siendo tuyos.',
    languageLabel: 'Cambiar de idioma',
  },
};
