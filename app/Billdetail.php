<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class billdetail extends Model
{
	public $timestamps = false;
     public function product()
    {
        return $this->hasOne('App\product');
    }
     public function bill()
    {
        return $this->belongsTo('App\bill');
    }
}
