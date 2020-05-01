<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Follow;
use App\User;

class FollowController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->query();

        if (isset($filter['type']) && $filter['type'] !== 'followers' && $filter['type'] !== 'following') {
            return redirect()->back();
        }

        if ($filter['type'] === 'followers') {
            $fromUserIds = Follow::where('to_user_id', \Auth::user()->id)->pluck('from_user_id');
            $users       = User::whereIn('id', $fromUserIds)->get();
        }

        if ($filter['type'] === 'following') {
            $toUserIds = Follow::where('from_user_id', \Auth::user()->id)->pluck('to_user_id');
            $users     = User::whereIn('id', $toUserIds)->get();
        }

        return view('pages.follow.index', [
            'users' => $users
        ]);
    }

    public function store(Request $request)
    {
        Follow::create([
          'to_user_id'   => $request->input('to_user_id'),
          'from_user_id' => \Auth::user()->id,
        ]);

        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        $follow = Follow::findByToUserIdAndFromUserId($request->input('to_user_id'), \Auth::user()->id);
        $follow->delete();

        return redirect()->back();
    }
}
