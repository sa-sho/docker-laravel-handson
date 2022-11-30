@extends('layout')

@section('content')
<body>
    <p>こんにちは！
@if (Auth::check())
    {{ \Auth::user()->name }}さん</p>
    <p><a href="/logout">ログアウト</a></p>
@else
    ゲストさん</p>
    <p><a href="/login">ログイン</a><br><a href="/register">会員登録</a></p>
@endif
</body>
    <div class="container mt-4">
        <div class="mb-4">
            <a href="{{ route('posts.create') }}" class="btn btn-primary">
                投稿を新規作成する
            </a>
        </div>
        @foreach ($posts as $post)
            <div class="card mb-4">
                <div class="card-header">
                    {{ $post->title }}
                </div>
                <div class="card-body">
                    <p class="card-text">
                    {!! nl2br(e(Str::limit($post->body, 200))) !!}
                    </p>
                    <a class="card-link" href="{{ route('posts.show', ['post' => $post]) }}">
                    続きを読む
                    </a>
                </div>
                <div class="card-footer">
                    <span class="mr-2">
                        投稿日時 {{ $post->created_at->format('Y.m.d') }}
                        {{ $post->user->name }}
                    </span>

                    @if ($post->comments->count())
                        <span class="badge badge-primary">
                            コメント {{ $post->comments->count() }}件
                        </span>
                    @endif
                </div>
            </div>
        @endforeach
        <div class="d-flex justify-content-center mb-5">
    {{ $posts->links() }}
</div>
    </div>
@endsection