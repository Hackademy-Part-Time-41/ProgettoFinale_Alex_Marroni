<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});

Route::get('/contatti', function() {
    return view('contacts');
});

Route::get('/login', function () {
    return view('login');
});