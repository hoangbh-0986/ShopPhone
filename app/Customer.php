<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
	public $timestamps = false;
    public function bill()
    {
        return $this->hasMany('App\bill');
    }
}