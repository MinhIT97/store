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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Auth::routes(['verify' => true]);

Route::get('admin/login', 'Admin\LoginController@login')->name('login');
Route::post('admin/login', 'Admin\LoginController@post_login')->name('login');
Route::group(['prefix' => '/adminstore', 'namespace' => 'admin', 'middleware' => 'adminlogin'], function () {

    Route::get('/admin', 'AdminController@index')->name('local');

});

Route::group(['prefix' => '/', 'namespace' => 'Web', 'middleware' => 'verified'], function () {
    Route::get('products', 'ProductController@index')->name('product');
    Route::get('blogs', 'PostController@index')->name('blog');

    Route::get('/', 'HomeController@index')->name('home');

    Route::get('logins', 'AuthController@webUser')->name('web-login');

    Route::get('registers', 'AuthController@webViewRegister')->name('web-register');
    Route::post('registers','AuthController@webRegister')->name('register');
});













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
