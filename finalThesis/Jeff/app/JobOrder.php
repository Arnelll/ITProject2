<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobOrder extends Model
{
    //
    protected $table = 'job_order';
    protected $primaryKey = 'jo_id';
    protected $fillable = ['client_id','quantity','total','status','date_created'];
}
