<?php

namespace App\Model\admin;
use Illuminate\Database\Eloquent\Model;
use DB;
class Category extends Model
{
    //
    protected $table = "categories";
    protected $fillable = ['category_name','alias','parent_id'];
    public $timestamps = true;

    public function Product(){
    	return $this->hasMany('App\Model\admin\Product');
    }

    public function parent1(){
    	return $this->belongTo('App\Model\admin\parent1','foreign_key');
    }

    public function getParent(){
        return DB::table('category_parent')->get();
    }

    public function getList(){
        return DB::table('categories')
                ->join('category_parent', 'categories.parent_id', '=', 'category_parent.id_parent') 
                ->orderBy('id', 'desc');
    }

    public function countCate(){
        return DB::table('categories')
                ->count('id');
    }
    public function countPro(){
        return DB::table('product')
                ->count('id');
    }

    public function capnhat($id, $data){
        DB::table('categories')
            ->where('id',$id)
            ->update($data);
    }
    
    public function search($name){
        return DB::table('categories')
                ->join('category_parent', 'categories.parent_id', '=', 'category_parent.id_parent')
                ->where('category_name','like', '%'. $name .'%')
                ->orwhere('parent_name','like', '%'. $name .'%')
                ->orderBy('id', 'desc');
    }
   
}
