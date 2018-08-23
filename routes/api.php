<?php

use Illuminate\Http\Request;

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

Route::group(['middleware' => 'cors', 'prefix' => '/v1'], function () {
    Route::post('/login', 'UserController@authenticate');
    Route::post('/register', 'UserController@register');
    Route::get('/logout/{api_token}', 'UserController@logout');


    Route::get('/articles', 'ArticleController@index');

    Route::get('/articles/{id}', 'ArticleController@show');

    Route::post('/articles/save', 'ArticleController@store');

    Route::post('/articles/update', 'ArticleController@update');

    Route::get('/articles/delete/{id}/{api_token}', 'ArticleController@delete');
});


