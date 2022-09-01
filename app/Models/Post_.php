<?php

namespace App\Models;


class Post
{
    private static  $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rifal Kurniawan",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque, vero tenetur consectetur voluptatum ad animi? Fugiat esse porro aspernatur perferendis minima ullam dolor beatae unde. Minima dignissimos autem ab quo iste aliquam similique soluta, culpa blanditiis vero laboriosam quae harum et optio nihil magni a excepturi. Placeat eligendi rerum distinctio."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ifal Adi Sanjaya",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque, vero tenetur consectetur voluptatum ad animi? Fugiat esse porro aspernatur perferendis minima ullam dolor beatae unde. Minima dignissimos autem ab quo iste aliquam similique soluta, culpa blanditiis vero laboriosam quae harum et optio nihil magni a excepturi. Placeat eligendi rerum distinctio."
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
