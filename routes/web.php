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


// Route::get('/', function(){
//     return redirect()->route('transaction');
// });

Route::prefix('transaction')->middleware(['auth:sanctum', 'verified' ])->group(function(){
    Route::get('/', 'TransactionController@index')->name('transaction');
    Route::get('/create', 'TransactionController@create')->name('transaction_create');
    // Route::post('/store', [TransactionController::class, 'store'] )->name('transaction_store');
    Route::post('/store', 'TransactionController@store' )->name('transaction_store');
    Route::get('/edit/{id}', 'TransactionController@edit' )->name('transaction_edit');
    Route::post('/update/{id}', 'TransactionController@update' )->name('transaction_update');
    Route::post('/destroy/{id}', 'TransactionController@destroy' )->name('transaction_destroy');
    // Route::get('/rifan', 'TransactionController@index')
});

Route::prefix('financialaccount')->middleware(['auth:sanctum', 'verified' ])->group(function(){
    Route::get('/', 'FinancialAccountsController@index')->name('account');
    Route::post('/store', 'FinancialAccountsController@store')->name('account_store');
    // Route::get('/create', 'TransactionController@create')->name('transaction_create');
    // // Route::post('/store', [TransactionController::class, 'store'] )->name('transaction_store');
    // Route::post('/store', 'TransactionController@store' )->name('transaction_store');
    // Route::get('/edit/{id}', 'TransactionController@edit' )->name('transaction_edit');
    // Route::post('/update/{id}', 'TransactionController@update' )->name('transaction_update');
    // Route::post('/destroy/{id}', 'TransactionController@destroy' )->name('transaction_destroy');
    // Route::get('/rifan', 'TransactionController@index')
});

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // return Inertia::render('Dashboard');
    return view('dashboard');
})->name('dashboard');