<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    function index(){
        return view('admin_dash');
    }

    function user_manage(){
        $user = User::all();
        return view('user_manage', ['users'=>$user]);
    }

    function product_manage(){
        return view('product_manage');
    }

    function contact_manage(){
        return view('contact_manage');
    }
}
