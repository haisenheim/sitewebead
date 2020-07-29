@extends('layouts/admin')


@section('corps')
<h3>AFFICHAGE CATEGORIE</h3>
<div class="container mt-4 col-6" >
    <div class="card" >
        <img class="img-card" src="{{asset($categorie->image_uri)}}" alt="" style="width: 100%" >
        <h5>ID: {{$categorie->id}}</h5>
        <h5>Nom: {{$categorie->name}}</h5>
    </div>
        <a class="btn btn-danger" href="/admin/acceuil-categories">Retour</a>
</div>
@endsection