<?php

use App\Http\Controllers\AdminBLogController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CommentNotificationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () { return view('blogs.index'); });
// Route::get('/signUp', function () { return view('auth.signUp'); });
// Route::get('/signIn', function () { return view('auth.signIn'); });
// Route::get('/show', function () { return view('blogs.show'); });
// Route::get('/create', function () { return view('admin.blogs.create'); });
// Route::get('/admin/blogs', function () { return view('admin.blogs.index'); });

Route::get('/',[BlogController::class,'index']);
Route::get('/blogs/{blog:slug}',[BlogController::class,'show']);
Route::post('/blogs/{blog:slug}',[CommentController::class,'store']);
Route::post('/blogs/{blog:slug}/likeunlike',[BlogController::class,'likeHandler']);
Route::post('/{user}/subscribe',[UserController::class,'subscriptionHandler']);
Route::get('/notifications/{id}',[CommentNotificationController::class,'show']);

Route::get('/register', [AuthController::class,'create'])->middleware('guest');
Route::post('/register', [AuthController::class,'store'])->middleware('guest');
Route::get('/updateProfile', [AuthController::class,'edit'])->middleware('auth');
Route::post('/updateProfile', [AuthController::class,'update'])->middleware('auth');
Route::get('/login', [AuthController::class,'login'])->middleware('guest');
Route::post('/login', [AuthController::class,'post_login'])->middleware('guest');
Route::post('/logout', [AuthController::class,'logout'])->middleware('auth');
Route::get('/admin/blogs',[AdminBLogController::class,'index'])->middleware('admin');
Route::get('/admin/blogs/create',[AdminBLogController::class,'create'])->middleware('admin');
Route::post('/admin/blogs/store',[AdminBlogController::class,'store'])->middleware('admin');
Route::delete('/admin/blogs/{blog:slug}/delete',[AdminBLogController::class,'destroy'])->middleware('admin');
Route::get('/admin/blogs/{blog:slug}/edit',[AdminBLogController::class,'edit'])->middleware('admin');
Route::post('/admin/blogs/{blog:slug}/update',[AdminBLogController::class,'update'])->middleware('admin');
