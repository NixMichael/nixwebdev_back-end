<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function postlist () {
        return Post::all();
    }

    public function index () {
        $posts = Post::all();
        return view('blogpost.index', ['posts' => $posts]);
    }

    public function store (Request $request) {
        $fileName = str_replace(' ', '_', $request->title);
        $webp = $request->file(key: 'webp')->storeAs('blogimages', $fileName . '.webp', 's3');
        $request->file(key: 'png')->storeAs('blogimages', $fileName . '.png', 's3');
        // $imgPath = substr($webp, 11, -5);

        Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'keywords' => $request->keywords,
            'image' => $fileName
        ]);

        return redirect('/blogposts');
    }
    
    public function editpost ($id) {
        $post = Post::find($id);

        return view('editpost.index', ['post' => $post]);
    }

    public function updatepost (Request $request) {
        $id = $request->id;

        $fileName = str_replace(' ', '_', $request->title);
        if ($request->webp) {
            $webp = $request->file(key: 'webp')->storeAs('blogimages', $fileName . '.webp', 's3');
        }
        if ($request->png) {
            $request->file(key: 'png')->storeAs('blogimages', $fileName . '.png', 's3');
        }

        $data = [
            'title' => $request->title,
            'body' => $request->body,
            'keywords' => $request->keywords
        ];

        if ($request->webp) {
            $data['image'] = $fileName;
        }

        $post = Post::find($id);
        $post->update($data);

        return redirect('/blogposts');
        
    }

    public function deletepost ($id) {
        $post = Post::find($id);
        $post->delete();
        return redirect('/blogposts');
    }
}
