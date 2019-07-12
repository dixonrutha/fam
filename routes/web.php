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

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get( '/receiving', 'MkopoController@form1');
Route::get( '/about', 'MkopoController@about');
Route::get( '/economic', 'MkopoController@economic');
Route::get( '/social', 'MkopoController@social');
Route::get( '/education', 'MkopoController@education');
Route::get( '/activities', 'MkopoController@activities');
Route::get( '/contactus', 'MkopoController@contactus');
Route::get( '/form2', 'MkopoController@form2');
Route::get( '/form1', 'MkopoController@form1');
Route::resource( '/receive', 'MkopoController');
