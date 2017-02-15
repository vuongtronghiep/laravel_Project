<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;
use DB;

class Product extends Model
{
    //
    protected $table = 'product';
    protected $fillable = ['product_name','category_id','image','image_detail1','image_detail2','price','view','detail','size','category_name','sale','afterSale','parent_id'];
    public $timestamps = false;

    public function Category(){
    	return $this->belongTo('App\Model\admin\Category');
    }

    public function getCategory(){
    	return DB::table('categories')
    			->orderBy('category_name','ASC')
    			->get();
    }
    public function getList(){
     	return DB::table('product')
                ->select('product.id','product_name','category_name','image','image_detail1','image_detail2','price','view','size','sale','afterSale')
                ->join('categories', 'categories.id', '=', 'product.category_id') 
                ->orderBy('product.id', 'desc');
    }

    public function getNameCate($id){
        return DB::table('product')
                ->join('categories', 'categories.id', '=', 'product.category_id')
                ->select('product.id','product_name','category_name','image','image_detail1','image_detail2','detail','price','view','size','sale','afterSale')
                ->where('product.id','=',$id)
                ->get(); 
    }
    public function countCate(){
        return DB::table('categories')
                ->count('id');
    }
    public function countPro(){
        return DB::table('product')
                ->count('id');
    }

    public function search($name){
        return DB::table('product')
                ->join('categories', 'categories.id', '=', 'product.category_id')
                ->where('product_name','like', '%'. $name .'%')
                ->orwhere('category_name','like', '%'. $name .'%')
                ->orderBy('product.id', 'desc');
    }
}
