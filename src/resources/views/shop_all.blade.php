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
  <div class="wrapper-img">
    <img src="img/sushi.jpg" alt="" />
  </div>
  <div class="wrapper-content">
    <h2 class="wrapper-content-ttl">
      仙人
    </h2>
    <p class="wrapper-content-text">#東京都 #寿司</p>
    <a href="" class="wrapper-content-cat">詳しくみる</a>
  </div>
</div>
<div class="wrapper_two">
  <div class="wrapper-img">
    <img src="img/yakiniku.jpg" alt="" />
  </div>
  <div class="wrapper-content">
    <h2 class="wrapper-content-ttl">
      仙人
    </h2>
    <p class="wrapper-content-text">#東京都 #寿司</p>
    <a href="" class="wrapper-content-cat">詳しくみる</a>
  </div>
</div>
@endsection
