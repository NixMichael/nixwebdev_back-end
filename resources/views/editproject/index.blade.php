@extends('layouts.app')

@if(Auth::user())
@section('content')
    <div class="content">
        <div class="editor-section">
            <h1>Edit Project</h1>
            <form action="/updateproject" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$project->id}}">
                <input type="text" name="title" placeholder="Project title" value="{{$project->title}}" required>
                <textarea name="description" cols="80" rows="10" placeholder="Project description" required>{{$project->body}}</textarea>
                <div class="image-uploads">
                    <div class="file-selection">
                        <div>
                            <label for="image_webp_1200">webp image (1200px):</label>
                            <input type="file" id="image_webp_1200" name="image_webp_1200">
                        </div>
                        <img src="https://nixwebdev.s3.eu-west-2.amazonaws.com/project_images/{{$project->image_id}}_1200.webp"/>
                    </div>
                    <div class="file-selection">
                        <div>
                            <label for="image_webp_700">webp image (700px):</label>
                            <input type="file" id="image_webp_700" name="image_webp_700">
                        </div>
                        <img src="https://nixwebdev.s3.eu-west-2.amazonaws.com/project_images/{{$project->image_id}}_700.webp"/>
                    </div>
                    <div class="file-selection">
                        <div>
                            <label for="image_png_1200">png image (1200px):</label>
                            <input type="file" id="image_png_1200" name="image_png_1200">
                        </div>
                        <img src="https://nixwebdev.s3.eu-west-2.amazonaws.com/project_images/{{$project->image_id}}_1200.png"/>
                    </div>
                    <div class="file-selection">
                        <div>
                            <label for="image_png_700">png image (700px):</label>
                            <input type="file" id="image_png_700" name="image_png_700">
                        </div>
                        <img src="https://nixwebdev.s3.eu-west-2.amazonaws.com/project_images/{{$project->image_id}}_700.png"/>
                    </div>
                    <div class="file-selection">
                        <div>
                            <label for="preview_file">Preview gif image:</label>
                            <input type="file" id="preview_file" name="preview_file">
                        </div>
                        <img src="https://nixwebdev.s3.eu-west-2.amazonaws.com/project_images/{{$project->image_id}}.gif"/>
                    </div>
                </div>
                <input type="text" name="frontendLink" placeholder="Front-end link" value="{{$project->frontend_link}}" required>
                <input type="text" name="backendLink" placeholder="Back-end link (if relevant)" value="{{$project->backend_link}}">
                <input type="text" name="liveLink" placeholder="Live link" value="{{$project->live_link}}" required>
                <div class="buttons">
                    <a class="button button-link" href="/">Cancel</a>
                    <button class="button" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@endif