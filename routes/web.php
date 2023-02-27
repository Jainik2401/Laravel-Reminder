<?php

use Illuminate\Support\Facades\Route;

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
    return view('usersite/index');
});
Route::get('/signin', function () {
    return view('usersite/login');
});
Route::get('/signup', function () {
    return view('usersite/registration');
});
Route::get('/profile', function () {
    return view('usersite/profile');
});
Route::get('/reminder ', function () {
    return view('usersite/reminder ');
});
Route::get('/scheduled ', function () {
    return view('usersite/scheduled ');
});
Route::get('/forgetpwd ', function () {
    return view('usersite/forgetpwd ');
});



Route::get('/admin/login', function () {
    return view('admin/login');
});

Route::get('/admin/dashboard', function () {
    return view('admin/index');
});

Route::get('/admin/user', function () {
    return view('admin/user');
});

Route::get('/admin/reminder', function () {
    return view('admin/reminder');
});
