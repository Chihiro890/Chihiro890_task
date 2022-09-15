<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task show</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>タスク詳細</h1>
    <p>タイトル</p>
    <p>{{ $task->title }}</p>
    <p>内容</p>
    <p>{!! nl2br(e($task->body)) !!}</p>
    <a href="/tasks">戻る</a>
    <a href="/tasks/{{ $task->id }}/edit">編集する</a>
    <form action="/tasks/{{ $task->id }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
    </form>
</body>

</html>
