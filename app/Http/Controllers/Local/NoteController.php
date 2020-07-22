<?php

namespace App\Http\Controllers\Local;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Models\Note;
use App\Models\Type;
use App\Models\Filiere;
use App\Models\Semestre;
use App\Models\Annee;


class NoteController extends Controller
{

    public function index(){
        $note=Note::all();
        $type=Type::all();
        $filiere=Filiere::all();
        $semestre=Semestre::all();
        $annee=Annee::all();
        return view('local/notes/index')->with(compact('note', 'type', 'filiere', 'semestre', 'annee'));
    }

    public function create(){
        $type=Type::all();
        $filiere=Filiere::all();
        $semestre=Semestre::all();
        $annee=Annee::all();
        return view('local/notes/create')->with(compact('type', 'filiere', 'semestre', 'annee'));
    }

    public function edit($id){
        $note=Note::find($id);
        return view('local/notes/edit')->with(compact('note'));
    }

    public function show($id){
        $note=Note::find($id);
        return view('local/notes/show')->with(compact('note'));
    }

    public function store(Request $request){
        $note=new Note();
        $note->name=$request->name;
        $note->type_id=$request->type_id;
        $note->filiere_id=$request->filiere_id;
        $note->semestre_id=$request->semestre_id;
        $note->annee_id=$request->annee_id;
         if($request->path){
            $fichier = $request->path;
            $ext_array= ['pdf'];
            $ext = $fichier->getClientOriginalExtension();
            //dd($ext);
            if (in_array($ext,$ext_array)){
                //dd('ext ok');
                if(!file_exists(public_path().'/fichiers')){
                    mkdir(public_path().'/fichiers');
                }
                if(!file_exists(public_path().'/fichiers/notes')){
                    mkdir(public_path().'/fichiers/notes');
                }
                $name = date('dmYhis').'.'.$ext;
                $path = 'fichiers/notes/'. $name;
                $fichier->move(public_path('fichiers/notes'),$name);
                $note->path = $path;

            }
        }
        $note->save();
        return redirect('local/acceuil-notes');
    }

    public function save(Request $request){
        $note=Note::find($request->id);
        $note->name=$request->name;
        $note->type_id=$request->type_id;
        $note->filiere_id=$request->filiere_id;
        $note->semestre_id=$request->semestre_id;
        $note->annee_id=$request->annee_id;
        $note->save();
        return redirect('local/acceuil-notes');
    }

     public function activer($id){
        $article=Note::find($id);
        $article->actif=1;
        $article->save();
        return redirect()->back();      
    }

    public function desactiver($id){
        $article=Note::find($id);
        $article->actif=0;
        $article->save();
        return redirect()->back();        
    }



}
