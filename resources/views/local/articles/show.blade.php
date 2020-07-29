@extends('layouts/local')


@section('corps')

<h3>AFFICHAGE ARTICLE</h3>

<div class="container mt-4 col-6" >
    
    <div class="card" style="height: 300px;">
        <img class="img-card" src="{{asset($article->image_uri)}}" alt="" style="height: 100%;" >
    </div>
    <div class="card">
        <h5>ID: {{$article->id}}</h5>
        <h5>{{$article->name}}</h5>
        <h5>{{$article->description}}</h5>
    </div>
        <a href="/local/acceuil-articles" class="btn btn-danger" >Retour</a>

</div>

@endsection