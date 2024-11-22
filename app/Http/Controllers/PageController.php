<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function contacts() {
        return view('contacts');
    }

    public function login() {
        return view('login');
    }

    public function userprofile() {
        return view('userprofile');
    }
}
