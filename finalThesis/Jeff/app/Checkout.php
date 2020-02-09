<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    //
    protected $table = 'product_checkout';
    protected $primaryKey = 'product_checkout_id';
    protected $fillable = ['jo_id', 'total', 'date_created'];
    public $timestamps = false;
}
