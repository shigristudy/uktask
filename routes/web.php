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

Route::get('/', 'DashboardController@index')->name('placeorderhome');
Route::post('/store', 'DashboardController@store')->name('store_order');
Route::get('/orders', 'DashboardController@orders')->name('allorders');
Auth::routes();
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

Route::get('review_order','DashboardController@revieworder')->name('revieworder');
Route::get('thankyou','DashboardController@thankyoupage')->name('thankyoupage');

Route::post('confirmorder','DashboardController@confirmorder')->name('confirmorder');



Route::group(['middleware' => 'auth'], function () {
    Route::get('/allorders', 'DashboardController@allorders')->name('admin.allorders');
    Route::get('invoice/{id}','DashboardController@fetchdetail')->name('fetchorderdetails');
    Route::get('terms','DashboardController@terms')->name('terms');
    Route::post('termstore','DashboardController@termstore')->name('termstore');
});


Route::get('/home', 'HomeController@index')->name('home');


// Roles Routes
Route::get('roles', 'RolesController@index')->name('roles.index');
Route::post('roles', 'RolesController@fetch')->name('fetch.roles');
Route::post('roles/store', 'RolesController@store')->name('store.roles');
Route::get('/roles/edit/{id}', 'RolesController@edit')->name('edit.roles');
Route::post('/roles/destory/', 'RolesController@destroy')->name('destory.roles');