<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductHistory extends Model
{
    //
    protected $table = 'product_details';
    protected $fillable = ['product_id', 'orig_price', 'new_price','type','date_updated'];
    public $timestamp = false;
}
