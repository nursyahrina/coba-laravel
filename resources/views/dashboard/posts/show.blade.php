@extends('dashboard.layouts.main')

@section('container')
<div class="container">
  <div class="row my-3">
      <div class="col-lg-8">
          <h1 class="mb-3 pt-4 text-end text-warning">__{{ $post->title }}_ .</h1>
          <h5 class="mb-4 text-end"><small class="h6 align-baseline text-muted">({{ $post->created_at->diffForHumans() }})</small> in <span class="fw-bold text-dark" >{{ $post->category->name }}</span>_ .</h5>

          <a href="/dashboard/posts" class="btn btn-sm btn-success"><span data-feather="chevron-left"></span> Back to all my posts</a>
          <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-sm btn-warning"><span data-feather="edit-2"></span> Edit</a>
          
          <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline" onclick="return confirm('Are you sure to delete this post?')">
            @method('delete')
            @csrf
            <button type="submit" class=" btn btn-sm btn-danger"><span data-feather="x-circle"></span> Delete</button>
          </form>

          @if ($post->image)
          <div>
            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-3" style="width: 750px; height: 250px; object-fit: cover;" alt="{{  $post->category->name  }}">
          </div>
          @else
          <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mt-3" alt="{{  $post->category->name  }}">
          @endif
          
          <article class="my-3 fs-6">
            {!! $post->body !!}
          </article>
      
      </div>
  </div>
</div>
@endsection