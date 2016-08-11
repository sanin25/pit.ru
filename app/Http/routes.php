<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'main', 'uses' => 'indexController@index']);

Route::auth();

Route::group(['prefix' => 'admin'], function(){

    Route::get('/addpage',['as' => 'addpage' , 'uses' => 'AdminController@addpage']);
    Route::post('/addpage',['as' => 'addpage' , 'uses' => 'AdminController@addpage']);
    Route::post('/addajax',['as' => 'addpage' , 'uses' => 'AdminController@addajax']);
});
Route::get('/admin', 'AdminController@index');
