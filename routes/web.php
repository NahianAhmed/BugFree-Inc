<?php

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
    return view('pages.home');
});
Route::get('/contact-with-us', function () {
    return view('pages.contact_with_us');
});


Route::get('/login','MyAuth@ShowLogin');
Route::post('/Authlink','MyAuth@SentAuthLink');
Route::get('/Verify/{name}/{token}','MyAuth@VerifyLink');
Route::post('/loginVerify','MyAuth@VerifyLogin');
Route::get('/logout','MyAuth@Logout_user');


//Admin
Route::get('/admin-dashbord','AdminController@index');

//user
Route::get('/user-dashbord','UserController@index');

