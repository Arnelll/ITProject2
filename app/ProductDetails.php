<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetails extends Model
{
    //
    protected $table = 'product_details';
    protected $primaryKey = 'product_id';
    protected $fillable = ['product_id', 'category', 'brand','provider'];
}
