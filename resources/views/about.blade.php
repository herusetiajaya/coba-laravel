@extends('layouts.main')

@section('container')
    <h1>About Page</h1>
    <h4 class="abouth4name">{{ $name }}</h4>
    <p>Email : {{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle mb-3">
@endsection
