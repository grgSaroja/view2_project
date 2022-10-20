<?php

namespace App\Http\Controllers;

use App\Http\Requests\register;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
 
    }

    public function createUser(register $request){
        $data= new User();
        $data->name= $request->input('name');
        $data->email= $request->input('email');
        $data->password= Hash::make($request->input('password'));
        $data->save();
      
        return redirect()->route('login.index');
    }

    public function loginUser(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return view('dashboard');
        }
  
        return redirect()->route('login.index');

    }

     public function dashboard(){
        if (Auth::check()) {
            return view('dashboard');
        }
        return redirect()->route('login.index');

    }

    public function getUser(){
       $datas= User::all();

        return view('user', compact('datas'));

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login.index');

    }
}
