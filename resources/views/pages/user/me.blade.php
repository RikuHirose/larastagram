@extends('layouts.app')

@section('content')
  <div class="p-user-show">

    <div class="c-user-profile">
      <div class="profile">

          <div class="profile-image">

            <img src="https://images.unsplash.com/photo-1513721032312-6a18a42c8763?w=152&h=152&fit=crop&crop=faces" alt="">

          </div>

          <div class="profile-user-settings">

            <h1 class="profile-user-name">{{ $authUser->name }}_</h1>

            <button class="profile-edit-btn">Edit Profile</button>

            <button aria-label="profile settings" class="btn profile-settings-btn" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              <i class="fas fa-cog"></i>
            </button>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>

          </div>

          <div class="profile-stats">

            <ul>
              <li><span class="profile-stat-count">{{ count($authUser->posts) }}</span> posts</li>
              <li>
                <a href="{{ route('follows.index', ['type' => 'followers']) }}">
                  <span class="profile-stat-count">{{ count($authUser->followers) }}</span> followers
                </a>
              </li>
              <li>
                <a href="{{ route('follows.index', ['type' => 'following']) }}">
                  <span class="profile-stat-count">{{ count($authUser->following) }}</span> following
                </a>
              </li>
            </ul>

          </div>

          <div class="profile-bio">

            <p><span class="profile-real-name">{{ $authUser->name }}</span> Lorem ipsum dolor sit, amet consectetur adipisicing elit 📷✈️🏕️</p>

          </div>

      </div>
      <!-- End of profile section -->
    </div>

    <div class="c-post-gallery">
      <div class="gallery">

        @foreach($authUser->posts as $post)
          <div class="gallery-item" tabindex="0">

            <img src="{{ $post->img_url }}" class="gallery-image" alt="">

            <div class="gallery-item-info">
              <ul>
                <li class="gallery-item-likes">
                  <span class="visually-hidden">Likes:</span>
                  <i class="fas fa-heart" aria-hidden="true"></i> {{ count($post->likes) }}
                </li>
                <li class="gallery-item-comments">
                  <span class="visually-hidden">Comments:</span>
                  <i class="fas fa-comment" aria-hidden="true"></i> {{ count($post->comments) }}
                </li>
              </ul>
            </div>
          </div>
        @endforeach

      </div>
    </div>
    <!-- End of gallery -->
  </div>
@endsection