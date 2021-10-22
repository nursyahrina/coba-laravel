@extends('layouts.main')

@section('container')
<h1 class="my-4 py-4 text-end">__Post Category(ies)_ .</h1>

<div class="d-flex flex-wrap-reverse justify-content-start">
    @foreach ($categories as $category)
    <a href="/posts?category={{ $category->slug }}" class="card m-3 text-white cat-card shadow">
        <img src="https://source.unsplash.com/300x180?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
        <div class="d-flex align-items-center card-img-overlay" style="background-color: <?= ($category->id % 2 == 0) ? 'rgba(0, 0, 0, 0.5)' : 'rgba(255, 193, 7, 0.5)' ?>">
            <p class="h2 fw-bold card-title">{{ $category->name }}</p>
        </div>
    </a>
@endforeach
</div>
@endsection