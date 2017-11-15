<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/','ProfileController@welcome');
Route::post('/confirm','ProfileController@confirm');

Auth::routes();

#####################################
########### PROFILE ROUTE ###########
#####################################
Route::group([
    'middleware' => 'auth',
    'prefix'     => 'profile'
], function () {
    Route::get('/', [
        'as'   => 'profile',
        'uses' => 'ProfileController@edit'
    ]);
    Route::post('/', [
        'as'   => 'profile.update',
        'uses' => 'ProfileController@updateProfile'
    ]);
    Route::post('update-avatar', [
        'as'   => 'profile.avatar.update',
        'uses' => 'ProfileController@updateAvatar'
    ]);
    Route::post('update-password', [
        'as'   => 'profile.password.update',
        'uses' => 'ProfileController@updatePassword'
    ]);
});
