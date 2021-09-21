<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class students extends Model
{

    public function attendence(){

        return $this->hasMany('App\attendence');

    }

}
