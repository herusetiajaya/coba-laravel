@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-4">
        <main class="form-signin bg-light p-3 mb-3 mt-3 rounded-3">
          @if(session()->has('success'))
          <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong> Please login
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @else
          <img class="mb-2 rounded-3" src="https://source.unsplash.com/500x200?water" alt="" width="72" height="57">
          @endif
            <h1 class="h3 mb-3 fw-normal">Please Login</h1>
            <form>
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
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
