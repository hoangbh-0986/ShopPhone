<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class customer extends Authenticatable
{
	public $timestamps = false;
    public function bill()
    {
        return $this->hasMany('App\bill');
    }
}
