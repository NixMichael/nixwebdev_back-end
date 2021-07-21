@extends('layouts.app')

{{-- @if(Auth::user()) --}}
@section('content')

<div class="content">
    
    <div class="editor-section">
        <h1>Add a Portfolio Project</h1>
        <form action="/projects" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="title" placeholder="Project title" required>
            <textarea name="description" cols="80" rows="10" placeholder="Project description" required></textarea>
            <div class="image-uploads">
                <span>
                    <label for="image_webp_1200">webp image (1200px):</label>
                    <input type="file" id="image_webp_1200" name="image_webp_1200" required>
                </span>
                <span>
                    <label for="image_webp_700">webp image (700px):</label>
                    <input type="file" id="image_webp_700" name="image_webp_700" required>
                </span>
                <span>
                    <label for="image_png_1200">png image (1200px):</label>
                    <input type="file" id="image_png_1200" name="image_png_1200" required>
                </span>
                <span>
                    <label for="image_png_700">png image (700px):</label>
                    <input type="file" id="image_png_700" name="image_png_700" required>
                </span>
                <span>
                    <label for="preview_file">Preview gif image:</label>
                    <input type="file" id="preview_file" name="preview_file" required>
                </span>
            </div>
            <input type="text" name="frontendLink" placeholder="Front-end link" required>
            <input type="text" name="backendLink" placeholder="Back-end link (if relevant)">
            <input type="text" name="liveLink" placeholder="Live link" required>
            <div class="buttons">
                <button class="button"><a href="/">Cancel</a></button>
                <button class="button" type="submit">Submit</button>
            </div>
        </form>
    </div>

    <div class="editor-section">
        <h1>Current Projects</h1>
        <div class="existing-content-container">
            @foreach($projects as $project)
            <div class="existing-content">
                <h2>{{$project->title}}</h2>
                <img src="https://nixwebdev.s3.eu-west-2.amazonaws.com/project_images/{{$project->image_id}}_700.png"/>
                <p>{{$project->body}}</p>
                <div class="action-buttons">
                    <a href="" class="button button-link">EDIT PROJECT</a>
                    <a class="button button-link" href="/deleteproject/{{$project->id}}">DELETE PROJECT</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
{{-- @endif --}}