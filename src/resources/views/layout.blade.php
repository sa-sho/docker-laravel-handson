<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Laravel BBS</title>

    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    >
</head>
<body>
    <header class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('') }}">
                Laravel BBS
            </a>
            <div class="mr-1">
                @if (Auth::check())
                <a class="btn btn-danger" href="{{ route('logout') }}">ログアウト</a>
                @else
                <a class="btn btn-info" href="{{ route('login') }}">ログイン</a>
                <a class="btn btn-info" href="{{ route('register') }}">会員登録</a>
                @endif
            </div>
        </div>
    </header>

    <div>
        @yield('content')
    </div>
</body>
</html>