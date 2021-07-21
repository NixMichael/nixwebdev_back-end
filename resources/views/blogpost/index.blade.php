@extends('layouts.app')

@if(Auth::user())
@section('content')
<div class="content">
    <div class="editor-section">
        <h1>New Blog Post</h1>

        <form action="/blogposts" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" name="title" placeholder="Post title..." required>
            <textarea name="body" cols="80" rows="10" placeholder="Body..." required></textarea>
            <div class="image-uploads">
                <span>
                    <label for="image_webp">webp image: </label>
                    <input type="file" id="image_webp" name="webp" required>
                </span>
                <span>
                    <label for="image_png">png image: </label>
                    <input type="file" id="image_png" name="png" required>
                </span>
            </div>
            <input type="text" name="keywords" placeholder="Keywords (comma separated)..." required>
            <div class="buttons">
                <a class="button button-link" href="/">Cancel</a>
                <button class="button" type="submit">Submit</button>
            </div>
        </form>
    </div>

    <div class="editor-section">
        <h1>Current Blog Posts</h1>
        <div class="existing-content-container">
            @foreach($posts as $post)
            <div class="existing-content">
                <h2>{{$post->title}}</h2>
                <img src="https://nixwebdev.s3.eu-west-2.amazonaws.com/blogimages/{{$post->image}}.png"/>
                <p>{{$post->body}}</p>
                <div class="action-buttons">
                    <a href="/editpost/{{$post->id}}" class="button button-link">Edit Post</a>
                    <a class="button button-link" href="/deletepost/{{$post->id}}">Delete Post</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
@endif