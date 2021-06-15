<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    public function dog()
    {
        return $this-> hasMany('App\Dog');
      }
}
