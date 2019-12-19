<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
	public $timestamps = false;
     public function product()
    {
        return $this->hasMany('App\product');
    }
}
