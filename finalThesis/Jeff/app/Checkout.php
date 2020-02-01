<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    //
    protected $table = 'checkout';
    protected $primaryKey = 'co_id';
    protected $fillable = ['jo_id', 'product_id', 'quantity', 'discount', 'total'];
}
