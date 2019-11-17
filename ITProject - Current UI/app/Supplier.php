<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model {

    protected $table = 'suppliers';
    protected $fillable = ['name', 'address', 'contact_first_name', 'contact_last_name', 'contact_number', 'email'];
    protected $primaryKey = 'supplier_id';

}