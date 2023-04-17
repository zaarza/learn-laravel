@extends('layouts.main')

@include('partials.navbar')

@section('content')
    <div class="row justify-content-center h-100 align-items-center">
        <div class="col-md-4">
            <form class="d-flex flex-column row-gap-3">
                <h1 class="h3 fw-normal text-center">Login</h1>
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
            <small class="text-center d-block">Doesn't have an account? <a href="/register" class="text-decoration-none">Register!</a></small>
        </div>
    </div>

@endsection