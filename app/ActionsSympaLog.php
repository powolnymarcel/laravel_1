<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActionsSympaLog extends Model
{
   public function actions_sympas(){
       return $this->belongsTo('App\ActionsSympas');
   }
}
