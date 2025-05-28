<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomersController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/customers', [CustomersController::class, 'index'])->name('customers.index');
Route::any('/customers/form', [CustomersController::class, 'form'])->name('customers.form');
Route::post('/customers/store', [CustomersController::class, 'store'])->name('customers.store');
Route::get('/customers/edit/{id}', [CustomersController::class, 'edit'])->name('customers.edit');
Route::put('/customers/update/{id}', [CustomersController::class, 'update'])->name('customers.update');
