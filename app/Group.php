<?php

namespace PhotoModels;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
    public function user(){
        return $this->hasMany('App\User','id');
    }
}
