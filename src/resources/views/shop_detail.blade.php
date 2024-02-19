@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop_detail.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
@endsection

@section('content')
<div class="container">
    <div class="container-group">
        <a href="#" class="container-group-exit"><i class="fa-solid fa-bars"></i></a>
        <p class="container-group-text">Rese</p>


        <div class="container-group-unit">
            <div class="container-group-unit-return">
                <a href="http://localhost/shop_all" ><i class="fa-solid fa-less-than"></i></a>
            </div>

            <h1>{{ $name }}</h1>


        </div>
        <img src="{{ asset($image) }}" alt="" />
        <p>{{ $city }} - {{ $shop }}</p>
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
