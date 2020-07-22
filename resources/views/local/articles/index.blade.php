@extends('layouts/local')


@section('corps')
    <h2>GESTION DES ARTICLES</h2>
    
    <div class="table">
        <table>
            <tr>
                <th></th>
                <th>Créer le</th>
                <th>Ajouter le</th>
                <th>Nom</th>
                <th>Etat</th>
                <th>Fonctions</th>
            </tr>
            
            @foreach($article as $art)
            <tr>
                <td></td>
                <td>{{$art->created_at}}</td>
                <td>{{$art->updated_at}}</td>
                <td>{{$art->name}}</td>
                <td></td>
                <td>
                    <a class="btn btn-sm btn-info" href="/local/afficher-article/{{$art->id}}">afficher</a>
                    <a class="btn btn-sm btn-warning" href="/local/modifier-article/{{$art->id}}">modifier</a>
                    @if(!$art->actif)
                    <a class="btn btn-sm btn-success" href="/local/activer-article/{{$art->id}}">A</a>
                    @else
                    <a class="btn btn-sm btn-danger" href="/local/desactiver-article/{{$art->id}}">D</a>
                    @endif
                </td>
            </tr>
            @endforeach
        </table>
    </div>

   <div>
        <a class="btn btn-md btn-primary" href="/local/ajouter-article">Nouvel article</a>
    </div>
@endsection