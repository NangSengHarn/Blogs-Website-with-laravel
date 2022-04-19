<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.signUp');
    }
    public function store()
    {
        //validation
        $formData=request()->validate([
            'name'=>['required','min:3'],
            'username'=>['required','min:3',Rule::unique('users','username')],
            'email'=>['required','email',Rule::unique('users','email')],
            'password'=>['required','min:8']
        ]);
        //create users
        $user=User::create($formData);
        //login
        auth()->login($user);
        //redirect
        return redirect('/')->with('success','Welcome dear, '.$user->name);
    }
}
