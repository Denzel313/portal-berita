<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostDetailResource;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        // return response()->json(['data' => $posts]);
        $posts = Post::with('writer:id,username')->get();
        // return PostDetailResource::collection($posts);
        return PostDetailResource::collection($posts->loadMissing(['writer:id,username', 'comments:id,post_id,user_id,comments_content']));
    }

    public function show($id)
    {
        $post = Post::with('writer:id,username')->findOrFail($id);
        return new PostDetailResource($post->loadMissing(['writer:id,username', 'comments:id,post_id,user_id,comments_content']));
    }

    public function show2($id)
    {
        $post = Post::findOrFail($id);
        return new PostDetailResource($post);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'news_content' => 'required'
        ]);

        $image = null;
        if ($request->file) {
            //di sini kita upload file nya
            $fileName = $this->generateRandomString();
            $extension =  $request->file->extension();
            $image = 'posts-image/' . $fileName . '.' . $extension;
            // $path = 'posts-image/' . $image;

            Storage::putFileAs('public', $request->file, $image);
            // Storage::disk('public')->put($path,file_get_contents($image));
        }

        $request['image'] = $image;
        $request['author'] = Auth::user()->id;
        $post = Post::create($request->all());
        return new PostDetailResource($post->loadMissing('writer:id,username'));
    }

    public function update(Request $request, $id)
    {
        return $request->file;
        $request->validate([
            'title' => 'required|max:255',
            'news_content' => 'required'
        ]);

        // $image = null;
        // if ($request->file) {
        //     //di sini kita upload file nya
        //     $fileName = $this->generateRandomString();
        //     $extension =  $request->file->extension();
        //     $image = $fileName.'.'.$extension;

        //     Storage::putFileAs('image', $request->file, $image);
        // }

        // $request['image'] = $image;
        $post = Post::findOrFail($id);
        $post->update($request->all());
        return new PostDetailResource($post->loadMissing('writer:id,username'));
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return new PostDetailResource($post->loadMissing('writer:id,username'));
    }

    function generateRandomString($length = 30)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
