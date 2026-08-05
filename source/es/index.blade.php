---
locale: es
page: home
---
@extends('_layouts.base')

@section('body')
    @include('_partials.home.hero')
    @include('_partials.home.proof-strip')
    @include('_partials.home.not-a-lead')
    @include('_partials.home.showcase')
    @include('_partials.home.not-social')
    @include('_partials.home.open-source')
    @include('_partials.home.v3')
    @include('_partials.home.founder')
    @include('_partials.home.faq')
    @include('_partials.home.plans')
    @include('_partials.home.final-cta')
@endsection
