<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class UserController extends Controller
{
    public function profile() {

        $name = auth()->user()->name;

        $articles = auth()->user()->articles()->orderBy('created_at')->get();

        return view('user.profile',compact('articles'));
    }
}
