@extends('dashboard.layouts.main')

@section('container')
<div class="container">
  <div class="row my-3">
      <div class="col-lg-8">
          <h1 class="mb-3 pt-4 text-end text-warning">__{{ $post->title }}_ .</h1>
          <h5 class="mb-4 text-end"><small class="h6 align-baseline text-muted">({{ $post->created_at->diffForHumans() }})</small> in <span class="fw-bold text-dark" >{{ $post->category->name }}</span>_ .</h5>

          <a href="/dashboard/posts" class="btn btn-sm btn-success"><span data-feather="chevron-left"></span> Back to all my posts</a>
          <a href="/dashboard/posts" class="btn btn-sm btn-warning"><span data-feather="edit-2"></span> Edit</a>
          
          <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline" onclick="return confirm('Are you sure to delete this post?')">
            @method('delete')
            @csrf
            <button type="submit" class=" btn btn-sm btn-danger"><span data-feather="x-circle"></span> Delete</button>
          </form>
          <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mt-3" alt="{{  $post->category->name  }}">
      
          {!! $post->body !!}
      
      </div>
  </div>
</div>
@endsection