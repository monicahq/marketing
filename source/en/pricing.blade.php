---
locale: en
page: pricing
alpine: true
---
@extends('_layouts.base')

@section('body')
    @include('_partials.pricing.plans')
    @include('_partials.pricing.compare')
    @include('_partials.pricing.why-pay')
    @include('_partials.pricing.no-charge')
    @include('_partials.pricing.leaving')
    @include('_partials.pricing.track-record')
    @include('_partials.faq', [
        'title' => $page->t('pricing.faq.title'),
        'items' => $page->t('pricing.faq.items', [':count' => $page->starCount]),
    ])
    @include('_partials.pricing.final-cta')
@endsection
