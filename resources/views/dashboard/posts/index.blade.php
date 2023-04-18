@extends('dashboard.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex flex-column flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 border-bottom">
        <h1>My Post</h1>
        <div class="table-responsive col-lg-8">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Title</th>
                  <th scope="col">Category</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post['title'] }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                            <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-warning"><i class="bi bi-pencil"></i></i></a>
                            <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-danger"><i class="bi bi-trash"></i></i></a>
                        </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
    </main>
@endsection
