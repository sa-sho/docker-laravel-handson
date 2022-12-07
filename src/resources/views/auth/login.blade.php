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
    <div class="text-white">
    <dt>Mail:</dt><dd><input class="bg-secondary text-white" type="text" name="email" size="30" value="{{ old('email') }}"></dd>
    <dt>Password:</dt><dd><input class="bg-secondary text-white" type="password" name="password" size="30"></dd>
    </div>
</dl>
<div class="d-flex justify-content-end text-white">
<button class="btn btn-info nav-link" type='submit' name='action' value='send'>ログイン</button>
</div>
</form>
</div>

@endsection