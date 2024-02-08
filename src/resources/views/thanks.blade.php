@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<form class="form" action="/register/thanks/login" method="post">
  @csrf
  <div class="container">
    <a href="#" class="container-exit">≡</a>
    <p class="container-text">Rese</p>
  </div>

  <div class="wrapper">
    <div class="wrapper-text">会員登録ありがとうございます</div>
    <button type="submit" class="wrapper-button">ログインする</button>
  </div>
</form>
@endsection
