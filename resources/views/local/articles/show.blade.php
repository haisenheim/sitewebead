@extends('layouts/local')


@section('corps')

<h2>AFFICHAGE ARTICLE</h2>

<div class="container mt-4" >
    
    <div class="card col-3" >
        <img class="card" src="{{asset($article->image_uri)}}" alt="">
        <h5>ID: {{$article->id}}</h5>
        <h5>{{$article->name}}</h5>
        <h5>{{$article->description}}</h5>
    </div>
        <a href="/local/acceuil-articles" class="btn btn-danger" >retour</a>

</div>

    
@endsection