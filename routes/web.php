<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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

Route::get('/laravel', function () {
    return view('welcome');
});
// page home
Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
// page about
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Martis",
        "email" => "martis@gmail.com",
        "image" => "martis.png"
    ]);
});
// page all posts
Route::get('/blog', [PostController::class, 'index']);
// page single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);
// page all categories
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});
// page category hasMany posts
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post By Category : $category->name",
        'posts' => $category->posts->load('category', 'author'),
    ]);
});
// page author hasMany posts
Route::get('/author/{author:username}', function (User $author) {
    return view('posts', [
        'title' => "Post By Author : $author->name",
        'posts' => $author->posts->load('category', 'author'),
    ]);
});
