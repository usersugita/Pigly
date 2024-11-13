@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register2.css') }}">
@endsection

@section('content')
<div class="register">
    <div class="register__title">新規会員登録</div>
    <div class="register__haeder">STEP2 体重データの入力</div>
    <form action="{{ route('login') }}" method="post">
        @csrf

        
        <input type="hidden" name="user_id" value="{{ $id }}">
        <div class="register__item">
            <div class="register__item-logo">現在の体重</div>
            <div class="register__item-text"><input type="text" name="weight" placeholder="現在の体重を入力">
                <p>kg</p>
            </div>

        </div>
        <div class="register__item">
            <div class="register__item-logo">目標の体重</div>
            <div class="register__item-text"><input type="text" name="target_weight" placeholder="目標の体重を入力">
                <p>kg</p>
            </div>
        </div>

        <div class="register__submit">
            <input type="submit" value="アカウントを作成">
        </div>

    </form>
</div>

@endsection