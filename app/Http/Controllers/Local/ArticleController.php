<?php

namespace App\Http\Controllers\Local;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Article;

class ArticleController extends Controller
{

    public function index(){
        $article=Article::all();
        return view('local/articles/index')->with(compact('article'));
    }

    public function create(){
        return view('local/articles/create');
    }

     public function show($id){
        $article=Article::find($id);
        return view('local/articles/show')->with(compact('article'));
    }

    public function edit($id){
        $article=Article::find($id);
        return view('local/articles/edit')->with(compact('article'));
    }

    public function store(Request $request){
        $article=new Article();
        $article->name=$request->name;
        $article->description=$request->description;
        if($request->image_uri){
            $fichier = $request->image_uri;
            $ext_array= ['png','jpg','jpeg','gif'];
            $ext = $fichier->getClientOriginalExtension();
            if (in_array($ext,$ext_array)){
                if(!file_exists(public_path().'/images')){
                    mkdir(public_path().'/images');
                }
                if(!file_exists(public_path().'/images/articles')){
                    mkdir(public_path().'/images/articles');
                }
                $name = date('dmYhis').'.'.$ext;
                $path = 'images/articles/'. $name;
                if($article->image_uri){
                    if(file_exists(public_path($article->image_uri))){
                       unlink(public_path($article->image_uri));
                    }   
                }
                
                
                $fichier->move(public_path('images/articles'),$name);
                $article->image_uri = $path;

            }
        }
        $article->save();
        return redirect('/local/acceuil-articles');
    }

    public function save(Request $request){
        $article=Article::find($request->id);
        $article->name=$request->name;
        $article->description=$request->description;
        if($request->image_uri){
            $fichier = $request->image_uri;
            $ext_array= ['png','jpg','jpeg','gif'];
            $ext = $fichier->getClientOriginalExtension();
            if (in_array($ext,$ext_array)){
                if(!file_exists(public_path().'/images')){
                    mkdir(public_path().'/images');
                }
                if(!file_exists(public_path().'/images/articles')){
                    mkdir(public_path().'/images/articles');
                }
                $name = date('dmYhis').'.'.$ext;
                $path = 'images/articles/'. $name;
                if($article->image_uri){
                    if(file_exists(public_path($article->image_uri))){
                       unlink(public_path($article->image_uri));
                    }   
                }
                
                
                $fichier->move(public_path('images/articles'),$name);
                $article->image_uri = $path;

            }
        }
        $article->save();
        return redirect('/local/acceuil-articles');
    }

     public function activer($id){
        $article=Article::find($id);
        $article->actif=1;
        $article->save();
        return redirect()->back();      
    }

    public function desactiver($id){
        $article=Article::find($id);
        $article->actif=0;
        $article->save();
        return redirect()->back();        
    }

}
