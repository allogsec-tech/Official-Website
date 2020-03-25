<?php

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
    return view('index');
});


Route::get('/team', function () {
    return view('team');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {
    return view('product');
});

Route::get('/charapp', function () {
    return view('product1');
});

Route::get('/domvc', function () {
    return view('product2');
});

Route::post("/send","send@send");


Route::get('/clients', function () {
    return view('client');
});

