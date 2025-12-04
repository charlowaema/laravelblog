<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;


Route::get('/', function () {
    return view('welcome');
});




// // Show all posts
// Route::get('/blog', [PostsController::class, 'blog']);

// // Show form to create a new post
// Route::get('/blog/create', [PostsController::class, 'create']);

// // Handle form submission
// Route::post('/blog', [PostsController::class, 'store']);




Route::get('/blog', [PostsController::class, 'index']);
Route::get('/blog/create', [PostsController::class, 'create']);
Route::post('/blog', [PostsController::class, 'store']);
