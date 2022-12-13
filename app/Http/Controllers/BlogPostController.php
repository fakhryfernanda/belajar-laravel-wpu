<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index() {
        return view('blog', [
            "title" => "Blog",
            "posts" => BlogPost::all()
        ]);
    }

    public function show(BlogPost $post)
    {
        return view('post', [
            "title" => "Post",
            "post" => $post
        ]);
    }
}
