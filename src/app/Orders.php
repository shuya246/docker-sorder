<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //
    public function User(){
        return $this->belongsTo('App\User');
    }
    public function Recievers(){
        return $this->hasMany('App\Recievers');
    }
}
