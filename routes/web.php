<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/userprofile', function () {
    return view('userprofile');
});
