<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OffersController;

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

Route::get('/', [OffersController::class, 'index']);


Route::get('/dashboard', [OffersController::class, 'showOwnOffers'])->middleware(['auth'])->name('dashboard');

Route::get('/offer/{id}', [OffersController::class, 'show']);


Route::get('/add', function () {
    return view('add');
})->middleware('auth'); //only logged in users can add an offer

Route::post('/offer', [OffersController::class, 'store']);

Route::get('edit/{id}', [OffersController::class, 'edit'])->middleware('auth');

Route::post('update/{id}', [OffersController::class, 'update'])->middleware('auth');//send change after editing

Route::post('delete/{id}', [OffersController::class, 'destroy'])->middleware('auth');

require __DIR__.'/auth.php';
