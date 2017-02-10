<?php 
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Database\Query\Builder;
class indexModel extends Model{
	public function cate(){
		return DB::table('categories')
				->join('category_parent', 'categories.parent_id', '=', 'category_parent.id_parent')
				->get();
	}

	public function getProductMan(){
		return DB::table('product')
				->join('categories', 'categories.id', '=', 'product.category_id')
				->select('product.id','product_name','category_name','image','image_detail1','image_detail2','detail','price','view','size','sale','afterSale')				
				->orderBy('product.id', 'desc')
				->where('parent_id','=','1')
				->take('4')
				->get();
	}
	public function getProductWomen(){
		return DB::table('product')
				->select('')
				->join('categories', 'categories.id', '=', 'product.category_id')
				->select('product.id','product_name','category_name','image','image_detail1','image_detail2','detail','price','view','size','sale','afterSale')				
				->orderBy('product.id', 'desc')
				->where('parent_id','=','2')
				->take('4')
				->get();
	}
	public function getProductBoy(){
		return DB::table('product')
				->join('categories', 'categories.id', '=', 'product.category_id')
				->select('product.id','product_name','category_name','image','image_detail1','image_detail2','detail','price','view','size','sale','afterSale')				
				->orderBy('product.id', 'desc')
				->where('parent_id','=','3')
				->take('4')
				->get();
	}
	public function getProductGirl(){
		return DB::table('product')
				->join('categories', 'categories.id', '=', 'product.category_id')
				->select('product.id','product_name','category_name','image','image_detail1','image_detail2','detail','price','view','size','sale','afterSale')				
				->orderBy('product.id', 'desc')
				->where('parent_id','=','4')
				->take('4')
				->get();
	}

	public function bestSeller(){
		return DB::table('product')
				->join('categories', 'categories.id', '=', 'product.category_id')
				->where('price','>','170000')
				->get();
	}

	public function special(){
		return DB::table('product')
				->join('categories', 'categories.id', '=', 'product.category_id')
				->where('sale','>','40')
				->get();
	}

	public function productNew(){
		return DB::table('product')
				->join('categories', 'categories.id', '=', 'product.category_id')
				->select('product.id','product_name','category_name','image','image_detail1','image_detail2','detail','price','view','size','sale','afterSale')
				->orderBy('product.id','DESC')
				->take('9')
				->get();
	}

	public function productNew2(){
		return DB::table('product')
				->join('categories', 'categories.id', '=', 'product.category_id')
				->select('product.id','product_name','category_name','image','image_detail1','image_detail2','detail','price','view','size','sale','afterSale')
				->orderBy('product.id','DESC')
				->skip('10')
				->take('9')
				->get();
	}

	public function related($id){
		return DB::table('product')
				->join('categories', 'categories.id', '=', 'product.category_id')
				->select('product.id','product_name','category_name','image','image_detail1','image_detail2','detail','price','view','size','sale','afterSale')
				->orderBy('product.id','DESC')
				->where('product.id','=',$id)
				->take('9')
				->get();
	}


}


?>