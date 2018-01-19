<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class masters extends Model
{
    public function User(){
        return $this->belongsTo('App\User', 'id');
    }
}
