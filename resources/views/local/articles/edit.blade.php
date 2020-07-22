@extends('layouts/local')


@section('corps')

    <h2>MODIFIER ARTICLE</h2>

<div class="form-group" >
<form enctype="multipart/form-data" action="/local/save-article" method="post" >
    @csrf
    
    <div>
        <input type="hidden" name="id">
    </div>

    <div>
        <input type="text" value="{{$article->name}}" name="name">
    </div>

    <div>
        <input type="text" value="{{$article->description}}" name="description">
    </div>

    <div>
        <input type="file" name="image_uri" id="file" required>
    </div>

    <div>
        <input type="hidden" value="user" name="user_id">
    </div>

    <div>
        <input type="submit" class="btn btn-success" >
        <a href="/local/acceuil-articles" class="btn btn-danger">Annuler</a>
    </div>

</form>
</div>


@endsection