@extends('layouts.app')

@if(Auth::user())
@section('content')
<div class="content">
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

@endsection
@endif