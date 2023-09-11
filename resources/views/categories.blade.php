@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row">
        <h1 class="mb-3">Post Categories</h1>
        @foreach ($categories as $category)
            <div class="col-md-4">
                <div class="card bg-dark text-white mb-3">
                    <div class="card p-1">
                        <a href="/blog?category={{ $category->slug }}">
                        <img src="https://source.unsplash.com/1200x300?{{ $category->name }}" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="cat-name-div position-absolute m-1 px-4">
                        <a href="/blog?category={{ $category->slug }}" class="cat-name">{{ $category->name }}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
