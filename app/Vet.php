<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vet extends Model
{
  public function dog()
  {
    return $this ->hasMany('App\Dog');
  }
}
