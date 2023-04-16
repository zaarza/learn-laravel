@extends('layouts.main')

@include('partials.navbar')

@section('content')
    <div class="py-4 d-flex flex-column row-gap-4">
        <div class="d-flex flex-column row-gap-2">
            <h1 class="m-0">{{ $title }}</h1>
        </div>

        @if ($posts->count())
            <div class="card">
                <img src="..." alt="..." class="card-img-top">
                <div class="card-body d-flex flex-column align-items-center row-gap-4">
                    <div class="d-flex flex-column align-items-center row-gap-2">
                        <h1 class="fs-3 card-title m-0">{{ $posts[0]->title }}</h1>
                        <a href="/authors/{{ $posts[0]->username }}" class="text-decoration-none m-0 text-muted">{{ $posts[0]->user->name }}</a>
                        <a href="/categories/{{ $posts[0]->category->slug }}" class="badge bg-secondary fw-normal m-0 text-decoration-none" style="width: fit-content">#{{ $posts[0]->category->name }}</a>
                    </div>

                    <p class="card-text">{{ $posts[0]->excerpt }}</p>
                    <a href="/blog/{{ $posts[0]->slug }}" class="btn btn-primary" style="width: fit-content">Read more...</a>
                    <p class="card-text"><small class="text-muted">Posted at {{ $posts[0]->created_at->diffForHumans() }}</small></p>
                </div>
            </div>

        @else
            <p class="text-center fs-4">No post found.</p>
        @endif

        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4">
                        <article class="bg-body-tertiary p-3 shadow-sm d-flex flex-column row-gap-2">
                            <div class="row">
                                <div class="col-9">
                                    <h1 class="fs-4"><a href="/blog/{{ $post->slug }}" class="text-decoration-none text-nowrap overflow-hidden w-100">{{ $post->title }}</a></h1>
                                </div>
                                <div class="col-3 text-end">
                                    <a href="/authors/{{ $post->user->username }}" class="text-decoration-none text-muted">{{ $post->user->name }}</a>
                                </div>
                            </div>
                            <a href="/categories/{{ $post->category->slug }}" class="badge bg-secondary fw-normal text-decoration-none" style="width: fit-content">#{{ $post->category->name }}</a>
                            <p>{{ $post->excerpt }} <a href="/blog/{{ $post->slug }}" class="text-decoration-none">Read more...</a></p>
                            <p class="text-muted">Posted at {{ $post->created_at->diffForHUmans() }}</p>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection