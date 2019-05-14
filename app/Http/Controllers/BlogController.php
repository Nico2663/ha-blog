<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class BlogController extends Controller
{
    public function showHome()
    {
        $posts = Post::orderBy('created_at', 'desc')->take(4)->get();
        return view('home', ['posts' => $posts]);
    }

    public function showPost($id)
    {
        $post = Post::find($id);
        return view('post', ['post' => $post]);
    }

    public function searchPosts(Request $request) {
        $posts = Post::search($request->q);
        return view('posts', [
            'q'     => $request->q,
            'posts' => $posts
        ]);
    }
}
