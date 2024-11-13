<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/author.css') }}">
    <link rel="stylesheet" href="{{ asset('css/weight_logs.css') }}">
</head>

<body>
    <p>ユーザーID: {{ $userId }}</p>
    <p>ユーザーID: {{ $user_id }}</p>
    <div class="header">
        <div class="header-logo">PiGLy</div>
        <div class="header__submit">
            <a href="/weight_logs/goal_setting" class="submit-1">目標体重設定</a>
            <form method="POST" action="/logout">
                @csrf
                <button type="submit">ログアウト</button>
            </form>
        </div>
    </div>
    <main class="main">

        <div class="weight_logs">
            <div class="target_weight">
                <div class="target_weight-item">目標体重
                    <div class="item-weight">
                        {{ $target_weights }}kg
                    </div>
                </div>
                <div class="target_weight-item">目標まで
                    <div class="item-weight">
                        -{{ $subtraction }}kg
                    </div>
                </div>
                <div class="target_weight-item">最新体重
                    <div class="item-weight">
                        {{ $weights }}kg
                    </div>
                </div>

            </div>
            <div class=" cotent">
                <div class="form">
                    <form action="">
                        @csrf
                        <input type="date" name="" id="">
                        <span>～</span>
                        <input type="date" name="" id="">
                        <input class="form-submit" type="submit" value="検索">
                    </form>
                    <div class="cotent-create">

                        <button id="openModal" class="open-modal">データ追加</button>
                        <!-- モーダルウィンドウの内容 -->
                        <div id="myModal" class="modal">
                            <div class="modal_main">
                                <div class="weight_log">
                                    <div class="weight_log-title">Weight Logを追加</div>
                                    <form class="weight_log-from" action="">
                                        @csrf
                                        <div class="weight_log-item">
                                            日付
                                            <span>必須</span>
                                            <div class="date_input">
                                                <input type="date" name="date" id="">
                                            </div>

                                        </div>
                                        <div class="weight_log-item">
                                            体重
                                            <span>必須</span>
                                            <div class="weight_input">
                                                <input type="text" name="weight" id="" placeholder="50.0">
                                                <p>kg</p>
                                            </div>

                                        </div>
                                        <div class="weight_log-item">
                                            摂取カロリー
                                            <span>必須</span>
                                            <div class="text_input">
                                                <input type="text" name="calories" id="" placeholder="1200">
                                                <p>cal</p>
                                            </div>

                                        </div>
                                        <div class="weight_log-item">
                                            運動時間
                                            <span>必須</span>
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
                                            <input type="submit" value="登録">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <script>
                            // モーダルの要素を取得
                            const modal = document.getElementById("myModal");
                            const openModalBtn = document.getElementById("openModal");
                            const closeModalBtn = document.getElementById("closeModal");

                            // 「モーダルを開く」ボタンをクリックしたときの処理
                            openModalBtn.onclick = function() {
                                modal.style.display = "block";
                            }

                            // 「×」ボタンをクリックしたときの処理
                            closeModalBtn.onclick = function() {
                                modal.style.display = "none";
                            }

                            // モーダルの外側をクリックしたときの処理
                            window.onclick = function(event) {
                                if (event.target === modal) {
                                    modal.style.display = "none";
                                }
                            }
                        </script>
                    </div>
                </div>
                <div class="cotent__weight_logs">
                    <table>
                        <tr>
                            <th>日付</th>
                            <th>体重</th>
                            <th>食事摂取カロリー</th>
                            <th>運動時間</th>
                            <th></th>
                        </tr>
                        @foreach($authors as $author)
                        <tr>

                            <td>{{$author->date}}</td>
                            <td>{{$author->weight}}</td>
                            <td>{{$author->calories}}</td>
                            <td>{{$author->exercise_time}}</td>
                            <td>
                                <a class="update_link" href="/weight_logs/update">🖊</a>



                            </td>
                            @endforeach



                        </tr>

                    </table>
                </div>
                <div class="pagination__link">{{ $authors->links('pagination::bootstrap-4') }}</div>
            </div>
        </div>
    </main>



</body>