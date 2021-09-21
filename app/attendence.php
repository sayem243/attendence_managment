<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attendence extends Model
{

    public function student(){

        return $this->belongsTo('App\students');
    }
}
