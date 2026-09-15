<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Homepage']);
});

Route::get('/blog', function () {
    $posts = Post::all();
    return view('blog', ['title' => 'Daftar Blog', 'posts' => $posts]);
});

Route::get('/author/{user:username}', function (User $user) {
    return view('blog', ['title' => count($user->posts) . ' Article by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('blog', ['title' => 'Category: ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/sblog/{post:slug}', function(Post $post) {
    return view('sblog', ['title' => 'Single blog', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'name' => 'Febri']);
});

Route::get('/contaq', function () {
    return view('contaq', ['title' => 'Contaq Us']);
});
