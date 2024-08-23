<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

// posts
Route::get('/posts', function () {
    return view('posts.index');
})->name('posts.index');

Route::get('/post/show', function () {
    return view('posts.show');
})->name('posts.show');

Route::get('/post/show-new', function () {
    return view('posts.show-new');
})->name('posts.show-new');
