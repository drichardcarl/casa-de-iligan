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


/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/about-us', 'PagesController@about');
Route::get('/owner', 'PagesController@owner');
Route::get('/customer', 'PagesController@customer');


Route::get('/register', 'CustomAuthController@showRegForm')->name('custom-auth.register');
Route::post('/register', 'CustomAuthController@register');

Route::get('/', 'PagesController@index')->name('pages.index');
Route::post('/', 'CDILoginController@login');

