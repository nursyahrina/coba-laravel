@extends('layouts.main')

@section('container')
<h1 class="my-4 py-4 text-end">__Post Category(ies)_ .</h1>

<div class="d-flex flex-wrap-reverse justify-content-start">
    @foreach ($categories as $category)
    <a href="categories/{{ $category->slug }}" class="card shadow-sm text-center rounded-pill m-3 p-4 <?= ($category->id % 2 == 0) ? 'bg-light' : 'bg-warning' ?>" style="min-width: 18rem;">
        <div class="card-body">
            <span class="h3 text-dark">{{ $category->name }}</span>
        </div>
    </a>
@endforeach
</div>
@endsection