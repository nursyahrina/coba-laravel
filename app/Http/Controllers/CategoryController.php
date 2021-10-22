<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories', [
            "title" => "Post Categories",
            "active" => "categories",
            "categories" => Category::all()
        ]);
    }
}
