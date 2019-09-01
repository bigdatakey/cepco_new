<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    protected $fillable = array('type_of_repair', 'declension', 'device_type');
}
