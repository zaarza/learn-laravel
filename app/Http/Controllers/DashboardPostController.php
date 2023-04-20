<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;


class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'posts' => Post::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'image' => 'image|file|max:1024',
            'category_id' => 'required|exists:categories,id',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        };

        $validatedData['user_id'] = auth()->user()->id;

        $excerpt = Str::limit(strip_tags($validatedData['body']), 50);
        $excerpt = str_replace('&nbsp;', ' ', $excerpt);
        $validatedData['excerpt'] = $excerpt;

        Post::create($validatedData);

        return redirect('/dashboard/posts')->with('success', "New post has been added.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'post' => $post,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required|exists:categories,id',
            'body' => 'required',
            'image' => 'image|file|max:1024',
        ];

        $validatedData = $request->validate($rules);
        $validatedData['user_id'] = auth()->user()->id;

        // check slug is changed or not
        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        // check image is changed or not
        if ($request->file('image')) {
            Storage::delete($post->image);
            $validatedData['image'] = $request->file('image')->store('post-images');
        };

        $excerpt = Str::limit(strip_tags($validatedData['body']), 50);
        $excerpt = str_replace('&nbsp;', ' ', $excerpt);
        $validatedData['excerpt'] = $excerpt;

        Post::where('id', $post->id)
            ->update($validatedData);

        return redirect('/dashboard/posts')->with('success', "Post has been updated.");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Storage::delete($post->image);
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', "Post has been deleted");
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
