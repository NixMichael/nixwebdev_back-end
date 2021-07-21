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
                <button class="button"><a href="/">Cancel</a></button>
                <button class="button" type="submit">Submit</button>
            </div>
        </form>
    </div>


    <div class="editor-section">
        <h1>Current Blog Posts</h1>
        <div class="existing-posts">
            @foreach($data as $el)
            <div class="existing-post">
                <h2>{{$el->title}}</h2>
                <img src="https://nixwebdev.s3.eu-west-2.amazonaws.com/blogimages/{{$el->image}}.png"/>
                <p>{{$el->body}}</p>
                <div class="action-buttons">
                    <a href="" class="button button-link">EDIT POST</a>
                    <a class="button button-link" href="/deletepost/{{$el->id}}">DELETE POST</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
@endif