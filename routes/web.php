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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin'],function () {
    Route::group(['prefix' => 'post'], function () {
        Route::get('/','PostController@index')->name('admin.post.index');
        Route::get('/create','PostController@create')->name('admin.post.create');
        Route::post('/create','PostController@store')->name('admin.post.store');
        Route::get('/{id}/edit','PostController@edit')->name('admin.post.edit');
        Route::post('/{id}/edit','PostController@update')->name('admin.post.update');
        Route::get('/{id}/destroy','PostController@destroy')->name('admin.post.destroy');
        Route::get('/{id}/show','PostController@show')->name('admin.post.show');
        Route::get('/search', 'PostController@search')->name('admin.post.search');
    });

});
Route::group(['prefix' => 'Host'], function () {
    Route::get('/document', function () {
       return view('/Host/document');
    });
    Route::group(['prefix' => 'product'], function () {
        Route::get('/Hot', function () {
            return view('/Host/product/Hot');
        });
        Route::get('/New', function () {
            return view('/Host/product/New');
        });
        Route::get('/Sold', function () {
            return view('/Host/product/Sold');
        });
    });
});
