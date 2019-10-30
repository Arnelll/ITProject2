<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jo extends Model
{
    protected $table = 'job_order';
    protected $fillable = ['services'];
    protected $primaryKey = 'jo_id';
    //public $timestamps = false;
}
