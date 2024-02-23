<?php

use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
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



Route::get('/', [PageController::class, 'index']);
Route::get('/pages', [PageController::class, 'pages'])->name('pageBuilder');
Route::get('pages/all', [PageController::class, 'allPages'])->name('allpages');
Route::post('save/page', [PageController::class, 'updatePage'])->name('savePage');
Route::post('new/page', [PageController::class, 'createPage'])->name('createPage');
Route::get('delete/page/{page}', [PageController::class, 'deletePage'])->name('deletePage');
Route::get('edit/page/{page}', [PageController::class, 'editPage'])->name('editPage');
Route::get('getPgae/{page}', [PageController::class, 'getPgae'])->name('getPgae');
Route::get('viewPgae/{page}', [PageController::class, 'viewPgae'])->name('viewPgae');






Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
