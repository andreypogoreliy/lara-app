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

//Route::get('/', function () {
//    return view('welcome');
//})
Route::get('/', function () {
    return view('welcome');
})->middleware('authorization');

Route::get('/login', function () {
    return '*login*';
});

Route::get('/registration', [\App\Http\Controllers\RegistrationController::class, 'index']);
//
//Route::get('customers', [\App\Http\Controllers\CustomerController::class, 'index']);
//
//Route::get('products', [\App\Http\Controllers\ProductsController::class, 'index']);
