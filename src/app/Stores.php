<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stores extends Model
{
    //
    public function User(){
        return $this->hasMany('App\User');
    }
}
