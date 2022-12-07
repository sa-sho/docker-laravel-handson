@extends('layout')

@section('content')

    <div class="container mt-5" style="max-width: 60rem">
        <div class="mb-4">
            <a href="{{ route('posts.create') }}" class="nav-link">
                <h4>
                New Post
                </h4>
            </a>
        </div>
        @foreach ($posts as $post)
            <div class="card mb-5">
                <div class="card-header bg-dark text-white border-secondary">
                    {{ $post->title }}
                </div>
                <div class="card-body bg-dark text-white">
                    <p class="card-text">
                    {!! nl2br(e(Str::limit($post->body, 200))) !!}
                    </p>
                    <a class="card-link text-white" href="{{ route('posts.show', ['post' => $post]) }}">
                    続きを読む
                    </a>
                </div>
                <div class="card-footer bg-dark text-white border-secondary">
                    <span class="mr-2">
                        投稿日時 {{ $post->created_at->format('Y.m.d') }}
                        {{ $post->user->name }}
                    </span>

                    @if ($post->comments->count())
                        <span class="badge badge-info">
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