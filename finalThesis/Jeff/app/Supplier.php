<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    protected $table = 'supplier';
    protected $primaryKey = 'supplier_id';
    protected $fillable = ['name', 'address', 'contact_no', 'date_created', 'date_updated'];
}
