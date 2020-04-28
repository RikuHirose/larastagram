<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    public function create()
    {
        return view('pages.post.create', [
        ]);
    }

    public function store(Request $request)
    {
        if ($request->file('image')->isValid()) {
            // file upload
            $fileName = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/postImages',$fileName);

            $fullFilePath = 'storage/postImages/'.$fileName;
            $description  = $request->input('description');

            Post::create([
              'user_id'     => \Auth::user()->id,
              'description' => $description,
              'img_url'     => $fullFilePath
            ]);
        }

        return redirect(route('index'));
    }
}
