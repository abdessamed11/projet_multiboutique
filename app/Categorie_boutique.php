<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie_boutique extends Model
{
  public function boutique(){
    return $this->hasMany('App\Boutique');
  }
}
