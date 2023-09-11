@extends('layouts.main')

@section('container')
    <h1>Home Page</h1>
    <div class="row text-white pt-3 px-5">

        @auth
        <h3>Welcome back, {{ auth()->user()->name }}</h3>
        @else
        <h3>Welcome, Stranger</h3>
        @endif

    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-lg">
            <div class="card mb-3 ">
                <img src="https://source.unsplash.com/1200x350?technology" class="card-img-top" alt="">
            </div>
        </div>
    </div>
@endsection
