<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    //
    protected $table = 'sales';
    protected $primaryKey = 'sales_id';
    protected $fillable = ['client','discount', 'total', 'date_created'];
    public $timestamps = false;
}
