@extends('layouts.app')

{{-- @if(Auth::user()) --}}
@section('content')

<div class="content">
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

@endsection
{{-- @endif --}}