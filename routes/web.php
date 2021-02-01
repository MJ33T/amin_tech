<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::view('/login', "login");

Route::post("/login", [UserController::class, 'login']);

Route::get('/admin_dash', [AdminController::class, 'index']);

Route::get('/user_manage', [AdminController::class, 'user_manage']);

Route::get('/product_manage', [AdminController::class, 'product_manage']);

Route::get('/contact_manage', [AdminController::class, 'contact_manage']);

Route::view('/add_user', 'add_user');

Route::post('/add_user', [AdminController::class, 'add_user']);

Route::get('update_user/{id}', [AdminController::class, 'updateshow']);

Route::post('update_user', [AdminController::class, 'update']);