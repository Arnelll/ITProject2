<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetails extends Model
{
    //
    protected $table = 'product_details';
    protected $fillable = ['price', 'quantity'];
    protected $primaryKey = 'product_id';
    public $timestamps = false;
}
