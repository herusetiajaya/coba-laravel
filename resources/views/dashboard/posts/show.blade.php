@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <a href="/dashboard/posts" class="badge bg-success"><span data-feather="arrow-left"></span></a>
            <a href="" class="badge bg-warning"><span data-feather="edit"></span></a>
            <a href="" class="badge bg-danger"><span data-feather="x-circle"></span></a>
            <div class="card my-3 p-3">
                <h4>{{ $post->title }}</h4>
                By : {{ $post->author->name }}, Category {{ $post->category->name }}
                <img src="https://source.unsplash.com/1200x300?{{ $post->category->name }}" class="img-fluid my-2" alt="">

                {!! $post->body !!}
                
            </div>
        </div>
    </div>
</div>

@endsection
