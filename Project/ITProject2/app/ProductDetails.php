<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetails extends Model
{
    //
    protected $table = 'product_details';
    protected $fillable = ['product_id', 'category', 'brand', 'provider_id'];
    protected $primaryKey = 'product_id';
    public $timestamps = false;
}
