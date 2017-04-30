<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //
  public $timestamps = false;

  public function samples()
  {
    return $this->hasMany('App\WorkSample');
  }
}
