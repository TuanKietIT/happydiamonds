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
//font-end
Route::get('/', 'HomeController@index');
Route::get('/trang-chu/', 'HomeController@index');
Route::post('/tim-kiem/', 'HomeController@search');

Route::get('/tin-tuc', 'HomeController@news');
Route::get('/thanh-vien','HomeController@member');
Route::get('/lien-he','HomeController@contact');
Route::get('/chi-tiet-tin-tuc/{post_id}','HomeController@show_post_home');

Route::post('/Register', 'HomeController@save_home');

//Seacrh Liên hệ
Route::get('/lien-he', 'ContactController@contact');
Route::post('/lien-he', 'ContactController@save_contact');
Route::get('/edit-contact/{id}', 'ContactController@edit_contact');
Route::get('/delete-contact/{id}', 'ContactController@delete_contact');
Route::get('/All-contact', 'ContactController@all_contact');
Route::post('/update-work/{id}', 'ContactController@update_contact');

//Seacrh word
Route::get('/danh-muc-thanh-vien/{work_id}','WorkController@show_work_home');

Route::get('/chi-tiet-thanh-vien/{user_id}','HomeController@show_member_home');

//back-end
Route::get('/admin', 'AdminController@index');
Route::get('/dashboard', 'AdminController@show_admin');
Route::get('/logout', 'AdminController@log_out');
Route::post('/admin-dashboard', 'AdminController@dashboard');


//Member
Route::get('/Add-member', 'MemberController@add_member');
Route::get('/edit-member/{member_id}', 'MemberController@edit_member');
Route::get('/delete-member/{member_id}', 'MemberController@delete_member');
Route::get('/All-member', 'MemberController@all_member');
Route::post('/save-member', 'MemberController@save_member');
Route::post('/update-member/{member_id}', 'MemberController@update_member');

//Work
Route::get('/Add-work', 'WorkController@add_work');
Route::get('/edit-work/{work_id}', 'WorkController@edit_work');
Route::get('/delete-work/{work_id}', 'WorkController@delete_work');
Route::get('/All-work', 'WorkController@all_work');
Route::post('/save-work', 'WorkController@save_work');
Route::post('/update-work/{work_id}', 'WorkController@update_work');


//POST
Route::get('/add-post', 'PostController@add_post');
Route::get('/edit-post/{post_id}', 'PostController@edit_post');
Route::get('/delete-post/{post_id}', 'PostController@delete_post');
Route::get('/all-post', 'PostController@all_post');
Route::post('/save-post', 'PostController@save_post');
Route::post('/update-post/{post_id}', 'PostController@update_post');

//Register
Route::get('/All-register', 'RegisterController@all_register');
Route::get('/edit-register/{register_id}', 'RegisterController@edit_register');
Route::get('/delete-register/{register_id}', 'RegisterController@delete_register');
Route::post('/update-register/{register_id}', 'RegisterController@update_register');

//POST
Route::get('/add-manage', 'ManageController@add_manage');
Route::get('/edit-manage/{manage_id}', 'ManageController@edit_manage');
Route::get('/delete-manage/{manage_id}', 'ManageController@manage_post');
Route::get('/all-manage', 'ManageController@all_manage');
Route::post('/save-manage', 'ManageController@save_manage');
Route::post('/update-manage/{manage_id}', 'ManageController@update_manage');
