<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::put('/cart/{id}', 'Api\CartController@changQuantity');

Route::get('check-code/{code}', 'Api\CartController@checkDiscount');

Route::get('/provinces/{id}', 'Api\ProvinceController@show');

Route::post('products/{id}/comments', 'Api\CommentController@create');

Route::post('blogs/{id}/comments', 'Api\CommentController@createBlog');
