@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-3">
        <div class="col-md-8">
            <h1 class="mb-3 pt-4 text-end text-warning">__{{ $post->title }}_ .</h1>
            <h5 class="mb-4 pb-4 text-end"><small class="h6 align-middle text-muted">({{ $post->created_at->diffForHumans() }})</small> __by <a class="fw-bold text-dark" href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="fw-bold text-dark" href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>_ .</h5>
            
            @if ($post->image)
            <div>
                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" style="width: 750px; height: 250px; object-fit: cover;" alt="{{  $post->category->name  }}">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{  $post->category->name  }}">
            @endif
            
            <article class="my-3 fs-6">
                {!! $post->body !!}
            </article>
        
            <a href="/posts" class="d-block mt-3 fw-bold text-warning">___Back to Blog_ .</a>
        </div>
    </div>
</div>
@endsection