<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    //
    protected $table = 'provider';
    protected $fillable = ['name'];
    public $timestamps = false;
}