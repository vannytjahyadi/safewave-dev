<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Main Routes
|--------------------------------------------------------------------------
|
| This is where Main routes declared.
|
*/

Route::group(['prefix' => '/', 'namespace' => 'Main'], function() {
    Route::get('/', 'HomeController')->name('home');
});