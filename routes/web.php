<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () { return view('blogs.index'); });
Route::get('/register', function () { return view('auth.register'); });
Route::get('/login', function () { return view('auth.login'); });
Route::get('/show', function () { return view('blogs.show'); });
Route::get('/create', function () { return view('admin.blogs.create'); });
Route::get('/dashboard', function () { return view('admin.blogs.index'); });
