@extends('layouts.app')

@section('content')
    <div class="p-follow-index">

        @foreach($users as $user)
            <div class="post">
              <div class="name">
                <img src="{{ $user->logo_url }}" class="profile-img"/>
                <p>
                    <a href="{{ route('users.show', $user->id) }}">
                        {{ $user->name }}
                    </a>
                </p>
              </div>
              @if($user->is_following)
              <form action="{{ route('follows.destroy', $user->follow_id) }}" method="POST" style="display: inline;">
                @csrf
                <input name="_method" type="hidden" value="DELETE">
                <input type="hidden" name="to_user_id" value="{{ $user->id }}">
                <button class="m-btn" btn-type="unfollow" type="submit">unfollow</button>
              </form>
            @else
              <form action="{{ route('follows.store') }}" method="POST" style="display: inline;">
                @csrf
                <input type="hidden" name="to_user_id" value="{{ $user->id }}">
                <button class="m-btn" btn-type="follow" type="submit">follow</button>
              </form>
            @endif
            </div>
        @endforeach
    </div>
@endsection
