<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    //
    protected $table = 'provider';
    protected $fillable = ['name'];
    protected $primaryKey = 'provider_id';
    public $timestamps = false;
}
