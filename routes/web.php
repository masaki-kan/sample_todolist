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


Route::get('/', 'IndexController@index');

Route::get('/lists/add', 'IndexController@addform');

Route::post('/lists/add', 'IndexController@add');

Route::get('/lists/{datalist_id}', 'IndexController@edit');

Route::post('/lists/edit', 'IndexController@updata');

Route::get('/listsdelete/{datalist_id}', 'IndexController@destroy');

Route::get('/{datalist_id}/card/add', 'CardController@addform');

Route::post('/{datalist_id}/card/add', 'CardController@add');

Route::get('/{datalist_id}/card/{card_id}', 'CardController@show');

Route::get('/card/{card_id}', 'CardController@edit');

Route::post('/card', 'CardController@updata');

Route::get('/card/{card_id}/delete', 'CardController@destory');

Route::get('/logout', 'IndexController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
