@extends('layouts.main')

@section('container')
<div class="register-sec d-flex justify-content-center align-items-center">
    <img class="d-none d-md-block mt-4 register-img" src="/img/{{ $image }}" alt="" width="400" height="400">
    <main class="form-register card shadow-lg border-0 mt-3 p-4">
        <h1 class="mb-3 mt-3 text-center">Registration Form</h1>
        <form class="mt-2">
            <div class="form-floating">
                <input type="text" class="form-control rounded-top" id="floatingInputName" name="name" placeholder="name@example.com">
                <label for="floatingInputName">Full Name</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputUsername" name="username" placeholder="name@example.com">
                <label for="floatingInputUsername">Username</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInputEmail" name="email" placeholder="name@example.com">
                <label for="floatingInputEmail">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control rounded-bottom" id="floatingPassword" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 mt-3 btn btn-lg btn-warning" type="submit">Register</button>
        </form>
        <small class="text-center mt-4 mb-4">Already have an account? <a href="/login" class="fw-bold text-warning">Login Here!</a></small>
    </main>
</div>
@endsection