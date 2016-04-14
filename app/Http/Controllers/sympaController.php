<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class sympaController extends Controller
{

    public function recupererActionSympa($action,$nom=null){
        return view('actions.'.$action,['nom'=>$nom]);
    }


    public function posterActionSympa(Request $request)
    {
        $this->validate($request,[
            'action'=>'required',
            'nom'=>'required|alpha'
        ]);
         return view('actions.nice',['action' => $request['action'],'nom'=>$this->transformerNom($request['nom'])]);
    }

    private function transformerNom($nom){
        $prefix ='Le ROI ';
        return $prefix . strtoupper($nom);
    }
}
