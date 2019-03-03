<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $table = 'clients';
    protected $fillable = ['contact_no', 'firstname', 'lastname'];
    protected $primaryKey = 'client_id';
}
