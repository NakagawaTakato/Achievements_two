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
                      <option value="product_exchange">東京都</option>
                      <option value="product_exchange">大阪府</option>
                      <option value="product_exchange">福岡県</option>
                  </select>
                  <select class="container-group-bar-dropdown" name="genre">
                      <option value="" disabled selected hidden>All genre</option>
                      <option value="product_exchange">寿司</option>
                      <option value="product_exchange">焼肉</option>
                      <option value="product_exchange">居酒屋</option>
                      <option value="product_exchange">イタリアン</option>
                      <option value="product_exchange">ラーメン</option>
                  </select>
                  <button class="container-group-bar-input" ><i class="fa-solid fa-magnifying-glass"></i>Search ...</button>
              </form>
          </div>
      </div>
  </div>

  @foreach ($authors as $author)
    <div class="wrapper-box">
      <div class="wrapper-box-img">
        <img src="{{ $author->image }}" alt="" />
      </div>
      <div class="wrapper-box-content">
        <h2 class="wrapper-box-content-ttl">
          {{$author->name}}
        </h2>
        <p class="wrapper-box-content-text">#{{$author->city}} #{{$author->shop}}</p>
        <form action="/shop_all/shop_detail" method="POST" >
          <button type="submit" class="wrapper-box-content-cat">詳しくみる</button>
        </form>

        <form action="/my_page" method="POST" >
          <button type="submit" class="wrapper-box-content-heart"><i class="fa-solid fa-heart"></i></button>
        </form>
      </div>
    </div>
  @endforeach
@endsection

