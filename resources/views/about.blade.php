@extends('layouts.main')

@include('partials.navbar')

@section('content')
    <h1>About</h1>

    <img src="assets/images/{{ $image }}" alt="{{ $name }}" width="200px">
    <p>{{ $name }}</p>
    <p>{{ $email }}</p>
@endsection