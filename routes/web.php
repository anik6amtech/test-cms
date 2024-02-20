<?php

use App\Http\Controllers\OrdersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [OrdersController::class, 'index']);
Route::post('save/page', [OrdersController::class, 'updatePage']);
Route::post('new/page', [OrdersController::class, 'createPage']);
Route::get('/orders/results', [OrdersController::class, 'searchResults'])->name('orders.search');


Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

require __DIR__.'/auth.php';
