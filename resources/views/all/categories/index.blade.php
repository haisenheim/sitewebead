@extends('layouts/all')


@section('corps')

<div class="container">

  <h2>TOUTES LES CATEGORIES</h2> 
  <div class="row">
    @foreach($categorie as $cat)
    <div class="col-2 ml-2 mr-2">
      <div>
        <img class="cadre" src="{{asset($cat->image_uri)}}" alt="" style="height:200px; width:200px;" >
        <p class="text-center card-text">{{$cat->name}}</p>
      </div>
    </div>
    @endforeach
  </div>

</div>




@endsection