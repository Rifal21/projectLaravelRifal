<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use PhpParser\Builder\Function_;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => 'about',
        "nama" => "Rifal Kurniawan",
        "email" => "rifalkurniawan@gmail.com",
        "image" => "me.jpg"
    ]);
});



Route::get('/blog', [PostController::class, 'index']);

Route::get(
    'post/{post:slug}',
    [PostController::class, 'show']
);

Route::get('/categories', function () {

    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');


// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'title' => "Posts by Category : $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load(['category', 'author']),
//         'category' => $category->name
//     ]);
// });

// Route::get('/authors/{author:username}', function (User $author) {
//     return view('posts', [
//         'title' => "Posts by Author : $author->name",
//         'active' => 'posts',
//         'posts' => $author->post->load(['category', 'author']),
//     ]);
// });
