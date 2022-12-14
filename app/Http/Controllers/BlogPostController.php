<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index() {
        $posts = BlogPost::latest(); // menampilkan data dari yang terbaru

        if (request('search')) {
            $posts->where('title', 'like', '%' . request('search') . '%')
                  ->orWhere('body', 'like', '%' . request('search') . '%');
        }

        return view('blog', [
            "title" => 'All Posts',
            "posts" => $posts->get(),
            "searching" => request('search')
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
