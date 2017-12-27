<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reading extends Model
{
    protected $fillable = [
    	'device_key','temperature' , 'humidity',
    ];
}
