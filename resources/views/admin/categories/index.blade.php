@extends('layouts/admin')


@section('corps')

<h2 class="text-center" >GESTION DES CATEGORIES</h2>

<div class="table card">
    <table>
        <tr>
            <th></th>
            <th>Créer le</th>
            <th>Modifier le</th>
            <th>Nom</th>
            <th>Fonctions</th>
        </tr>

        @foreach($categorie as $cat)
        <tr>
            <td></td>
            <td>{{$cat->created_at}}</td>
            <td>{{$cat->updated_at}}</td>
            <td>{{$cat->name}}</td>
            <td>
                <a class="my-btn" href="/admin/afficher-categorie/{{$cat->id}}">afficher</a>
                <a class="my-btn" href="/admin/modifier-categorie/{{$cat->id}}">modifier</a>
                @if(!$cat->actif)
                <a class="btn btn-sm btn-success" href="/admin/activer-categorie/{{$cat->id}}">A</a>
                @else
                <a class="btn btn-sm btn-danger" href="/admin/desactiver-categorie/{{$cat->id}}">D</a>
                @endif
            </td>
        </tr>
            @endforeach
    </table>
</div>


<div>
    <a class="btn btn-primary btn-md mb-3" href="/admin/ajouter-categorie">Nouvelle catégorie</a>
</div>

@endsection