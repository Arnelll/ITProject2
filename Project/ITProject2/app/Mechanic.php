<?php

namespace Jeff;

use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    protected $table = 'mechanics';
    protected $fillable = ['name', 'contact', 'specialty'];
    protected $primaryKey = 'id';
    public $timestamps = false;
}
