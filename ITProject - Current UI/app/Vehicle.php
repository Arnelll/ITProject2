<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model {

    protected $table = 'vehicles';
    protected $fillable = ['plate_number', 'type', 'description', 'client_id'];
    protected $primaryKey = 'vehicle_id';

}