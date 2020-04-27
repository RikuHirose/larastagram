@extends('layouts.app')

@section('content')
    <div class="p-index">

        @foreach($posts as $post)
            <div class="c-post-block" style="margin-bottom: 8px;">
                <div class="post">
                  <div class="name">
                    <img src="https://randomuser.me/api/portraits/women/84.jpg" width="10%" height="10%" class="profile-img"/>
                    <p>
                        {{ $post->user->name }}
                    </p>
                  </div>
                  <img src="https://image.flaticon.com/icons/svg/149/149947.svg" width="5%" style="opacity:0.5;"/>
                </div>

                <div class="post-image">
                  <img src="{{ $post->img_url }}" width="100%"/>
                </div>

                <div class="likes">
                    <div class="left-icons">
                        <img src="https://image.flaticon.com/icons/svg/25/25424.svg" width="11%"/>
                        <img src="https://image.flaticon.com/icons/svg/54/54916.svg" width="11%"/>
                        <img src="https://image.flaticon.com/icons/svg/126/126536.svg" width="11%"/>
                    </div>
                    <img src="https://image.flaticon.com/icons/svg/25/25667.svg" width="9%"/>
                </div>

                <div class="like-count">
                    <img src="https://image.flaticon.com/icons/svg/60/60993.svg" width="5%"/>
                    <p>24 likes</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
