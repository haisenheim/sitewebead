@extends('layouts/all')


@section('corps')

<div class="container">

  <h2>TOUS LES ARTICLES</h2> 
  <div class="row">
    @foreach($article as $a)
    <div class="col-2 ml-2 mr-2">
      <div>
        <img class="cadre" src="{{asset($a->image_uri)}}" alt="" style="height:200px; width:200px;" >
        <p class="text-center card-text">{{$a->name}}</p>
      </div>
    </div>
    @endforeach
  </div>

</div>

@endsection