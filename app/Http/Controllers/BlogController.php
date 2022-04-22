<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('blogs.index',[
            'blogs'=>Blog::latest()->get(),
            'categories'=>Category::all(),
            'tags'=>Tag::all(),
            'popularPosts'=>$this->randomBlogs(4)
        ]);
    }
    public function randomBlogs($count)
    {
        return Blog::inRandomOrder()->take($count)->get();
    }
}
