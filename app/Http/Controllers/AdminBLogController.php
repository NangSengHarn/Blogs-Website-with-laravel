<?php

namespace App\Http\Controllers;

use App\Mail\SubscriberMail;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
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
            "body"=>['required']
        ]);
        //add user_id to formData
        $formData['user_id']=auth()->id();
        //store thumbnail into thumbnails folder and add storage path to formData
        if(request('thumbnail')){
            $formData['thumbnail']=request()->file('thumbnail')->store('thumbnails');
        }

        $categoryName=request('category');
        $category=Category::firstOrCreate(['name'=>$categoryName,'slug'=>Str::slug($categoryName)]);
        $formData['category_id']=$category->id;
        //create blog
        $blog=Blog::create($formData);

        $tags = request('tag');
        $tagId = [];
        if (!empty($tags)) {
          foreach ($tags as $tagName)
          {
              $tag = Tag::firstOrCreate(['name'=>$tagName, 'slug'=>Str::slug($tagName)]);
              if($tag)
              {
                  $tagId[] = $tag->id;
              }
          }
          $blog->tags()->syncWithoutDetaching($tagId);
        }
        //mail to subscribers
        $subscribers=User::all()->filter(fn ($subscriber) => $subscriber->id!=auth()->id()&&$subscriber->is_subscribe==1 );
        $subscribers->each(function ($subscriber) use ($blog) {
            Mail::to($subscriber->email)->queue(new SubscriberMail($blog));
        });
        //redirect
        return redirect('/admin/blogs');

    }
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return back();
    }
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit',[
            'blog'=>$blog,
            'categories'=>Category::all(),
            'tags'=>Tag::all()
        ]);
    }
    public function update(Blog $blog)
    {
        $formData=request()->validate([
            "title"=>['required'],
            "slug"=>['required',Rule::unique('blogs','slug')->ignore($blog->slug, 'slug')],
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
        Blog::findOrFail($blog->id)->update($formData);
        //redirect
        return redirect('/admin/blogs');
    }
}
