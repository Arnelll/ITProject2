<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    //
    protected $table = 'purchase_order';
    protected $fillable = ['recipient', 'supplier_id', 'order_type', 'to_address', 'status','product_id','total'];
    protected $primaryKey = 'po_id';
    public $timestamps = false;
}
