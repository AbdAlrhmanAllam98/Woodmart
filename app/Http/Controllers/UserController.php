<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:8',
         ]);
         $user=new User();
         $user->name=$request->name;
         $user->email=$request->email;
         $user->password=Hash::make($request->password);
         $user->save();
         $cred=array('email'=>$request->email , 'password'=>$request->password);
         Auth::attempt($cred);
         return redirect('/');
    }
    public function login(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:8',
         ]);
         $cred=$request->only('email','password');
         if(Auth::attempt($cred)){
            return redirect('/');
         }
         else{
            return back();
         }
    }
}
