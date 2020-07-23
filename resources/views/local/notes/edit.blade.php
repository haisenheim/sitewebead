@extends('layouts/local')


@section('corps')

<div class="form-group">
    <form enctype="multipart/form-data" action="/local/store-note/" method"post">
    @csrf

    <div>
        <input type="hidden" name="id" >
    </div>

    <div>
        <input type="text" name="note" placeholder="{{$note->name}}" >
    </div>

    <div>
        <select name="type_id" id="">
            <option value="">type de note</option>
            @foreach($type as $t)
            <option value="{{$t->type_id=$t->id}}">{{$t->name}}</option>
            @endforeach
        </select>
    </div>

    <div>
        <select name="filiere_id" id="">
            <option value="">filière</option>
            @foreach($filiere as $f)
            <option value="{{$f->filiere_id=$f->id}}">{{$f->name}}</option>
            @endforeach
        </select>
    </div>

    <div>
        <select name="semestre_id" id="">
            <option value="">semestre</option>
            @foreach($semestre as $s)
            <option value="{{$s->semestre_id=$s->id}}">{{$s->name}}</option>
            @endforeach
        </select>
    </div>

    <div>
        <select name="annee_id" id="">
            <option value="">année académique</option>
            @foreach($annee as $an)
            <option value="{{$an->semestre_id=$an->id}}">{{$an->name}}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label>taille maxi 2048 KB!!</label>
        <input type="file" name="path" id="file" required>
    </div>

    <div>
        <input class="btn btn-success" type="submit">
        <a href="/local/acceuil-notes" class="btn btn-danger" >Annuler</a>
    </div>
    
    </form>
</div>


@endsection