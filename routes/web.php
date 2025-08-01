<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use App\Models\User;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;


Route::get('/',[PostController:: class, 'index'])->name('home');


Route::get('posts/{post:slug}', [PostController::class,'show']);

Route::get('categories/{category:slug}', [PostController::class,'category']);

Route::get('authors/{author:username}', [PostController::class,'author']);

Route::get('register',[RegisterController::class,'create']);

Route::post('register',[RegisterController::class,'store']);