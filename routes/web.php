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

Route::get('/', 'MainController');
Route::get('/manures', 'IndexController')->name('manure.index');
Route::get('/manures/{manure}', 'ShowController')->name('manure.show');

// пока не используем middleware
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {

    Route::group(['namespace' => 'Manure'], function () {
        Route::get('/manures', 'IndexController')->name('admin.manure.index');

        Route::get('/manures/create', 'CreateController')->name('admin.manure.create');
        Route::post('/manures', 'StoreController')->name('admin.manure.store');
        Route::get('/manures/{manure}', 'ShowController')->name('admin.manure.show');
        Route::get('/manures/{manure}/edit', 'EditController')->name('admin.manure.edit');

        Route::patch('/manures/{manure}', 'UpdateController')->name('admin.manure.update');
        Route::delete('/manures/{manure}', 'DestroyController')->name('admin.manure.delete');

        Route::get('/manures_soft_deleted', 'SoftDeletedController')->name('admin.manures_soft_deleted');
    });

    Route::group(['namespace' => 'Culture'], function () {
        Route::get('/cultures', 'IndexController')->name('admin.culture.index');

        Route::post('/cultures', 'StoreController')->name('admin.culture.store');
        Route::get('/cultures/{culture}/edit', 'EditController')->name('admin.culture.edit');

        Route::patch('/cultures/{culture}', 'UpdateController')->name('admin.culture.update');
        Route::delete('/cultures/{culture}', 'DestroyController')->name('admin.culture.delete');

        Route::get('/cultures_soft_deleted', 'SoftDeletedController')->name('admin.cultures_soft_deleted');
    });

    Route::group(['namespace' => 'Client'], function () {
        Route::get('/clients', 'IndexController')->name('admin.client.index');

        Route::get('/clients/create', 'CreateController')->name('admin.client.create');
        Route::post('/clients', 'StoreController')->name('admin.client.store');
        Route::get('/clients/{client}/edit', 'EditController')->name('admin.client.edit');

        Route::patch('/clients/{client}', 'UpdateController')->name('admin.client.update');
        Route::delete('/clients/{client}', 'DestroyController')->name('admin.client.delete');

        Route::get('/clients_soft_deleted', 'SoftDeletedController')->name('admin.clients_soft_deleted');
    });

    Route::group(['namespace' => 'User'], function () {
        Route::get('/users', 'IndexController')->name('admin.user.index');

        Route::delete('/users/{user}', 'DestroyController')->name('admin.user.delete');
    });

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
