@extends('template')

@section('title', 'Transactions | TechSupply')

@section('css')
<link rel="stylesheet" href="{{ asset('css/transactions.css') }}">
@endsection

@section('content')
<div class="px-5 pt-5">
    @foreach ($transactions as $t)
    <div class="container-fluid mb-5">
        <div class="date">
            <p>{{ $t->getDate() }}</p>
            <?php $details = $t->transactionDetails->first() ?>
            <div class="row g-4">
                <div class="col-3 col-lg-3 col-sm-2">
                    <img class="card-img w-100" src="{{ $details->product->image_url }}" alt="...">
                </div>
                <div class="col-5 text d-flex flex-column justify-content-center">
                    <a href="/products/{{ $details->product_id }}">
                        <h5>{{ $details->product->name }}</h5>
                        <p>{{ $details->quantity }} x {{ __('cart.rp') }} {{ $details->product->getPrice() }}</p>
                        @if(count($t->transactionDetails) > 1)
                        <p class="m-0 text-muted">+{{ count($t->transactionDetails) - 1 }} more items</p>
                        @endif
                    </a>
                </div>
                <div class="col-4 px-4 d-flex flex-column justify-content-center align-items-end">
                    <p class="fw-semibold fs-5">
                        Total: {{ $t->getTotal() }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection