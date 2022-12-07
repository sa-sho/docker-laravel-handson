@extends('layout')

@section('content')
<div class="d-flex justify-content-center mt-5">
    <title>ユーザー登録フォーム</title>
</head>
<body>
<form name="registform" action="/register" method="post" id="registform">
    {{ csrf_field() }}
    <div class="text-white">
    <dl>
        <dt>Name:</dt>
        <dd><input class="bg-secondary" type="text" name="name" size="30">
            <span>{{ $errors->first('name') }}</span></dd>
    </dl>
    <dl>
        <dt>Mail:</dt>
        <dd><input class="bg-secondary" type="text" name="email" size="30">
            <span>{{ $errors->first('email') }}</span></dd>
    </dl>
    <dl>
        <dt>Password:</dt>
        <dd><input class="bg-secondary" type="password" name="password" size="30">
            <span>{{ $errors->first('password') }}</span></dd>
    </dl>
    <dl>
        <dt>Password confirmation:</dt>
        <dd><input class="bg-secondary" type="password" name="password_confirmation" size="30">
            <span>{{ $errors->first('password_confirmation') }}</span></dd>
    </dl>
    </div>
    <div class="d-flex justify-content-end">
    <button class="btn btn-info" type='submit' name='action' value='send'>送信</button>
</div>
</form>
</div>
@endsection