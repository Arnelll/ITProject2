<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryDetail extends Model
{
    //
    protected $table = 'delivery_details';
    protected $primaryKey = 'delivery_details_id';
    protected $fillable = ['product_id','quantity','delivery_id','supplier_id'];
    public $timestamps = false;
}
