<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use App\Models\User;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;


Route::get('/',[PostController:: class, 'index'])->name('home');


Route::get('posts/{post:slug}', [PostController::class,'show']);

Route::get('categories/{category:slug}', [PostController::class,'category']);

Route::get('authors/{author:username}', [PostController::class,'author']);

Route::get('register',[RegisterController::class,'create'])->middleware('guest');

Route::post('register',[RegisterController::class,'store'])->middleware('guest');


// Route::get('login',[SessionsController::class,'create'])->middleware('guest');

Route::post('logout', [SessionsController::class,'destroy'])->middleware('auth');

Route::get('login', [SessionsController::class,'create'])->middleware('guest');
Route::post('login', [SessionsController::class,'store'])->middleware('guest');