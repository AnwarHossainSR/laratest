<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $req){

        if($req->session()->has('username')){
            return view('home.index');
        }else{
            $req->session()->flash('msg', 'invalid request...login first!');
            return redirect('/login');
        }

    }

    public function create(Request $req){
        if ($req->session()->get('usertype') == 'Admin') {
            return view('home.create');
        } else {
            return back()->with('msg','You have no permission');
        }
    }

    public function store(Request $req){

        if ($req->session()->get('usertype') == 'Admin') {
            /* $user = new User();
            $user->username = $req->username;
            $user->email = $req->email;
            $user->password = $req->password;
            $user->type = "User";
            $user->save(); */

            DB::table('users')
            ->insert(
                [
                    'username'=>$req->username,
                    'email'=>$req->email,
                    'password'=>$req->password,
                    'type'=>'User'
                ]
            );
            return redirect('/home/userlist');
        } else {
            return back()->with('msg','You have no permission');
        }

    }

    public function edit($id,Request $req){

        //$user = User::find($id);
        $user = DB::table('users')->where('id',$id)->first();
        if ($req->session()->get('usertype') == 'Admin') {

            return view('home.edit')->with('user', $user);

        } else {

            return back()->with('msg','You have no permission');

        }


    }


    public function update($id, Request $req){

        if ($req->session()->get('usertype') == 'Admin') {
            /* $user = User::find($id);
            $user->username = $req->username;
            $user->password = $req->password;
            $user->email     = $req->email;
            $user->type     = $req->type;
            $user->save(); */

            DB::table('users')
                    ->where('id', $id)
                    ->update([
                            'username' =>$req->username,
                            'password' =>$req->password,
                            'email' =>$req->email,
                            'type' =>$req->type,
                            ]);

            return redirect('/home/userlist')->with('msg', 'Update Successfull');
        } else {
            return back()->with('msg','You have no permission');
        }



    }

    public function delete($id,Request $req){

        if ($req->session()->get('usertype') == 'Admin') {
            $user = DB::table('users')->where('id',$id)->first();
            return view('home.delete')->with('user', $user);
        } else {
            return back()->with('msg','You have no permission');
        }

    }


    public function confirmDelete($id,Request $req)
    {

        if ($req->session()->get('usertype') == 'Admin') {

            if(DB::table('users')->where('id',$id)->delete()){
                return redirect('/home/userlist')->with('msg', 'Deleted successfully');
            }else{
                return back()->with('msg', 'Something is wrong');
            }
        } else {
            return back()->with('msg','You have no permission');
        }

    }

    public function details($id,Request $req){

        if ($req->session()->get('usertype') == 'Admin') {
            $user = DB::table('users')->where('id',$id)->first();
            return view('home.details')->with('user', $user);
        } else {
            return back()->with('msg','You have no permission');
        }

    }

    public function userlist(){
        // db model userlist
        //$userlist = User::all();
        $userlist = DB::table('users')->get();
        return view('home.list')->with('list', $userlist);
    }


}
