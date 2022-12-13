<?php

use App\Models\BlogPost;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;


Route::get('/', function () {
    return view('index', [
        "title" => "Home"
    ]);
});

// [NamaController::class, 'nama method']
Route::get('/blog', [BlogPostController::class, 'index']);
Route::get('/blog/{post}', [BlogPostController::class, 'show']);


Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});
Route::get('/category/{category:slug}', function(Category $category){
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});
// Route::get('/about', [BlogPostController::class, 'show']);




