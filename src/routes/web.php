<?php

use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'OrderController@index')->name('index');
Route::get('/history', 'OrderController@history')->name('history');

Route::get('/employee', 'UserController@index')->name('userindex');
Route::get('/employee/create', 'UserController@create')->name('user_create');

Route::get('/store', 'StoreController@index')->name('storeindex');
Route::get('/store/create', 'StoreController@create')->name('storecreate');
Route::post('/store/create', 'StoreController@store')->name('store_add');
Route::patch('/store/create', 'StoreController@update')->name('store_update');

Route::get('/Reciever', 'RecieverController@index')->name('recieverindex');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
