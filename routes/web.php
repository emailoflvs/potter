<?php

use Illuminate\Support\Facades\DB;


Auth::routes();

Route::get('/', 'Controller@index');

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/', function () {
//    $visited=[];
//    $togo = [];
//
//  $visited = DB::select('select * from places where visited = ?', [1]);
//  $togo = DB::select('select * from places where visited = ?', [0]);
//
//  return view('travel_list', ['visited' => $visited, 'togo' => $togo ] );
//});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
