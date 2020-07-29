<?php

namespace App\Http\Controllers\Etudiant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Note;
use App\Models\Type;
use App\Models\Filiere;
use App\Models\Semestre;
use App\Models\Annee;

class EtudiantController extends Controller
{
    public function index(){
        return view('etudiant/index');
    }

    public function show($id){
        $note=Note::find($id);
        return view('etudiant/notes')->with(compact('note'));
    }
}
