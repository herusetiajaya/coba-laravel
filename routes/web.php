<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Models\User;

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
        User::all()
    ]);
});
// page about
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        'active' => 'about',
        "name" => "Heru Setiawan",
        "email" => "heru27setia@gmail.com",
        "image" => "rikudo.png"
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
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// page dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard',
    ]);
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
