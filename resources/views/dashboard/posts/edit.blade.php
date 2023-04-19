@extends('dashboard.layouts.main')

@section('container')
<div class="row">
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex flex-column pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Create new post</h1>
            </div>

            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-flex flex-column row-gap-3">
                @method("PUT")
                @csrf
                <div class="form-floating">
                    <input type="text" class="form-control @error('title')is-invalid @enderror" name="title" id="title" placeholder="Title" value="{{ old('title',$post->title) }}" onchange="checkSlug(event)">
                    <label for="floatingInput">Title</label>
                    @error('title')
                     <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="text" class="form-control @error('slug')is-invalid @enderror" name="slug" id="slug" placeholder="slug" value="{{ old('slug',$post->slug) }}">
                    <label for="floatingInput">Slug</label>
                    @error('slug')
                     <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>

                <div>
                    <label for="category_id" class="form-label">Category</label>
                        <select class="form-select @error('category_id')is-invalid @enderror" name="category_id" id="category_id">
                            <option selected disabled>Select category</option>
                            @foreach ($categories as $category)
                                @if (old('category_id',$post->category_id) == $category->id)
                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                @else
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                  </div>

                <div>
                    <input id="body" type="hidden" name="body" value="{{ old('body',$post->body) }}">
                    <trix-editor input="body" @error('body')style="border: 1px solid #dc3545;" @enderror></trix-editor>
                        @error('body')
                                <small class="mt-1" style="color: #dc3545;">
                                    {{ $message }}
                                </small>
                        @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Update</button>
            </form>
    </main>
</div>

<script>
    function checkSlug(event) {
        fetch(`/dashboard/posts/checkslug?title=${event.target.value}`)
            .then((response) => response.json())
            .then((data) => document.querySelector('#slug').value = data.slug)
    };

    document.addEventListener('trix-file-accept', (event) => {
        event.preventDefault();
    });
</script>
@endsection