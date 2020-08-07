<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedore extends Model
{
    public function supermercados(){
    	return $this->belongsToMany('App\Supermercado');
    }
}
