@extends('layouts/all')



@section('corps')

<div class="container">
    <div class="form-control mt-4 col-5">
        <h4 class="text-center" >FORMULAIRE DE CONTACT</h4>
        <div class="formulaire">
            <form action="/formulaire-store" method="post" >
            @csrf
            <div>
                <input type="hidden" name="id" >
            </div>

            <div class="form-group">
                <input type="text" placeholder="VOTRE NOM" name="name" class="form-control" >
            </div>

            <div class="form-group">
                <input type="text" placeholder="VOTRE TELEPHONE" name="phone" class="form-control" >
            </div>

            <div class="form-group">
                <input type="text" placeholder="VOTRE MAIL" name="email" class="form-control" >
            </div>

            <div class="form-group">
                <input type="text" placeholder="VOTRE ADRESSE" name="adress" class="form-control" >
            </div>

            <div class="form-group">
                <label for="commentaire">Votre commentaire</label>
                <textarea class="form-control" name="commentaire" id="" cols="30" rows="10"></textarea>
            </div>

            <div>
                <input type="submit" class="btn btn-success" >
                <a href="/formulaire" class="btn btn-danger" >Fermer</a>
            </div>

            </form>
        </div>
    </div>
</div>

@endsection