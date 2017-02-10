<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;
use DB;

class parent1 extends Model
{
    //
    protected $table = "category_parent";
    protected $fillable = ['parent_name'];
    public $timestamps = false;

    public function category(){
    	return $this->hasMany('App\Model\admin\category');
    }
}
