@extends('layout.principal')

@section('contenu')
    <div class="row">
        <div class="col-md-12">
            <a href="{{route("actionSympa",['action'=>'salut'])}}">Salut</a>
            <a href="{{route("actionSympa",['action'=>'calin'])}}">calin</a>
            <a href="{{route("actionSympa",['action'=>'bisous'])}}">bisous</a>

            <br>


            @if($errors->has())
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            @endif

            <form action="{{route("sympa")}}" method="POST">
                <label for="leSelect">Selectionner action</label>
                <select name="action" id="leSelect">
                    <option value="salut">Salut</option>
                    <option value="calin">calin</option>
                    <option value="bisous">bisous</option>
                </select>
                <input type="text" name="nom">
                <input type="hidden" value="{{Session::token()}}" name="_token">
                <button type="submit">Envoyer</button>
            </form>

        </div>
    </div>

@endsection