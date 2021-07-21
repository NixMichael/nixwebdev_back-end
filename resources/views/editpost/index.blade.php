@extends('layouts.app')

@if(Auth::user())
@section('content')
    <div class="content">
        <div class="editor-section">
            <h1>Edit Blog Post</h1>

            <form action="/updatepost" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$post->id}}">
                <input type="text" name="title" placeholder="Post title..." value="{{$post->title}}" required>
                <textarea name="body" cols="80" rows="10" placeholder="Body..." required>{{$post->body}}</textarea>
                <div class="image-uploads">
                    <div class="file-selection">
                        <div>
                            <label for="image_webp">webp image: </label>
                            <input type="file" id="image_webp" name="webp">
                        </div>
                        <img src="https://nixwebdev.s3.eu-west-2.amazonaws.com/blogimages/{{$post->image}}.webp" />
                    </div>
                    <div class="file-selection">
                        <div>
                            <label for="image_png">png image: </label>
                            <input type="file" id="image_png" name="png">
                        </div>
                        <img src="https://nixwebdev.s3.eu-west-2.amazonaws.com/blogimages/{{$post->image}}.png" />
                    </div>
                </div>
                <input type="text" name="keywords" placeholder="Keywords (comma separated)..." value="{{$post->keywords}}" required>
                <div class="buttons">
                    <a class="button button-link" href="/">Cancel</a>
                    <button class="button" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
@endif