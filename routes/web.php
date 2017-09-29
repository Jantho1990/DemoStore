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

Route::get('/test', 'TestController@testEntityAttributeRelationship');
Route::get('/test/entity/{entity}', 'TestController@testGetEntity');
Route::get('/test/entity/{entity}/{attr}', 'TestController@testGetEntityAttribute');
Route::get('/testhome', 'TestController@testHome');

Route::resource('entity', 'EntityController');

Route::get('/', function () {
    return view('welcome');
});
