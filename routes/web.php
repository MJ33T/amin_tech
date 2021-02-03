<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;

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

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
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

Route::get('delete_user/{id}', [AdminController::class, 'delete']);

Route::view('/contact_us', 'contact_us');

Route::post('contact_us', [ContactController::class, 'send_message']);

Route::get('view_contact/{id}', [AdminController::class, 'view_contact']);

Route::get('delete_contact/{id}', [AdminController::class, 'delete_contact']);

Route::get('product_import', [ProductController::class, 'import_view']);

Route::post('product_import', [ProductController::class, 'import']);

Route::get('product_list', [ProductController::class, 'product_list']);

Route::get('product_list_public', [ProductController::class, 'product_list_public']);