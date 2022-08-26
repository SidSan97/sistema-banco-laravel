<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //SAQUE
    Route::get('redirect1', function () {
        return redirect()->route('sacar');
    });

    Route::get('/saque', function(){
        return view('saque');
    })->name('sacar');

    //DEPOSITO
    Route::get('redirect2', function () {
        return redirect()->route('depositar');
    });

    Route::get('/deposito', function(){
        return view('deposito');
    })->name('depositar');

    Route::post('/', [ClienteController::class, 'deposito'])->name('deposito-valor');

    //SAQUE
    Route::get('redirect3', function () {
        return redirect()->route('sacar');
    });

    Route::get('/saque', function(){
        return view('saque');
    })->name('sacar');

    Route::post('/', [ClienteController::class, 'saque'])->name('saque-valor');
});
