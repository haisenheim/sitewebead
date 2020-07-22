@extends('layouts/admin')


@section('corps')
    <h2>MODIFIER {{$categorie->name}}</h2>

<div class="container">
    <form enctype="multipart/form-data" action="/admin/save-categorie" method="post"></form>
    @csrf

    <div>
        <input type="hidden" value="#" name="id" >
    </div>

    <div>
        <input type="text" value="{{$categorie->name}}" name="name" >
    </div>

    <div>
        <input type="file" name="image_uri" id="file" required>
    </div>

    <div>
        <a class="btn btn-success" href="/admin/save-categorie">modifier</a>
        <a class="btn btn-danger" href="/admin/acceuil-categories">retour</a>
    </div>

</div>

@endsection