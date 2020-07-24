<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Categorie;
use App\Models\Article;
use App\Models\Formulaire;


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

    public function formulaire(){
        $formulaire=Formulaire::all();
        return view('all/formulaires/index');
    }

    public function formulairestore(Request $request){
        $formulaire=new Formulaire();
        $formulaire->name=$request->name;
        $formulaire->phone=$request->phone;
        $formulaire->email=$request->email;
        $formulaire->adress=$request->adress;
        $formulaire->commentaire=$request->commentaire;
        $formulaire->save();
        return redirect('/formulaire');
    }



}