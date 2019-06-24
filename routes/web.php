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

/*************** Home **************/
Route::get('/',"HomeController@index");
Route::get('/contact-with-us','HomeController@contact');
Route::post('/contact-query','HomeController@SaveUserQuery');
Route::get('/our-project/{id}','HomeController@OurProjectByID');
Route::get('/our-service/{id}','HomeController@OurServiceByID');
Route::get('/about-us','HomeController@AboutUs');
Route::get('/our-experts','HomeController@OurExpertsList');
Route::get('/about-expert/{id}','HomeController@AboutExpert');
/*************** Home **************/


/*************** Auth **************/
Route::get('/login','MyAuth@ShowLogin');
Route::post('/Authlink','MyAuth@SentAuthLink');
Route::get('/Verify/{name}/{token}','MyAuth@VerifyLink');
Route::post('/loginVerify','MyAuth@VerifyLogin');
Route::get('/logout','MyAuth@Logout_user');
Route::get('/forget_password', 'MyAuth@ShowForgetPasswordPage');
Route::post('/sent_password_reset_link', 'MyAuth@ResetPasswordLink');
Route::get('/reset-password/{email}/{token}', 'MyAuth@VelifyResetPasswordLink');
Route::post('/update-password', 'MyAuth@UpdateForgetPassword');
/*************** Auth **************/


/*************** Admin **************/
Route::get('/admin-dashbord','AdminController@index');
// contact info
Route::get('/admin/contact-info','AdminController@contact');
Route::post('/admin/save-contact-info','AdminController@save_contact');
// user query
Route::get('/admin/user-query','AdminController@ShowUserQuery');
Route::get('/admin/read-user-query/{id}','AdminController@ReadUserQuery');
// project
Route::get('/admin/add-project/','AdminController@AddOurProject');
Route::post('/admin/save-our-project/','AdminController@SaveOurProject');
Route::get('/admin/project-list/','AdminController@OurProjectList');
Route::get('/admin/project-deletion/{id}','AdminController@project_deletion');
// testimonial
Route::get('/admin/add-testimonial','AdminController@AddTestimonial');
Route::post('/admin/save-testimonial','AdminController@SaveTestimonial');
Route::get('/admin/testimonial-list','AdminController@TestimonialList');
Route::get('/admin/testimonial-deletion/{id}','AdminController@TestimonialDeletion');
// site setting
Route::get('/admin/site-setting','AdminController@ShowSiteSetting');
Route::post('/admin/save-setting','AdminController@SaveSiteSetting');
// expert
Route::get('/admin/add-expert','AdminController@ShowAddExpert');
Route::post('/admin/save-expert','AdminController@SaveExpert');
Route::get('/admin/expert-list','AdminController@ExpertList');
Route::get('/admin/expert-deletion/{id}','AdminController@ExpertDeletion');
//services
Route::get('/admin/add-services','AdminController@AddServices');
Route::post('/admin/save-services','AdminController@SaveServices');
Route::get('/admin/list-of-services','AdminController@ListOfServices');
Route::get('/admin/service-deletion/{id}','AdminController@ServiceDeletion');

/*************** Admin **************/

//user
Route::get('/user-dashbord','UserController@index');

