<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function contacts() {
        return view('contacts');
    }


    public function feedbackSend(Request $request) {
        return redirect()->back()->with('success','Abbiamo ricevuto la tua segnalazione');
    }

    public function login() {
        return view('login');
    }

    public function userprofile() {
        return view('userprofile');
    }

}
