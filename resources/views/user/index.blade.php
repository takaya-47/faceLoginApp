<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>トップページ</title>
</head>
<body>
    <h1>Face Login App</h1>
    <p>顔と合言葉でログインしよう！</p>
    <a href="{{ url('/users/create') }}">新規登録</a>
    <a href="{{ url('#') }}">ログイン</a>
</body>
</html>