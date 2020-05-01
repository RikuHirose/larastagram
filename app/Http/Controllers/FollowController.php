<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Follow;

class FollowController extends Controller
{
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
