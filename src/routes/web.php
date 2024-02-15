<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;

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

Route::get('/', [ShopController::class, 'index']);
Route::post('/register/thanks', [ShopController::class, 'thanks']);
Route::post('/login/menu_two', [ShopController::class, 'menu_two']);
Route::get('/shop_all', [ShopController::class, 'shop_all']);
Route::get('/shop_detail', [ShopController::class, 'shop_detail']);
