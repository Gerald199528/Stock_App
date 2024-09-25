<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
|LOgin registro
|
*/
Route::get('/login', 'Auth\LoginController@show')->name('login.show');
Route::get('/login', 'Auth\LoginController@login')->name('login.perform');
Route::get('/register', 'Auth\RegisterController@show')->name('register.show');
Route::post('/register', 'Auth\RegisterController@register')->name('register.perform');
Route::get('/reset', 'App\Http\Controllers\Auth\ResetPasswordController@reset')->name('reset');
Route::post('/reset', 'App\Http\Controllers\Auth\ResetPasswordController@resetPost')->name('reset.post');



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::get('/perform-logout', 'App\Http\Controllers\LogoutController@perform')->name('logout.perform');
