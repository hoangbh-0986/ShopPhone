<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $priamrykey = 'Customer_id';
    
    public function billdetail()
    {
    	return $this->hasMany('App\BillDetail');
    }

    public function customer()
    {
    	return $this->belongsTo('App\Customer');
    }
}
