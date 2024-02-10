@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop_all.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
@endsection

@section('content')
@csrf
<div class="container">
    <a href="#" class="container-exit"><i class="fa-solid fa-bars"></i></a>
    <p class="container-text">Rese</p>


    <div class="container-bar">
        <form class="container-bar" action="/search" method="get">
            <select class="container-dropdown" name="area">
                <option value="" disabled selected hidden>All area</option>
                <option value="product_exchange">商品の交換について</option>
            </select>
            <select class="container-dropdown" name="genre">
                <option value="" disabled selected hidden>All genre</option>
                <option value="product_exchange">商品の交換について</option>
            </select>
            <input type="text" class="container-input" name="query" placeholder="🔍Search ..." required>
        </form>
    </div>
</div>
@endsection