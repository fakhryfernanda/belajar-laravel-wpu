<?php

use App\Models\User;
use App\Models\BlogPost;
use App\Models\Category;

use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index', [
        "title" => "Home"
    ]);
});

// [NamaController::class, 'nama method']
Route::get('/blog', [BlogPostController::class, 'index']);
Route::get('/blog/{post:slug}', [BlogPostController::class, 'show']);


Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/author/{author:username}', function(User $author){
    return view('blog', [
        'title' => $author->name . " Posts",
        'posts' => $author->posts->load(['author', 'category']),
    ]);
});

Route::get('/category/{category:slug}', function(Category $category){
    return view('blog', [
        'title' => $category->name . " Category Posts",
        'posts' => $category->posts->load(['author', 'category']),
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});
// Route::get('/about', [BlogPostController::class, 'show']);

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);




