<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Foreach_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Rubie'Studio",
        "email" => "rubiestudio.mail@gmail.com",
        "image" => "rubiestudio.png"
    ]);
});

Route::get('/blog', function () {

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rubie The Owner",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia facere nemo repellendus? Atque nam repudiandae eveniet reiciendis, quis rem vel architecto quae. Excepturi, qui vitae minus dignissimos non aspernatur, assumenda eligendi laborum accusantium earum at, maxime ipsa magni omnis modi culpa odit quis quo nesciunt ut nostrum provident. Vero obcaecati rerum necessitatibus dignissimos earum! Totam dolorum, corporis provident, quos porro, distinctio quis nihil qui debitis non dolores laboriosam omnis expedita facilis veniam doloremque sit enim officiis facere maiores delectus. Aut."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Hyoorin Lee",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia facere nemo repellendus? Atque nam repudiandae eveniet reiciendis, quis rem vel architecto quae. Excepturi, qui vitae minus dignissimos non aspernatur, assumenda eligendi laborum accusantium earum at, maxime ipsa magni omnis modi culpa odit quis quo nesciunt ut nostrum provident. Vero obcaecati rerum necessitatibus dignissimos earum! Totam dolorum, corporis provident, quos porro, distinctio quis nihil qui debitis non dolores laboriosam omnis expedita facilis veniam doloremque sit enim officiis facere maiores delectus. Aut."
        ]
    ];

    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});

Route::get('/blog/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rubie The Owner",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia facere nemo repellendus? Atque nam repudiandae eveniet reiciendis, quis rem vel architecto quae. Excepturi, qui vitae minus dignissimos non aspernatur, assumenda eligendi laborum accusantium earum at, maxime ipsa magni omnis modi culpa odit quis quo nesciunt ut nostrum provident. Vero obcaecati rerum necessitatibus dignissimos earum! Totam dolorum, corporis provident, quos porro, distinctio quis nihil qui debitis non dolores laboriosam omnis expedita facilis veniam doloremque sit enim officiis facere maiores delectus. Aut."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Hyoorin Lee",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia facere nemo repellendus? Atque nam repudiandae eveniet reiciendis, quis rem vel architecto quae. Excepturi, qui vitae minus dignissimos non aspernatur, assumenda eligendi laborum accusantium earum at, maxime ipsa magni omnis modi culpa odit quis quo nesciunt ut nostrum provident. Vero obcaecati rerum necessitatibus dignissimos earum! Totam dolorum, corporis provident, quos porro, distinctio quis nihil qui debitis non dolores laboriosam omnis expedita facilis veniam doloremque sit enim officiis facere maiores delectus. Aut."
        ]
    ];

    $selected_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $selected_post = $post;
        }
    }

    return view('post', [
        "title" => "Blog Post",
        "post" => $selected_post
    ]);
});
