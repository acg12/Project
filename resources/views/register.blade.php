@extends('template')

@section('css')
<!-- <link rel="stylesheet" href="{{ asset('css/template.css') }}"> -->
@endsection

@section('title', 'Register | TechSupply')

@section('content')

@if($errors->any())
<strong>{{$errors->first()}}</strong>
@endif
<div class="mx-auto" style="width:40%; padding:4vw;">
    <form action="/register" method="POST">
        @csrf
        <h3 class="text-center pt-4">{{ __('register.regist') }}</h3>
        <p class="text-center pb-3">{{ __('register.fill') }}</p>

        <div class="form-floating mb-3">
            <input type="text" name="name" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">{{ __('register.name') }}</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" placeholder="Email Address" name="email" class="form-control" id="floatingInput">
            <label for="floatingInput">{{ __('register.email') }}</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" placeholder="Enter Password" name="password" class="form-control" id="floatingPassword">
            <label for="floatingPassword">{{ __('register.pass') }}</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" placeholder="Confirm Password" name="confirm_password" class="form-control" id="floatingconfirm_password">
            <label for="floatingconfirm_password">{{ __('register.confirm_pass') }}</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="phone" class="form-control" id="floatingPhone" placeholder="Phone Number">
            <label for="floatingPhone">{{ __('register.phone') }}</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="address" class="form-control" id="floatingAddress" placeholder="floatingAddress">
            <label for="floatingAddress">{{ __('register.address') }}</label>
        </div>

        <p class="py-2">{{ __('register.confirmation') }}
            <a href="#" style="text-decoration: none; color: black"><u>{{ __('register.ts') }}</u></a>
        </p>
        <button type="submit" class="btn btn-dark py-2 d-grid gap-2 col-12 mx-auto">{{ __('register.reg') }}</button>

        <div class="register-container py-3">
            <p class="text-center">{{ __('register.user') }}
                <a href="/login" style="text-decoration: none; color: black"><u>{{ __('register.here') }}</u></a>
            </p>
        </div>
    </form>
</div>

@endsection