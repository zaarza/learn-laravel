@extends('layouts.main')

@include('partials.navbar')

@section('content')
    <div class="py-4 d-flex row-gap-4 flex-column">
        <a href="/blog" class="text-decoration-none">Back to posts</a>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <article class="bg-body-tertiary p-3 shadow-sm d-flex flex-column row-gap-2">
                    <img src="https://source.unsplash.com/random/500x400/?{{ $post->category->name }}" alt="Post image" class="card-img-top img-fluid">
                    <div class="d-flex justify-content-between">
                        <h1 class="fs-4"><a href="/blog/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h1>
                        <a href="" class="text-decoration-none text-muted">{{ $post->user->name }}</a>
                    </div>
                    {!! $post->body !!}
                    <a href="/categories/{{ $post->category->slug }}" class="badge bg-secondary fw-normal text-decoration-none" style="width: fit-content">#{{ $post->category->name }}</a>
                </article>
            </div>
        </div>
    </div>
@endsection