<?php

use Illuminate\Support\Facades\DB;


Auth::routes();

Route::get('/', 'Controller@index');

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
