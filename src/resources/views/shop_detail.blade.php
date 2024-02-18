@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop_detail.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
@endsection

@section('content')
<div class="container">
    <a href="#" class="container-exit"><i class="fa-solid fa-bars"></i></a>
    <p class="container-text">Rese</p>

    <h1>{{ $name }}</h1>
    <img src="{{ asset($image) }}" alt="" />
    <p>{{ $city }} - {{ $shop }}</p>

    <form action="/shop_all/shop_detail/my_page" method="POST" >
        @csrf
        <input type="hidden" name="name" value="仙人">
        <input type="hidden" name="image" value="img/sushi.jpg">
        <input type="hidden" name="city" value="東京都">
        <input type="hidden" name="shop" value="寿司">
        <button type="submit">次へ</button>
    </form>

    <div class="container-box">
        <div class="container-box-name">
            
        </div>

    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var closeButton = document.querySelector('.container-exit');
        var containerGroup = document.querySelector('.container-group');

        closeButton.addEventListener('click', function(event) {
            event.preventDefault();
            containerGroup.style.display = 'none';
        });
    });
</script>
@endsection
