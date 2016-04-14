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



//As of 5.2, routes.php is by default already called in the context of a ['middleware'=>'web'] by RouteServiceProvider.
// But in routes.php default generation of auth routes, the Route::group call is still happening by default - so if you delete that Route::group
// declaration from routes.php the application then correctly shows errors.



Route::get('/', function () {
        return view('accueil');
    })->name('accueil');

    Route::group(['prefix'=> 'action'],function(){
        Route::get('/{action}/{nom?}',[
            'uses' =>'sympaController@recupererActionSympa',
            'as' => 'actionSympa'
        ]);

        Route::post('/',[
            'uses'=>'sympaController@posterActionSympa',
            'as' => 'sympa'

        ]);

    });
