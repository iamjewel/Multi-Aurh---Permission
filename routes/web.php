<?php

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

//
//Route::get('/create_role_permission', function () {
//
//    $role = Role::create(['name' => 'Administer']);
//    $permission = Permission::create(['name' => 'Administer role & permissions']);
//
//    auth()->user()->assignRole('Administer');
//    auth()->user()->givePermissionTo('Administer role & permissions');
//});


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');



Route::resource('users', 'UserController');

Route::resource('posts', 'PostController');














