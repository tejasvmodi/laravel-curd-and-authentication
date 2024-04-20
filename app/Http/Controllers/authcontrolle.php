<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class authcontrolle extends Controller
{
 public function login(){
    return view('Login.login');
 }
 public function register(){
    return view('Login.register');
 }
 public function index(){
    return view('Login.index');
 }
 
 public function loginuser(Request $request){
    $validationdata= $request->validate(
        [
            'email'=>'required',
            'password'=>'required'
        ]
    );

    $credicial =$request->only('email','password');

    if(auth()->attempt($credicial)){
        $request->session()->regenerate();
        return redirect()->route('product.index');
    }
 }
 
    public function registeruser(Request $request){
        $validatedata = $request->validate(
            [
                'name'=>'required',
                'email'=>'required',
                'password'=>'required|max:10|min:3',
                'Gender'=>'required'
            ]   
            );

            $user= new User();
            $user->name = $validatedata['name'];
            $user->email= $validatedata['email'];
            $user->password = bcrypt($validatedata['password']);
            $user->Gender = $validatedata['Gender'];

            $user ->save();

            return redirect()->route('loginpage');

    }

    public function logout(Request $request){
        $request->session()->invalidate();
        auth()->logout();
        return redirect()->route('loginpage');
    }
}
 