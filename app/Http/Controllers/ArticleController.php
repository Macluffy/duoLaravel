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
}