<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuccessController;
use App\Http\Controllers\KycController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\WithdrawController;
use App\Http\Controllers\TransactController;
use App\Http\Controllers\CoinlockController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\StakingController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\ProfileController;








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
Route::resource('coinlock', CoinlockController::class)->middleware(['auth', 'verified']);
Route::resource('member', MemberController::class)->middleware(['auth', 'verified']);
Route::resource('staking', StakingController::class)->middleware(['auth', 'verified']);
Route::resource('notification', NotificationController::class)->middleware(['auth', 'verified']);
Route::resource('videocontensy', VideoController::class)->middleware(['auth', 'verified']);
Route::resource('security', SecurityController::class)->middleware(['auth', 'verified']);
Route::resource('profile', ProfileController::class)->middleware(['auth', 'verified']);

