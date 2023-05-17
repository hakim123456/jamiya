<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/index', function () {
    return view('.index');
});

Auth::routes();
Auth::routes(['redirect' => '/index']);
//Route::resource('users', 'UserController');
Route::get('/users', 'App\Http\Controllers\UserController@index')->name('users.index');
// Create User form
Route::get('/users/create', 'App\Http\Controllers\UserController@create')->name('users.create');

// Store User
Route::post('/users', 'App\Http\Controllers\UserController@store')->name('users.store');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
