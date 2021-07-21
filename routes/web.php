<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('home');

// Blog Post Controllers

Route::get('/blogposts', [PostController::class, 'index'])->name('blogposts')->middleware('auth');

Route::post('/blogposts', [PostController::class, 'store']);

Route::get('/deletepost/{id}', [PostController::class, 'deletepost']);

Route::get('/editpost/{id}', [PostController::class, 'editpost']);

Route::post('/updatepost', [PostController::class, 'updatepost']);

// Project Controllers

Route::get('/projects', [ProjectController::class, 'index'])->name('projects')->middleware('auth');

Route::post('/projects', [ProjectController::class, 'store']);

Route::get('/deleteproject/{id}', [ProjectController::class, 'deleteproject']);

Route::get('/editproject/{id}', [ProjectController::class, 'editproject']);

Route::post('/updateproject', [ProjectController::class, 'updateproject']);

// Auth Routes

Auth::routes();

