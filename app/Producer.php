<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
     protected $primaryKey = 'Producer_id';
    public  function product()
    {
    	return $this->hasMany('App\Product');
    }
}
