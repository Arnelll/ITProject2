<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobOrder extends Model
{
    //
    protected $table = 'job_order';
    protected $primaryKey = 'jo_id';
    protected $fillable = ['client_id','mechanic_id','vehicle_id','status','remarks','total','date_created'];
    public $timestamps = false;
}
