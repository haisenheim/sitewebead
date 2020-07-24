@extends('layouts/local')


@section('corps')

<div class="container mt-4">
    <div class="form-control col-5" >
        <h3>NOUVELLE NOTE</h3>
        <form enctype="multipart/form-data" action="/local/store-note" method="post">
        @csrf
            <div>
                <input type="hidden" placehoder="" name="id"value="id" >
            </div>

            <div>
                <input type="text" placeholder="note" name="name" class="form-control" >
            </div>

            <div class="form-group">
                <select name="type_id" id="">
                    <option value="" >type de la note</option>
                    @foreach($type as $t)
                    <option value="{{$t->type_id=$t->id}}">{{$t->name}}</option>
                    @endforeach
                </select>
            </div>
        
            <div>
                <select name="filiere_id" id="">
                    <option value="">filière</option>
                    @foreach($filiere as $fil)
                    <option value="{{$fil->filiere_id=$fil->id}}">{{$fil->name}}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <select name="semestre_id" id="">
                    <option value="">semestre</option>
                    @foreach($semestre as $sem)
                    <option value="{{$sem->semestre_id=$sem->id}}">{{$sem->name}}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <select name="annee_id" id="">
                    <option value="">année académique</option>
                    @foreach($annee as $an)
                    <option value="{{$an->annee_id=$an->id}}">{{$an->name}}</option>
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
</div>
@endsection