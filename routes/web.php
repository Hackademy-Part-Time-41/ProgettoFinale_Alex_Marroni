<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('index');

Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');

Route::get('/login', [PageController::class, 'login'])->name('login');

Route::get('/userprofile', [PageController::class, 'userprofile'])->name('userprofile');
