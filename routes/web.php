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

use Spatie\Analytics\Period;

Route::group(['prefix' => '/', 'namespace' => 'Web'], function () {
    Route::get('product','ProductController@index')->name('index');
    Route::get('blog','PostController@index')->name('index');
});

// Route::get('/data', function () {

//     // $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));
//     // dd($analyticsData);
// });

// Route::get('/product', function () {
//     return view('pages.products');
// });

// Route::get('/product-detail', function () {
//     return view('pages.product-detail');
// });
// Route::get('/login', function () {
//     return view('pages.login');
// });
// Route::get('/create-account', function () {
//     return view('pages.create-account');
// });
// Route::get('/blog', function () {
//     return view('pages.blog');
// });
