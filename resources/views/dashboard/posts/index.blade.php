@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Posts</h1>
</div>

<div class="table-responsive">
  <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create New Post</a>
  <table class="table table-striped">
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
        <td>{{ $post->title }}</td>
        <td>{{ $post->category->name }}</td>
        <td>
          <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-sm btn-info px-1 pt-0 me-1 mb-1 mb-lg-0"><span data-feather="eye"></span></a>
          <a href="#" class="btn btn-sm btn-warning px-1 pt-0 me-1 mb-1 mb-lg-0"><span data-feather="edit-2"></span></a>
          <a href="#" class="btn btn-sm btn-danger px-1 pt-0 me-1 mb-0"><span data-feather="x-circle"></span></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection