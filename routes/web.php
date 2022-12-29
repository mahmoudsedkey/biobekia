<?php
use Facade\FlareClient\View;
use Illuminate\Support\Facades\Route;
include "frontroute.php";
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

########################### BackEnd Route admin can Active with it #######################

Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'guest:user' ],function(){
    Route::get('/login','LoginController@showlogin')->name('admin.login');
    Route::post('/loginuser','LoginController@login')->name('admin.loginuser');
});

Route::prefix('admin')->middleware('auth:user')->group(function () {
    Route::get('dashboard','Admin\AdminController@dashboard')->name('admin.dashboard');
#usres controle panel
    Route::resource('users', 'Admin\AdminUserController');
#products controle panel
    Route::resource('products','Admin\AdminProductController');
#partners controle panel
    Route::resource('partners','Admin\AdminPartnersController');
#orders control panel
    Route::resource('orders', "Admin\AdminOrdersController");
});
