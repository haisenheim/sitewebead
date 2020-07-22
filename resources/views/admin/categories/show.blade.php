@extends('layouts/admin')


@section('corps')

<h2>AFFICHAGE CATEGORIE</h2>

<div class="container mt-4" >
    
    <div class="card col-3" >
        <img class="card" src="{{asset($categorie->image_uri)}}" alt="">
        <h5>ID: {{$categorie->id}}</h5>
        <h5>Nom: {{$categorie->name}}</h5>
    </div>
        <a class="btn btn-danger" href="/admin/acceuil-categories">Retour</a>
</div>


@endsection