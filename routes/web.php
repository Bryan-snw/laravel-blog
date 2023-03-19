<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\Category;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => 'home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => 'about',
        "name" => "Judith Bryan Leonard Sie",
        "email" => "bryan@gmail.com",
        "img" => "bryan.png"
    ]);
});


Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);
// Route::get('posts/{slug}', [PostController::class, 'show']);



Route::get('categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        "active" => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])->middleware('auth');

// Controller Resource
// Mengganti default key pada Models/Post menjadi slug dan bukan id.
// Controller Resource secara otomatis menghandle request berdasarkan method yang di krimkan
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// middleware('admin') adalah custom middleware yanng kita buat cek Controllers/Kernel
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

// Menggunakan Gate
// Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show');




// Route::get('categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'title' => "Post by Category : $category->name",
//         "active" => 'categories',
//         'posts' => $category->posts->load('author', 'category'),
//     ]);
// });

// Route::get('authors/{author:username}', function (User $author) {
    //     return view('posts', [
//         'title' => "Post by Author : $author->name",
//         "active" => 'categories',
//         'posts' => $author->posts->load('category', 'author')
//     ]);
// });
