<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function projectlist () {
        return Project::all();
    }

    public function index () {
        $projects = Project::all();
        return view('projects.index', ['projects' => $projects]);
    }

    public function store (Request $request) {
        $fileName = str_replace(' ', '_', $request->title);
        // $webp = $request->file('image_webp_1200')->storeAs('project_images', $fileName . '_1200.webp', 's3');
        // $request->file('image_webp_700')->storeAs('project_images', $fileName . '_700.webp', 's3');
        // $request->file('image_png_1200')->storeAs('project_images', $fileName . '_1200.png', 's3');
        // $request->file('image_png_700')->storeAs('project_images', $fileName . '_700.png', 's3');
        // $request->file('preview_file')->storeAs('project_images', $fileName . '.gif', 's3');
        // $imgPath = substr($webp, 15, -10);
        $imgPath = $fileName;

        Project::create([
            'title' => $request->title,
            'body' => $request->description,
            'image_id' => $imgPath,
            'frontend_link' => $request->frontendLink,
            'backend_link' => $request->backendLink,
            'live_link' => $request->liveLink,
        ]);

        return redirect('/projects');
    }

    public function deleteproject ($id) {

        $project = Project::find($id);
        $project->delete();
        return redirect('/projects');
    }
}
