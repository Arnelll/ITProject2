<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdCheckout extends Model 
{
    protected $table = 'transaction2';
    protected $fillable = ['product_name','quantity'];
    protected $primaryKey = 'transaction2_id';
}