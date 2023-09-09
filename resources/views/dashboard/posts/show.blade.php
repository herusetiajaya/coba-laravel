@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <a href="/dashboard/posts" class="badge bg-success"><span data-feather="arrow-left"></span></a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
            </form>
            <div class="card my-3 p-3">
                <h4>{{ $post->title }}</h4>
                By : {{ $post->author->name }}, Category {{ $post->category->name }}

                @if ($post->image)
                    <div class="img-post-div">
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-post img-fluid my-2" alt="">
                    </div> 
                @else
                    <img src="https://source.unsplash.com/1200x300?{{ $post->category->name }}" class="img-fluid my-2" alt="">
                @endif

                {!! $post->body !!}
                
            </div>
        </div>
    </div>
</div>

@endsection
