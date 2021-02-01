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

/**
 * HOMEPAGE
 */

Route::get('/', function () {
    return view('welcome');
});

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
        // Rotte Post

    });
// Route::get('/home', 'HomeController@index')->name('home');
