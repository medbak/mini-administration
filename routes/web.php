<?php

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

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/getClientsDetails', 'App\Http\Controllers\ClientController@getClientsDetails')
    ->name('getClientsDetails');

Route::middleware(['auth:sanctum', 'verified'])->get('/exportToExcel', 'App\Http\Controllers\ClientController@exportToExcel')
    ->name('exportToExcel');

Route::middleware(['auth:sanctum', 'verified'])->get('/getCommandesDetails', 'App\Http\Controllers\CommandeController@getCommandeDetails')
    ->name('getCommandesDetails');
