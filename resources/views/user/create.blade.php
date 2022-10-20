<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新規登録</title>
</head>

<body>
    <h1>Face Login App</h1>
    <h3>新規登録</h3>

    {{-- 登録フォーム --}}
    <form method="POST" action="/users">
        {{-- CSRF対策 --}}
        @csrf
        <label for="name">ユーザー名</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}">
        @error('name')
            <span>{{ $message }}</span>
        @enderror

        <label for="password">合言葉</label>
        <input type="text" id="password" name="password" value="{{ old('password') }}">
        @error('password')
            <span>{{ $message }}</span>
        @enderror

        <label for="group">所属部署</label>
        <input type="text" id="group" name="group_name" value="{{ old('group_name') }}">
        @error('group_name')
            <span>{{ $message }}</span>
        @enderror

        <input type="submit" value="登録">
    </form>

    {{-- ユーザー一覧（ログイン状態時） --}}
    {{-- TODO: ログイン状態ならばul以下を表示する --}}
    <ul>
        <li></li>
    </ul>
</body>

</html>
