<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/blog', function () {
    return view('posts');
});

Route::get('/about', function () {
    $data = [
        'name' => 'Arza',
        'email' => 'email@email.com',
        'image' => 'profile.jpg'
    ];

    return view('about', $data);
});
