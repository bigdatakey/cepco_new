<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calc extends Model
{
    protected $fillable = array('device_type', 'manufacturers', 'model', 'type_of_repair', 'price');
}
