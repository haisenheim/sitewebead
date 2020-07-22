<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Categorie;
use App\Models\Article;


class AllController extends Controller
{
    public function categories(){
        $categorie=Categorie::all();
        return view('all/categories/index')->with(compact('categorie'));
    }

    public function articles(){
        $article=Article::all();
        return view('all/articles/index')->with(compact('article'));
    }
}
