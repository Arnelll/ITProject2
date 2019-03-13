<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    //
    protected $table='transactions';
    protected $fillable=['client_id','product_id','quantity','status'];
    protected $primaryKey='tId';
    public $timestamps=false;
}
