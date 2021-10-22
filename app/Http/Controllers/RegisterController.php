<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register/index', [
            "title" => "Register",
            "active" => "register",
            "image" => "rubiestudio-nobg-black.png"
        ]);
    }
}
