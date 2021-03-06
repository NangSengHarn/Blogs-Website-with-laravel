<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded=['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password']=bcrypt($value);
    }

    public function blogs(){
        return $this->hasMany(Blog::class);
    }
    public function likedBlogs(){
        return $this->belongsToMany(Blog::class,'blog_user');
    }

    public function isLiked($blog)
    {
        return auth()->user()->likedBlogs && auth()->user()->likedBlogs->contains('id',$blog->id);
    }
    public function subscribe()
    {
        $this->update(['is_subscribe'=>1]);
    }
    public function unSubscribe()
    {
        $this->update(['is_subscribe'=>0]);
    }
}
