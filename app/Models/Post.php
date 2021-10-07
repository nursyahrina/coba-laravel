<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
