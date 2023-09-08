@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-4">
        <main class="form-signin bg-light p-3 mb-3 mt-3 rounded-3">
          @if(session()->has('success'))
          <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong> Please login
            <button type="submit" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          @if(session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('loginError') }}</strong> Try again
            <button type="submit" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
            <img class="mb-2 rounded-3" src="https://source.unsplash.com/500x200?water" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Please Login</h1>
            <form action="/login" method="post">
              @csrf

              <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>

              <div class="form-floating">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>

              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
            <small>
              <p class="mt-3 d-block text-center">Not registered? <a href="/register">Register Now!</a></p>
              <p class="mt-3 text-muted">&copy; 07-09-2023</p>
            </small>
        </main>
    </div>
</div>
    
@endsection
