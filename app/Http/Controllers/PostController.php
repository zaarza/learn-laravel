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
            'title' => 'Blog',
            'posts' => Post::latest()->get(),
        ]);
    }

    public function category(Category $category)
    {
        return view('category', [
            'title' => $category->name,
            'category' => $category->name,
            'posts' => $category->posts,
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
        return view('author', [
            'title' => "$user->name's Post",
            'name' => $user->name,
            'posts' => $user->posts,
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
