@extends('template')

@section('css')
<!-- <link rel="stylesheet" href="{{ asset('css/template.css') }}"> -->
@endsection

@section('title', 'TechSupply | Login Page')

@section('content')

<div style="width:50%; padding:4vw;">
    <form action="/login" method="POST">
        @csrf
        <h1>Login</h1>
        <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <div class="form-check">
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
        <button type="submit" class="btn btn-primary">Login</button>

        <div class="register-container">
            <p>Don't have an account? <a href="/register">Register here</a></p>
        </div>
    </form>
</div>
@endsection