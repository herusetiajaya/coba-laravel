@extends('layouts.main')

@section('container')
<h1 class="mb-3">Blog Single Post Page</h1>
    <article class="pb-2">
        <h4>{{ $post->title }}</h4>

        <p>By. <a href="/author/{{ $post->author->username }}" class="">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

        {!! $post->body !!}
        <a href="/blog" class="d-block">&laquo; Blog</a>
    </article>
@endsection
