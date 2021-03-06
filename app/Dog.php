<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
  public function owner()
  {
    return $this->belongsTo('App\Owner');
  }

  public function vet()
  {
    return $this->belongsTo('App\Vet');
  }
}
