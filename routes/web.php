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

//Route::get('/','PagesController@root')->name('root')->middleware('verified');

Auth::routes(['verify'=>true]);

Route::group(['middleware'=>['auth','verified']],function (){
    // 地址
    Route::get('user_address','UserAddressController@index')->name('user_address.index');
    Route::get('user_address/create', 'UserAddressController@create')->name('user_address.create');
    Route::post('user_address', 'UserAddressController@store')->name('user_address.store');
    Route::get('user_address/{user_address}', 'UserAddressController@edit')->name('user_address.edit');
    Route::put('user_address/{user_address}', 'UserAddressController@update')->name('user_address.update');
    Route::delete('user_address/{user_address}', 'UserAddressController@destroy')->name('user_address.destroy');

    // 收藏
    Route::post('products/{product}/favorite', 'ProductsController@favor')->name('products.favor');
    Route::delete('products/{product}/favorite', 'ProductsController@disfavor')->name('products.disfavor');
    Route::get('products/favorites', 'ProductsController@favorites')->name('products.favorites');

    // 购物车
    Route::post('cart', 'CartController@add')->name('cart.add');
    Route::get('cart', 'CartController@index')->name('cart.index');
    Route::delete('cart/{sku}', 'CartController@remove')->name('cart.remove');

    // 订单
    Route::post('orders', 'OrdersController@store')->name('orders.store');
    Route::get('orders', 'OrdersController@index')->name('orders.index');
    Route::get('orders/{order}', 'OrdersController@show')->name('orders.show');
    Route::post('orders/{order}/received', 'OrdersController@received')->name('orders.received');

    // 支付
    Route::get('payment/{order}/alipay', 'PaymentController@payByAlipay')->name('payment.alipay');
    Route::get('payment/alipay/return', 'PaymentController@alipayReturn')->name('payment.alipay.return');

});


Route::redirect('/', '/products')->name('root');
Route::get('products', 'ProductsController@index')->name('products.index');

Route::get('products', 'ProductsController@index')->name('products.index');
Route::get('products/{product}', 'ProductsController@show')->name('products.show');


Route::post('payment/alipay/notify', 'PaymentController@alipayNotify')->name('payment.alipay.notify');



