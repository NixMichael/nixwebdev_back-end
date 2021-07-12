<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ImageController extends Controller
{
    public function store (Request $request) {
        $path = $request->file(key: 'image')->store(path: 'public');

        Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'keywords' => $request->keywords,
            'image' => $path;
        ])

        return redirect()->route('submitted');
    }
}
