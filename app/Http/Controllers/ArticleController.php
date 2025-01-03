<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreArticleRequest;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

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
        $article->categories()->attach($request->categories);

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

        $authors = Author::all();
        return view('articles.create',compact('authors'));
    }


    public function edit(Article $article){
        $authors = Author::all();
        return view('articles.edit',compact('article','authors'));

    }

    public function update(Request $request, Article $article){
        $article->update($request->all());

        $article->categories()->sync($request->categories);

        return redirect()->route('articles.dashboard')->with('success','Articolo '.$article->id.' modificato correttamente');
    }

    public function destroy(Article $article){
        if($article->image){
        Storage::disk('public')->delete($article->image);
    }

        $article->categories()->detach();

        $article->delete();
        return redirect()->back()->with('success','Hai eliminato l\'articolo correttamente');

    }

    public function dashboard(){
        return view('articles.dashboard',['articles'=>Article::all()]);
    }

    public function byCategory(Category $category){
        $articles = $category->articles;
        return view('articles.index',compact('articles'));
    }   
}
