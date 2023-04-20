<?php

use App\Http\Controllers\Categories;
use App\Http\Controllers\DashboardPostController;
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
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

Route::get('/blog/{post:slug}', [PostController::class, 'show']);

Route::get('/about', function () {
    $data = [
        'title' => 'About',
        'name' => 'Arza',
        'email' => 'email@email.com',
        'image' => 'profile.jpg'
    ];

    return view('about', $data);
});

Route::get('/categories', [PostController::class, 'categories']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard/posts/checkslug', [DashboardPostController::class, 'checkSlug']);

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('dashboard/categories', Categories::class);
