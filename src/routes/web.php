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

Route::get('/inbox', function() {
    return view('inbox');
});

Route::get('/refunds/request', function() {
    return view('refunds.request');
});

Route::get('/refunds/list', function() {
    return view('refunds.list');
});