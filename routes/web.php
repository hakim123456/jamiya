<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdherentController;
use App\Http\Controllers\OperationController;
use App\Http\Controllers\DepenseController;
use App\Http\Controllers\FactureController;
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
Route::resource('adherents', 'App\Http\Controllers\AdherentController');
Route::get('/adherents', 'App\Http\Controllers\AdherentController@index')->name('adherents.index');
//operation
Route::get('/operations', [OperationController::class, 'index'])->name('operations.index');
Route::get('/operations/create', [OperationController::class, 'create'])->name('operations.create');
Route::post('/operations', [OperationController::class, 'store'])->name('operations.store');
Route::get('/operations/{operation}/edit', [OperationController::class, 'edit'])->name('operations.edit');
Route::put('/operations/{operation}', [OperationController::class, 'update'])->name('operations.update');
Route::delete('/operations/{operation}', [OperationController::class, 'destroy'])->name('operations.destroy');
//depenses 
Route::resource('depenses', DepenseController::class);
//factures
//Route::resource('factures', FactureController::class);
Route::get('/factures', [FactureController::class, 'index'])->name('factures.index');
Route::get('/factures/create/{id}', [FactureController::class, 'create'])->name('factures.create');
Route::post('/factures', [FactureController::class, 'store'])->name('factures.store');
Route::get('/factures/{facture}/edit', [FactureController::class, 'edit'])->name('factures.edit');
Route::put('/factures/{facture}', [FactureController::class, 'update'])->name('factures.update');
Route::delete('/factures/{facture}', [FactureController::class, 'destroy'])->name('factures.destroy');
Route::get('/factures/index2',  [App\Http\Controllers\FactureController::class, 'index2'])->name('factures.index2');
