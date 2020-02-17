<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    protected $primaryKey = 'product_id';
    protected $fillable = ['product_name', 'quantity', 'retail_price', 'wholesale_price', 'distributor_price', 'product_name', 'supplier_id', 'status'];
    public $timestamps = false;
}
