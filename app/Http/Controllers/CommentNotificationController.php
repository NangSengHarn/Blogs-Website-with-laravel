<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentNotificationController extends Controller
{
    public function show($id)
    {
        $notification = auth()->user()->notifications->where('id',$id)->first();
        $blog_slug = $notification->data['blog_slug'];
        if ($notification) {
            $notification->markAsRead();
            return redirect("/blogs/$blog_slug/#comment");
        }
    }
}
