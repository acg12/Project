@extends('template')

@section('title', 'TechSupply | Product Page')

@section('search', $search_query)

@section('content')

@if(count($data) == 0)
<div>No products "{{ $search_query }}" found</div>
@else
@for($i = 0; $i < count($data); $i++) <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card">
            <img src="{{ $data[$i]->image_url }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $data[$i]->name }}</h5>
                <p class="card-text">{{ $data[$i]->price }}</p>
            </div>
        </div>
    </div>
    </div>
    @endfor
    @endif
    @endsection