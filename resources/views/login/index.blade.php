@extends('layouts.main')

@section('container')
@if (session()->has('success'))
<div class="alert-signin alert alert-success alert-dismissible fade show ms-auto m-auto" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session()->has('loginError'))
<div class="alert-signin alert alert-danger alert-dismissible fade show ms-auto m-auto" role="alert">
  {{ session('loginError') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="login-sec d-flex pt-4 justify-content-center align-items-center">
  <img class="d-none d-md-block mt-4 login-img" src="/img/{{ $image }}" alt="" width="400" height="400">
  <main class="form-signin card shadow-lg border-0 mt-4 p-4">
    <h1 class="mb-4 mt-3 text-center">Please Login</h1>
    <form action="/login" class="mt-3" method="POST">
      @csrf
      <div class="form-floating">
        <input type="email" class="form-control rounded-top @error('email') is-invalid @enderror"  id="email" name="email" placeholder="name@example.com" autofocus required>
        <label for="email">Email address</label>
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" class="form-control rounded-bottom @error('email') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
        <label for="password">Password</label>
        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
      <button class="w-100 mt-3 btn btn-lg btn-warning" type="submit">Login</button>
    </form>
    <small class="text-center mt-4 mb-4">Not registered yet? <a href="/register" class="fw-bold text-warning">Register Now!</a></small>
  </main>
</div>
@endsection