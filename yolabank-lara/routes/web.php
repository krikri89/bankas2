<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankController as B;
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

Route::get('/banks', [B::class, 'index'])->name('banks-index');
Route::get('/banks/create', [B::class, 'create'])->name('banks-create');
Route::post('/banks', [B::class, 'store'])->name('banks-store');
Route::get('/banks/edit/{color}', [B::class, 'edit'])->name('banks-edit');
Route::put('/banks/{color}', [B::class, 'update'])->name('banks-update');
Route::delete('/banks/{color}', [B::class, 'destroy'])->name('banks-delete');
Route::get('/banks/show/', [B::class, 'show'])->name('banks-show');