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

            <div class="container-group-unit-title">
                <h1>{{ $name }}</h1>
            </div>

            <img src="{{ asset($image) }}" alt="" class="container-group-unit-image" />
            <p>#{{ $city }} #{{ $shop }}</p>

            </br>
            <p>料理長厳選の食材から作る寿司を用いたコースをぜひお楽しみください。食</br>
            材・味・価格、お客様の満足度を徹底的に追及したお店です。特別な日のお食</br>
            事、ビジネス接待まで気軽に使用することができます。</p>
        </div>
    </div>

    <div class="container-box">
        <h1 class="container-box-text">予約</h1>
        
        <form action="/shop_all/shop_detail/my_page" method="post">
            @csrf
            <input type="date" name="date" required>
            <select class="container-group-bar-dropdown" name="time">
                <option value="" disabled selected hidden>00:00</option>
                <option value="17:00">17:00</option>
                <option value="18:00">18:00</option>
                <option value="19:00">19:00</option>
                <option value="20:00">20:00</option>
                <option value="21:00">21:00</option>
                <option value="22:00">22:00</option>
                <option value="23:00">23:00</option>
                <option value="24:00">24:00</option>
            </select>
            <select class="container-group-bar-dropdown" name="number">
                <option value="0人" disabled selected hidden>0人</option>
                <option value="1人">1人</option>
                <option value="2人">2人</option>
                <option value="3人">3人</option>
                <option value="4人">4人</option>
                <option value="5人">5人</option>
            </select>

            <button type="submit">予約する</button>
        </form>

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
});
</script>
@endsection
