<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('home', [
            "title" => "Home"
        ]);
    }

    public function show(User $author)
    {
        return view('author', [
            "title" => "Post by " . $author->name,
            "author" => $author->name,
            "posts" => $author->posts,
        ]);
    }
}
