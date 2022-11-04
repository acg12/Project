@extends('template')

@section('css')
<!-- <link rel="stylesheet" href="{{ asset('css/template.css') }}"> -->
@endsection

@section('title', 'TechSupply | Home Page')

@section('content')
    @if(Auth::check())
        <strong>Logged in</strong>
    @endif
@endsection