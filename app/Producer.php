<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producer extends Model
{
	public $timestamps = false;
     public function product()
    {
        return $this->hasMany('App\product');
    }
}
