@extends('template')

@section('css')
<!-- <link rel="stylesheet" href="{{ asset('css/template.css') }}"> -->
@endsection

@section('title', 'TechSupply | Login Page')

@section('content')

<div class="mx-auto" style="width:40%; padding:4vw;">
    <form action="/login" method="POST">
        @csrf
        <h3 class="text-center pb-4">Login to your account</h3>
        <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <div class="form-check py-2">
            <input class="form-check-input" name="remember_cb" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Remember me
            </label>
        </div>
        @if($errors->any())
        <div class="alert alert-danger d-flex align-items-center" role="alert">
            <div>
                {{ $errors->first() }}
            </div>
        </div>
        @endif
        <div class="py-3">
            <button type="submit" class="btn btn-dark py-2 d-grid gap-2 col-12 mx-auto">Login</button>
        </div>

        <div class="register-container py-3">
            <p class="text-center">Don't have an account? 
                <a href="/register" style="text-decoration: none; color: black"><u>Register here</u></a>
            </p>
        </div>
    </form>
</div>
@endsection