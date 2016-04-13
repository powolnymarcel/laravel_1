@extends('layout.principal')

@section('contenu')
    <div class="row">
        <div class="col-md-12">
            <a href="{{route("salut")}}">Salut</a>
            <a href="{{route("calin")}}">calin</a>
            <a href="{{route("bisous")}}">bisous</a>
        </div>
    </div>

@endsection