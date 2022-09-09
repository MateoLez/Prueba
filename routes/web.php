<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\RoleController;

Route::get('/', function () {
    return view('informativa');
});

Route::get('/Dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {

// Perfil
Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

//CRUD Usuarios
Route::resource('users', UsuariosController::class)->except('show')->names('users');
//CRUD Roles
Route::resource('roles', RoleController::class)->except('show')->names('roles');

//PDF Usuarios
Route::get('users/pdf', [UsuariosController::class, 'pdf']);

//Excel Usuarios
Route::get('users/excel', [UsuariosController::class, 'excel']);
});
