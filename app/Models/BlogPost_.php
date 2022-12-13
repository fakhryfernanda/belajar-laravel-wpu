<?php

namespace App\Models;

class BlogPost
{
    private static $blog_posts = [
        [
            "title" => "Introducing Laravel Nova",
            "slug" => "introducing-laravel-nova",
            "author" => "Taylor Otwell",
            "body" => "Nova is installed via Composer as a Laravel package. It doesn’t interfere with your existing application in any way. In fact, you can install Nova into existing Laravel 5.6 applications that you have already built. On the front-end, Nova is powered by Vue.js, Vue Router, and Tailwind.css. This makes for a powerful, flexible combination, especially in regards to customization — it&#39s a breeze to build custom tools, cards, and fields. Each Eloquent model in your application has a corresponding Nova “resource” class which defines its fields, actions, filters, lenses, and cards. Nova is configured entirely using simple PHP classes. No configuration is stored in the database."
        ],
        [
            "title" => "Tips and best practices for Laravel 8",
            "slug" => "tips-and-best-practices-for-laravel-8",
            "author" => "Alex Renoki",
            "body" => "Laravel is already known by many PHP developers for writing clean, working and debuggable code. It also has support for many, many features, that sometimes aren&#39t listed in the docs, or they were, but they were removed for various reasons. I have been working with Laravel in production-usage for 4 years and I have learned from writing bad code to better code and I have taken the advantage of Laravel since the first time I started wrote code with it. I am going to show you the mysterious tricks that might help you when writing code with Laravel."
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();

        // $display_post = [];
        // foreach($posts as $post) {
        //     if($post["slug"] === $slug) {
        //         $display_post = $post;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);        
    }
}
