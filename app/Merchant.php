<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    //Table Name
    protected $table = 'merchants';

    //Primary Key
    public $primaryKey = 'merchant_id';
}
