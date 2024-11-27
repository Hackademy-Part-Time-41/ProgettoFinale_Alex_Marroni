<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'welcome'])->name('welcome');

Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');
Route::post('feedback/send',[PageController::class, 'feedbackSend'])->name('feedback.send');

Route::get('/login', [PageController::class, 'login'])->name('login');

Route::get('/userprofile', [PageController::class, 'userprofile'])->name('userprofile');

Route::get('/articles/index',[ArticleController::class,'index'])->name('articles.index');
Route::get('/articles/show{article}',[ArticleController::class,'show'])->name('articles.show');
