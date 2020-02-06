<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactions2 extends Model
{
    //
    protected $table = 'transaction2';
    protected $primaryKey = 'transaction2_id';
    protected $fillable = ['transaction_type', 'client_id', 'vehicle_id', 'mechanic_id', 'service_id', 'quantity', 'Total', 'Status'];
}
