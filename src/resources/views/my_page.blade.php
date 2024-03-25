@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/my_page.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
@endsection

@section('content')
<div class="container">
    <a href="#" class="container-exit"><i class="fa-solid fa-bars"></i></a>
    <p class="container-text">Rese</p>
    

    <h1>予約状況</h1>
    <div class="container-box">
        <form action="/shop_all" method="post">
            @csrf
            <p class="container-box-sub">予約1</p>
            <p class="container-box-shop">Shop&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $name }}</p>
            <p class="container-box-date">Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $date }}</p>
            <p class="container-box-time">time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $time->param ?? 'デフォルト値' }}</p>
            <p class="container-box-number">Number&nbsp;&nbsp;&nbsp;&nbsp;{{ $fake->value ?? 'デフォルト値' }}</p>

            @method('DELETE')
            <button type="submit" class="container-box-delete"><i class="fa-solid fa-xmark"></i></button>
        </form>
    </div>




    <div class="container-group-unit-title">
        <h1>{{ $name }}</h1>
    </div>

    <img src="{{ asset($image) }}" alt="" class="container-group-unit-image" />
    <p>#{{ $city }} #{{ $shop }}</p>





    
</div>
@endsection