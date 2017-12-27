<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable=[
    	'user_id','device_key','device_name','device_type',
    ];
}
