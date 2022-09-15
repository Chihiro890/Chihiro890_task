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
    <h1>投稿論文編集</h1>
        {{-- <a href="/tasks">戻る</a> --}}
        <form action="/tasks/{{ $task->id }}" method="post">
            @csrf
            @method('PATCH')
            <p>
                <label for="title">タイトル</label><br>
                <input type="text" name="title">
            </p>
            <p>
                <label for="body">内容</label><br>
                <textarea name="body" class="body"></textarea>
            </p>

            <input type="submit" value="更新">
        
        </form>
        <a href="/tasks/{{ $task->id }}">詳細に戻る</a>

        {{-- create入れる --}}


</body>

</html>
