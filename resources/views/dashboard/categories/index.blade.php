@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Post Categories</h1>
</div>

@if (session()->has('success'))
<div class="alert-signin alert alert-success alert-dismissible fade show ms-auto m-auto mb-3" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="table-responsive col-md-8">
  <a href="/dashboard/categories/create" class="btn btn-dark mb-3 text-warning">Add New Category</a>
  <table class="table table-striped">
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
          <a href="/dashboard/categories/{{ $category->slug }}/edit" class="btn btn-sm btn-warning border-0 px-1 pt-0 me-1 mb-1 mb-lg-0"><span data-feather="edit-2"></span></a>
          <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="d-inline" onclick="return confirm('Are you sure to delete this category?')">
            @method('delete')
            @csrf
            <button type="submit" class=" btn btn-sm btn-danger border-0 px-1 pt-0 me-1 mb-0"><span data-feather="x-circle"></span></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection