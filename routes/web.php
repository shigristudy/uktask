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

use App\Order;
use App\OrderDetail;
use App\OrderItem;

Route::get('/', 'DashboardController@index')->name('home');
Route::post('/store', 'DashboardController@store')->name('store_order');
Route::get('/orders', 'DashboardController@orders')->name('allorders');
Route::get('/allorders', 'DashboardController@allorders')->name('admin.allorders');
Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');
Route::get('/email_template',function(){
    $order = OrderDetail::where('order_id',1)->first();

    $items = OrderItem::where('order_id',1)->first()->toArray();
    $items1 = $items;
    unset($items['order_id'],$items['id'],$items['whole_roast'],$items['created_at'],$items['updated_at']);
    $order_items = array_chunk($items,2,true);
    $data = ['order_items'=>$order_items,'order'=>$order];
    return view('emailorder',compact('data'));
});

Route::get('review_order/{id}','DashboardController@revieworder')->name('revieworder');
Auth::routes();

