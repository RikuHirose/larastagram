<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Like;

class LikeController extends Controller
{
    public function store(Request $request)
    {
        Like::create([
          'user_id' => \Auth::user()->id,
          'post_id' => $request->input('post_id'),
        ]);

        return redirect(route('index'));
    }

    public function destroy(Request $request)
    {
        $like = Like::findByUserIdAndPostId(\Auth::user()->id, $request->input('post_id'));
        $like->delete();

        return redirect()->back();
    }
}
