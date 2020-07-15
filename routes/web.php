<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','PagesController@root')->name('root')->middleware('verified');

Auth::routes(['verify'=>true]);

Route::group(['middleware'=>['auth','verified']],function (){
    Route::get('user_address','UserAddressController@index')->name('user_address.index');
    Route::get('user_address/create', 'UserAddressController@create')->name('user_address.create');
    Route::post('user_address', 'UserAddressController@store')->name('user_address.store');

    Route::get('user_address/{user_address}', 'UserAddressController@edit')->name('user_address.edit');
    Route::put('user_address/{user_address}', 'UserAddressController@update')->name('user_address.update');
    Route::delete('user_address/{user_address}', 'UserAddressController@destroy')->name('user_address.destroy');
});

