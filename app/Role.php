<?php

namespace GPOVALLAS;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users(){
        return $this->belongsToMany('GPOVALLAS\User');
    }
}
