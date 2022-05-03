<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function subscriptionHandler(User $user)
    {
        if($user->is_subscribe){
            $user->unSubscribe();
        }else{
            request('email')==$user->email ? $user->subscribe() : null ;

        }
        return back();
    }
}
