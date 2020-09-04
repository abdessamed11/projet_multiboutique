<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boutique extends Model
{
    //
    public function user(){
        return $this->belongsTo('App\User');
    }

    //
    public function ville(){
        return $this->belongsTo('App\Ville','id_ville','id');
    }

    //
    public function categorie_boutique(){
        return $this->belongsTo('App\Categorie_boutique','id_categorie_boutique','id');
    }

    public function produit(){
      return $this->hasMany('App\Produit');
    }

}
