@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop_detail.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
@endsection

@section('content')
<div class="container">
    <a href="#" class="container-exit"><i class="fa-solid fa-bars"></i></a>
    <p class="container-text">Rese</p>

    <h1>{{ request('name') }}</h1>
    <p>#{{ request('city') }} #{{ request('shop') }}</p>

    
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
