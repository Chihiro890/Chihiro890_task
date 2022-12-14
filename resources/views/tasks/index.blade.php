<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task index</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>タスク一覧</h1>
    <ul>
        @foreach ($tasks as $task)
            <!-- // リンク先をidで取得し名前で出力 -->
            {{-- <li> </li> --}}
            <div class="tasklist">
                <a href="/tasks/{{ $task->id }}">{{ $task->title }}</a>

                <!-- 新規登録画面へジャンプする -->
                {{-- <button onclick="location.href='/tasks/'">削除する</button> --}}
                <!-- 削除ボタン -->
                <form action="/tasks/{{ $task->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
                </form>
            </div>
        @endforeach
        <hr>

        {{-- create入れる --}}
        {{-- <a href="/tasks">戻る</a> --}}
        <h1>新規論文登録</h1>
        <form action="/tasks" method="post">
            @csrf
            <p>
                <label for="title">タイトル</label><br>
                <input type="text" name="title">
            </p>
            <p>
                <label for="body">内容</label><br>
                <textarea name="body" class="body"></textarea>
            </p>

            <input type="submit" value="Create Task">
        </form>
        {{-- create入れる --}}


</body>

</html>
