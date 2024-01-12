<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->get();

        return view('posts.index', ['posts' => $posts]);
    }
}
