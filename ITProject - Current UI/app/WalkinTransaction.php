<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WalkinTransaction extends Model {

    protected $table = 'walk_in_transactions';
    protected $fillable = ['receipt_number', 'client_id', 'handler_id', 'product_code'];
    protected $primaryKey = 'walkin_id';

}