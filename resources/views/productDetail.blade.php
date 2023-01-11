@extends('template')

@if($p == null)
@section('title', 'Unknown | Details | TechSupply')
@else
@section('title', $p->name.' | Details | TechSupply')
@endif

@section('css')
<link rel="stylesheet" href="{{ asset('css/productDetail.css') }}">
@endsection

@section('content')
@if($p == null)
<div class="text-center p-5" style="height: 60vh;">
    <p class="fs-5 fw-light">
        {{ __('productDetail.not_available') }}
    </p>
    <h3 class="my-4">{{ __('productDetail.catalogue') }}</h3>
    <a class="btn-shop btn btn-primary" href="/products" role="button">
        <h5 class="fw-light">{{ __('productDetail.shop') }}</h5>
    </a>
</div>
@else
<div class="row">
    <div class="col-6 col-sm-12 col-lg-6 p-5">
        <img id="item-img" width="100%" src="{{ $p->image_url }}" alt="">
    </div>
    <div class="col-6 col-sm-12 col-lg-6 d-flex flex-column justify-content-center p-5">
        <h1 class="card-title pb-4">{{ $p->name }}</h1>
        <p class="card-text">{{ $p->description }}</p>
        <p class="card-text stock ps-3">{{ $p->stock }} {{ __('productDetail.stock') }}</p>
        <p class="card-title fw-bold pb-3">Rp {{ $p->getPrice() }} {{ __('productDetail.purchase') }}</p>

        <form action="/addToCart/{{ $p->id }}" id="form-container">
            <div class="row">
                <div class="col-lg-2">
                    <input type="number" value="1" class="form-control input-lg" name="quantity" id="quantity">
                </div>
                <div class="col-lg-10">
                    <button class="btn-cart px-5 btn btn-primary btn-block">{{ __('productDetail.cart') }}</button>
                </div>
            </div>
        </form>

    </div>
</div>
@endif
@endsection