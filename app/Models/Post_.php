<?php

namespace App\Models;

class Post
{
    private static


    public static function find($slug)
    {
        $posts = static::all();
        /*  $post = [];
        foreach ($posts as $p) {
            if ($p["slug"] === $slug) {
                $post = $p;
            } 
        } */
        return $posts->firstWhere('slug', $slug);
    }
}
