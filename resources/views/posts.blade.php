@extends('layouts.main')

@section('container')
    <h1 class="mb-3">{{ $title }}</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/blog">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-2">
                    <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                    <button class="btn btn-dark" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
    <div class="card mb-3">
        <div class="position-absolute px-3 py-1">
            <a href="/blog?category={{ $posts[0]->category->slug }}" class="catcol">{{ $posts[0]->category->name }}</a>
        </div>
        <img src="https://source.unsplash.com/1200x250?{{ $posts[0]->category->name }}" class="card-img-top" alt="">
        <div class="card-body text-center">
            <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-dark">{{ $posts[0]->title }}</a></h3>
            <p>
                <small class="text-muted">
                    By. <a href="/blog?author={{ $posts[0]->author->username }}" class="">{{ $posts[0]->author->name }}</a> in <a href="/blog?category={{ $posts[0]->category->slug }}" class="">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForhumans() }}
                </small>
            </p>
            <p class="card-text">{{ $posts[0]->excerpt }} 
                <a href="/posts/{{ $posts[0]->slug }}" class="">readmore...</a>
            </p>
        </div>
    </div>

    <div class="container">
        <div class="row">
                @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="position-absolute px-3 py-1">
                            <a href="/blog?category={{ $post->category->slug }}" class="catcol">{{ $post->category->name }}</a>
                        </div>
                        <img src="https://source.unsplash.com/500x200?{{ $post->category->name }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><a href="/posts/{{ $post->slug }}" class="">{{ $post->title }}</a></h5>
                            <p>
                                <small class="text-muted">
                                    By. <a href="/blog?author={{ $post->author->username }}" class="">{{ $post->author->name }}</a> {{ $post->created_at->diffForhumans() }}
                                </small>
                            </p>   
                            <p class="card-text">{{ $post->excerpt }}
                                <a href="/posts/{{ $post->slug }}" class="">readmore...</a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach 
        </div>
    </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif

@endsection
