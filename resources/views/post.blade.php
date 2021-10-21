@extends('layouts.main')

@section('container')
<article>
    <h1 class="mt-4 pt-4 text-end text-warning">__{{ $post->title }}_ .</h1>
    <h5 class="mb-4 pb-4 text-end">__by <a class="fw-bold text-dark" href="#">{{ $post->user->name }}</a> in <a class="fw-bold text-dark" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>_ .</h5>
    
    {!! $post->body !!}

    <a href="/posts" class="d-block mt-3 fw-bold text-warning">___Back to Blog_ .</a>
</article>
@endsection