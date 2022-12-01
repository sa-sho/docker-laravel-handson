@extends('layout')

@section('content')
    <title>ログインフォーム</title>
</head>
<body>
    <div class ="text-center mt-4">
@isset($errors)
    <p style="color:red">{{ $errors->first('message') }}</p>
@endisset
    </div>
    <div class="d-flex justify-content-center mt-5">
<form name="loginform" action="/login" method="post">
    {{ csrf_field() }}
<dl>
    <dt>メールアドレス:</dt><dd><input type="text" name="email" size="30" value="{{ old('email') }}"></dd>
    <dt>パスワード:</dt><dd><input type="password" name="password" size="30"></dd>
</dl>
<div class="d-flex justify-content-end">
<button class="btn btn-primary" type='submit' name='action' value='send'>ログイン</button>
</div>
</form>
</div>

@endsection