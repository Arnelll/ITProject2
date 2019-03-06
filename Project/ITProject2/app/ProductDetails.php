<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetails extends Model
{
    //
    protected $table = 'product_details';
    protected $fillable = ['category', 'brand','product_id','provider_id'];
    public $timestamps = false;
}
