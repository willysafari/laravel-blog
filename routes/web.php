<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use App\Models\User;


Route::get('/', function () {
    // dd(request('search'));
    $posts = Post::latest();


    // search for posts
    if (request('search')) {
        $posts->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('body', 'like', '%' . request('search') . '%')
            ;

    }


    return view('posts', [
        
        "posts" => $posts->get(),
        "categories" => Category::all()
    ]);
});


Route::get('posts/{post:slug}', function (Post $post) {

    return view('post', [
        "post" => $post,
        "categories" => Category::all(),
    ]);
});

Route::get('categories/{category:slug}', function (Category $category) {

    return view('posts', [
        "posts" => $category->posts,
        "categories" => Category::all()
        
    ]);
 
});

Route::get('authors/{author:username}', function (User $author) {

    return view('posts', [
        "posts" => $author->posts,
        "categories" => Category::all()
        
    ]);

});