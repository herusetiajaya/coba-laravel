<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;


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
        "title" => "Home",
        'active' => 'home',
    ]);
});
// page about
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        'active' => 'about',
        "name" => "Martis",
        "email" => "martis@gmail.com",
        "image" => "martis.png"
    ]);
});

// page all posts
Route::get('/blog', [PostController::class, 'index']);
// page single post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
// page all categories
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'category',
        'categories' => Category::all()
    ]);
});
// page login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// page registration
Route::get('/register', [RegisterController::class, 'index'])->middleware('auth');
Route::post('/register', [RegisterController::class, 'store']);

// page dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
