@extends('layouts.main')

@include('partials.navbar')

@section('content')
    <div class="py-4">
        <a href="/blog">Back to posts</a>

        <article class="bg-body-tertiary p-3 mt-4">
            <h4>{{ $post->title }}</h4>
            <h6>{{ $post->author }}</h6>
            {!! $post->body !!}
        </article>
    </div>
@endsection