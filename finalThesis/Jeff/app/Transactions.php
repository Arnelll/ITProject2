<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    //
    protected $table = 'transactions';
    protected $primaryKey = 'tId';
    protected $fillable = ['client_id', 'product_id', 'quantity', 'service', 'status', 'price'];
}
