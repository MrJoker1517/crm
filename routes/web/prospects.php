<?php

use App\Http\Controllers\Admin\Prospects\ProspectsController;

Route::get('/home', [ProspectsController::class, 'index'])->name('dashboard');
Route::get('/create', [ProspectsController::class, 'create'])->name('create');