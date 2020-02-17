<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    public function getFullNameAttribute($value)
    {
       return ucfirst($this->first_name) . ' ' . ucfirst($this->last_name);
    }
    //
    protected $table = 'mechanic';
    protected $primaryKey = 'mechanic_id';
    protected $fillable = ['first_name', 'last_name', 'contact_no', 'address', 'status'];
}
