<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    //
    protected $table = 'clients';
    protected $primaryKey = 'client_id';
    protected $fillable = ['firstname', 'lastname', 'contact_no','age','email'];
}
