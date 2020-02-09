<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaleDetails extends Model
{
    //
    protected $table = 'sales_details';
    protected $primaryKey = 'sales_details_id';
    protected $fillable = ['discount','product_id', 'sales_id', 'quantity'];
    public $timestamps = false;
}
