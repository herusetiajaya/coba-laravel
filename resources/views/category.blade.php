{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
<h1 class="mb-3">Post Category : {{ $category }}</h1>
<p><a href="/categories" class="">Categories</a></p>
    @foreach ($posts as $post)
    <article class="mb-1 border-bottom">
        <h4><a href="/posts/{{ $post->slug }}" class="">{{ $post->title }}</a></h4>

        <p>By. <a href="/author/{{ $post->author->username }}" class="">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="">{{ $post->category->name }}</a></p>

        <p>{{ $post->excerpt }} <br> <a href="/posts/{{ $post->slug }}" class="">Read more ..</a></p>
    </article>
    @endforeach
@endsection
