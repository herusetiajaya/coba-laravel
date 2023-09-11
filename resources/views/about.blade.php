@extends('layouts.main')

@section('container')
    <h1>About Page</h1>
    <div class="about-page row">
        <h4 class="abouth4">{{ $name }}</h4>
        <h4 class="abouth4">{{ $email }}</h4>
        <img src="img/{{ $image }}" alt="{{ $name }}" class="img-thumbnail rounded-circle my-3">
    </div>
@endsection
