<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class WorkSample extends Model
{
    //
  public $timestamps = false;

  public function skill()
  {
    return $this->belongsTo('App\Skill');
  }
}
