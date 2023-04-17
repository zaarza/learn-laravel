@extends('layouts.main')

@include('partials.navbar')

@section('content')
<div class="py-4">
    <h1>All Categories</h1>

    <ul>
        <li><a href="/blog" class="text-decoration-none">All</a></li>
        @foreach ($categories as $category)
        <li><a href="/blog?category={{ $category->slug }}" class="text-decoration-none">{{ $category->name }}</a></li>
        @endforeach
    </ul>
</div>
@endsection