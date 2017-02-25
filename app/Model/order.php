<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Order extends Model
{

    protected $table = 'order';
    protected $fillable = ['id_khachhang','ngay_order','tongtien','tinhtrang','ngay_duyet'];
    public $timestamps = false;

}
