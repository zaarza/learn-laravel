@extends('dashboard.layouts.main')

@section('container')
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="py-5">
                    <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left"></i> Back to posts</a>
                    <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-warning"><i class="bi bi-pencil"></i></i> Edit</a>
                    <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-danger"><i class="bi bi-trash"></i></i> Remove</a>
                </div>

                <article class="bg-body-tertiary p-3 shadow-sm d-flex flex-column row-gap-2">
                    @if ($post->image)
                        <div style="max-height: 300px">
                            <img src="{{ asset("storage/$post->image") }}" alt="Post image" class="card-img-top img-fluid">
                        </div>
                    @else
                    <img src="https://source.unsplash.com/random/500x400/?{{ $post->category->name }}" alt="Post image" class="card-img-top img-fluid">
                    @endif
                    <div class="d-flex justify-content-between">
                        <h1 class="fs-4"><a href="/blog/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h1>
                        <a href="" class="text-decoration-none text-muted">{{ $post->user->name }}</a>
                    </div>
                    {!! $post->body !!}
                    <a href="/categories/{{ $post->category->slug }}" class="badge bg-secondary fw-normal text-decoration-none" style="width: fit-content">#{{ $post->category->name }}</a>
                </article>
            </div>
        </div>
@endsection
