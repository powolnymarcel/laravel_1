@extends('layout.principal')
@section('contenu')
    <a href="{{route('accueil')}}">Accueil</a>
    <br>
    Slt {{$nom === null ? 'toi' :$nom}}
@endsection