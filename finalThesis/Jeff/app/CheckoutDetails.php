<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckoutDetails extends Model
{
    //
    protected $table = 'productcheckout_details';
    protected $primaryKey = 'productcheckout_details_id';
    protected $fillable = ['productcheckout_id', 'product_id', 'quantity'];
}
