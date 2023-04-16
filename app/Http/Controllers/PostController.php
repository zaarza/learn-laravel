<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()

    {
        return view('posts', [
            'title' => 'All Posts',
            'posts' => Post::with(['category', 'user'])->latest()->get(),
        ]);
    }

    public function category(Category $category)
    {
        return view('posts', [
            'title' => "$category->name Category",
            'category' => $category->name,
            'posts' => $category->posts->load(['user', 'category']),
        ]);
    }

    public function categories()
    {
        return view('categories', [
            'title' => 'Categories',
            'categories' => Category::all(),
        ]);
    }

    public function author(User $user)
    {
        return view('posts', [
            'title' => "$user->name's Post",
            'name' => $user->name,
            'posts' => $user->posts->load(['category', 'user'])
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'title' => $post['title'],
            'post' => $post,
        ]);
    }
}
