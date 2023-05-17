<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/home', function () {
    return view('home');
});

Auth::routes();
Auth::routes(['redirect' => '/index']);
//Route::resource('users', 'UserController');
Route::get('/users', 'App\Http\Controllers\UserController@index')->name('users.index');
// Create User form
Route::get('/users/create', 'App\Http\Controllers\UserController@create')->name('users.create');
Route::get('/users/edit', 'App\Http\Controllers\UserController@edit')->name('users.edit');
Route::get('/users/show', 'App\Http\Controllers\UserController@show')->name('users.show');
Route::resource('users', UserController::class);
// Store User
Route::post('/users', 'App\Http\Controllers\UserController@store')->name('users.store');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
