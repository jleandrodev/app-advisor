<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'Auth\LoginController@showLoginForm');

Auth::routes();

Route::get('/operational', function () {
    return view('layouts.operational.index');
})->name('operational');

Route::get('/events/1/docs', function () {
    return view('layouts.events.docs');
})->name('events.docs');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('customers', 'CustomerController');

Route::resource('events', 'EventController');

Route::resource('employees', 'EmployeeController');
