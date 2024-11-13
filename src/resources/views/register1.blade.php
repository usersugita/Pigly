@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register1.css') }}">
@endsection

@section('content')
<div class="register">
    <div class="register__title">新規会員登録</div>
    <div class="register__haeder">STEP1 アカウント情報の登録</div>
    <form action="/register" method="post">
        @csrf
        
        <div class="register__item">
            <div class="register__item-logo">お名前</div>
            <div class="register__item-text"><input type="text" name="name" value="{{ old('name') }}" placeholder="お名前を入力"></div>

        </div>
        <div class="register__item">
            <div class="register__item-logo">メールアドレス</div>
            <div class="register__item-text"><input type="email" name="email" value="{{ old('email') }}" placeholder="メールアドレスを入力"></div>
        </div>
        <div class="register__item">
            <div class="register__item-logo">パスワード</div>
            <div class="register__item-text"><input type="password" name="password" id="" placeholder="パスワードを入力"></div>
        </div>
        <div class="register__submit">
            <input type="submit" value="次に進む">
        </div>
        <div class="register__login">
            <a href="/login">ログインはこちら</a>
        </div>
    </form>
</div>

@endsection