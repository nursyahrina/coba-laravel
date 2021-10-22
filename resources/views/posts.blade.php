@extends('layouts.main')

@section('container')
<h1 class="my-4 pt-4 text-center">__<?= $title ?>_ .</h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/posts" method="get">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." aria-label="Search" aria-describedby="search" name="search" value="{{ request('search') }}">
                <button class="btn btn-warning" type="submit" id="search"><i class="bi bi-search"></i></button>
              </div>
        </form>
    </div>
</div>

@if ($posts->count())
<div class="card mb-3">
<img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{  $posts[0]->category->name  }}">
    <div class="card-body text-center">
        <h2 class="card-title"><a href="posts/{{ $posts[0]->slug }}" class="text-warning">{{ $posts[0]->title }}</a></h2>
        <p class="card-text"><small class="text-muted">by <a class="fw-bold text-black" href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a class="fw-bold text-black" href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> ({{ $posts[0]->created_at->diffForHumans() }})</small></p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-warning">Read more</a>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="fs-6 badge rounded-pill position-absolute ms-3 mt-3" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/posts?category={{ $post->category->slug }}" class="text-white">{{ $post->category->name }}</a></div>
                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p class="card-text"><small class="text-muted">by <a class="fw-bold text-black" href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> ({{ $post->created_at->diffForHumans() }})</small></p>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <a href="/posts/{{ $post->slug }}" class="btn btn-warning">Read more</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>

@else
    <p class="text-center fs-4">No posts found.</p>
@endif

<div class="d-flex justify-content-center">
    {{ $posts->links() }}
</div>

@endsection