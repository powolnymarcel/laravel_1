<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\ActionsSympas;
use App\ActionsSympaLog;

class sympaController extends Controller
{

    public  function recupAccueil(){

        $actions=ActionsSympas::all();
        $actions_loggee=ActionsSympaLog::all();
        return view('accueil',['actions'=>$actions,'actions_loggee'=>$actions_loggee]);
    }










    public function recupererActionSympa($action,$nom=null){
        if($nom ===null){
            $nom='toi';
        }

        $action_sympa=ActionsSympas::where('nom',$action)->first();
        $action_sympa_log=new ActionsSympaLog();
        $action_sympa->actions_logee()->save($action_sympa_log);

        return view('actions.nice',['action'=>$action,'nom'=>$nom]);
    }


    public function posterAjouterAction(Request $request)
    {
        $this->validate($request,[
            'nom'=>'required|alpha|unique:actions_sympas',
            'preference'=>'required|numeric'
        ]);
        $action = new ActionsSympas();
        $action->nom=ucfirst( strtolower( $request['nom']));
        $action->preference=$request['preference'];
        $action->save();

        $actions=ActionsSympa::all();

        return redirect()->route('accueil',['actions'=>$actions]);
    }

    private function transformerNom($nom){
        $prefix ='Le ROI ';
        return $prefix . strtoupper($nom);
    }
}
