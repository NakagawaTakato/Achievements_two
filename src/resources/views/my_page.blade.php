@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop_detail.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
@endsection

@section('content')
<div class="container">
    <a href="#" class="container-exit"><i class="fa-solid fa-bars"></i></a>
    <p class="container-text">Rese</p>
    
    <p class="container-box-group-name_display">Shop&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $name }}</p>
    <p class="container-box-group-date_display">Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $date }}</p>
    <p class="container-box-group-time_display">time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $time->param }}</p>
    <p class="container-box--group-number_display">Number&nbsp;&nbsp;&nbsp;&nbsp;{{ $fake->value }}</p>
    




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