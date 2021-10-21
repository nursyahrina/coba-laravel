@extends('layouts.main')

@section('container')
<h1 class="my-4 py-4 text-end">__<?= $head ?>_ .</h1>

@if ($posts->count())
<div class="card mb-3">
<img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top" alt="Img for {{ $posts[0]->title }}">
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

@foreach ($posts as $post)
<article class="mb-5 pb-4 border-bottom">
    <h2>
        <a href="posts/{{ $post->slug }}" class="text-warning">{{ $post->title }}</a>
    </h2>
    <p>by <a class="fw-bold text-black" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="fw-bold text-black" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    <p>{{ $post->excerpt }}</p>

    <a href="/posts/{{ $post->slug }}" class="fw-bold text-warning">___Read more_ .</a>
</article>
@endforeach
@endsection