@extends('template')

@section('title', 'TechSupply | Register Page')

@section('content')

@if($errors->any())
<strong>{{$errors->first()}}</strong>
@endif
<form action="/register" method="POST">
    @csrf
    <div class="container">
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="name"><b>Name</b></label>
        <input type="text" name="name" id="name" placeholder="Your Name">

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" id="email">

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="password">

        <label for="confirm_password"><b>Confirm Password</b></label>
        <input type="password" placeholder="Confirm Password" name="confirm_password" id="confirm_password">

        <label for="phone"><b>Phone Number</b></label>
        <input type="text" name="phone" id="phone" placeholder="Phone Number">

        <label for="address"><b>Address</b></label>
        <input type="text" name="address" id="address" placeholder="Address">
        <hr>

        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
        <button type="submit" class="registerbtn">Register</button>
    </div>

    <div class="container signin">
        <p>Already have an account? Sign in <a href="/login">here</a>.</p>
    </div>
</form>

@endsection