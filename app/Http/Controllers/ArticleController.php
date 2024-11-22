<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public $articles = [
        ['title'=>'Articolo 1','description'=>'Breve riassunto','body'=>'Corpo dell`articolo','image'=>'https://picsum.photos/200'],
        ['title'=>'Articolo 2','description'=>'Breve riassunto','body'=>'Corpo dell`articolo','image'=>'https://picsum.photos/200'],
        ['title'=>'Articolo 3','description'=>'Breve riassunto','body'=>'Corpo dell`articolo','image'=>'https://picsum.photos/200'],
        ['title'=>'Articolo 4','description'=>'Breve riassunto','body'=>'Corpo dell`articolo','image'=>'https://picsum.photos/200'],
    ];
    
    public function index() {
        return view('articles.index',['articles'=>$this->articles]);
    }

    public function show($article) {
        return view('articles.show',['article'=>$this->articles[$article]]);
    }
}
