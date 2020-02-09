<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobOrderDetails extends Model
{
    //
    protected $table = 'job_order_details';
    protected $primaryKey = 'jodetails_id';
    protected $fillable = ['jo_id','product_id','quantity','discount'];
    public $timestamps = false;
}
