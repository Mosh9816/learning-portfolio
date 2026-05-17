<?php

use App\Http\Controllers\ExpenseController;
use Illuminate\Support\Facades\Route;

Route::get('/expenses', [ExpenseController::class, 'index'])->name('expenses.index');
Route::get('/expenses/create', [ExpenseController::class, 'create'])->name('expenses.create');
Route::post('/expenses', [ExpenseController::class, 'store'])->name('expenses.store');
Route::post('/expenses/{id}/approve', [ExpenseController::class, 'approve'])->name('expenses.approve');
Route::delete('/expenses/{id}', [ExpenseController::class, 'destroy'])->name('expenses.destroy');
Route::get('/expenses/{id}/edit', [ExpenseController::class, 'edit'])->name('expenses.edit');
Route::put('/expenses/{id}', [ExpenseController::class, 'update'])->name('expenses.update');
