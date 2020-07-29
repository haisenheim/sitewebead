@extends('layouts/admin')


@section('corps')
<div class="container mt-5 col-6">
    <div class="form-group">
        <h4>NOUVELLE CATEGORIE</h4>
        <form enctype="multipart/form-data" action="/admin/store-categorie" method="post">
        @csrf

            <div>
                <input type="hidden" placehoder="" name="id">
            </div>

            <div class="form-group"> 
                <input type="text" placeholder="nom de la catégorie" name="name" class="form-control">
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