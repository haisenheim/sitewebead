@extends('layouts/admin')


@section('corps')
        


<div class="container mt-5 col-8">
    <div class="form-control" >
        <h3>NOUVELLE CATEGORIE</h3>
        <form enctype="multipart/form-data" action="/admin/store-categorie" method="post">
        @csrf

        <div>
            <input type="hidden" placehoder="" name="id" >
        </div>

        <div>
            <input type="text" placeholder="nom categorie" name="name" >
        </div>

        <div>
            <label>taille maxi 2048 KB!!</label>
            <input type="file" name="image_uri" id="file" required>
        </div>

        <div>
            <input class="btn btn-success" type="submit">
            <a class="btn btn-danger" href="/admin/acceuil-categories">Annuler</a>
        </div>

        </form>
    </div>
</div>
@endsection