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
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/blog', function () {
    $posts = [
        [
            'title' => 'Artikel Pertama',
            'slug' => 'artikel-pertama',
            'author' => 'Arza',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas hic nihil officiis sequi eos eum nesciunt, sunt recusandae magnam tenetur distinctio ducimus, iure perspiciatis aut libero, nisi tempore minus! Amet nesciunt velit voluptatibus molestias fugiat voluptates quod laborum, distinctio totam optio obcaecati error at quis nisi possimus rerum quaerat modi?',
        ],
        [
            'title' => 'Artikel Kedua',
            'slug' => 'artikel-kedua',
            'author' => 'Samsudin',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti est magni eum quam voluptate cupiditate nihil rerum illum expedita beatae dolore aliquam laboriosam earum molestiae quos, perspiciatis placeat enim vitae obcaecati officia culpa quas quibusdam? Voluptate repellendus voluptatem quod atque esse hic saepe soluta voluptates quos consequuntur dicta, unde modi perferendis assumenda labore fugit omnis similique sapiente optio itaque? Ad consectetur corrupti, quae minus autem assumenda obcaecati nobis qui eius facilis? Architecto nulla, aliquid voluptatem eaque nihil suscipit officiis voluptas veritatis culpa in, quam quae iusto totam nisi deleniti harum, odio ea sit molestias rem qui perspiciatis at. Dignissimos, unde!',
        ],
        [
            'title' => 'Artikel Ketiga',
            'slug' => 'artikel-ketiga',
            'author' => 'Edo',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti accusantium repellat doloremque et natus nostrum distinctio recusandae dolor quasi facilis.',
        ],
    ];

    return view('posts', [
        'title' => 'Blog',
        'posts' => $posts,
    ]);
});

Route::get('/blog/{slug}', function ($slug) {
    $posts = [
        [
            'title' => 'Artikel Pertama',
            'slug' => 'artikel-pertama',
            'author' => 'Arza',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas hic nihil officiis sequi eos eum nesciunt, sunt recusandae magnam tenetur distinctio ducimus, iure perspiciatis aut libero, nisi tempore minus! Amet nesciunt velit voluptatibus molestias fugiat voluptates quod laborum, distinctio totam optio obcaecati error at quis nisi possimus rerum quaerat modi?',
        ],
        [
            'title' => 'Artikel Kedua',
            'slug' => 'artikel-kedua',
            'author' => 'Samsudin',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti est magni eum quam voluptate cupiditate nihil rerum illum expedita beatae dolore aliquam laboriosam earum molestiae quos, perspiciatis placeat enim vitae obcaecati officia culpa quas quibusdam? Voluptate repellendus voluptatem quod atque esse hic saepe soluta voluptates quos consequuntur dicta, unde modi perferendis assumenda labore fugit omnis similique sapiente optio itaque? Ad consectetur corrupti, quae minus autem assumenda obcaecati nobis qui eius facilis? Architecto nulla, aliquid voluptatem eaque nihil suscipit officiis voluptas veritatis culpa in, quam quae iusto totam nisi deleniti harum, odio ea sit molestias rem qui perspiciatis at. Dignissimos, unde!',
        ],
        [
            'title' => 'Artikel Ketiga',
            'slug' => 'artikel-ketiga',
            'author' => 'Edo',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti accusantium repellat doloremque et natus nostrum distinctio recusandae dolor quasi facilis.',
        ],
    ];

    $post = [];

    foreach ($posts as $postItem) {
        if ($postItem['slug'] === $slug) {
            $post = $postItem;
        };
    };

    return view('post', [
        'title' => $post['title'],
        'post' => $post,
    ]);
});


Route::get('/about', function () {
    $data = [
        'title' => 'About',
        'name' => 'Arza',
        'email' => 'email@email.com',
        'image' => 'profile.jpg'
    ];

    return view('about', $data);
});
