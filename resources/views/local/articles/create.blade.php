@extends('layouts/local')


@section('corps')

<div class="container mt-5 col-6">
    <div class="form-group">
        <h2>AJOUTER UN ARTICLE</h2>
        <form enctype="multipart/form-data" action="/local/store-article" method="post">
        @csrf

            <div>
                <input type="hidden" value="id" name="id">
            </div>

            <div class="form-group">
                <input type="text" placeholder="NOM ARTICLE" name="name" class="form-control">
            </div>

            <div class="form-group">
                <input type="text" placeholder="DESCRIPTION" name="description"class="form-control">
            </div>

            <div class="form-group">
                <label>taille maxi 2048 KB!!</label>
                <input type="file" name"image_uri" id="file" required>
            </div>

            <div>
                <input type="hidden" name"user_id">
            </div>

            <div class="form-group">
                <input class="btn btn-success" type="submit">
                <a class="btn btn-danger" href="/local/acceuil-articles">Anuler</a>
            </div>

        </form>
    </div>
</div>
@endsection