@extends('layouts.main')

@section('container')
<h1 class="my-4 py-4 text-end">__Curious about 'us' ?_ .</h1>
<div class="mt-4 d-flex flex-row align-items-center">
    <div class="p-2">
        <img class="shadow rounded-circle" src="img/{{ $image }}" alt="{{ $name }}" width="200">
    </div>
    <div class="p-4 d-flex flex-column">
        <h3>{{ $name }}</h3>
        <p>{{ $email }}</p>
    </div>
</div>
@endsection