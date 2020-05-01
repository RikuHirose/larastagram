<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        Comment::create([
          'user_id'     => \Auth::user()->id,
          'post_id'     => $request->input('post_id'),
          'description' => $request->input('description'),
        ]);

        return redirect(route('index'));
    }
}
