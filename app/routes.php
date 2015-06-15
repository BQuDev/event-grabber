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
/*
Route::get('/authtest', array('before' => 'auth.basic', function()
{
    return View::make('hello');
}));
*/
Route::post('api/v1/users', 'UsersController@store');
Route::post('api/v1/username_check', 'UsersController@username_check');
Route::get('api/v1/fb_sign_in', 'UsersController@fb_sign_in');

Route::group(array('prefix' => 'api/v1', 'before' => 'auth.basic'), function()
{
    Route::resource('keywords', 'KeywordsController');
    Route::resource('events', 'EventsController');
    Route::get('users/sign_in', 'UsersController@sign_in');
    Route::resource('users', 'UsersController');
    Route::resource('friends', 'FriendsController');

});