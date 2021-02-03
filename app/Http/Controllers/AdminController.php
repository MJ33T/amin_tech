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
        if(session()->has('user')){
            return view('admin_dash');
        }
        else{
            return redirect('/login');
        }
    }

    function user_manage(){
        if(session()->has('user')){
            $user = User::all();
            return view('user_manage', ['users'=>$user]);
        }
        else{
            return redirect('login');
        }
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
        if(session()->has('user')){
            $uid =\Crypt::decrypt($id);
            $user = User::find($uid);
            return view('/update_user', ['user'=> $user]);
        }
        else{
            return redirect('login');
        }
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
        if(session()->has('user')){
            $uid = \Crypt::decrypt($id);
            $user = User::find($uid);
            $user->delete();
            return redirect('user_manage');
        }
        else {
            return redirect('login');
        }
    }

    function product_manage(){
        if(session()->has('user')){
            return view('product_manage');
        }
        else{
            return redirect('login');
        }
    }

    function contact_manage(){
        if(session()->has('user')){
            $contact = Contact::all();
            return view('contact_manage', ['contacts' => $contact]);
        }
        else{
            return redirect('login');
        }
    }

    function view_contact($id){
        if(session()->has('user')){
            $cid = \Crypt::decrypt($id);
            $contact = Contact::find($cid);
            return view('view_contact', ['contact'=>$contact]);
        }
        else{
            return redirect('login');
        }
    }

    function delete_contact($id){
        if(session()->has('user')){
            $cid = \Crypt::decrypt($id);
            $contact = Contact::find($cid);
            $contact->delete();
            return redirect('contact_manage');
        }
        else{
            return redirect('login');
        }
    }
}
