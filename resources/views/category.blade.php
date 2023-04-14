@extends('layouts.main')

@include('partials.navbar')

@section('content')
<div class="py-4 d-flex flex-column row-gap-4">
    <a href="/blog" class="btn btn-primary" style="width: fit-content">Back</a>
    <h1>{{ $category }}</h1>
    
    <div class="d-flex flex-column row-gap-4">
        @foreach ($posts as $post)
            <article class="bg-body-tertiary p-3">
                <a href="/blog/{{ $post->slug }}"><h4>{{ $post->title }}</h4></a>
                <p>Udin <a href="/categories/{{ $post->category->slug }}" class="badge bg-primary link-underline-primary">{{ $post->category->name }}</a></p>
                <h6>{{ $post->author }}</h6>
                <p>{{ $post->excerpt }}</p>
            </article>
        @endforeach
    </div>
</div>
@endsection