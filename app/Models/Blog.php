<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $with=['category','author','tags','comments'];

    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class,'blog_tag');
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function likedUsers(){
        return $this->belongsToMany(User::class,'blog_user');
    }

    public function scopeFilter($query,$filter){
        $query->when($filter['search']??false,function($query,$search){
            $query->where(function($query) use ($search){
                $query->whereHas('category',function($query) use ($search){
                        $query->where('slug','LIKE','%'.$search.'%');
                    })
                    ->orWhereHas('tags',function($query) use ($search){
                        $query->where('slug','LIKE','%'.$search.'%');
                    })
                    ->orWhereHas('author',function($query) use ($search){
                        $query->where('name','LIKE','%'.$search.'%');
                    })
                    ->orWhere('title','LIKE','%'.$search.'%')
                    ->orWhere('body','LIKE','%'.$search.'%');
            });
        });

        $query->when($filter['category']??false,function($query,$slug){
            $query->whereHas('category',function($query) use ($slug){
                $query->where('slug',$slug);
            });
        });
        $query->when($filter['tag']??false,function($query,$slug){
            $query->whereHas('tags',function($query) use ($slug){
                $query->where('slug',$slug);
            });
        });
        $query->when($filter['username']??false,function($query,$username){
            $query->whereHas('author',function($query) use ($username){
                $query->where('username',$username);
            });
        });
    }
    public function like()
    {
        $this->likedUsers()->attach(auth()->id());
    }
    public function unLike()
    {
        $this->likedUsers()->detach(auth()->id());
    }
}
