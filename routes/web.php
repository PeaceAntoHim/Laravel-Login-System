<?php

use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
        "title" => "Home",
        "active" => "home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Frans Sebastian",
        "email" => "franssebastian15@gmail.com",
        "image" => "Frans P1.jpg",
        "active" => "about"
    ]);
});

/* Halaman single post */
Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

/* Halaman Categories */
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all(),
    ]);
});

// Route untuk login
Route::get('/login', [LoginController::class, 'index']);
// Route untuk register
Route::get('/register', [RegisterController::class, 'index']);






























/* Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        "title" => "Post by Category : $category->name",
        "active" => 'categories',
        'posts' => $category->posts->load('category', 'author'),
    ]);
}); */

// Author routes
    /* Route::get('/authors/{author:username}', function (User $author) {
        return view('posts', [
            "title" => "Post by Author : $author->name",
            "active" => 'posts',
            'posts' => $author->posts->load('category', 'author'),
        ]);
    });
 */



    /*   $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    } */
