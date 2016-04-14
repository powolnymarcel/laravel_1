@extends('layout.principal')

@section('contenu')
    <div class="row">
        <div class="col-md-12">

            @foreach ($actions as $action)
                <a href="{{route('actionSympa',['action'=>lcfirst($action->nom)])}}">{{$action->nom}}</a>
            @endforeach



            <br>


            @if($errors->has())
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            @endif

            <form action="{{route("ajouterAction")}}" method="POST">
                <label for="nom">Selectionner un nom</label>
                <input type="text" name="nom" id="nom">
                <label for="preference">preference</label>
                <input type="number" name="preference" id="preference">

                <input type="hidden" value="{{Session::token()}}" name="_token">
                <button type="submit">Envoyer</button>
            </form>
                <br>
                <br>
            <ul class="text-center">
                @foreach($actions_loggee as $action_loggee)
                    <li class="list-unstyled">{{$action_loggee->actions_sympas->nom}}</li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection