<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\AdminCategoryController;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ROUTE UNTUK HALAMAN HOME
Route::get('/', function () {
    return view('profile.home.index', [
        "title" => "Home",
        "active" => 'home'
    ]);
});

// ROUTE UNTUK HALAMAN ABOUT
Route::get('/about', function () {
    return view('profile.about', [
        "title" => "About",
        "active" => 'about',
        "name" => "RSU Sarmut Pakam",
        "email" => "sarmutpakam@gmail.com"
    ]);
});


// ROUTE UNTUK HALAMAN BLOG
Route::get('/blog', [PostController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);

// ROUTE UNTUK HALAMAN SINGLE POST
Route::get('posts/{post:slug}', [PostController::class, 'show']);

// ROUTE HALAMAN LIST CATEGORIES
Route::get('/categories', function () {
    return view('profile.categories', [
        'title' => 'Post Categories',
        "active" => 'categories',
        'categories' => Category::all()
    ]);
});

// ROUTE UNTUK LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

// ROUTE UNTUK LOGOUT
Route::post('/logout', [LoginController::class, 'logout']);

// ROUTE UNTUK REGISTER
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// ROUTE UNTUK DASHBOARD
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

// ROUTE UNTUK DASHBOARD POST
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// ROUTE UNTUK CATEGORY
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');