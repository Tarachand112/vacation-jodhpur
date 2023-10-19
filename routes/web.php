<?php

use Illuminate\Support\Facades\Route;

Route::get('admin/login' , 'App\Http\Controllers\Admin\AuthController@loginForm')->name('login.form');
Route::post('login' , 'App\Http\Controllers\Admin\AuthController@login')->name('login');
Route::get('logout' , 'App\Http\Controllers\Admin\AuthController@logout');
Route::get('forgot-password' , 'App\Http\Controllers\Admin\AuthController@forgotPasswordForm');
Route::post('forgot-password' , 'App\Http\Controllers\Admin\AuthController@forgotPassword')->name('forgot.password.update');

Route::group(['middleware' => ['is_admin']],function(){
	Route::get('/dashboard', 'App\Http\Controllers\Admin\AuthController@dashboard')->name('dashboard');
	Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
		Route::get('profile' ,'App\Http\Controllers\Admin\AuthController@profile');
		Route::post('profile' ,'App\Http\Controllers\Admin\AuthController@profileStore')->name('profile');
	});
	Route::get('/package', 'App\Http\Controllers\Web\PackageController@package')->name('package');
	Route::group(['prefix' => 'customer'], function() {
		Route::get('/', 'App\Http\Controllers\Admin\CustomerController@customer'); 
		Route::get('index', 'App\Http\Controllers\Admin\CustomerController@index');
		Route::get('edit/{id}', 'App\Http\Controllers\Admin\CustomerController@edit');
		Route::post('store', 'App\Http\Controllers\Admin\CustomerController@store');
		Route::get('delete', 'App\Http\Controllers\Admin\CustomerController@delete');
	});
});
Route::get('/', 'App\Http\Controllers\Web\WebController@index');
Route::get('about', 'App\Http\Controllers\Web\WebController@about');
Route::get('contact', 'App\Http\Controllers\Web\WebController@contact');
Route::get('schools', 'App\Http\Controllers\Web\WebController@school');
Route::get('gallery', 'App\Http\Controllers\Web\WebController@gallery');





