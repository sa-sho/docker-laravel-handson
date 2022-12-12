@extends('layout')

@section('content')
    <div class="container mt-4">
        <div class="border p-4 bg-dark">
            <h1 class="h5 mb-4 text-white">
                {{ $post->title }}
            </h1>

            <p class="mb-5 text-white">
                {!! nl2br(e($post->body)) !!}
            </p>

            <section>
                <h2 class="h5 mb-4 text-white">
                    コメント
                </h2>

                @forelse($post->comments as $comment)
                    <div class="border-top p-4 text-white">
                        <time class="text-white">
                            {{ $comment->created_at->format('Y.m.d H:i') }}
                        </time>
                        {{ $comment->user->name }}
                        <p class="mt-2">
                            {!! nl2br(e($comment->body)) !!}
                        </p>
                    </div>
                @empty
                <div class="text-white">
                    <p>コメントはまだありません。</p>
                </div>
                @endforelse

                <form class="mb-4" method="POST" action="{{ route('comments.store') }}">
                    @csrf

                    <input
                        name="post_id"
                        type="hidden"
                        value="{{ $post->id }}"
                    >

                    <div class="form-group text-white border-secondary">
                        <label for="body">
                            本文
                        </label>

                        <textarea
                            id="body"
                            name="body"
                            class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}"
                            rows="4"
                        >{{ old('body') }}</textarea>
                        @if ($errors->has('body'))
                            <div class="invalid-feedback">
                                {{ $errors->first('body') }}
                            </div>
                        @endif
                    </div>

                    <div class="mt-4 text-white">
                        <button type="submit" class="btn btn-info">
                            コメントする
                        </button>
                    </div>
                </form>
                @can('update', $post)
                    <div class="mb-4 text-white">
                        <a class="btn btn-info" href="{{ route('posts.edit', ['post' => $post]) }}">
                            編集する
                        </a>
                        <form
                            action="{{ route('posts.destroy', ['post' => $post]) }}"
                            method="POST"
                            style="display: inline-block;">
                            @method('DELETE')
                            @csrf
                            <button type="submit" value="delete" class="btn btn-danger">削除する</button>
                        </form>
                    </div>
                @endcan
            </section>
        </div>
    </div>
@endsection
