<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActionsSympas extends Model
{
    public function actions_logee(){
        return $this->hasMany('App\ActionsSympaLog');
    }
}
