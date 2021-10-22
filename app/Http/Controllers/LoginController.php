<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login/index', [
            "title" => "Login",
            "active" => "login",
            "image" => "rubiestudio-nobg-black.png"
        ]);
    }
}
