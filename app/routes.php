<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/blank',function(){
	return View::make('blank.blank');
});
<<<<<<< HEAD
<<<<<<< HEAD
Route::get('/contact',function(){
	return View::make('contact.contact');
});
Route::resource("profiles",'ProfilesController');
=======
>>>>>>> parent of fc8a085... Simon changed
=======

Route::resource('/hieu', 'HieuCongtroler');
Route::resource("news","NewsController");


Route::resource('znews', 'ZNewsController');
>>>>>>> origin/master
