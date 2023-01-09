@extends('template')

@section('title', $p->name.' | Details | TechSupply')

@section('content')
@if($p != null)
<div class="d-flex flex-row justify-content-stretch align-items-center" style="padding-top: 50px">
    <img id="item-img" width="50%" src="{{ $p->image_url }}" alt="">
    <div class="container-fluid">
        <div class="row d-flex flex-row align-items-center">
            <div class="col-lg-8">
                <h2 class="card-title">{{ $p->name }}</h2>
            </div>
            <div class="col-lg-4">
                <h3 class="card-title">Rp {{ $p->price }}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10">
                <p class="card-text">{{ $p->description }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <p class="card-text">STOCK: {{ $p->stock }}</p>
            </div>
        </div>
        <form action="/addToCart/{{ $p->id }}" id="form-container">
            <div class="row">
                <div class="col-lg-2">
                    <input type="number" value="1" class="form-control input-lg" name="quantity" id="quantity">
                </div>
                <div class="col-lg-10">
                    <button class="btn btn-primary btn-block">Add to Cart</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endif
@endsection