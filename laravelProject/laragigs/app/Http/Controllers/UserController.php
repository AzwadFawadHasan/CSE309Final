<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Validation\Rule;



class UserController extends Controller
{
    // Show Register/Create Form
    public function create(){
        return view('users.register');
    }


    //create new user 
    public function store(Request $request)
    {
        # code...
        $formFields = $request->validate([
            'name'=> ['required', 'min:3'],
            'email'=>['required', 'unique:users,email'],
            
            'password'=>'required|confirmed|min:6',

            
        ]);
        //hash  passwords
        $formFields['password']=bcrypt($formFields['password']);

        //create User
        $user = User::create($formFields);
        //login 
        auth()->login($user);
        return redirect('/')->with('message','User created andd log in!');

    }
}
