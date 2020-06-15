<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    //
    public function users(){
        return $this->hasMany('App\Users');
    }
    public function stores(){
        return $this->hasMany('App\Stores');
    }
}
