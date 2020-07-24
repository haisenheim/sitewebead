<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Categorie;

class CategorieController extends Controller
{

    public function index(){
        $categorie=Categorie::all();
        return view('admin/categories/index')->with(compact('categorie'));
    }

    public function create(){
        return view('admin/categories/create');
    }

    public function show($id){
        $categorie=Categorie::find($id);
        return view('admin/categories/show')->with(compact('categorie'));
    }

    public function edit($id){
        $categorie=Categorie::find($id);
        return view('admin/categories/edit')->with(compact('categorie'));
    }

    public function store(Request $request){
        $categorie=new Categorie();
        $categorie->name=$request->name;
        if($request->image_uri){
            $fichier = $request->image_uri;
            $ext_array= ['png','jpg','jpeg','gif'];
            $ext = $fichier->getClientOriginalExtension();
            if (in_array($ext,$ext_array)){
                if(!file_exists(public_path().'/images')){
                    mkdir(public_path().'/images');
                }
                if(!file_exists(public_path().'/images/categories')){
                    mkdir(public_path().'/images/categories');
                }

                $name = date('dmYhis').'.'.$ext;
                $path = 'images/categories/'. $name;
                $fichier->move(public_path('images/categories'),$name);
                $categorie->image_uri = $path;

            }
        }
        $categorie->save();
        return redirect('/admin/acceuil-categories');
    }

    public function save(Request $request){
        $categorie=Categorie::find($request->id);
        $categorie->name=$request->name;
        //dd($categorie);
        if($request->image_uri){
            $fichier = $request->image_uri;
            $ext_array= ['png','jpg','jpeg','gif'];
            $ext = $fichier->getClientOriginalExtension();
            if (in_array($ext,$ext_array)){
                if(!file_exists(public_path().'/images')){
                    mkdir(public_path().'/images');
                }
                if(!file_exists(public_path().'/images/categories')){
                    mkdir(public_path().'/images/categories');
                }

                $name = date('dmYhis').'.'.$ext;
                $path = 'images/categories/'. $name;
                $fichier->move(public_path('images/categories'),$name);
                $categorie->image_uri = $path;

            }
        }
        $categorie->save();
        return redirect('/admin/acceuil-categories');
    }

     public function activer($id){
        $categorie=Categorie::find($id);
        $categorie->actif=1;
        $categorie->save();
        return redirect()->back();      
    }

    public function desactiver($id){
        $categorie=Categorie::find($id);
        $categorie->actif=0;
        $categorie->save();
        return redirect()->back();        
    }



}
