@extends('layouts.author')

@section('css')
<link rel="stylesheet" href="{{ asset('css/goal_setting.css') }}">
@endsection

@section('content')
<div class="main">
    <div class="target_weight">
        <div class="target_weight-title">目標体重設定</div>
        <form class="target_weight-from" action="">
            @csrf
            <div class="target_weight-item">
                <div class="target_weight_input">
                    <input type="text" name="weight" id="" placeholder="50.0">
                    <p>kg</p>
                </div>

            </div>
            <div class="target_weight-submit">
                <a href="/weight_logs">戻る</a>
                <input type="submit" value="更新">

            </div>
        </form>
    </div>
</div>
@endsection