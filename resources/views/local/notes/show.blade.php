@extends('layouts/local')


@section('corps')

<h3>AFFICHAGE NOTE</h3>

<div class="container mt-4 col-8" >
    <div class="">
        <div class="img-card">
            <embed class="embed-responsive" src="{{asset($note->path)}}" type="application/pdf" style="height: 400px;" >
        </div>
        <div>
            <h4>Note de: {{$note->name}}</h4>
            <h4>Type: {{$note->type?$note->type->name:"x"}}</h4>
            <h4>Filière: {{$note->filiere?$note->filiere->name:"x"}}</h4>
            <h4>Semestre: {{$note->semestre?$note->semestre->name:"x"}}</h4>
            <h4>Année académique: {{$note->annee?$note->annee->name:"x"}}</h4>
        </div> 
        <div>
            <a href="/local/acceuil-notes" class="btn btn-danger" >Retour</a>
        </div>
    </div>
</div>


@endsection