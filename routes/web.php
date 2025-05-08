<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/customers', [\App\Http\Controllers\CustomersController::class, 'index'])->name('customers.index');
