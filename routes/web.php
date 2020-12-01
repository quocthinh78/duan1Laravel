<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\home@index');
Route::get('/email', 'App\Http\Controllers\EmailController@sendMail');
Route::get('/contact', 'App\Http\Controllers\home@contact');
Route::post('/contact/submit', 'App\Http\Controllers\home@contactus');
Route::get('/showTopCat', 'App\Http\Controllers\home@showTopCat');
Route::get('/search', 'App\Http\Controllers\home@search');
Route::get('/detail', 'App\Http\Controllers\home@detail');
Route::get('/category-{name}', 'App\Http\Controllers\home@masterCategory');
Route::get('/cuon-sach/{name}', 'App\Http\Controllers\home@detailsBook');
Route::get('/tin-tuc', 'App\Http\Controllers\home@new');
//show admin
Route::get('/admin/{table}/{step}', 'App\Http\Controllers\home@changeAdmin');
Route::get('/admin/{table}/{step}', 'App\Http\Controllers\home@changeAdmin');
// admin category
Route::get('/form/{table}/create', 'App\Http\Controllers\home@intoForm');
Route::get('/form/{table}/add', 'App\Http\Controllers\home@add');
Route::get('/form/{table}/{u_id}/edit', 'App\Http\Controllers\home@update');
Route::get('/form/{table}/update', 'App\Http\Controllers\home@updates');
Route::get('/form/{table}/{d_id}/delete', 'App\Http\Controllers\home@delete');

// admin book
Route::get('/form/{table}/create', 'App\Http\Controllers\home@intoForm');
Route::post('/form/{table}/add', 'App\Http\Controllers\home@add');
Route::get('/form/{table}/{b_id}/edit', 'App\Http\Controllers\home@update');
Route::post('/form/{table}/update', 'App\Http\Controllers\home@updates');
Route::get('/form/{table}/{b_id}/delete', 'App\Http\Controllers\home@delete');
Route::get('file','App\Http\Controllers\home@indexs');
Route::post('file','App\Http\Controllers\home@doUpload');
// admin navbar
Route::get('sản-phẩm','App\Http\Controllers\home@navBook');
// login admin
Route::get('loginAdmin', 'App\Http\Controllers\loginAdmin@formLogin');
Route::post('post-loginAdmin', 'App\Http\Controllers\loginAdmin@postLoginAdmin'); 
Route::get('registerAdmin', 'App\Http\Controllers\loginAdmin@formRegister');
Route::post('post-registerAdmin', 'App\Http\Controllers\loginAdmin@postRegisterAdmin'); 
Route::get('logoutAdmin', 'App\Http\Controllers\loginAdmin@logoutAdmin');
Route::get('/admin', 'App\Http\Controllers\loginAdmin@admin');
//login usser
Route::get('loginUser', 'App\Http\Controllers\loginUser@showLogin');
Route::post('post-loginUser', 'App\Http\Controllers\loginUser@postLoginUser'); 
Route::get('post-loginUsers', 'App\Http\Controllers\loginUser@postLoginUser');
Route::get('registerUser', 'App\Http\Controllers\loginUser@showRegister');
Route::post('post-registerUser', 'App\Http\Controllers\loginUser@postRegisterUser');
Route::get('logoutUser', 'App\Http\Controllers\loginUser@logoutUser');
Route::get('dashboard', 'App\Http\Controllers\loginUser@dashboard');


// Route::get('admin', 'App\Http\Controllers\loginAdmin@admin');
 // cart 
 Route::get('/add-cart/{id}', 'App\Http\Controllers\cartt@addCart');
 Route::get('/delete-cart/{id}', 'App\Http\Controllers\cartt@deleteCart');
 Route::get('/cart', 'App\Http\Controllers\cartt@showCart');
 
