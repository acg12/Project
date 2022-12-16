@extends('template')

@section('title', 'TechSupply | Cart')

@section('content')
<div class="d-flex flex-column">
    @foreach ($cart as $c)
    <div class="d-flex flex-row">
        <div class="">
            <img style="width: 300px;" src="{{ $c->product->image_url }}" alt="...">
        </div>
        <div class="flex-grow-1 ms-3">
            {{ $c->product->name }} <br>
            {{ $c->product->price }}
        </div>
        <div style="margin-right: 20px;">
            <form action="/updateCart/{{ $c->id }}">
                <input type="text" name="qty" value="{{ $c->quantity }}" style="width:30px; height:35px; text-align: center;">
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
        <a href="/deleteCart/{{ $c->id }}" class="" style="margin-right: 20px;">
            <i class="bi bi-trash3" style="width:100px;"></i>
        </a>
    </div>
    @endforeach
</div>
@endsection