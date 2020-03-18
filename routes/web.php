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

Route::get('admin-dashboard', 'Admin\AdminController@index')->name('admin-dashboard');

// Route::get('admin/login', 'Admin\LoginController@login')->name('admin-login');
// Route::post('admin/login', 'Admin\LoginController@post_login')->name('admin-login');
Route::group(['prefix' => '/adminstore', 'namespace' => 'Admin'], function () {

    Route::get('users', 'UserController@index')->name('users');
    Route::get('view-user', 'UserController@viewStore')->name('view-store');
    Route::post('store-user', 'UserController@store')->name('store-user');

    Route::get('edit-user/{id}', 'UserController@viewEditUser')->name('edit-user');
    Route::post('update-user/{id}', 'UserController@editUser')->name('update-user');

    Route::get('products', 'ProductController@index')->name('products');

    Route::get('product-man', 'ProductController@man')->name('product-man');

    Route::get('edit-product/{id}', 'ProductController@editProduct')->name('edit-product');

    Route::get('create-product', 'ProductController@viewCreate')->name('create-product');
    Route::post('create-product', 'ProductController@store')->name('create-product');


    Route::get('product-woman', 'ProductController@woman')->name('product-woman');


    Route::get('product-accessories', 'ProductController@accessories')->name('product-accessories');
});

Route::group(['prefix' => '/', 'namespace' => 'Web'], function () {

    Route::get('mans', 'ProductController@index')->name('mans');
    Route::get('womans', 'WomanController@index')->name('womans');
    Route::get('accessories', 'WomanController@index')->name('accessories');
    Route::get('blogs', 'PostController@index')->name('blogs');

    Route::get('/', 'HomeController@index')->name('/index');

    // Route::get('logins', 'AuthController@webUser')->name('web-login');

    // Route::get('register', 'AuthController@webViewRegister')->name('register');
    // Route::post('register', 'AuthController@webRegister')->name('register');

    // Route::get('verification.verify', 'AuthController@verify')->name('verification.verify');

    Route::get('profile', 'ProfileController@index')->name('profile')->middleware('verified');
});

Auth::routes(['verify' => true]);
Auth::routes();
Route::group(['prefix' => '/', 'namespace' => 'Web'], function () {
    Route::get('home', 'ProfileController@index')->name('home')->middleware('verified');
});

// Route::get('/home', 'Web/ProfileController@index')->name('home');

// Route::get('/product-detail', function () {
//     return view('pages.product-detail');
// });
// Route::get('/login', function () {
//     return view('pages.login');
// });
// Route::get('/create-account', function () {
//     return view('pages.create-account');
// });
// Route::get('/admins', function () {
//     return view('admin.index');
// });

// Route::get('/', 'HomeController@index')->name('home');
