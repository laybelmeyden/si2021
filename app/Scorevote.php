<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scorevote extends Model
{
    public function votealls()
    {
        return $this->hasMany('App\Voteall');
    }
}
