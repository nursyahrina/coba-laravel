@extends('layouts.main')

@section('container')
<div class="register-sec d-flex justify-content-center align-items-center">
    <img class="d-none d-md-block mt-4 register-img" src="/img/{{ $image }}" alt="" width="400" height="400">
    <main class="form-register card shadow-lg border-0 mt-3 p-4">
        <h1 class="mb-3 mt-3 text-center">Registration Form</h1>
        <form action="/register" class="mt-2" method="POST">
            @csrf
            <div class="form-floating">
                <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" name="name" placeholder="name@example.com" value="{{ old('name') }}" autofocus required>
                <label for="name">Full Name</label>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="userame" name="username" placeholder="name@example.com" value="{{ old('username') }}" required>
                <label for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" value="{{ old('email') }}" required>
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" value="{{ old('password') }}" required>
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button class="w-100 mt-3 btn btn-lg btn-warning" type="submit">Register</button>
        </form>
        <small class="text-center mt-4 mb-4">Already have an account? <a href="/login" class="fw-bold text-warning">Login Here!</a></small>
    </main>
</div>
@endsection