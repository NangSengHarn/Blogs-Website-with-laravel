<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.register');
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
    public function edit()
    {
        return view('auth.update');
    }
    public function login()
    {
        return view('auth.logIn');
    }
    public function post_login()
    {
        //validation
        $formData=request()->validate([
            'email'=>['required','email',Rule::exists('users','email')],
            'password'=>['required','min:8']
        ]);
        //auth attempt
        if(auth()->attempt($formData)){
            //if user credentials correct -> redirect
            if(auth()->user()->is_admin){
                //if user is admin -> redirect admin dashboard
                return redirect('/admin/blogs');
            } else {
                //if user is not admin -> redirect home
                return redirect('/')->with('success','Welcome back');
            }
        }
    }
    public function logout()
    {
        auth()->logout();
        return redirect('/')->with('success','Bye!');
    }
}
