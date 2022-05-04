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

Route::get('/', 'IndexController');

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

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
