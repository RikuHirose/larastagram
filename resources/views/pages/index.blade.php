@extends('layouts.app')

@section('content')
    <div class="p-index">

        @foreach($posts as $post)
            <div class="c-post-block">
                <div class="post">
                  <div class="name">
                    <a href="{{ route('users.show', $post->user->id) }}">
                        <img src="{{ $post->user->logo_url }}" class="profile-img"/>
                        <p>
                            {{ $post->user->name }}
                        </p>
                    </a>
                  </div>
                  <img src="https://image.flaticon.com/icons/svg/149/149947.svg" class="detail-img"/>
                </div>

                <div class="post-image">
                  <img src="{{ $post->img_url }}" width="100%"/>
                </div>

                <div class="likes">
                    <div class="left-icons">

                        @if($post->is_like)
                            <form action="{{ route('likes.destroy', $post->like_id) }}" method="POST">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <input type="hidden" name="post_id" value="{{ $post->id }}" required>
                                <button type="submit" style="display: contents;">
                                    <img src="{{ asset('images/love-and-romance.svg') }}">
                                </button>
                            </form>
                        @else
                            <form action="{{ route('likes.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="post_id" value="{{ $post->id }}" required>
                                <button type="submit" style="display: contents;">
                                    <img src="https://image.flaticon.com/icons/svg/25/25424.svg"/>
                                </button>
                            </form>
                        @endif

                        <img src="https://image.flaticon.com/icons/svg/54/54916.svg"/>
                        <img src="https://image.flaticon.com/icons/svg/126/126536.svg"/>
                    </div>
                    <img src="https://image.flaticon.com/icons/svg/25/25667.svg"/>
                </div>

                <div class="like-count">
                    <img src="https://image.flaticon.com/icons/svg/60/60993.svg"/>
                    <p>{{ count($post->likes) }} likes</p>
                </div>

                <div class="comments">
                    <!-- auth user comment -->
                    <p>
                        <span class="user-name">{{ $post->user->name }}</span>
                        {{ $post->description }}
                    </p>
                    <!-- user comment -->
                    @foreach($post->comments as $comment)
                        <p>
                            <span class="user-name">{{ $comment->user->name }}</span>
                            {{ $comment->description }}
                        </p>
                    @endforeach
                </div>

                <div class="comment-input">
                    <form action="{{ route('comments.store') }}" method="POST">
                        @csrf
                        <input type="text" name="description" placeholder="コメントを追加" required>
                        <input type="hidden" name="post_id" value="{{ $post->id }}" required>
                        <button class="btn btn-link" type="submit">
                            投稿する
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
