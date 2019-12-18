<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $primarykey = 'Customer_id';

   public function bill()
   {
   	return $this->hasMany('App\Bill');
   }
}
