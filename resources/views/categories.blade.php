{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
<h1 class="mb-3">Post Categories</h1>
    @foreach ($categories as $category)
        <ul class="pb-1">
            <li>
                <h4><a href="/categories/{{ $category->slug }}" class="">{{ $category->name }}</a></h4>
            </li>
        </ul>
    @endforeach
@endsection
