@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-3">
        <div class="col-md-8">
            <h1 class="mb-1">Post Page</h1>
            <div class="card mb-3 p-3">
                <h4>{{ $post->title }}</h4>
                <p>By. <a href="/author/{{ $post->author->username }}" class="">{{ $post->author->name }}</a> in <a href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                <img src="https://source.unsplash.com/1200x300?{{ $post->category->name }}" class="img-fluid mb-2" alt="">
                <small>
                    {!! $post->body !!}
                </small>
                <a href="/blog" class="d-block">&laquo; Blog</a>
            </div>
        </div>
    </div>
</div>
@endsection
