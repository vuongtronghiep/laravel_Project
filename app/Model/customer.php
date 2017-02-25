<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Customer extends Model
{

    protected $table = 'customer';
    protected $fillable = ['name','address','phone','email'];
    public $timestamps = false;

}
