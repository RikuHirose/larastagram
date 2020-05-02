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

          $authUser->load('posts.comments', 'posts.likes', 'following.toUser', 'followers.fromUser');

          return view('pages.user.me', [
            'authUser' => $authUser,
          ]);
        }

        $user = User::where('id', $id)->first();
        $user->load('posts.comments', 'posts.likes', 'following.toUser', 'followers.fromUser');

        return view('pages.user.show', [
          'user'     => $user,
        ]);
    }
}
