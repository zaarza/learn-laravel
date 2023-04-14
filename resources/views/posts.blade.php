@extends('layouts.main')

@include('partials.navbar')

@section('content')
    <div class="py-4 d-flex flex-column row-gap-4">
        <div class="d-flex flex-column row-gap-2">
            <h1 class="m-0">{{ $title }}</h1>
        </div>

        <div class="d-flex flex-column row-gap-4">
            @foreach ($posts as $post)
                @include('partials.shortPost')
            @endforeach
        </div>
    </div>
@endsection