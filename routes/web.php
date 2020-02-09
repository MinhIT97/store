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


Route::get('/product', function () {
    return view('pages.products');
});

Route::get('/product-detail', function () {
    return view('pages.product-detail');
});
Route::get('/login', function () {
    return view('pages.login');
});
Route::get('/create-account', function () {
    return view('pages.create-account');
});
Route::get('/blog', function () {
    return view('pages.blog');
});


