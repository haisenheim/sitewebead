@extends('layouts/all')


@section('corps')
    <h2>TOUS LES ARTICLES</h2>

@foreach($article as $art)
<div class="" > 
    <img class="cadre" src="{{asset($art->image_uri)}}" alt="">
    <p>{{$art->name}}</p>
</div>
@endforeach

@endsection