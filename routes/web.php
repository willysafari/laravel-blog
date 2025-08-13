<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use App\Models\User;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\AdminPostController;
use App\Http\Middleware\AdminOnly;


Route::get('/',[PostController:: class, 'index'])->name('home');

// Route::get('ping', function () {
//   require_once('/path/to/MailchimpMarketing/vendor/autoload.php');

// $mailchimp = new \MailchimpMarketing\ApiClient();

// $mailchimp->setConfig([
// 	'apiKey' => 'YOUR_API_KEY',
// 	'server' => 'YOUR_SERVER_PREFIX'
// ]);

// $response = $mailchimp->ping->get();
// print_r($response); // or dd($response) if you don't have ddd()
// });

Route::get('posts/{post:slug}', [PostController::class,'show']);

Route::get('categories/{category:slug}', [PostController::class,'category']);

Route::get('authors/{author:username}', [PostController::class,'author']);

Route::get('register',[RegisterController::class,'create'])->middleware('guest');

Route::post('register',[RegisterController::class,'store'])->middleware('guest');
Route::post('post/{post:slug}/comments', [PostCommentsController::class,'store']);


// Route::get('login',[SessionsController::class,'create'])->middleware('guest');

Route::post('logout', [SessionsController::class,'destroy'])->middleware('auth');

Route::get('login', [SessionsController::class,'create'])->middleware('guest');
Route::post('login', [SessionsController::class,'store'])->middleware('guest');

Route::get('admin/posts/create', [PostController::class,'create'])->middleware();

Route::post('admin/posts', [PostController::class,'store'])->middleware();


?>       