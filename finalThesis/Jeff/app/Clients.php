<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    public function getFullNameAttribute($value)
    {
       return ucfirst($this->firstname) . ' ' . ucfirst($this->lastname);
    }
    //
    protected $table = 'clients';
    protected $primaryKey = 'client_id';
    protected $fillable = ['firstname', 'lastname', 'contact_no','address','email'];
}
