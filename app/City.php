<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //Table Name
    protected $table = 'cities';

    //Primary Key
    public $primaryKey = 'city_id';
}
