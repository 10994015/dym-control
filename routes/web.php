<?php

use App\Http\Livewire\Answer;
use App\Http\Livewire\GameManagement;
use App\Http\Livewire\GameStatus;
use App\Http\Livewire\Home;
use App\Http\Livewire\MemberWallet;
use App\Http\Livewire\MemberWalletVerify;
use App\Http\Livewire\StatisticalData;
use App\Http\Livewire\UserStatus;
use App\Http\Livewire\Viewbill;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Home::class)->middleware('auth');
Route::get('/gameManagement', GameManagement::class)->middleware('auth');
Route::get('/gameStatus', GameStatus::class)->middleware('auth');
Route::get('/userStatus', UserStatus::class)->middleware('auth');
Route::get('/answer', Answer::class)->middleware('auth');
Route::post('/member_wallet', MemberWallet::class)->middleware('auth');
Route::get('/member_wallet_verify', MemberWalletVerify::class)->middleware('auth');
Route::get('/statistical_data ', StatisticalData::class)->middleware('auth');
Route::get('/view_bill ', Viewbill::class)->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
});
