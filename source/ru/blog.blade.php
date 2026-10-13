---
locale: ru
page: blog
pagination:
    collection: posts_ru
---
@extends('_layouts.base')

@section('body')
    @include('_partials.blog.index')
@endsection
