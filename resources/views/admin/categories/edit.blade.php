@extends('layouts/admin')


@section('corps')

<div class="container mt-4 col-6">
    <div class="form-group">
        <h3>Modifier {{$categorie->name}}</h3>
        <form enctype="multipart/form-data" action="/admin/save-categorie" method="post">
        @csrf

            <div>
                <input type="hidden" placehoder="" name="id" value="{{$categorie->id}}">
            </div>

            <div class="form-group">
                <input type="text" value="{{$categorie->name}}" name="name" required class="form-control">
            </div>

            <div class="form-group">
                <label>taille maxi 2048 KB!!</label>
                <input type="file" name="image_uri" id="file" required>
            </div>

            <div class="form-group">
                <input class="btn btn-success" type="submit">
                <a class="btn btn-danger" href="/admin/acceuil-categories">Annuler</a>
            </div>

        </form>
    </div>
</div>
@endsection