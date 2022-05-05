<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Notifications\newComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class CommentController extends Controller
{
    public function store(Blog $blog)
    {
        request()->validate([
            'body'=>['required','min:3']
        ]);
        $comment=$blog->comments()->create([
            'user_id'=>auth()->id(),
            'body'=>request('body')
        ]);
        $likeUsers=$blog->likedUsers->filter( fn ($likeUser) => $likeUser->id!=auth()->id() );
        $likeUsers->each(function ($likeUser) use ($comment) {
            Notification::sendNow($likeUser, new newComment($comment));
        });
        return back();
    }
}
