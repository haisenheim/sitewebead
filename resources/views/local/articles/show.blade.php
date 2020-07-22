@extends('layouts/local')


@section('corps')

<div>
    <img src="{{asset($article->image_uri)}}" alt="">
    <h2>{{$article->id}}</h2>
    <h2>{{$article->name}}</h2>
    <h2>{{$article->description}}</h2>
</div>

    <a href="/local/acceuil-articles" class="btn btn-danger" >retour</a>

@endsection