<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/admin/category-index','AdminController@CategoryIndex');
Route::post('/admin/category-store','AdminController@CategoryStore');
Route::post('/admin/category-edit','AdminController@CategoryEdit');
Route::get('/admin/category-delete/{id}','AdminController@CategoryDelete');
Route::get('/admin/system-information-index','AdminController@SystemInfoIndex');
Route::post('/admin/system-info/store','AdminController@StoreSystemInfo');
Route::post('/admin/system-logo/store','AdminController@StoreSystemLogo');