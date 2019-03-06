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



Route::get('register', 'Auth\RegisterController@index')->name('register');

Route::get('register/{a}', 'Auth\RegisterControllerr@index')->name('auth.register');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('people/aprobacion', 'PeopleController@aprobacion');
Route::get('users/inactivity', 'UsersController@inactivity');
Route::get('users/locked', 'UsersController@locked');
Route::get('users/index_edit', 'UsersController@index_edit');
Route::get('users/edit/{a}', 'UsersController@edit');
Route::get('users/update', 'UsersController@update');




Route::resource('people','PeopleController');
Route::resource('/users','UsersController');
//Route::get('people/showaprob/{a}', 'PeopleController@showaprob');