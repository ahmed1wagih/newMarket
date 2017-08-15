<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'FrontController@index');
Route::get('/allads', 'FrontController@allads');
Route::get('/about', 'FrontController@about');
Route::get('/contact', 'FrontController@contact');
Route::post('/contactsend', 'sendContactController@sendContact');
Route::get('/contactok', 'FrontController@contactok');
Route::get('/contactno', 'FrontController@contactno');
// Route::get('/loginform', 'FrontController@login');
Route::get('/newad', 'FrontController@newad');
Route::get('/policy', 'FrontController@policy');

Route::post('/userreg', 'RegController@UserReg');
Route::get('/hoho', 'RegController@hoho');
Route::post('userlog', 'LoginController@userlog');
Route::get('logindone', 'LoginController@logindone');
Route::get('nologin', 'LoginController@nologin');
Route::post('password/reset', 'Auth\PasswordController@reset');
Route::get('/lolo', 'RegController@lolo');
Route::get('/notlolo', 'RegController@notlolo');
Route::get('/registered', 'RegController@registered');
Route::get('/product/{id}', 'AdController@proddisplay');


Route::group(['middleware'=>['web','auth']],function(){
	Route::get('/profile', 'ProfileController@profile');
	Route::get('/usersettings/{id}', 'ProfileController@usersettings');
	Route::post('/userupdate/{id}', 'ProfileController@userupdate');
	Route::get('/newad', 'AdController@newad');
	Route::post('/newadins', 'AdController@newadins');

});
// Route::get('notadmin', 'AdminController@notadmin');
// });
	// Route::get('login', 'AdminController@showlogin');
Route::group(['prefix'=>'admin'],function(){

	Route::get('/', 'AdminController@index');
	Route::resource('/users', 'UserController');
	Route::resource('/categories', 'CategoryController');
	Route::resource('/homesettings', 'HomeSettingController');
	Route::resource('/aboutsettings', 'AboutSettingController');
	Route::resource('/contact', 'ContactController');
	Route::resource('/contactsettings', 'ContactSettingController');
	Route::resource('/termssettings', 'TermsSettingController');
	Route::resource('/footersettings', 'FooterSettingController');
	Route::resource('/socialsettings', 'SocialSettingController');


});
Route::auth();

Route::get('/home', 'HomeController@index');
