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
    return view('index');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/production-unit', function () {
    return view('production-unit');
});

Route::get('/bp', function () {
    return view('bp');
});

Route::get('/document-type', function () {
    return view('document-type');
});

Route::get('/registration', function () {
    return view('registration');
});
