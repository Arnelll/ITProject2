<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    protected $table = 'supplier';
    protected $fillable = ['name', 'address', 'contact'];
    protected $primaryKey = 'supplier_id';
    public $timestamps = false;
}
