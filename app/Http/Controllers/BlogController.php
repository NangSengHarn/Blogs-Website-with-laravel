<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('blogs.index',[
            'blogs'=>Blog::latest()->filter(request(['search','category','tag','username']))->paginate(6)->withQueryString(),
            'categories'=>Category::all(),
            'tags'=>Tag::all(),
            'popularPosts'=>$this->randomBlogs(4)
        ]);
    }
    public function show(Blog $blog)
    {
        return view('blogs.show',[
            'blog'=>$blog,
            'randomBlogs'=>$this->randomBlogs(3)
        ]);
    }
    public function randomBlogs($count)
    {
        return Blog::inRandomOrder()->take($count)->get();
    }
    public function likeHandler(Blog $blog)
    {
        if(User::find(auth()->id())->isLiked($blog)){
            $blog->unLike();
        }else{
            $blog->like();
        }
        return back();
    }
}
