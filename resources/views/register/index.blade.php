@extends('layouts.main')

@include('partials.navbar')

@section('content')
    <div class="row justify-content-center h-100 align-items-center">
        <div class="col-md-4">
            <form class="d-flex flex-column row-gap-3">
                <h1 class="h3 fw-normal text-center">Register</h1>
                <div class="form-floating">
                    <input type="text" class="form-control" name="name" placeholder="Name">
                    <label for="floatingInput">Name</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" name="email" placeholder="Email address">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
            </form>
            <small class="text-center d-block">Already have an account? <a href="/login" class="text-decoration-none">Login!</a></small>
        </div>
    </div>

@endsection