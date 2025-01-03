<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Article;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile() {

        $name = auth()->user()->name;

        $articles = Article::all();

        return view('user.profile',compact('articles'));
    }
}
