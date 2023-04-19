@extends('layouts.main')

@include('partials.navbar')

@section('content')
    <div class="py-4 d-flex flex-column row-gap-4">
        <div class="d-flex flex-column row-gap-2">
            <h1 class="m-0">{{ $title }}</h1>
            <form action="">
                <div class="input-group">
                    @if (request(['category']))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if (request(['author']))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif

                    <input type="text" name="search" class="form-control" placeholder="Search..." value="{{ request('search') }}">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
        </div>

        @if ($posts->count())
            <div class="card">
                @if ($posts[0]->image)
                    <div style="max-height: 300px; overflow: hidden;">
                        <img src="{{ asset("storage/" . $posts[0]->image) }}" alt="Post image" class="card-img-top img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/random/1200x400/?{{ $posts[0]->category->name }}" alt="Post image" class="card-img-top">
                @endif

                <div class="card-body d-flex flex-column align-items-center row-gap-4">
                    <div class="d-flex flex-column align-items-center row-gap-2">
                        <h1 class="fs-3 card-title m-0">{{ $posts[0]->title }}</h1>
                        <p>By. <a href="/blog?author={{ $posts[0]->user->username }}" class="text-decoration-none">{{ $posts[0]->user->name }}</a> in <a href="/blog/?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a></p>
                    </div>

                    <p class="card-text">{{ $posts[0]->excerpt }}</p>
                    <a href="/blog/{{ $posts[0]->slug }}" class="btn btn-primary" style="width: fit-content">Read more...</a>
                    <p class="card-text"><small class="text-muted">Posted at {{ $posts[0]->created_at->diffForHumans() }}</small></p>
                </div>
            </div>

        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4">
                        <div class="card">
                            {{-- <a href="/categories/{{ $post->category->name }}" style="width: fit-content; position: absolute; left: 20px; top: 20px; " class="bg-black text-white text-decoration-none py-2 px-3">{{ $post->category->name }}</a> --}}
                            @if ($post->image)
                                <div style="max-height: 300px">
                                    <img src="{{ asset("storage/$post->image") }}" alt="Post image" class="card-img-top img-fluid">
                                </div>
                            @else
                                <img src="https://source.unsplash.com/random/500x400/?{{ $post->category->name }}" alt="Post image" class="card-img-top img-fluid">
                            @endif
                            <div class="card-body">
                                <h1 class="fs-5 card-title">{{ $post->title }}</h1>
                                <p>By. <a href="/blog?author={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                                <p class="card-text">{{ $post -> excerpt }}</p>
                                <a href="/blog/{{ $post->slug }}" class="btn btn-primary">Read more...</a>
                                <p>Posted at {{ $post->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="d-flex justify-content-end">
            {{ $posts->links() }}
        </div>
f
        @else
            <p class="text-center fs-4">No post found.</p>
        @endif
    </div>
@endsection
