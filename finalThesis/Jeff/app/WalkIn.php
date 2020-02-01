<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WalkIn extends Model
{
    //
    protected $table = 'transaction_walkin';
    protected $primaryKey = 'twId';
    protected $fillable = ['client_id','product_id','quantity','discount','total'];
}
