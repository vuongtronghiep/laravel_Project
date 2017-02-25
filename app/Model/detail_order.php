<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Detail_order extends Model
{

    protected $table = 'detail_order';
    protected $fillable = ['id_order','id_product','tongtien','tinhtrang','ngay_duyet'];
    public $timestamps = false;

    public function insertDetailOrder ($data){
    	DB::table('detail_order')->insert($data);
    }

}
