<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
  public function boutique(){
    return $this->hasMany('App\Boutique');
  }
}
