@extends('template')

@section('title', 'TechSupply | Cart')

@section('content')
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
@endsection