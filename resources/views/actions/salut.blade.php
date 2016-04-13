@extends('layout.principal')
@section('contenu')

    Slt {{$nom === null ? 'toi' :$nom}}
@endsection