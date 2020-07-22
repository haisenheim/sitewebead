@extends('layouts/etudiant')


@section('corps')

        <h2>Note de: </h2>

<h3>{{$note->name}}</h3>
<h3>{{$note->type?$note->type->name:"x"}}</h3>
<h3>{{$note->filiere?$note->filiere->name:"x"}}</h3>
<h3>{{$note->semestre?$note->semestre->name:"x"}}</h3>
<h3>{{$note->annee?$note->annee->name:"x"}}</h3>

<embed src="{{asset($note->path)}}" type="application/pdf" style="height: 500px; width: 500px;" >


@endsection