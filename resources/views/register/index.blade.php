@extends('layouts.main')

@include('partials.navbar')

@section('content')
    <div class="row justify-content-center h-100 align-items-center">
        <div class="col-md-4">
            <form action="/register" method="POST" class="d-flex flex-column row-gap-3">
                @csrf
                <h1 class="h3 fw-normal text-center">Register</h1>

                <div class="form-floating">
                    <input type="text" class="form-control @error('name')is-invalid @enderror" name="name" placeholder="Name" value="{{ old('name') }}">
                    <label for="floatingInput">Name</label>
                    @error('name')
                     <div class="invalid-feedback">
                        {{ $message }}
                      </div>                  
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="text" class="form-control @error('username')is-invalid @enderror" name="username" placeholder="Username" value="{{ old('username') }}">
                    <label for="floatingInput">Username</label>
                    @error('username')
                     <div class="invalid-feedback">
                        {{ $message }}
                      </div>                  
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="email" class="form-control @error('email')is-invalid @enderror" name="email" placeholder="Email address" value="{{ old('email') }}">
                    <label for="floatingInput">Email address</label>
                    @error('email')
                     <div class="invalid-feedback">
                        {{ $message }}
                      </div>                  
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control @error('password')is-invalid @enderror" name="password" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                    @error('password')
                     <div class="invalid-feedback">
                        {{ $message }}
                      </div>                  
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
            </form>
            <small class="text-center d-block">Already have an account? <a href="/login" class="text-decoration-none">Login!</a></small>
        </div>
    </div>

@endsection