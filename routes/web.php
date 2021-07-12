<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.index');
});

Route::get('/blogposts', function () {
    return view('blogpost.index');
})->name('blogposts');

Route::post('/blogposts', [PostController::class, 'store']);

Route::get('/projects', function () {
    return view('projects.index');
})->name('projects');

Route::post('/projects', [ProjectController::class, 'store']);