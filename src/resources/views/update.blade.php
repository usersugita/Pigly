@extends('layouts.author')

@section('css')
<link rel="stylesheet" href="{{ asset('css/update.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection

@section('content')
<div class="main">
    <div class="weight_log">
        <div class="weight_log-title">Weight Log</div>
        <form class="weight_log-from" action="">
            @csrf
            <div class="weight_log-item">
                日付
                <div class="date_input">
                    <input type="date" name="date" id="">
                </div>
            </div>
            <div class="weight_log-item">
                体重
                <div class="weight_input">
                    <input type="text" name="weight" id="" placeholder="50.0">
                    <p>kg</p>
                </div>

            </div>
            <div class="weight_log-item">
                摂取カロリー
                <div class="text_input">
                    <input type="text" name="calories" id="" placeholder="1200">
                    <p>cal</p>
                </div>

            </div>
            <div class="weight_log-item">
                運動時間
                <div class="exercise_time_input">
                    <input type="time" name="exercise_time" id="">
                </div>

            </div>
            <div class="weight_log-item">
                運動内容
                <div class="exercise_content_input">
                    <textarea rows="5" name="exercise_content" id="" placeholder="運動内容を追加"></textarea>
                </div>

            </div>
            <div class="weight_log-submit">
                <a href="/weight_logs">戻る</a>
                <input type="submit" value="更新">
                <div class="delete">
                    <button class="trash-button">
                        <i class="fas fa-trash-alt"></i> 
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection