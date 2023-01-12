@extends('template')

@section('title', 'Cart | Tech Supply')

@section('css')
<link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endsection

@section('content')
<div class="d-flex flex-column justify-content-center text-center py-2 bg-light">
    <p class="fs-6 fw-semibold m-0">{{ __('cart.title') }}</p>
</div>
@if(count($cart) < 1) 
<div class="text-center p-5" style="height: 60vh;">
<p class="fs-5 fw-light">
    {{ __('cart.empty')}}
</p>
<h3 class="my-4">{{ __('cart.full_catalogue') }}</h3>
<a class="btn-shop btn btn-primary" href="/products" role="button">
    <h5 class="fw-light">{{ __('cart.button_shop') }}</h5>
</a>
</div>
@else
<div class="container-fluid d-flex flex-column px-5 py-3">
    @if($errors->any())
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        {{ $errors->first() }}
    </div>
    @endif
    @foreach ($cart as $c)
    <div class="row g-4">
        <div class="col-3 col-lg-3 col-sm-2">
            <img class="card-img" src="{{ $c->product->image_url }}" alt="...">
        </div>
        <div class="col-5 text d-flex flex-column justify-content-center">
            <h5>{{ $c->product->name }}</h5>
            <p class="m-0">{{ __('cart.rp') }} {{ $c->product->getPrice() }}</p>
        </div>
        <div class="col-3 px-4 d-flex flex-column justify-content-center">
            <form action="/updateCart/{{ $c->id }}" class="d-flex flex-row justify-content-center">
                <input type="number" id="qty" name="qty" value="{{ $c->quantity }}" style="width:5vw; height:35px; text-align: center;">
                <button type="submit" class="px-4 ms-3 btn-update btn btn-primary">{{ __('cart.button_update') }}</button>
            </form>
        </div>
        <a href="/deleteCart/{{ $c->id }}" class="col-1 text-center d-flex flex-column justify-content-center">
            <i class="bi bi-trash3" style="color:red;"></i>
        </a>
    </div>
    @endforeach
</div>
<div class="sticky-bottom container-fluid d-flex flex-column align-items-end text-center px-5 py-4 pb-5 bg-light">
    <div class="col-6 d-flex flex-row justify-content-between">
        <p class="fw-bold">{{ __('cart.subtotal') }} ({{ count($cart) }} {{ __('cart.items') }})</p>
        <p class="fw-bold">{{ __('cart.rp') }} {{ $subtotal }}</p>
    </div>
    <div class="col-6">
        <a href="/checkout" class="btn-checkout btn btn-primary w-100">{{ __('cart.button_checkout') }}</a>
    </div>
</div>
@endif
@endsection