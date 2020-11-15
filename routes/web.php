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
})->name("home");
Route::get("/customers" ,"CustomerController@index")->name('customers');
Route::post("/customers/{id}" ,"CustomerController@sendCustomerEmail");
Route::resource("orders" ,"OrderController");
Route::post("orders/{id}" ,"OrderController@sendCustomerEmail");
