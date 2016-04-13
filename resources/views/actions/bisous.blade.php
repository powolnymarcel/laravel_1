@extends('layout.principal')
@section('contenu')
    <a href="{{route('accueil')}}">Accueil</a>
    <br>

    bisous {{$nom}}
    @endsection