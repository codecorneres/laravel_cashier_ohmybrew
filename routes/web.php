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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/plans', 'StripePlanController@index')->name('plans.index');
Route::get('/plan/{plan}', 'StripePlanController@show')->name('plans.show');
Route::post('/subscription', 'SubscriptionController@create')->name('subscription.create');