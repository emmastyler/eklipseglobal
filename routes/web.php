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
use App\Http\Controllers\MinerController;
use App\Http\Controllers\AdminController;








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
Route::get('/whitepaper', function () {
    return view('whitepaper');
});
Route::get('/privacy', function () {
    return view('privacy');
});
Route::get('/termofsale', function () {
    return view('term');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'member'])->name('dashboard');

/* Route::get('/kyc', function () {
    return view('kyc');
})->middleware(['auth', 'verified'])->name('kyc'); */

require __DIR__.'/auth.php';

Route::resource('/classified', AdminController::class);


Route::get('/mine', [MinerController::class, 'mine'])->middleware(['auth', 'verified','member'])->name('mine');
Route::post('/miner', [MinerController::class, 'miner'])->middleware(['auth', 'verified','member'])->name('miner');
Route::get('/kyc', [KycController::class, 'create'])->middleware(['auth', 'verified','member'])->name('kyc');
Route::post('/kycinfo', [KycController::class, 'store'])->middleware(['auth', 'verified','member'])->name('kycinfo');
Route::get('/transact', [TransactionController::class, 'index'])->middleware(['auth', 'verified','member'])->name('transaction');
Route::post('/buy_sell', [TransactionController::class, 'store'])->middleware(['auth', 'verified','member'])->name('buy_sell');
Route::put('/coinupdate', [CoinlockController::class, 'coinupdate'])->middleware(['auth', 'verified','member'])->name('coinupdate');
Route::get('/deposit', [DepositController::class, 'create'])->middleware(['auth', 'verified','member'])->name('deposit');
Route::post('/depositmode', [DepositController::class, 'mode'])->middleware(['auth', 'verified','member'])->name('depositmode');
Route::get('/depositverify/{reference}/{email}', [DepositController::class, 'store'])->middleware(['auth', 'verified','member'])->name('depositverify');
Route::get('/withdraw', [WithdrawController::class, 'create'])->middleware(['auth', 'verified','member'])->name('withdraw');
Route::post('/withdrawverify', [WithdrawController::class, 'store'])->middleware(['auth', 'verified','member'])->name('withdrawverify');
Route::resource('transaction', TransactController::class)->middleware(['auth', 'verified','member']);
Route::resource('coinlock', CoinlockController::class)->middleware(['auth', 'verified','member']);
Route::resource('member', MemberController::class)->middleware(['auth', 'verified']);
Route::resource('staking', StakingController::class)->middleware(['auth', 'verified','member']);
Route::resource('notification', NotificationController::class)->middleware(['auth', 'verified','member']);
Route::resource('videocontensy', VideoController::class)->middleware(['auth', 'verified','member']);
Route::resource('settings', SecurityController::class)->middleware(['auth', 'verified','member']);
Route::resource('profile', ProfileController::class)->middleware(['auth', 'verified','member']);

