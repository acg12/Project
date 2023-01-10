@extends('template')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('title', 'TechSupply | Home Page')

@section('content')
<div class="banner w-100">
    <div class="banner-text d-flex flex-column justify-content-center px-5">
        <h1 class="fw-bold banner-title">
            High End
            <br>
            Tech Accessories
        </h1>
        <p class="banner-caption">
            Premium gear for a seamless experience.
            <br>
            Best choice for working or gaming.
        </p>
        <div><a id="btn-shop-banner" role="button" class="btn btn-primary px-4" href="/products">Shop Now</a></div>
    </div>
    <img src="{{ Storage::url('images/banner.png') }}" alt="">
</div>
<div class="container-fluid reviews d-flex flex-row justify-content-around flex-wrap">
    <div class="reviews-text">
        <h3 class="fw-bold reviews-title">50,000+ customers love our products</h3>
        <p>To date, our products have helped 50,000+ people upgrade their equipment and experience a unique and seamless work and/or gaming environment.</p>
    </div>
    @foreach($three as $p)
    <div class="card">
        <a href="/products/{{ $p->id }}">
            <div class="card-body">
                <p class="fw-bold fs-5">{{ $p->name }}</p>
                Rp {{ $p->getPrice() }}
            </div>
            <img src="{{ $p->image_url }}" class="card-img" alt="...">
        </a>
        <div class="card-body">
            <hr>
            <a href="/products/{{ $p->id }}" class="btn btn-primary btn-card-reviews">Learn more</a>
        </div>
    </div>
    @endforeach
</div>
<div class="collections container-fluid bg-light">
    <div class="collections-title text-center pb-5 ">
        <h1 class="fw-bold">New Year's Collection</h1>
        <p class="fs-4">Start off this year with a bang!</p>
    </div>
    <div class="d-flex flex-row justify-content-around flex-wrap">
        @foreach($three as $p)
        <div class="card">
            <a href="/products/{{ $p->id }}">
                <div class="card-body">
                    <p class="fw-bold fs-5">{{ $p->name }}</p>
                    Rp {{ $p->getPrice() }}
                </div>
                <img src="{{ $p->image_url }}" class="card-img" alt="...">
            </a>
            <div class="card-body">
                <hr>
                <a href="/products/{{ $p->id }}" class="btn btn-primary btn-card-reviews">Learn more</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection