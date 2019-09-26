<?php

namespace Jeff;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $table = 'clients';
    protected $fillable = ['contact_no', 'firstname', 'lastname', 'email', 'age'];
    protected $primaryKey = 'client_id';
}
