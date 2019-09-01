<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = array('device_type', 'declension', 'model', 'manufacturer');
}
