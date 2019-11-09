<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model {

    protected $table = 'mechanics';
    protected $fillable = ['first_name', 'last_name', 'middle_name', 'address', 'contact_number'];
    protected $primaryKey = 'mechanic_id';

}