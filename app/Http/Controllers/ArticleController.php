<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    
    public function index() {

        $articles = Article::all();

        return view('articles.index',compact('articles'));
    }

    public function show(Article $article) {


        return view('articles.show',compact('article'));
    }

    public function store(StoreArticleRequest $request){

        $article =  Article::create($request->validated());

        if($request->hasFile('image')){

            $file = $request->file('image');
            $name = 'image'.$article->id.'.'.$file->getClientOriginalExtension();
            $file->storeAs('images', $name,'public');

            $article->image = '/storage/images/'.$name;

            $article->save();
        }

       return redirect()->back()->with('success','Articolo creato!');

    }

    public function create() {

        return view('articles.create');
    }
}
