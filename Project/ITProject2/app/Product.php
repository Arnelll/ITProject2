<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['product_name', 'quantity'];
    protected $primaryKey = 'product_id';
    public $timestamps = false;
}
