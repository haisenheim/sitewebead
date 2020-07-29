@extends('layouts/local')


@section('corps')
<div class="container mt-5 col-6" >
    <div class="form-group">
        <h2>Modifier {{$article->name}}</h2>
        <form enctype="multipart/form-data" action="/local/save-article" method="post" >
            @csrf
            
            <div>
                <input type="hidden" name="id" value="{{$article->id}}">
            </div>

            <div class="form-group">
                <input type="text" value="{{$article->name}}" name="name" class="form-control">
            </div>

            <div class="form-group">
                <input type="text" value="{{$article->description}}" name="description" class="form-control">
            </div>

            <div class="form-group">
                <input type="file" name="image_uri" id="file" required>
            </div>

            <div>
                <input type="hidden" value="user" name="user_id">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-success" >
                <a href="/local/acceuil-articles" class="btn btn-danger">Annuler</a>
            </div>

        </form>
    </div>
</div>
@endsection