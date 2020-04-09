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

    Route::get('users', 'UserController@index')->name('users.show');
    Route::get('view-user', 'UserController@viewStore')->name('users.show_create');
    Route::post('store-user', 'UserController@store')->name('users.create');
    Route::get('edit-user/{id}', 'UserController@viewEditUser')->name('users.edit');
    Route::post('update-user/{id}', 'UserController@editUser')->name('users.update');

    Route::group(['prefix' => '/products'], function () {
        Route::get('/', 'ProductController@index')->name('products');
        Route::get('men', 'ProductController@man')->name('product-man');
        Route::get('edit/{id}', 'ProductController@showEdit')->name('product.show_edit');
        Route::post('edit/{id}', 'ProductController@editProduct')->name('product.edit');
        Route::get('create', 'ProductController@showStore')->name('create-product');
        Route::post('create', 'ProductController@store')->name('create-product');
        Route::get('women', 'ProductController@woman')->name('product-woman');
        Route::get('accessories', 'ProductController@accessories')->name('product-accessories');
        Route::get('{id}', 'ProductController@destroy')->name('product.destroy');
    });

    Route::get('categories', 'CategoryController@index')->name('categories.show');
    Route::get('create-category', 'CategoryController@showCreate')->name('categories.show_create');
    Route::post('create-category', 'CategoryController@store')->name('categories.create');
    Route::get('edit-category/{id}', 'CategoryController@showEdit')->name('categories.show_edit');
    Route::post('edit-category/{id}', 'CategoryController@update')->name('categories.edit');
    Route::get('category/{id}', 'CategoryController@destroy')->name('categories.destroy');

    Route::get('blogs', 'BlogController@index')->name('blog.show');
    Route::get('blog-create', 'BlogController@viewStore')->name('blog.show_create');
    Route::post('blog-create', 'BlogController@store')->name('blog.create');
    Route::get('edit-blog/{id}', 'BlogController@viewUpdate')->name('blog.show_update');
    Route::post('edit-blog/{id}', 'BlogController@update')->name('blog.update');
    Route::get('delete-blog/{id}', 'BlogController@destroy')->name('blog.delete');

    Route::get('contacts', 'ContactController@index')->name('contact.show');
    Route::get('contacts/{id}', 'ContactController@destroy')->name('contact.destroy');

    Route::get('brands', 'BrandController@index')->name('brand.show');
    Route::get('brand-create', 'BrandController@showStore')->name('brand.show_create');
    Route::post('brand-create', 'BrandController@store')->name('brand.create');
    Route::get('edit-brand/{id}', 'BrandController@showUpdate')->name('brand.show_update');
    Route::post('edit-brand/{id}', 'BrandController@update')->name('brand.update');
    Route::get('brands/{id}', 'BrandController@destroy')->name('brand.destroy');
    Route::get('brand-details/{id}', 'BrandController@detail')->name('brand.detail');

    Route::get('options', 'OptionController@index')->name('option.show');

    Route::get('size', 'SizeController@index')->name('size.show');
    Route::get('size-create', 'SizeController@showCreate')->name('size.show_create');
    Route::post('size-create', 'SizeController@store')->name('size.create');
    Route::get('edit-size/{id}', 'SizeController@showUpdate')->name('size.show_edit');
    Route::post('edit-size/{id}', 'SizeController@update')->name('size.edit');
    Route::get('size/{id}', 'SizeController@destroy')->name('size.delete');
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

Route::get('/test', function () {
    return response()->json(['message' => 'call from ajaxx']);
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
