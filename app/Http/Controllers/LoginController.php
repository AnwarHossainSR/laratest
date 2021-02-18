<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function verify(Request $req){

        /* $user = User::where('password',$req->password)
                    ->where('username',$req->username)
                    ->first(); */
        $user = DB::table('users')->where('username', $req->username)
                                ->where('password',$req->password)
                                ->first();

        if($req->username == "" || $req->password == ""){
            return back()->with('empty','All fields are required!');
        }elseif($user){
            $req->session()->put('username',$user->username);
            $req->session()->put('usertype',$user->type);
            return redirect('/home');
        }else{
            //$req->session()->flash('msg','Invalid username or password');
            return back()->with('empty','All fields are required!');
        }



    }
}
