<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $posts = Post::with('writer:id,username', 'comments:id,post_id,user_id,comments_content')->cursorPaginate(2);
        $counts = DB::table('comments')->count();
        $data = new Post;

        return view('blog.blog_item', compact('posts', 'counts', 'request'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        // Ambil semua postingan dengan relasi komentar
        $posts = Post::with(['comments' => function ($query) use ($search) {
            if ($search) {
                $query->where('comments_content', 'like', '%' . $search . '%');
            }
        }])->get();

        return view('blog.blog_search', compact('posts'));
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
        // dd($request->all());
        $request->validate([
            'post_id' => 'required|exists:posts,id',
            'comments_content' => 'required'
        ]);

        $request['comment_content'] = $request->comment;
        $request['user_id'] = auth()->user()->id;

        Comment::create($request);
        // Comment::create([
        //     'comments_content' => $request->comment,
        //     'user_id' => auth()->user()->id
        // ]);

        return redirect()->route('show.blog')->with('success', 'Berhasil membuat comment baru');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $posts = Post::with('writer:id,username', 'comments:id,post_id,user_id,comments_content')->findOrFail($id);
        $comments = $posts->comments;
        $count = DB::table('comments')->where('post_id', $id)->count();
        return view('blog.blog_detail', compact('posts', 'count', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
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
