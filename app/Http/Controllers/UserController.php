<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Follow;

class UserController extends Controller
{
    public function show($id)
    {
        if ($id == \Auth::user()->id) {
          $authUser = \Auth::user();
          $isFollow = Follow::existsByToUserIdAndFromUserId($id, \Auth::user()->id);

          $authUser->load('posts.comments', 'posts.likes', 'following.toUser', 'followers.fromUser');

          return view('pages.user.me', [
            'authUser' => $authUser,
            'isFollow' => $isFollow
          ]);
        }

        $user = User::where('id', $id)->first();
        $user->load('posts.comments', 'posts.likes', 'following.toUser', 'followers.fromUser');

        $isFollow = Follow::existsByToUserIdAndFromUserId($id, \Auth::user()->id);

        return view('pages.user.show', [
          'user'     => $user,
          'isFollow' => $isFollow
        ]);
    }
}
