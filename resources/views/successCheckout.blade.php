@extends('template')

@section('title', 'Cart | Tech Supply')

@section('css')
<link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endsection

@section('content')
<div class="d-flex flex-column justify-content-center text-center py-2 bg-light">
    <p class="fs-6 fw-semibold m-0">{{ __('cart.title') }}</p>
</div>
<div class="text-center p-5" style="height: 60vh;">
    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#34D84A" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
    </svg>
    <h3 class="my-4">{{ __('cart.checkout_success') }}</h3>
    <p class="fs-5 fw-light">
        {{ __('cart.other_items')}}
    </p>
    <a class="btn-shop btn btn-primary" href="/products" role="button">
        <h5 class="fw-light">{{ __('cart.button_shop') }}</h5>
    </a>
</div>
@endsection