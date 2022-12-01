@extends('layout')

@section('content')
<div class="d-flex justify-content-center mt-5">
    <title>ログインフォーム</title>
</head>
<body>
    <div class ="border-bottom">
@isset($errors)
    <p style="color:red">{{ $errors->first('message') }}</p>
@endisset
    </div>
<form name="loginform" action="/login" method="post">
    {{ csrf_field() }}
<dl>
    <dt>メールアドレス:</dt><dd><input type="text" name="email" size="30" value="{{ old('email') }}"></dd>
    <dt>パスワード:</dt><dd><input type="password" name="password" size="30"></dd>
</dl>
<button class="btn btn-info" type='submit' name='action' value='send'>ログイン</button>
</form>
</div>

@endsection