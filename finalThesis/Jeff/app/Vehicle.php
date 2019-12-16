<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //
    protected $table = 'vehicle';
    protected $primaryKey = 'vehicle_id';
    protected $fillable = ['client_id', 'plate_no', 'type', 'model', 'color', 'description'];
}
