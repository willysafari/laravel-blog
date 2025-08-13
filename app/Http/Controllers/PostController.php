<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\PostCommentsController;


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

    public function create(){
        // Ensure the user is authenticated and is an admin
             if(auth()->guest()){
            abort(403,'pole endelea kupambana');
        }
        
        // Check if the user is an admin
        if(auth()->user()->username !== 'adminruma'){
            abort(403, 'Unauthorized');
        }
        // Return the view for creating a post
        return view('posts.create', [
            'categories' => Category::all()
        ]);



    }

public function store(Request $request){


//    $request->file('thumbnail')->store('thumbnails');
//    return $path;
//         // dd($request->all());

        $attributes = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'thumbnail' => 'image|file|max:1024',
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => 'required'
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = $request->file('thumbnail')->store('thumbnails');

        Post::create($attributes);

        return redirect('/')->with('success', 'Post created successfully!');
    }
 
}
