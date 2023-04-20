@extends('dashboard.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex flex-column flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 border-bottom">
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Categories</h1>
            </div>

        <div class="table-responsive col-lg-8 mt-3">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="/dashboard/categories/{{ $category->slug }}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                            <a href="/dashboard/categories/{{ $category->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil"></i></i></a>
                            <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger" onclick="return confirm('Confirm delete this post?')"><i class="bi bi-trash"></i></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
    </main>
@endsection
