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

    <div class="container-group">
        <div class="container-group-bar">
            <form class="container-group-bar" action="/search" method="get">
                <select class="container-group-bar-dropdown" name="area">
                    <option value="" disabled selected hidden>All area</option>
                    <option value="product_exchange">商品の交換について</option>
                </select>
                <select class="container-group-bar-dropdown" name="genre">
                    <option value="" disabled selected hidden>All genre</option>
                    <option value="product_exchange">商品の交換について</option>
                </select>
                <input type="text" class="container-group-bar-input" name="query" placeholder="🔍Search ..." required>
            </form>
        </div>
    </div>
</div>

<div class="wrapper">
  <div class="wrapper-box">
    <div class="wrapper-box-img">
      <img src="img/sushi.jpg" alt="" />
    </div>
    <div class="wrapper-box-content">
      <h2 class="wrapper-box-content-ttl">
        仙人
      </h2>
      <p class="wrapper-box-content-text">#東京都 #寿司</p>
      <a href="" class="wrapper-box-content-cat">詳しくみる</a>

      <i class="fa-solid fa-heart"></i>
    </div>
  </div>
  <div class="wrapper-box_two">
    <div class="wrapper-box-img">
      <img src="img/yakiniku.jpg" alt="" />
    </div>
    <div class="wrapper-box-content">
      <h2 class="wrapper-box-content-ttl">
        牛助
      </h2>
      <p class="wrapper-box-content-text">#大阪府 #焼肉</p>
      <a href="" class="wrapper-box-content-cat">詳しくみる</a>

      <i class="fa-solid fa-heart"></i>
    </div>
  </div>
  <!-- <div class="wrapper-box_three">
    <div class="wrapper-box-img">
      <img src="img/izakaya.jpg" alt="" />
    </div>
    <div class="wrapper-box-content">
      <h2 class="wrapper-box-content-ttl">
        戦慄
      </h2>
      <p class="wrapper-box-content-text">#福岡県 #居酒屋</p>
      <a href="" class="wrapper-box-content-cat">詳しくみる</a>

      <i class="fa-solid fa-heart"></i>
    </div>
  </div> -->
  <!-- <div class="wrapper-box_four">
    <div class="wrapper-box-img">
      <img src="img/italian.jpg" alt="" />
    </div>
    <div class="wrapper-box-content">
      <h2 class="wrapper-box-content-ttl">
        ルーク
      </h2>
      <p class="wrapper-box-content-text">#東京都 #イタリアン</p>
      <a href="" class="wrapper-box-content-cat">詳しくみる</a>

      <i class="fa-solid fa-heart"></i>
    </div>
  </div> -->
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // 全てのハートアイコンを選択
    const hearts = document.querySelectorAll('.fa-heart');
    // 各ハートアイコンにイベントリスナーを追加
    hearts.forEach(function(heart) {
        heart.addEventListener('click', function() {
            this.classList.toggle('active-heart');
        });
    });
});
</script>
@endsection
