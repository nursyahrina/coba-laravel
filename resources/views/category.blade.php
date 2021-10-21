@extends('layouts.main')

@section('container')
<h1 class="my-4 py-4 text-end">__Post(s) in Category, <span class="text-warning">{{ $category }}_ .</span></h1>

@foreach ($posts as $post)
<article>
    <h2>
        <a href="../posts/{{ $post->slug }}" class="text-warning">{{ $post->title }}</a>
    </h2>
    <h5>by {{ $post->author }}</h5>
    <p>{{ $post->excerpt }}</p>
</article>
@endforeach
@endsection