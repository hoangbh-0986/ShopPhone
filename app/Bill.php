<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
		public $timestamps = false;
     public function customer()
    {
        return $this->belongsTo('App\customer');
    }
    public function billdetail()
    {
        return $this->hasMany('App\billdetail');
    }
}
