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

Route::get('/', function () {
    return view('dashboard');
})->name('home');

Route::get('/feedback/customer/add', [\App\Http\Controllers\CustomerController::class, 'create'])->name('feedback.customer.add');
Route::post('/feedback/customer/add', [\App\Http\Controllers\CustomerController::class, 'store'])->name('feedback.customer.store');

Route::get('/feedback/developer/add', [\App\Http\Controllers\DeveloperController::class, 'create'])->name('feedback.developer.add');
Route::post('/feedback/developer/add', [\App\Http\Controllers\DeveloperController::class, 'store'])->name('feedback.developer.store');


require __DIR__.'/auth.php';
