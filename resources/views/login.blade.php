@extends('template')

@section('css')
<!-- <link rel="stylesheet" href="{{ asset('css/template.css') }}"> -->
@endsection

@section('title', 'TechSupply | Login Page')

@section('content')
    <form action="#" method="POST">
        <h1>Login</h1>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Email" name="email" id="email">

        <label for="password"><b>Password</b></label>
        <input type="text" placeholder="Password" name="password" id="password">

        <button type="submit">Login</button>

        <div class="register-container">
            <p>Don't have an account? <a href="/register">Register here</a></p>
        </div>
    </form>
@endsection