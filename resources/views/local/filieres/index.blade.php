@extends('layouts/local')


@section('corps')
    <h2>GESTION DES FILIERES</h2>
    
    <div class="table">
        <table>
            <tr>
                <th>ID</th>
                <th>Site</th>
                <th>Créer le</th>
                <th>Ajouter le</th>
                <th>Fonctions</th>
            </tr>

            <tr>
                <td>azerty</td>
                <td>azerty</td>
                <td>azerty</td>
                <td>azerty</td>
                <td>
                    <a class="btn btn-sm btn-warning" href="">modifier</a>
                    <a class="btn btn-sm btn-success" href="">A</a>
                    <a class="btn btn-sm btn-danger" href="">D</a>
                </td>
            </tr>
        </table>
    </div>

   <div>
        <a class="btn btn-md btn-primary" href="">Nouvelle filière</a>
    </div>
@endsection