@extends('layouts.main')

@section('container')
    <h1 class="mb-1">{{ $title }}</h1>
    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/blog">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                    <button class="btn btn-dark" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
    <div class="row justify-content-center">
    <div class="col-lg-7">
    <div class="card mb-3">
        <div class="cat-name-div position-absolute px-3 py-1">
            <a href="/blog?category={{ $posts[0]->category->slug }}" class="cat-name">{{ $posts[0]->category->name }}</a>
        </div>
        @if ($posts[0]->image)
            <div class="img-post-div-bigger">
                <img src="{{ asset('storage/' . $posts[0]->image) }}" class="post-bigger-img card-img-top img-fluid" alt="">
            </div>
        @else
            <img src="https://source.unsplash.com/1200x250?{{ $posts[0]->category->name }}" class="card-img-top" alt="">
        @endif
        <div class="card-body text-center">
            <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-dark">{{ $posts[0]->title }}</a></h3>
            <p>
                <small class="text-muted">
                    By. <a href="/blog?author={{ $posts[0]->author->username }}" class="">{{ $posts[0]->author->name }}</a> in <a href="/blog?category={{ $posts[0]->category->slug }}" class="">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForhumans() }}
                </small>
            </p>
            <p class="card-text text-start">{{ $posts[0]->excerpt }} 
                <a href="/posts/{{ $posts[0]->slug }}" class="">Readmore</a>
            </p>
        </div>
    </div>
    </div>
    </div>

    <div class="container">
        <div class="row">
                @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="cat-name-div position-absolute px-3 py-1">
                            <a href="/blog?category={{ $post->category->slug }}" class="cat-name">{{ $post->category->name }}</a>
                        </div>
                        
                        @if ($post->image)
                            <div class="img-posts-card card-img-top">
                                <img src="{{ asset('storage/' . $post->image) }}" class="posts-card-img card-img-top rounded-top" alt="">
                            </div> 
                        @else
                            <img src="https://source.unsplash.com/500x200?{{ $post->category->name }}" class="card-img-top" alt="">
                        @endif

                        <div class="card-body">
                            <h5 class="card-title"><a href="/posts/{{ $post->slug }}" class="">{{ $post->title }}</a></h5>
                            <p>
                                <small class="text-muted">
                                    By. <a href="/blog?author={{ $post->author->username }}" class="">{{ $post->author->name }}</a> {{ $post->created_at->diffForhumans() }}
                                </small>
                            </p>   
                            <p class="card-text">{{ $post->excerpt }}
                                <a href="/posts/{{ $post->slug }}" class="">Readmore</a>
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

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>

@endsection
