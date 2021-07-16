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

use App\Http\Controllers\RefundController;

Route::get('/', [RefundController::class,'index']);
Route::get('/refunds/create', [RefundController::class,'create']);
Route::get('/refunds', [RefundController::class,'list']);
Route::post('/refunds', [RefundController::class,'store']);

Route::get('/inbox', function() {
    return view('inbox');
});

Route::get('/refunds/request', function() {
    return view('refunds.request');
});