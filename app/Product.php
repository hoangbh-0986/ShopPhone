<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{

    public $timestamps = false;
     public function producer()
    {
        return $this->belongsTo('App\producer');
    }
     public function category()
    {
        return $this->belongsTo('App\category');
    }
     public function billdetail()
    {
        return $this->belongsTo('App\billdetail');
    }
}
