@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register1.css') }}">
@endsection

@section('content')
<div class="register">
    <div class="register__title">ログイン</div>
    <div class="register__haeder"></div>
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="register__item">
            <div class="register__item-logo">メールアドレス</div>
            <div class="register__item-text"><input type="email" name="email" id="" placeholder="メールアドレスを入力"></div>

        </div>
        <div class="register__item">
            <div class="register__item-logo">パスワード</div>
            <div class="register__item-text"><input type="password" name="password" id="" placeholder="パスワードを入力"></div>
        </div>

        <div class="register__submit">
            <input type="submit" value="ログイン">
        </div>
        <div class="register__login">
            <a href="/register">アカウント作成はこちら</a>
        </div>
    </form>
</div>

@endsection