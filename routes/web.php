<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IncomeController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/incomes/create', [IncomeController::class, 'create'])->name('incomes.create');
Route::post('/incomes', [IncomeController::class, 'store'])->name('incomes.store');

Route::get('/incomes', [IncomeController::class, 'index'])->name('incomes.index');
Route::get('/incomes/{id}/edit', [IncomeController::class, 'edit'])->name('incomes.edit');
Route::put('/incomes/{id}', [IncomeController::class, 'update'])->name('incomes.update');
Route::delete('/incomes/{id}', [IncomeController::class, 'destroy'])->name('incomes.destroy');