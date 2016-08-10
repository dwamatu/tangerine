<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userDash()
    {
        $users = User::all();
        return view('users', ['users' => $users]);
    }


    public function postSignUp(Request $request)
    {
        $this->validate($request, [
            'email'=> 'required|email|unique:users',
            'username'=>'required|max:120',
            'password'=>'required|min:4',
            'confirm_password'=>'required|min:4',
            'role'=>'required|min:4'
        ]);

        $email = $request['email'];
        $username = $request['username'];
        $password  = bcrypt( $request['password']);
        $confirm_password  = bcrypt( $request['confirm_password']);
        $role = $request['role'];

        $user = new User();
        $user-> email = $email;
        $user-> username = $username;
        $user-> password = $password;
        $user-> confirm_password = $confirm_password; 
        $user-> role = $role;

        $user -> save();

        /* Auth::login($user);*/

        return redirect()-> route('dashboard');


    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function postSignIn(Request $request)
    {
        $this->validate($request, [
            'email'=> 'required|email',
            'password'=>'required',
        ]);

        if (Auth::attempt(['email'=>$request['email'],'password'=>$request['password']])){
            return redirect()->route('dashboard');

        }
        return redirect()->back();
    }

}