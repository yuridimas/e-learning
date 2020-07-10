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

Route::group(['prefix' => '/dashboard', 'middleware' => ['auth']], function () {

    // * Operator & Teacher & Student
    Route::group(['middleware' => ['role:Operator,Teacher,Student']], function () {
        Route::get('/', 'DashboardController@index');
    });

    // * Teacher
    Route::group(['middleware' => ['role:Teacher']], function () {
    });

    // * Student
    Route::group(['middleware' => ['role:Student']], function () {
    });
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

// Route::get('/home', 'HomeController@index')->name('home');
