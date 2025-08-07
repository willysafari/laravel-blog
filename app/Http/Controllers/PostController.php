<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    //
    public function index()
    {

    return view('posts', [
        
        "posts" => Post::latest()->filter(request(['search']))->paginate(6),

        "categories" => Category::all()
    ]);
    } 
    public function show(Post $post){
          return view('post', [
        "post" => $post->load('comments'),
        "categories" => Category::all(),
    ]);
    }  
    public function category(Category $category){
         return view('posts', [
        "posts" => $category->posts,
        "categories" => Category::all()
        
    ]);
    }
    public function author(User $author){
        return view('posts', [
        "posts" => $author->posts,
        "categories" => Category::all()
    ]);
    }
}
