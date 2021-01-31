<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        return view('admin_dash');
    }

    function user_manage(){
        return view('user_manage');
    }

    function product_manage(){
        return view('product_manage');
    }

    function contact_manage(){
        return view('contact_manage');
    }
}
