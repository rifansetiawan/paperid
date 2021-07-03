<?php

use App\Http\Controllers\TransactionController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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


Route::get('/', function(){
    return redirect()->route('transaction');
});

Route::prefix('transaction')->middleware(['auth:sanctum', 'verified' ])->group(function(){
    Route::get('/', [TransactionController::class, 'index'] )->name('transaction');
    Route::get('/create', [TransactionController::class, 'create'] )->name('transaction_create');
    Route::post('/store', [TransactionController::class, 'store'] )->name('transaction_store');
});

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia::render('Dashboard');
//     // // return view('transactions.index');
//     // Route::resource('/transactions', 'TransactionController');
// })->name('dashboard');