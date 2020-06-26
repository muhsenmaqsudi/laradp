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
    return view('welcome');
});

Route::get('users', [\App\Http\Controllers\User\UserController::class, 'index']);
Route::get('users/{user}/confirm', \App\Http\Controllers\User\ConfirmUserController::class);

Route::resource('photos.comments', \App\Http\Controllers\User\UserController::class)->shallow();
