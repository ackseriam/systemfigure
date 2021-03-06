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

Route::get('register/{a}', 'Auth\RegisterController@index')->name('auth.register');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('people/aprobacion', 'PeopleController@aprobacion');
Route::get('people/search', 'PeopleController@search')->name('searchperson');

Route::get('people/edit/{a}', 'PeopleController@edit');
Route::put('people/update/{a}', 'PeopleController@update');
Route::get('people/destroy/{a}', 'PeopleController@destroy');

Route::get('/users/profile', 'UsersController@profile')->name('profile');
Route::get('users/inactivity', 'UsersController@inactivity');
Route::get('users/locked', 'UsersController@locked');
Route::get('users/index_edit', 'UsersController@index_edit');
Route::get('users/edit/{a}', 'UsersController@edit');
Route::get('users/destroy/{a}', 'UsersController@destroy');

Route::get('users/edit_profile/{a}', 'UsersController@edit_profile');
Route::get('users/edit_info/{a}', 'UsersController@edit_info');
Route::get('users/update', 'UsersController@update');

Route::post('users/logout', 'UsersController@logout')->name('logout');
Route::get('users/search', 'UsersController@search')->name('search');


Route::get('guias/search_vpn', 'GuiasController@search_vpn')->name('search_guias_vpn');
Route::get('guias/search_vpn0', 'GuiasController@search_vpn0')->name('search_guias_vpn0');

Route::get('guias/getImport', 'GuiasController@getImport');
Route::post('guias/import', 'GuiasController@import')->name('import');

 	

Route::get('guias/copiado/{a}', 'GuiasController@copiado');

Route::get('guias/index/{a}', 'GuiasController@index');
Route::get('guias/search/', 'GuiasController@search')->name('search_guias');
Route::get('guias/search_0/', 'GuiasController@search_0');

Route::get('corrections/editar/{a}', 'CorrectionsController@edit');
Route::put('corrections/update/{a}', 'CorrectionsController@update');
Route::get('corrections/index/{a}', 'CorrectionsController@index');
Route::get('corrections/create/{a}', 'CorrectionsController@create');
Route::get('corrections/search/{a}', 'CorrectionsController@search');
Route::get('corrections/index_vpn/{a}', 'CorrectionsController@index_vpn');
Route::get('corrections/search_vpn/{a}', 'CorrectionsController@search_vpn');
Route::get('corrections/multi/{a}', 'CorrectionsController@multi');
Route::get('corrections/destroy/{a}/{b}', 'CorrectionsController@destroy');
//Route::get('corrections/search_vpn0', 'CorrectionsController@search_vpn0');

Route::get('corrections/correc_user/{a}/{b}','CorrectionsController@correc_user')->name('correc_user');
Route::get('prueba',function(){
return view('correc_user.prueba');
})->name('prueba');
Route::get('corrections/show/{a}','CorrectionsController@show')->name('showa');
Route::resource('corrections','CorrectionsController');
Route::get('guias/edit/{a}', 'GuiasController@edit');
Route::get('guias/multi/{a}', 'GuiasController@multi');
Route::get('guias/multi_index/{a}', 'GuiasController@multi_index');
Route::put('guias/registrar/{a}', 'GuiasController@store');
Route::put('guias/update/{a}', 'GuiasController@update');
Route::get('guias/inactiva/{a}', 'GuiasController@inactiva')->name('inactiva');
Route::get('guias/destroy/{a}/{b}', 'GuiasController@destroy');
Route::get('guias/active/{a}', 'GuiasController@active');
Route::get('guias/time/{a}', 'GuiasController@time');
Route::resource('guias','GuiasController');
Route::resource('people','PeopleController');
Route::resource('/users','UsersController')->except(['create','store']);

Route::put('/users/update_info/{a}','UsersController@update_info');

Route::put('users/update_profile/{a}', 'UsersController@update_profile');


	
Route::get('export/{a}', 'ExceleController@index');

Route::resource('registers','RegistersController');
Route::get('registers/edit/{a}', 'RegistersController@edit');
Route::put('registers/update/{a}', 'RegistersController@update');

Route::get('post/destroy/{a}', 'PostController@destroy');
Route::put('post/update/{a}', 'PostController@update');
Route::resource('/post', 'PostController');
Route::get('comments/destroy/{a}', 'CommentsController@destroy')->name('destroy_comments');

Route::get('nosotros',function(){
return view('nosotros.nosotros');
})->name('nosotros');
Route::resource('/comments', 'CommentsController');


Route::get('requisitos',function(){
return view('nosotros.requisitos');
})->name('requisitos');
Route::resource('/comments', 'CommentsController');

//Route::get('export', 'ExcelController');
//Route::get('export', 'ExcelController@export');