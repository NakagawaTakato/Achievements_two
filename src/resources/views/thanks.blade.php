@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<form class="form" action="/register/login/thanks" method="post">
  @csrf
  <div class="container">
    <a href="#" class="container-exit">≡</a>
    <p class="container-text">Rese</p>
  </div>

  <div class="wrapper">
    <div class="wrapper-text">会員登録ありがとうございます</div>
    <a href="http://localhost/register/thanks/login" class="wrapper-button">ログインする</a>
  </div>
</form>
@endsection
