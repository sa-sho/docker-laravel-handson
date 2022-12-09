@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white border-secondary">ユーザー情報</div>
                <div class="card-body bg-dark text-white">

                <form action="{{ route('users.postEdit', ['id' => $user->id]) }}"
                  method="post">
                  @csrf
                  <p>ID: {{ $user->id }}</p>
                  <input type="hidden" name="id" value="{{ $user->id }}" />
                  <p>名前</p>
                  <input type="text" name="name" value="{{ $user->name }}" />
                  <p>メール</p>
                  <input type="text" name="email" value="{{ $user->email }}" />
                  <input class="btn btn-info" type="submit" value="更新" />
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection