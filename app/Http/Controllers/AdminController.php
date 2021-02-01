<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;
use \Crypt;
use Illuminate\Support\Facades\Hash;
use Session;

class AdminController extends Controller
{
    function index(){
        return view('admin_dash');
    }

    function user_manage(){
        $user = User::all();
        return view('user_manage', ['users'=>$user]);
    }

    function add_user(Request $req){
        if($req->session()->has('user')){
            $user = new User;
            $user->name = $req->name;
            $user->email = $req->email;
            $user->phone = $req->phone;
            $user->password = Hash::make($req->password);
            $user->address = $req->address;
            $user->save();
            return redirect('/user_manage');
        }
        else{
            return redirect('/login');
        }

    }

    function updateshow($id){
        $uid =\Crypt::decrypt($id);
        $user = User::find($uid);
        return view('/update_user', ['user'=> $user]);
        
    }

    function update(Request $req){
        if($req->session()->has('user')){
            $user = User::find($req->id);
            $user->name = $req->name;
            $user->email = $req->email;
            $user->phone = $req->phone;
            $user->address = $req->address;
            $user->save();
            return redirect('/user_manage');
        }
        else{
            return redirect('/login');
        }
    }

    function delete($id){
        $uid = \Crypt::decrypt($id);
        $user = User::find($uid);
        $user->delete();
        return redirect('user_manage');
    }

    function product_manage(){
        return view('product_manage');
    }

    function contact_manage(){
        return view('contact_manage');
    }
}
