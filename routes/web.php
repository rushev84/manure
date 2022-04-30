<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/manures', 'ManureController@index')->name('manure.index');
Route::get('/cultures', 'CultureController@index')->name('culture.index');


Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Manure'], function () {
        Route::get('/manures', 'IndexController')->name('admin.manure.index');

        Route::get('/manures/create', 'CreateController')->name('admin.manure.create');
        Route::post('/manures', 'StoreController')->name('admin.manure.store');
        Route::get('/manures/{manure}', 'ShowController')->name('admin.manure.show');
        Route::get('/manures/{manure}/edit', 'EditController')->name('admin.manure.edit');

        Route::patch('/manures/{manure}', 'UpdateController')->name('admin.manure.update');
        Route::delete('/manures/{manure}', 'DestroyController')->name('admin.manure.delete');


    });
});

Route::get('/manure/create', 'ManureController@create');
Route::get('/main', 'MainController');
