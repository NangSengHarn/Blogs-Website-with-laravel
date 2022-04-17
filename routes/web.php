<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () { return view('blogs.index'); });
Route::get('/register', function () { return view('auth.register'); });
Route::get('/login', function () { return view('auth.login'); });
Route::get('/show', function () { return view('blogs.show'); });

