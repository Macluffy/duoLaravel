<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index() {
        $dataAll = Article::all();


        return view('pages/blog',compact('dataAll'));
    }

    public function create() {

        return view('backoffice/createElement');
    }

    public function store (Request $request) {
        $newentry = new Article;
        $newentry->img = $request->img; 
        $newentry->titre = $request->titre; 
        $newentry->description = $request->description; 
        $newentry->save();
        return redirect()->back();

    }

    public function edit (Article $id) {
        $article = $id;
        return view('backoffice/editarticle',compact('article'));

    }

    public function goto () {
        $datatout = Article::all();

        return view('backoffice/modifarticle',compact('datatout'));
    }

    public function show (Article $id) {
        $article= $id;


        return view('backoffice/showarticle',compact('article'));
    }
    public function update (Article $id, Request $request) {
        $article= $id;
        $article->titre=$request->titre;
        $article->description=$request->description;
        $article->img=$request->img;
        $article->save();
        return redirect('modif/article');

    }

    public function destroy (Article $id) {
        
        $id->delete();
        return redirect('modif/article');

    }
    
}
