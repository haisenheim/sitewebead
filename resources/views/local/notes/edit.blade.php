@extends('layouts/local')


@section('corps')

<h3>MODIFICATION DE LA NOTE</h3>

<div class="container mt-4 col-6">
    <div class="form-group">
        <form enctype="multipart/form-data" action="/local/save-note/" method="post">
        @csrf

        <div>
            <input type="hidden" name="id" value="{{$note->id}}" >
        </div>

        <div class="form-group">
            <input type="text" name="name" value="{{$note->name}}" class="form-control">
        </div>

        <div class="form-group">
            <select name="type_id" id="" class="form-control">
                <option value="">type de note</option>
                @foreach($type as $t)
                <option value="{{$t->type_id=$t->id}}">{{$t->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <select name="filiere_id" id="" class="form-control">
                <option value="">filière</option>
                @foreach($filiere as $f)
                <option value="{{$f->filiere_id=$f->id}}">{{$f->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <select name="semestre_id" id="" class="form-control">
                <option value="">semestre</option>
                @foreach($semestre as $s)
                <option value="{{$s->semestre_id=$s->id}}">{{$s->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <select name="annee_id" id="" class="form-control">
                <option value="">année académique</option>
                @foreach($annee as $an)
                <option value="{{$an->semestre_id=$an->id}}">{{$an->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>taille maxi 2048 KB!!</label>
            <input type="file" name="path" id="file" required>
        </div>

        <div class="form-group">
            <input class="btn btn-success" type="submit">
            <a href="/local/acceuil-notes" class="btn btn-danger" >Annuler</a>
        </div>
        
        
        </form>
    </div>
</div>


@endsection