<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Foundation\Http\FormRequest;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->view('posts.index', [
            'posts' => Post::orderBy('updated_at', 'desc')->get(),
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        return response()->view('dashboard', [
            'posts' => Post::orderBy('updated_at', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->post_detail = $request->post_detail;
        $post->save();
        return redirect('/dashboard')->with('status', 'Post successfully created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->view('posts.show', [
            'posts' => Post::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return response()->view('posts.edit', [
            'post' => Post::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $post = Post::findOrFail($id);
         $post->title = $request->title;
         $post->content = $request->content;
         $post->post_detail = $request->post_detail;
         $post->update();
         return redirect('/dashboard')->with('status', 'Post successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);

        $delete = $post->delete($id);

        if($delete) {
            return redirect()->route('dashboard')->with('status', 'Post successfully deleted!');;
        }
    }
}
