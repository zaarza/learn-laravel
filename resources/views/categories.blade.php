@extends('layouts.main')

@include('partials.navbar')

@section('content')
<div class="py-4">
    <h1>All Categories</h1>

    <ul>
        @foreach ($categories as $category)
        <li><a href="categories/{{ $category->slug }}">{{ $category->name }}</a></li>
        @endforeach
    </ul>
</div>
@endsection