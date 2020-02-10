<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    //
    protected $table = 'delivery';
    protected $primaryKey = 'delivery_id';
    protected $fillable = ['product_id','quantity','delivery_date','supplier_id'];
    public $timestamps = false;
}
