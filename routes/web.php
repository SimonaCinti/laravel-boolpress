<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

/**
 * HOMEPAGE
 */

Route::get('/', 'HomeController@index')->name('home');

/**
 * ROTTE PUBBLICHE
 */

Route::get('posts', 'PostController@index')->name('posts.index');

/**
 * LOG IN / REGISTRATION
 */

Auth::routes();

/**
 * ROTTE PAGINE PER LOG IN
 */

Route::prefix('admin')
    ->namespace('Admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function(){

    // Home Admin 
    Route::get('/', 'HomeController@index')->name('home');

        // Rotte Post CRUD
        Route::resource('posts', 'PostController');
    });
// Route::get('/home', 'HomeController@index')->name('home');
