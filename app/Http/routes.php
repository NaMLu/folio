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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::post('messages', 'MessagesController@store');
Route::get('portfolio/{id}', 'FolioController@show');

Route::controllers([
    'auth'     => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
Route::group(['middleware' => 'auth'], function () {
    Route::get('portfolio', 'FolioController@index');
    Route::get('portfolio/create', ['as' => 'create-new-item', 'uses' => 'FolioController@create']);
    Route::post('portfolio', 'FolioController@store');
    Route::post('skills', 'FolioController@storeSkill');
    Route::get('settings', 'HomeController@settings');
    Route::get('portfolio/{id}/edit', 'FolioController@edit');
    Route::post('portfolio/{id}/update', 'FolioController@update');
    Route::get('messages', ['as' => 'view-all-messages', 'uses' => 'MessagesController@index']);
    Route::get('messages/{id}', 'MessagesController@show');
});
