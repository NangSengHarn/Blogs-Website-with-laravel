<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminBLogController extends Controller
{
    public function index()
    {
        return view('admin.blogs.index',[
            'blogs'=>Blog::latest()->get()
        ]);
    }
    public function create()
    {
        return view('admin.blogs.create',[
            'categories'=>Category::all(),
            'tags'=>Tag::all()
        ]);
    }
    public function store()
    {
        //validation
        $formData=request()->validate([
            "title"=>['required'],
            "slug"=>['required',Rule::unique('blogs','slug')],
            "body"=>['required'],
            "category_id"=>['required'],
            "tag_id"=>['required']
        ]);
        //add user_id to formData
        $formData['user_id']=auth()->id();
        //store thumbnail into thumbnails folder and add storage path to formData
        if(request('thumbnail')){
            $formData['thumbnail']=request()->file('thumbnail')->store('thumbnails');
        }
        //create blog
        Blog::create($formData);
        //redirect
        return redirect('/admin/blogs');

    }
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return back();
    }
}
