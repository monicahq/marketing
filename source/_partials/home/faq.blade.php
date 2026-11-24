@include('_partials.faq', [
    'title' => $page->t('home.faq.title'),
    'items' => $page->t('home.faq.items'),
    'openFirst' => true,
    'container' => 'max-w-page px-4 md:px-6',
])
