@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-registration bg-light p-3 mb-3 mt-3 rounded-3">
            <img class="mb-2 rounded-3" src="https://source.unsplash.com/500x200?water" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
            <form action="/register" method="post">
                @csrf
            <div class="form-floating">
                <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name" required value="{{ old('name') }}">
                <label for="floatingInput">Name</label>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Username" required value="{{ old('username') }}">
                <label for="floatingInput">Username</label>
                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="floatingInput">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
            </form>
            <small>
                <p class="mt-3 d-block text-center">Already Register? <a href="/login">Login</a></p>
                <p class="mt-3 text-muted">&copy; 07-09-2023</p>
            </small>
        </main>
    </div>
</div>
    
@endsection
