@extends('layouts.main')

@section('container')
<h1 class="my-4 py-4 text-end">__Post(s) by Author, <span class="text-warning">{{ $author }}_ .</span></h1>

@foreach ($posts as $post)
<article class="mb-5 pb-4 border-bottom">
    <h2>
        <a href="../posts/{{ $post->slug }}" class="text-warning">{{ $post->title }}</a>
    </h2>
    <p>in <a class="fw-bold text-black" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
    <p>{{ $post->excerpt }}</p>

    <a href="/posts/{{ $post->slug }}" class="fw-bold text-warning">___Read more_ .</a>
</article>
@endforeach
@endsection