<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>お問い合わせフォーム</title>

</head>

<body>
    <h1>お問い合わせ内容確認フォーム</h1>
    <form method="POST" action="{{ route('complete') }}">
        @csrf
        <div>
            <label for="name">お名前</label>
            <div>
                <h2>{{ $input['name'] }}</h2>
            </div>
            <label for="email">メールアドレス</label>
            <div>
                <h2>{{ $input['email'] }}</h2>
            </div>
            <label for="contact">お問い合わせ内容</label>
            <div>
                <h2>{!! nl2br($input['contact']) !!}</h2>
            </div>
        </div>

        <div>
            <div>
                <a href="/">戻る</a>
                <button type="submit">
                    お問い合わせ内容の送信
                </button>
            </div>
        </div>
    </form>
</body>

</html>