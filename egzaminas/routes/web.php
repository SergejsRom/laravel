<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController as Restaurant;
use App\Http\Controllers\ProductController as Product;
use App\Http\Controllers\MenuController as Menu;
use App\Http\Controllers\OrderController as Order;

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

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('restaurants', Restaurant::class);
    Route::resource('products', Product::class);
    Route::resource('menus', Menu::class);
    Route::resource('orders', Order::class);
    Route::get('all_orders', [Order::class, 'all_orders'])->name('all_orders');

    });

