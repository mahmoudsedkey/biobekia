<?php
//May Do not use this because i include it only
use Illuminate\Support\Facades\Route;
Route::get('/','UserController@index');
Route::get('about','UserController@about');
Route::get('partners','UserController@partner');
Route::get('products','UserController@products');
Route::get('ordernow','UserController@ordernow');
Route::post('saveorder','UserController@saveorder');

?>
