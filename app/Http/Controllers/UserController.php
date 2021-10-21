<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('home', [
            "title" => "Home",
            "active" => "home",
        ]);
    }

    public function show(User $author)
    {
        return view('posts', [
            "title" => "Post by " . $author->name,
            "active" => "posts",
            "head" => 'Post(s) by Author, <span class="text-warning">' . $author->name,
            "posts" => $author->posts->load('category', 'author'),
        ]);
    }
}
