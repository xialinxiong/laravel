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

Route::get('/article/index','ArticleController@index');
Route::any('/article/add','ArticleController@add');
Route::any('/article/edit/{id}','ArticleController@edit');
Route::get('/article/del/{id}','ArticleController@del');



Route::get('/fenlei/index','FenleiController@index');
Route::any('/fenlei/add','FenleiController@add');
Route::any('/fenlei/edit/{id}','FenleiController@edit');
Route::get('/fenlei/del/{id}','FenleiController@del');


Route::get('/commodity/index','CommodityController@index');
Route::any('/commodity/add','CommodityController@add');
Route::any('/commodity/edit/{id}','CommodityController@edit');
Route::get('/commodity/del/{id}','CommodityController@del');
Route::get('/commodity/yi/{id}','CommodityController@yi');

Route::get('/part/index','PartController@index');
Route::any('/part/add','PartController@add');
Route::any('/part/edit/{id}','PartController@edit');
Route::get('/part/del/{id}','PartController@del');

Route::get('/admin/index','AdminController@index');
Route::any('/admin/add','AdminController@add');
Route::any('/admin/edit/{id}','AdminController@edit');
Route::get('/admin/del/{id}','AdminController@del');
