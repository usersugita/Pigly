<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/author.css') }}">
    @yield('css')
</head>

<body>

    <div class="header">
        <div class="header-logo">PiGLy</div>
        <div class="header__submit">
            <a href="/weight_logs/goal_setting" class="submit-1">目標体重設定</a>
            <a href="/login" class="submit-2">ログアウト</a>
        </div>
    </div>
    <main class="main">
        @yield('content')

    </main>



</body>


</html>