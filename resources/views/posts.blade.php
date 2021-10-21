@extends('layouts.main')

@section('container')
<h1 class="my-4 py-4 text-end">__<?= $head ?>_ .</h1>

@if ($posts->count())
<div class="card mb-3">
<img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{  $posts[0]->category->name  }}">
    <div class="card-body text-center">
        <h2 class="card-title"><a href="posts/{{ $posts[0]->slug }}" class="text-warning">{{ $posts[0]->title }}</a></h2>
        <p class="card-text"><small class="text-muted">by <a class="fw-bold text-black" href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a class="fw-bold text-black" href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> ({{ $posts[0]->created_at->diffForHumans() }})</small></p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-warning">___Read more_ .</a>
    </div>
</div>
@else
    <p class="text-cener fs-4">No posts found.</p>
@endif

<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4">
            <div class="card mb-3">
                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p class="card-text"><small class="text-muted">by <a class="fw-bold text-black" href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> ({{ $posts[0]->created_at->diffForHumans() }})</small></p>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <a href="/posts/{{ $post->slug }}" class="btn btn-warning">Read more</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
@endsection