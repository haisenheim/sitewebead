@extends('layouts/local')
       

@section('corps')

<h2 class="text-center" >GESTION DES NOTES</h2>

<div class="table card">
    <table>
        <tr>
            <th></th>
            <th>Créer le</th>
            <th>Note de</th>
            <th>Type</th>
            <th>Filière</th>
            <th>Semestre</th>
            <th>Année</th>
            <th>Fonctions</th>
        </tr>

        @foreach($note as $no)
        <tr>
            <td></td>
            <td>{{$no->created_at}}</td>
            <td>{{$no->name}}</td>
            <td>{{$no->type?$no->type->name:"x"}}</td>
            <td>{{$no->filiere?$no->filiere->name:"x"}}</td>
            <td>{{$no->semestre?$no->semestre->name:"x"}}</td>
            <td>{{$no->annee?$no->annee->name:"x"}}</td>
            <td>
                <a class="btn btn-sm btn-info" href="/local/afficher-note/{{$no->id}}">afficher</a>
                <a class="btn btn-sm btn-warning" href="/local/modifier-note/{{$no->id}}">modifier</a>
                @if(!$no->actif)
                <a class="btn btn-sm btn-success" href="/local/activer-categorie/{{$no->id}}">A</a>
                @else
                <a class="btn btn-sm btn-danger" href="/local/activer-categorie/{{$no->id}}">D</a>
                @endif
            </td>
        </tr>
        @endforeach
    </table>
</div>


<div>
    <a class="btn btn-md btn-primary" href="/local/ajouter-note">Ajouter</a>
</div>

@endsection