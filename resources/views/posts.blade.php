@extends('layouts.main')

@include('partials.navbar')

@section('content')
    <div class="py-4 d-flex flex-column row-gap-4">
        <div class="d-flex flex-column row-gap-2">
            <h1 class="m-0">Blog</h1>
            <h2 class="fs-6 m-0">Showing all posts in all <a href="/categories" class="text-decoration-none">category</a></h2>
        </div>

        <div class="d-flex flex-column row-gap-4">
            @foreach ($posts as $post)
                <article class="bg-body-tertiary p-3 shadow-sm d-flex flex-column row-gap-2">
                    <div class="d-flex justify-content-between">
                        <h1 class="fs-4"><a href="/blog/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h1>
                        <a href="" class="text-decoration-none text-muted">{{ $post->user->name }}</a>
                    </div>
                    <p>{{ $post->excerpt }}</p>
                    <a href="/categories/{{ $post->category->slug }}" class="badge bg-secondary fw-normal text-decoration-none" style="width: fit-content">#{{ $post->category->name }}</a>
                </article>
            @endforeach
        </div>
    </div>
@endsection