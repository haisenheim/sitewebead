@extends('layouts/local')


@section('corps')

<div class="container mt-5 col-8">
    <div class="form-control">
        <h2>AJOUTER UN ARTICLE</h2>
        <form enctype="multipart/form-data" action="/local/store-article" method="post">
        @csrf

        <div>
            <input type="hidden" placehoder="" name="id" >
        </div>

        <div>
            <input type="text" placeholder="NOM ARTICLE" name="name" >
        </div>

        <div>
            <input type="text" placeholder="DESCRIPTION" name="description" >
        </div>

        <div>
            <label>taille maxi 2048 KB!!</label>
            <input type="file" name"image_uri" id="file" required>
        </div>

        <div>
            <input type="hidden" name"user_id">
        </div>

        <div>
            <input class="btn btn-success" type="submit">
            <a class="btn btn-danger" href="/local/acceuil-articles">retour</a>
        </div>

        </form>
    </div>
</div>
@endsection