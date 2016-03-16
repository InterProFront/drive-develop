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




Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('/', 'FrontController@getIndex');

Route::get('/program/{slug}', 'FrontController@getProgram');
Route::get('/reconstruct', 'FrontController@getReconstructs');
Route::get('/contacts', 'FrontController@getContacts');

Route::group(['middleware' => 'auth', 'prefix' => 'adm'], function(){

	Route::get('/edit/all',           'BackController@getAll');
	Route::get('/edit/contacts',      'BackController@getContacts');
	Route::get('/edit/reconstruct',   'BackController@getRec');
	Route::get('/edit/about',         'BackController@getAbout');
	Route::get('/edit/slider',        'BackController@getSlider');


	Route::get('/edit/blog', 	      'BackController@getBlog');
	Route::get('/edit/blog/{id}',     'BackController@editBlog');


	Route::get('/edit/photo', 	   	  'BackController@getPhoto');
	Route::get('/edit/photo/{id}',    'BackController@editPhoto');

	Route::get('/edit/programs', 'BackController@getProgram');
	Route::get('/edit/programs/{id}', 'BackController@editProgram');
});