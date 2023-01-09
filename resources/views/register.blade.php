@extends('template')

@section('css')
<!-- <link rel="stylesheet" href="{{ asset('css/template.css') }}"> -->
@endsection

@section('title', 'TechSupply | Register Page')

@section('content')

@if($errors->any())
<strong>{{$errors->first()}}</strong>
@endif
<div class="mx-auto" style="width:40%; padding:4vw;">
    <form action="/register" method="POST">
        @csrf
        <h3 class="text-center pt-4">Register your account</h3>
        <p class="text-center pb-3">Please fill in this form to create an account</p>

        <div class="form-floating mb-3">
            <input type="text" name="name" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" placeholder="Email Address" name="email" class="form-control" id="floatingInput">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" placeholder="Enter Password" name="password" class="form-control" id="floatingPassword">
            <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" placeholder="Confirm Password" name="confirm_password" class="form-control" id="floatingconfirm_password">
            <label for="floatingconfirm_password">Confirm password</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="phone" class="form-control" id="floatingPhone" placeholder="Phone Number">
            <label for="floatingPhone">Phone number</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="address" class="form-control" id="floatingAddress" placeholder="floatingAddress">
            <label for="floatingAddress">Address</label>
        </div>

        <p class="py-2">By creating an account, you agree to our 
            <a href="#" style="text-decoration: none; color: black"><u>Terms & Privacy</u></a>
        </p>
        <button type="submit" class="btn btn-dark py-2 d-grid gap-2 col-12 mx-auto">Register</button>

        <div class="register-container py-3">
            <p class="text-center">Already have an account? Sign in 
                <a href="/login" style="text-decoration: none; color: black"><u>here</u></a>
            </p>
        </div>
    </form>
</div>

@endsection