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

Route::get('admin/login', 'Admin\LoginController@login')->name('admin-login');
Route::post('admin/login', 'Admin\LoginController@post_login')->name('admin-login');
Route::group(['prefix' => '/adminstore', 'namespace' => 'Admin', 'middleware' => 'adminlogin'], function () {

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard.show');

    Route::get('users', 'UserController@index')->name('users.show');
    Route::get('view-user', 'UserController@viewStore')->name('users.show_create');
    Route::post('store-user', 'UserController@store')->name('users.create');
    Route::get('edit-user/{id}', 'UserController@viewEditUser')->name('users.edit');
    Route::post('update-user/{id}', 'UserController@editUser')->name('users.update');
    Route::get('delete-user/{id}', 'UserController@destroy')->name('users.destroy');
    Route::get('users/profile/{id}', 'UserController@viewProfile')->name('users.profile');

    Route::group(['prefix' => '/products'], function () {
        Route::get('/', 'CharController@orderByYear')->name('products');
        Route::get('exports', 'ProductController@exportExcel')->name('products.exports');

        Route::get('{type}', 'ProductController@show')->name('products.show');
        Route::get('edit/{id}', 'ProductController@showEdit')->name('products.show_edit');
        Route::post('edit/{id}', 'ProductController@editProduct')->name('products.edit');
        Route::get('create/product', 'ProductController@showStore')->name('products.show_create');
        Route::post('create/product', 'ProductController@store')->name('products.create');

        Route::get('delete/{id}', 'ProductController@destroy')->name('product.destroy');
        Route::get('delete/{id}/medias/{id_medias}', 'ProductController@destroyMedias')->name('product.destroy_medias');
        Route::get('{id}/attribute', 'ProductController@showStoreAttribute')->name('attribute.show_create');
        Route::post('{id}/attribute', 'ProductController@storeAttribute')->name('attribute.create');
        Route::get('{id}/detail-attribute', 'ProductController@showAttribute')->name('attribute.show');
        Route::get('/attribute/{id}', 'ProductController@destroyAttribute')->name('attribute.delete');
    });

    Route::get('orders', 'OrderController@index')->name('orders.show');
    Route::get('edit-orders/{id}', 'OrderController@show')->name('orders.show_edit');
    Route::get('create-orders', 'OrderController@showCreate')->name('orders.show_create');
    Route::post('create-orders', 'OrderController@create')->name('orders.create');
    Route::post('edit-orders/{id}', 'OrderController@update')->name('orders.edit');
    Route::get('delete-orders/{id}', 'OrderController@destroy')->name('orders.destroy');
    Route::get('orders/{id}/detail-items', 'OrderController@orderItems')->name('orders.items');
    Route::get('orders/{id}/items', 'OrderController@showCreateItems')->name('orders.show_create_items');
    Route::post('orders/{id}/items', 'OrderController@crateItems')->name('orders.create_items');
    Route::get('orders/items/{id}', 'OrderController@deleteItem')->name('orders.delete_item');

    Route::get('menus', 'MenuController@index')->name('menus');
    Route::get('menus-create', 'MenuController@showStore')->name('menus.show_create');
    Route::post('menus-create', 'MenuController@store')->name('menus.create');
    Route::get('menus-edit/{id}', 'MenuController@showUpdate')->name('menus.show_edit');
    Route::post('menus-edit/{id}', 'MenuController@update')->name('menus.edit');
    Route::get('menus-delete/{id}', 'MenuController@destroy')->name('menus.delete');

    Route::get('colors', 'ColorController@index')->name('colors.show');
    Route::get('color-create', 'ColorController@showStore')->name('colors.show_create');
    Route::post('color-create', 'ColorController@store')->name('colors.create');
    Route::get('edit-color/{id}', 'ColorController@showEdit')->name('colors.show_edit');
    Route::post('edit-color/{id}', 'ColorController@edit')->name('colors.edit');
    Route::get('delete-color/{id}', 'ColorController@destroy')->name('colors.destroy');

    Route::get('categories/products', 'CategoryController@index')->name('categories.products.show');
    Route::get('categories/posts', 'CategoryController@index')->name('categories.posts.show');

    Route::get('categories/products/create', 'CategoryController@showCreate')->name('categories.products.show_create');
    Route::get('categories/posts/create', 'CategoryController@showCreate')->name('categories.posts.show_create');

    Route::post('categories/posts', 'CategoryController@store')->name('categories.posts.create');
    Route::post('categories/products', 'CategoryController@store')->name('categories.products.create');

    Route::get('edit-category/{id}', 'CategoryController@showEdit')->name('categories.show_edit');
    Route::post('edit-category/{id}', 'CategoryController@update')->name('categories.edit');
    Route::get('category/{id}', 'CategoryController@destroy')->name('categories.destroy');
    Route::get('categories/{id}/posts', 'CategoryController@showPosts')->name('categories.show_posts');
    Route::get('categories/{id}/products', 'CategoryController@showProducts')->name('categories.show_products');

    Route::get('posters', 'PostersController@index')->name('posters.show');
    Route::get('poster-create', 'PostersController@showCreate')->name('posters.show_create');
    Route::post('poster-create', 'PostersController@store')->name('posters.create');
    Route::get('poster-edit/{id}', 'PostersController@show')->name('posters.show_edit');
    Route::post('poster-edit/{id}', 'PostersController@edit')->name('posters.edit');
    Route::get('delete-poster/{id}', 'PostersController@destroy')->name('posters.destroy');

    Route::get('blogs', 'BlogController@index')->name('blog.show');
    Route::get('blog-create', 'BlogController@viewStore')->name('blog.show_create');
    Route::post('blog-create', 'BlogController@store')->name('blog.create');
    Route::get('edit-blog/{id}', 'BlogController@viewUpdate')->name('blog.show_update');
    Route::post('edit-blog/{id}', 'BlogController@update')->name('blog.update');
    Route::get('delete-blog/{id}', 'BlogController@destroy')->name('blog.delete');

    Route::get('pages-show', 'PagesConroller@index')->name('pages.show');
    Route::get('pages-create', 'PagesConroller@viewStore')->name('pages.show_create');
    Route::post('pages-create', 'PagesConroller@store')->name('pages.create');
    Route::get('edit-pages/{id}', 'PagesConroller@viewUpdate')->name('pages.show_update');
    Route::post('edit-pages/{id}', 'PagesConroller@update')->name('pages.update');
    Route::get('delete-pages/{id}', 'PagesConroller@destroy')->name('pages.delete');

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

    Route::get('icon', 'FontController@iconShow')->name('icon.show');
    Route::get('form', 'FontController@formShow')->name('form.show');
    Route::get('chart', 'FontController@chartShow')->name('chart.show');
    Route::get('table', 'FontController@tableShow')->name('table.show');
    Route::get('button', 'FontController@button')->name('button.show');
});

Route::group(['prefix' => '/', 'namespace' => 'Web', 'middleware' => ['checkCart']], function () {

    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/redirect/{social}', 'SocialAuthController@redirectToProvider');
    Route::get('/callback/{social}', 'SocialAuthController@callback');

    Route::get('products/{type}', 'ProductController@index')->name('web.product_show');

    Route::get('products/{type}/{slug}', 'ProductDetailController@show')->name('web.product_show_detail');

    Route::get('blogs', 'BlogController@index')->name('blogs');
    Route::get('blogs/{slug}', 'BlogController@show')->name('blogs.show');
    Route::post('contacts', 'ContactController@store')->name('contact.create');

    Route::get('pages/{slug}', 'PostListController@show')->name('pages.show_detail');

    Route::post('cart-item', 'CartController')->name('cart.create');

    Route::get('delete-cart-item/{id}', 'CartController@destroy')->name('cart.delete');

    Route::get('search', 'SearchController')->name('search.show');

    Route::get('/cart', 'OrderController@show')->name('cart.show');
    Route::post('/order', 'OrderController@order')->name('cart.order');

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
Route::group(['prefix' => '/', 'namespace' => 'Web', 'middleware' => ['verified']], function () {
    Route::get('home', 'ProfileController@index')->name('profile.show');
    Route::post('profile/edit', 'ProfileController@update')->name('profile.edit');
    Route::get('history/orders', 'HistoryOrder@index')->name('history.show');
    Route::get('history/orders/{id}', 'HistoryOrder@show')->name('history.detail');
});

// Route::get('/test', 'Web\ProfileController@test')->name('test');

// Route::get('/home', 'We  b/ProfileController@index')->name('home');
