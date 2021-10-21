@extends('layouts.main')

@section('container')
<h1 class="my-4 py-4 text-end">__Post Category(ies)_ .</h1>

<div class="d-flex flex-wrap justify-content-end">
    @foreach ($categories as $category)
    <a href="categories/{{ $category->slug }}" class="card shadow text-center rounded-3 m-3 p-4 <?= ($category->id % 2 == 0) ? 'bg-light' : 'bg-warning' ?>" style="min-width: 18rem;">
        <div class="card-body">
            <span class="h2 text-dark">{{ $category->name }}</span>
        </div>
    </a>
@endforeach
</div>
@endsection