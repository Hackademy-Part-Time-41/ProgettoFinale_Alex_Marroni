<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PageController::class, 'welcome'])->name('welcome');

Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');
Route::post('feedback/send',[PageController::class, 'feedbackSend'])->name('feedback.send');

Route::resource('authors',AuthorController::class)->except('show')->middleware('auth');


Route::get('/articles/index',[ArticleController::class,'index'])->name('articles.index')->middleware('auth');
Route::get('/articles/show/{article}',[ArticleController::class,'show'])->name('articles.show');
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create')->middleware('auth');
Route::get('/articles/edit/{article}',[ArticleController::class,'edit'])->name('articles.edit')->middleware('auth');
Route::put('/articles/update/{article}',[ArticleController::class,'update'])->name('articles.update')->middleware('auth');
Route::delete('/articles/delete/{article}',[ArticleController::class,'destroy'])->name('articles.destroy')->middleware('auth');
Route::get('/articles/dashboard',[ArticleController::class,'dashboard'])->name('articles.dashboard')->middleware('auth');

Route::get('/login', [PageController::class, 'login'])->name('login');

Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');

Route::get('/articles/category{category}',[ArticleController::class,'byCategory'])->name('articles.byCategory');

Route::post('/articles/store',[ArticleController::class,'store'])->name('articles.store')->middleware('auth');


