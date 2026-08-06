---
locale: es
page: blog
pagination:
    collection: posts
---
@extends('_layouts.base')

@section('body')
    @include('_partials.blog.index')
@endsection
