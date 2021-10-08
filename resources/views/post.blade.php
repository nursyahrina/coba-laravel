@extends('layouts.main')

@section('container')
<article>
    <h1 class="mt-4 pt-4 text-end text-warning">__{{ $post->title }}_ .</h1>
    <h5 class="mb-4 pb-4 text-end">__by {{ $post->author }}_ .</h5>
    {!! $post->body !!}
</article>
<a href="/blog" class="fw-bold text-center text-warning">___Back to Blog_ .</a>
@endsection