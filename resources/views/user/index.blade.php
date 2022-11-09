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
    <h3>顔と合言葉でログインしよう！</h3>
    <a href="{{ url('/users/create') }}">新規登録</a>
    <a href="{{ url('#') }}">ログイン</a>

    {{-- ユーザー一覧（ログイン状態時） --}}
    {{-- TODO: ログイン状態ならばul以下を表示する --}}
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
            <li>{{ $user->group_name }}</li>
            @if (is_null($user->face_id))
                <li><a href="{{ url("/users/{$user->id}/faces/create") }}">顔登録</a></li>
            @endif
        @endforeach
    </ul>
</body>

</html>
