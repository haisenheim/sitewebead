@extends('layouts/local')


@section('corps')

<h2 class="text-center" >AFFICHAGE NOTE</h2>

<div class="container col-8" >
    <div class="form-control col-8" id="cadre" >
        <div class="card" >
            <embed class"embed-responsive" src="{{asset($note->path)}}" type="application/pdf" style="height: 100%;" >
        </div>
        <h4>Note de: {{$note->name}}</h4>
        <h4>Type: {{$note->type?$note->type->name:"x"}}</h4>
        <h4>Filière: {{$note->filiere?$note->filiere->name:"x"}}</h4>
        <h4>Semestre: {{$note->semestre?$note->semestre->name:"x"}}</h4>
        <h4>Année académique: {{$note->annee?$note->annee->name:"x"}}</h4>

        <div>
            <a href="/local/acceuil-notes" class="btn btn-danger" >Retour</a>
        </div>
    </div>
        
</div>


@endsection