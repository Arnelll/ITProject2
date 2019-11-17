<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $table = 'products';
    protected $fillable = ['product_code', 'name', 'brand', 'category', 'supplier', 'price', 'quantity_in_stock', 'status'];
    protected $primaryKey = 'product_id';

}