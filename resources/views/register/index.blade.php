@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-registration bg-light p-3 mb-3 mt-3 rounded-3">
            <img class="mb-2 rounded-3" src="https://source.unsplash.com/500x200?logo" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
            <form>

            <div class="form-floating">
                <input type="text" class="form-control rounded-top" name="name" id="name" placeholder="Name">
                <label for="floatingInput">Name</label>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                <label for="floatingInput">Username</label>
            </div>

            <div class="form-floating">
                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control rounded-bottom" name="password" id="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
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
