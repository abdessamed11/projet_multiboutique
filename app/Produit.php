<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
  public function boutique(){
    return $this->hasMany('App\Boutique');
  }
  public function boutiques(){
      return $this->belongsTo('App\Boutique','id_boutique','id');
  }
}
