@extends('template')

@section('css')
<!-- <link rel="stylesheet" href="{{ asset('css/template.css') }}"> -->
@endsection

@section('title', 'TechSupply | Login Page')

@section('content')
    <form action="/login" method="POST">
        @csrf
        <h1>Login</h1>
        <div>
            @if($errors->any())
                <strong>{{$errors->first()}}</strong>
            @endif  
        </div>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Email" name="email" id="email">

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Password" name="password" id="password">

        <div>

            <input type="checkbox" name="remember" id="remember_cb">
            <label for="remember">Remember me</label>
        </div>
        <button type="submit">Login</button>

        <div class="register-container">
            <p>Don't have an account? <a href="/register">Register here</a></p>
        </div>
    </form>
@endsection