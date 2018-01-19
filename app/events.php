<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    public function comments(){
        return $this->hasMany('App\comments', 'article_id');
    }
}
