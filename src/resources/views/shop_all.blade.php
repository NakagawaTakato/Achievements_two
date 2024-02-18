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
  <!-- 1行目 -->
  <div class="wrapper-box">
    <div class="wrapper-box-img">
      <img src="img/sushi.jpg" alt="" />
    </div>
    <div class="wrapper-box-content">
      <h2 class="wrapper-box-content-ttl">
        仙人
      </h2>
      <p class="wrapper-box-content-text">#東京都 #寿司</p>
      <form action="/shop_all/shop_detail" method="POST" >
        @csrf
        <input type="hidden" name="name" value="仙人">
        <input type="hidden" name="image" value="img/sushi.jpg">
        <input type="hidden" name="city" value="東京都">
        <input type="hidden" name="shop" value="寿司">
        <button type="submit" class="wrapper-box-content-cat">詳しくみる</button>
      </form>

      <i class="fa-solid fa-heart" ></i>
      
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
      <a href="#" class="wrapper-box-content-cat">詳しくみる</a>

      <i class="fa-solid fa-heart"></i>
    </div>
  </div>
  <div class="wrapper-box_three">
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
  </div>
  <div class="wrapper-box_four">
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
  </div>

  <!-- 2行目 -->
  <div class="wrapper-box_five">
    <div class="wrapper-box-img">
      <img src="img/ramen.jpg" alt="" />
    </div>
    <div class="wrapper-box-content">
      <h2 class="wrapper-box-content-ttl">
        志摩屋
      </h2>
      <p class="wrapper-box-content-text">#福岡県 #ラーメン</p>
      <a href="" class="wrapper-box-content-cat">詳しくみる</a>

      <i class="fa-solid fa-heart"></i>
    </div>
  </div>
  <div class="wrapper-box_six">
    <div class="wrapper-box-img">
      <img src="img/yakiniku.jpg" alt="" />
    </div>
    <div class="wrapper-box-content">
      <h2 class="wrapper-box-content-ttl">
        香
      </h2>
      <p class="wrapper-box-content-text">#東京都 #焼肉</p>
      <a href="" class="wrapper-box-content-cat">詳しくみる</a>

      <i class="fa-solid fa-heart"></i>
    </div>
  </div>
  <div class="wrapper-box_seven">
    <div class="wrapper-box-img">
      <img src="img/italian.jpg" alt="" />
    </div>
    <div class="wrapper-box-content">
      <h2 class="wrapper-box-content-ttl">
        JJ
      </h2>
      <p class="wrapper-box-content-text">#大阪府 #イタリアン</p>
      <a href="" class="wrapper-box-content-cat">詳しくみる</a>

      <i class="fa-solid fa-heart"></i>
    </div>
  </div>
  <div class="wrapper-box_eight">
    <div class="wrapper-box-img">
      <img src="img/ramen.jpg" alt="" />
    </div>
    <div class="wrapper-box-content">
      <h2 class="wrapper-box-content-ttl">
        ラーメンの極み
      </h2>
      <p class="wrapper-box-content-text">#東京都 #ラーメン</p>
      <a href="" class="wrapper-box-content-cat">詳しくみる</a>

      <i class="fa-solid fa-heart"></i>
    </div>
  </div>

  <!-- 3行目 -->
  <div class="wrapper-box_nine">
    <div class="wrapper-box-img">
      <img src="img/izakaya.jpg" alt="" />
    </div>
    <div class="wrapper-box-content">
      <h2 class="wrapper-box-content-ttl">
        鳥雨
      </h2>
      <p class="wrapper-box-content-text">#大阪府 #居酒屋</p>
      <a href="" class="wrapper-box-content-cat">詳しくみる</a>

      <i class="fa-solid fa-heart"></i>
    </div>
  </div>
  <div class="wrapper-box_ten">
    <div class="wrapper-box-img">
      <img src="img/sushi.jpg" alt="" />
    </div>
    <div class="wrapper-box-content">
      <h2 class="wrapper-box-content-ttl">
        築地色合
      </h2>
      <p class="wrapper-box-content-text">#東京都 #寿司</p>
      <a href="" class="wrapper-box-content-cat">詳しくみる</a>

      <i class="fa-solid fa-heart"></i>
    </div>
  </div>
  <div class="wrapper-box_eleven">
    <div class="wrapper-box-img">
      <img src="img/yakiniku.jpg" alt="" />
    </div>
    <div class="wrapper-box-content">
      <h2 class="wrapper-box-content-ttl">
        晴海
      </h2>
      <p class="wrapper-box-content-text">#大阪府 #焼肉</p>
      <a href="" class="wrapper-box-content-cat">詳しくみる</a>

      <i class="fa-solid fa-heart"></i>
    </div>
  </div>
  <div class="wrapper-box_twelve">
    <div class="wrapper-box-img">
      <img src="img/yakiniku.jpg" alt="" />
    </div>
    <div class="wrapper-box-content">
      <h2 class="wrapper-box-content-ttl">
        三子
      </h2>
      <p class="wrapper-box-content-text">#福岡県 #焼肉</p>
      <a href="" class="wrapper-box-content-cat">詳しくみる</a>

      <i class="fa-solid fa-heart"></i>
    </div>
  </div>

  <!-- 4行目 -->
  <div class="wrapper-box_thirteen">
    <div class="wrapper-box-img">
      <img src="img/izakaya.jpg" alt="" />
    </div>
    <div class="wrapper-box-content">
      <h2 class="wrapper-box-content-ttl">
        八戒
      </h2>
      <p class="wrapper-box-content-text">#東京都 #居酒屋</p>
      <a href="" class="wrapper-box-content-cat">詳しくみる</a>

      <i class="fa-solid fa-heart"></i>
    </div>
  </div>
  <div class="wrapper-box_fourteen">
    <div class="wrapper-box-img">
      <img src="img/sushi.jpg" alt="" />
    </div>
    <div class="wrapper-box-content">
      <h2 class="wrapper-box-content-ttl">
        福助
      </h2>
      <p class="wrapper-box-content-text">#大阪府 #寿司</p>
      <a href="" class="wrapper-box-content-cat">詳しくみる</a>

      <i class="fa-solid fa-heart"></i>
    </div>
  </div>
  <div class="wrapper-box_fifteen">
    <div class="wrapper-box-img">
      <img src="img/ramen.jpg" alt="" />
    </div>
    <div class="wrapper-box-content">
      <h2 class="wrapper-box-content-ttl">
        ラー北
      </h2>
      <p class="wrapper-box-content-text">#東京都 #ラーメン</p>
      <a href="" class="wrapper-box-content-cat">詳しくみる</a>

      <i class="fa-solid fa-heart"></i>
    </div>
  </div>
  <div class="wrapper-box_sixteen">
    <div class="wrapper-box-img">
      <img src="img/izakaya.jpg" alt="" />
    </div>
    <div class="wrapper-box-content">
      <h2 class="wrapper-box-content-ttl">
        翔
      </h2>
      <p class="wrapper-box-content-text">#大阪府 #居酒屋</p>
      <a href="" class="wrapper-box-content-cat">詳しくみる</a>

      <i class="fa-solid fa-heart"></i>
    </div>
  </div>

  <!-- 5行目 -->
  <div class="wrapper-box_seventeen">
    <div class="wrapper-box-img">
      <img src="img/sushi.jpg" alt="" />
    </div>
    <div class="wrapper-box-content">
      <h2 class="wrapper-box-content-ttl">
        経緯
      </h2>
      <p class="wrapper-box-content-text">#東京都 #寿司</p>
      <a href="" class="wrapper-box-content-cat">詳しくみる</a>

      <i class="fa-solid fa-heart"></i>
    </div>
  </div>
  <div class="wrapper-box_eighteen">
    <div class="wrapper-box-img">
      <img src="img/yakiniku.jpg" alt="" />
    </div>
    <div class="wrapper-box-content">
      <h2 class="wrapper-box-content-ttl">
        漆
      </h2>
      <p class="wrapper-box-content-text">#東京都 #焼肉</p>
      <a href="" class="wrapper-box-content-cat">詳しくみる</a>

      <i class="fa-solid fa-heart"></i>
    </div>
  </div>
  <div class="wrapper-box_nineteen">
    <div class="wrapper-box-img">
      <img src="img/italian.jpg" alt="" />
    </div>
    <div class="wrapper-box-content">
      <h2 class="wrapper-box-content-ttl">
        THE TOOL
      </h2>
      <p class="wrapper-box-content-text">#福岡県 #イタリアン</p>
      <a href="" class="wrapper-box-content-cat">詳しくみる</a>

      <i class="fa-solid fa-heart"></i>
    </div>
  </div>
  <div class="wrapper-box_twenty">
    <div class="wrapper-box-img">
      <img src="img/sushi.jpg" alt="" />
    </div>
    <div class="wrapper-box-content">
      <h2 class="wrapper-box-content-ttl">
        木船
      </h2>
      <p class="wrapper-box-content-text">#大阪府 #寿司</p>
      <a href="" class="wrapper-box-content-cat">詳しくみる</a>

      <i class="fa-solid fa-heart"></i>
    </div>
  </div>
</div>

@endsection
