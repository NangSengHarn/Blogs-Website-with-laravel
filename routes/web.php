<?php

use App\Http\Controllers\AdminBLogController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () { return view('blogs.index'); });
// Route::get('/signUp', function () { return view('auth.signUp'); });
// Route::get('/signIn', function () { return view('auth.signIn'); });
// Route::get('/show', function () { return view('blogs.show'); });
// Route::get('/create', function () { return view('admin.blogs.create'); });
// Route::get('/admin/blogs', function () { return view('admin.blogs.index'); });

Route::get('/',[BlogController::class,'index']);

Route::get('/register', [AuthController::class,'create']);
Route::post('/register', [AuthController::class,'store']);
Route::get('/login', [AuthController::class,'login']);
Route::post('/login', [AuthController::class,'post_login']);
Route::post('/logout', [AuthController::class,'logout']);
Route::get('/admin/blogs/create',[AdminBLogController::class,'create']);
Route::post('/admin/blogs/store',[AdminBlogController::class,'store']);
