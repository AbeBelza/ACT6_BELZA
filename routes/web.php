<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts.index');
});

Route::get('/posts/{Post}', function ($post) {
    return view('posts.show', [
        'post' => $post
    ]);
});