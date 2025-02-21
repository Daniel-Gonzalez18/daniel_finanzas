<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\SpendingController;

Route::get('/', function () {
    return view('welcome');
});

// //Route::resource('incomes', IncomeController::class);
// Route::get('/incomes', [IncomeController::class, 'index'])->name('incomes.index');
// Route::get('/spending', [SpendingController::class, 'index'])->name('outcomes.index');

Route::resource('incomes', IncomeController::class)->parameters(['incomes' => 'id']);
Route::resource('spending', SpendingController::class)->parameters(['spending' => 'id']);
