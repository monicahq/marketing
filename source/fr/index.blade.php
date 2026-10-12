---
locale: fr
page: home
---
@extends('_layouts.base')

@section('body')
    @include('_partials.home.hero')
    @include('_partials.home.product')
    @include('_partials.home.awards')
    @include('_partials.home.agents')
    @include('_partials.home.features')
    @include('_partials.home.open-by-design')
    @include('_partials.home.pricing')
    @include('_partials.home.faq')
@endsection
