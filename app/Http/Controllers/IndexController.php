<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        $posts->load('user');

        return view('pages.index', [
          'posts' => $posts
        ]);
    }
}
