<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function verify(Request $req){

        if($req->username == "" || $req->password == ""){
            //echo "null submission";
            return back()->with('empty','All fields are required!');
        }elseif($req->username == $req->password){
            $req->session()->put('username',$req->username);
            return redirect('/home');
        }else{
            $req->session()->flash('msg','Invalid username or password');
            return redirect('/login');
        }
    }
}
