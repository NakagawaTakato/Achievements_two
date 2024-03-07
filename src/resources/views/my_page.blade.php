@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop_detail.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
@endsection

@section('content')
<div class="container">
    <a href="#" class="container-exit"><i class="fa-solid fa-bars"></i></a>
    <p class="container-text">Rese</p>
    

    <div class="container-box-name">
        <p>名前: {{ $name }}</p>
        <p>画像: <img src="{{ $image }}" alt="image"></p>
        <p>都市: {{ $city }}</p>
        <p>店舗: {{ $shop }}</p>
    </div>



    <form action="/shop_all" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>




    <a href="http://localhost/shop_all" >もどる</a>

    
    <div class="container-box">
        <div class="container-box-name">
            
        </div>

    </div>
</div>
@endsection