<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
        public function events(){
            return $this->belongsTo('App\events', 'id');
    }
        public function User(){
            return $this->belongsTo('App\User', 'id');
        }
}
