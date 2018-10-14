<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', 'HomeController@index')->name('home');


// Route::get('admin', function(){
// 	return view('admin.dashboard');
// })->middleware('auth');

Route::resource('usuarios','UsersController');
Route::resource('prestamos','PrestamosController');
Route::resource('equipos','EquiposController');

// Route::group([
// 	'prefix' => 'admin',
// 	// 'namespace' => 'Admin',
// 	'middleware' => 'auth'],

// 	function (){
// 		Route::get('/','AdminController@index')->name('dashboard');
		
// 	}
// );

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');