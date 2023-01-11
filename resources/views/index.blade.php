@extends('template')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('title', 'TechSupply | Home Page')

@section('content')
<div class="banner w-100">
    <div class="banner-text d-flex flex-column justify-content-center px-5">
        <h1 class="fw-bold banner-title">
            {{ __('index.banner_title.1') }}
            <br>
            {{ __('index.banner_title.2') }}
        </h1>
        <p class="banner-caption">
            {{ __('index.banner_caption.1') }}
            <br>
            {{ __('index.banner_caption.2') }}
        </p>
        <div><a id="btn-shop-banner" role="button" class="btn btn-primary px-4" href="/products">{{ __('index.banner_shop_now') }}</a></div>
    </div>
    <img src="{{ Storage::url('images/banner.png') }}" alt="">
</div>
<div class="container-fluid reviews d-flex flex-row justify-content-around flex-wrap">
    <div class="reviews-text">
        <h3 class="fw-bold reviews-title">{{ __('index.reviews_title') }}</h3>
        <p>{{ __('index.reviews_text') }}</p>
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
            <a href="/products/{{ $p->id }}" class="btn btn-primary btn-card-reviews">{{ __('index.card_learn_more') }}</a>
        </div>
    </div>
    @endforeach
</div>
<div class="collections container-fluid bg-light">
    <div class="collections-title text-center pb-5 ">
        <h1 class="fw-bold">{{ __('index.collections_title') }}</h1>
        <p class="fs-4">{{ __('index.collections_text') }}</p>
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
                <a href="/products/{{ $p->id }}" class="btn btn-primary btn-card-reviews">{{ __('index.card_learn_more') }}</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection