@extends('layouts.main')

@include('partials.navbar')

@section('content')
    <div class="row justify-content-center h-100 align-items-center">
        <div class="col-md-4">
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                </div>
            @endif

            <form action="/login" method="POST" class="d-flex flex-column row-gap-3">
                @csrf
                <h1 class="h3 fw-normal text-center">Login</h1>
                <div class="form-floating">
                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email address" autofocus required value="{{ old('email') }}">
                    <label for="floatingInput">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
            <small class="text-center d-block">Doesn't have an account? <a href="/register" class="text-decoration-none">Register!</a></small>
        </div>
    </div>

@endsection
