<?php

####### DASHBOARD ###################
Route::get('dashboard', [
    'as'   => 'admin.dashboard',
    'uses' => 'Admin\DashboardController@dashboard'
]);

########### USERS ##################
Route::get('users', [
    'as'   => 'admin.user.index',
    'uses' => 'Admin\UserController@index'
]);
Route::post('users', [
    'as'   => 'admin.user.search',
    'uses' => 'Admin\UserController@search'
]);
Route::get('user/add', [
    'as'   => 'admin.user.add',
    'uses' => 'Admin\UserController@add'
]);
Route::post('user/add', [
    'as'   => 'admin.user.store',
    'uses' => 'Admin\UserController@store'
]);
Route::get('user/{id}/edit', [
    'as'   => 'admin.user.edit',
    'uses' => 'Admin\UserController@edit'
]);
Route::post('user/{id}/update-profile', [
    'as'   => 'admin.user.profile.update',
    'uses' => 'Admin\UserController@updateProfile'
]);
Route::post('user/{id}/update-password', [
    'as'   => 'admin.user.password.update',
    'uses' => 'Admin\UserController@updatePassword'
]);
Route::post('user/{id}/update-avatar', [
    'as'   => 'admin.user.avatar.update',
    'uses' => 'Admin\UserController@updateAvatar'
]);
Route::post('user/delete', [
    'as'   => 'admin.user.delete',
    'uses' => 'Admin\UserController@delete'
]);