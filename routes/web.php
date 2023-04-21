<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\PlanesController@getList')->name('admin.show');
Route::get('/addList','App\Http\Controllers\PlanesController@addList')->name('admin.addList');
Route::post('/addList','App\Http\Controllers\PlanesController@postList');
Route::get('/edit/{id}','App\Http\Controllers\PlanesController@getEditList')->name('admin.edit');
Route::post('/edit/{id}','App\Http\Controllers\PlanesController@updateList')->name('admin.update');
