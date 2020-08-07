<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supermercado extends Model
{
    public function proveedores(){
    	return $this->belongsToMany('App\Proveedore');
    }
}
