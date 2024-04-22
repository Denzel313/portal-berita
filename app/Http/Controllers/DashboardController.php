<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('writer:id,username', 'comments:id,post_id,user_id,comments_content')->paginate(1);
        $most_popular = Post::with('writer:id,username', 'comments:id,post_id,user_id,comments_content')->paginate(4);
        return view('dashboard.dashboard', compact('posts', 'most_popular'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //get post by ID
        $posts = Post::with('writer:id,username', 'comments:id,post_id,user_id,comments_content')->findOrFail($id);
        $most_popular = Post::with('writer:id,username', 'comments:id,post_id,user_id,comments_content')->paginate(3);

        //render view with post
        return view('dashboard.detail_posts', compact('posts', 'most_popular'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
