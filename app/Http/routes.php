<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// {nom?} le point d'interrogation indique que c'est un param optionnel



Route::get('/', function () {
    return view('accueil');
})->name('accueil');

Route::group(['prefix'=> 'action'],function(){
    Route::get('/salut/{nom?}', function ($nom = null) {
        return view('actions.salut',['nom' => $nom]);
    })->name('salut');
    Route::get('/calin/{nom?}', function ($nom = null) {
        return view('actions.calin',['nom' => $nom]);
    })->name('calin');
    Route::get('/bisous/{nom?}', function ($nom = null) {
        return view('actions.bisous',['nom' => $nom]);
    })->name('bisous');

    Route::post('/', function (\Illuminate\Http\Request $request) {
        if(isset($request['action']) && $request['nom']){
            if(strlen($request['nom']) >0 ){
                return view('actions.nice',['action' => $request['action'],'nom'=>$request['nom']]);
            }
            return redirect()->back();
        }
        return redirect()->back();
    })->name('sympa');

});

