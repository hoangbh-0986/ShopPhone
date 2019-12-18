<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primarykey = 'Product_id';

    public function producer()
    {
    	return $this->belongsTo('App\Producer');
    }

    public function producttype()
    {
    	return $this->belongTo('App\ProductType');
    }
    public function billdetail()
    {
    	return $this->hasOne('App\BillDetail');
    }
}
