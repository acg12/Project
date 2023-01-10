@extends('template')

@section('title', 'TechSupply | Cart')

@section('css')
<link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endsection

@section('content')
@if(count($cart) < 1)
<div class="d-flex flex-column justify-content-center text-center py-2 bg-light">
    <p class="fs-6 fw-semibold m-0">YOUR TECHSUPPLY CART</p>
</div>
<div class="text-center p-5" style="height: 60vh;">
    <p class="fs-5 fw-light">
        Your cart is still empty!
    </p>
    <h3 class="my-4">Check out our full catalogue here!</h3>
    <a class="btn-shop btn btn-primary" href="/products" role="button">
        <h5 class="fw-light">Shop Now</h5>
    </a>
</div>
@else
<div class="d-flex flex-column px-5 py-3">
    @if($errors->any())
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        {{ $errors->first() }}
    </div>
    @endif
    @foreach ($cart as $c)
    <div class="d-flex flex-row align-items-center pb-3">
        <div class="">
            <img style="width: 300px;" src="{{ $c->product->image_url }}" alt="...">
        </div>
        <div class="flex-grow-1 ms-3">
            {{ $c->product->name }} <br>
            {{ $c->product->price }}
        </div>
        <div style="margin-right: 20px;">
            <form action="/updateCart/{{ $c->id }}">
                <input type="number" id="qty" name="qty" value="{{ $c->quantity }}" style="width:5vw; height:35px; text-align: center;">
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
        <a href="/deleteCart/{{ $c->id }}" class="" style="margin-right: 20px;">
            <i class="bi bi-trash3" style="width:100px;"></i>
        </a>
    </div>
    @endforeach
</div>
<div class="list-group container-fluid d-flex flex-row text-center">
    <a href="/checkout/{{ Auth::user()->id }}" class="list-group-item list-group-item-action">Checkout</a>
</div>
@endif
@endsection