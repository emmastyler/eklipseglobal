<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuccessController;
use App\Http\Controllers\KycController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\WithdrawController;
use App\Http\Controllers\TransactController;





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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/* Route::get('/kyc', function () {
    return view('kyc');
})->middleware(['auth', 'verified'])->name('kyc'); */

require __DIR__.'/auth.php';

Route::get('/kyc', [KycController::class, 'create'])->middleware(['auth', 'verified'])->name('kyc');
Route::post('/kycinfo', [KycController::class, 'store'])->middleware(['auth', 'verified'])->name('kycinfo');
Route::get('/transaction', [TransactionController::class, 'create'])->middleware(['auth', 'verified'])->name('transaction');
Route::get('/deposit', [DepositController::class, 'create'])->middleware(['auth', 'verified'])->name('deposit');
Route::get('/withdraw', [WithdrawController::class, 'create'])->middleware(['auth', 'verified'])->name('withdraw');
Route::resource('transact', TransactController::class)->middleware(['auth', 'verified']);

