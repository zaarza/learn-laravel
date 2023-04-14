<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;


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

Route::get('/categories/{category:slug}', [PostController::class, 'category']);

Route::get('/authors/{user:username}', [PostController::class, 'author']);
