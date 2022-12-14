@extends('template')

@section('title', 'Products | TechSupply')

@section('css')
<link rel="stylesheet" href="{{ asset('css/products.css') }}">
@endsection

@section('search', $search_query)

@section('content')
@if($search_query != null)
<div class="container-fluid text-center pt-4">
    <p class="fw-bold">{{ __('products.showing_results') }} "{{ $search_query }}"</p>
</div>
@endif
@if(count($data) == 0)
<div class="text-center p-5" style="height: 60vh;">
    <p class="fs-5 fw-light">
        {{ __('products.no_results') }} "{{ $search_query }}"!
    </p>
    <h3 class="my-4">{{ __('products.checkout_catalogue') }}</h3>
    <a class="btn-shop btn btn-primary" href="/products" role="button">
        <h5 class="fw-light">{{ __('products.shop_now') }}</h5>
    </a>
</div>
@else
<div class="container-fluid d-flex flex-row justify-content-center">
    <div class="products-row row gx-3 gy-5 p-5">
        @for($i = 0; $i < count($data); $i++) <div class="col-12 col-sm-12 col-md-6 col-lg-4">
            <div class="card" style="width: 100%;">
                <a href="/products/{{ $data[$i]->id }}">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $data[$i]->name }}</h5>
                    </div>
                    <img src="{{ $data[$i]->image_url }}" class="card-img" alt="...">
                </a>
                <div class="card-body bg-light text-center p-5">
                    <p class="card-text fw-semibold">Rp {{ $data[$i]->getPrice() }}</p>
                    <a class="btn btn-primary btn-details px-5" href="/products/{{ $data[$i]->id }}">{{ __('products.show_details') }}</a>
                </div>
            </div>
    </div>
    @endfor
</div>
</div>
@endif

@endsection