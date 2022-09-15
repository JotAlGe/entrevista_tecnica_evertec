<?php

use App\Http\Controllers\OrderController;
use App\Models\Order;
use App\Models\Product;
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

Route::get('/', function () {
    return view('home');
});
Route::middleware('auth')->group(function () {
    Route::get('/auth/index', function () {
        return view('auth.index', [
            'orders' => Order::all()
        ]);
    });
});

Route::resource('orders', OrderController::class)->names('orders');
