@extends('layouts.main')

@section('container')
<h1 class="my-4 py-4 text-end">__New(s) from Rubie'Studio!_ .</h1>

@foreach ($posts as $post)
<article>
    <h2>
        <a href="blog/{{ $post["slug"] }}" class="text-warning">{{ $post["title"] }}</a>
    </h2>
    <h5>by {{ $post["author"] }}</h5>
    <p>{{ $post["body"] }}</p>
</article>
@endforeach
@endsection