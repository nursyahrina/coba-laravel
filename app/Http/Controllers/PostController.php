<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Blog",
            "head" => "New(s) from Rubie'Studio!",
            // "posts" => Post::all()
            "posts" => Post::latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Blog Post",
            "post" => $post
        ]);
    }
}
