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

    //User Logout
    public function logout(Request $request){
        auth()->logout();//this will remove the auth info from the user session\
        //in addition to that it is important to invalidate the user session and regenerate the  their token(csrf token)
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message','you have been LOGGED out');

    }



    //Show login Form
    public function login(){
        return view('users.login');
    }

    public function authenticate(Request $request){
        $formFields = $request->validate([
           
            'email'=>['required', 'email'],
            
            'password'=>'required|min:6',

            
        ]);
        //we need to attempt to log an user in so there's a method to login
        if(auth()->attempt($formFields)){
            //if that is true, we need to generate a session ID
            $request->session()->regenerate();
            return redirect('/')->with('message','you are now logged in');
        }
        //if the attempt fails then,
        return back()->withErrors(['email' => 'Invalid Credentials'])-> onlyInput('email');

    }





}
