<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
      protected $primaryKey = 'ProductType-id';
      public function product()
      {
      	return this->hasMany('App\Product');
      }
}
