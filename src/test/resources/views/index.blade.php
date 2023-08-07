<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>お問い合わせフォーム</title>

</head>

<body>
    <h1>お問い合わせフォーム</h1>
    <form method="POST" action="{{ route('confirm') }}">
        @csrf
        <div>
            <label for="name">お名前</label>
            <div>
                <input id="name" type="text" name="name" value="{{ old('name') }}">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <label for="email">メールアドレス</label>
            <div>
                <input id="email" type="text" name="email" value="{{ old('email') }}">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <label for="contact">お問い合わせ内容</label>
            <div>
                <textarea id="contact" type="text" name="contact" value="{{ old('contact') }}" col=40 row=40></textarea>
                @error('contact')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div>
            <div>
                <button type="submit">
                    お問い合わせ内容の確認へ
                </button>
            </div>
        </div>
    </form>
</body>

</html>