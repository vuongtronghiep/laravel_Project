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
				->get();
	}
	public function getProductWomen(){
		return DB::table('product')
				->join('categories', 'categories.id', '=', 'product.category_id')
				->select('product.id','product_name','category_name','image','image_detail1','image_detail2','detail','price','view','size','sale','afterSale')				
				->orderBy('product.id', 'desc')
				->where('parent_id','=','2')
				->orwhere('product.category_id','=','2')
				->get();
	}
	public function getProductBoy(){
		return DB::table('product')
				->join('categories', 'categories.id', '=', 'product.category_id')
				->select('product.id','product_name','category_name','image','image_detail1','image_detail2','detail','price','view','size','sale','afterSale')				
				->orderBy('product.id', 'desc')
				->where('parent_id','=','3')
				->get();
	}
	public function getProductGirl(){
		return DB::table('product')
				->join('categories', 'categories.id', '=', 'product.category_id')
				->select('product.id','product_name','category_name','image','image_detail1','image_detail2','detail','price','view','size','sale','afterSale')				
				->orderBy('product.id', 'desc')
				->where('parent_id','=','4')
				->orwhere('product.category_id','=','4')
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

	public function getParentCate(){
		return DB::table('categories')
					->get();
	}

	public function getProductInCategory ($id) {
		return DB::table('product')
				->join('categories', 'categories.id', '=', 'product.category_id')
				->select('product.id','product_name','category_name','image','image_detail1','image_detail2','detail','price','view','size','sale','afterSale')
				->orderBy('product.id','DESC')
				->where('categories.parent_id','=', $id)
				->orwhere('product.category_id','=', $id);
	}

	public function getTitleCate ($id) {
		return DB::table('categories')
			   ->where ('id', '=', $id)
			   ->get();
	}

	public function getParentCategory ($id) {
		return DB::table('categories')
			   ->whereIn('id', function($query) use ($id){
			   		$query->select('parent_id')
			   			  ->from('categories')
			   			  ->where('id', '=', $id)
			   			  ->get();
			   			  
			   })
			   ->get();
	}

	public function getReativeProduct ($id) {
		return DB::table('product')
				->join('categories', 'categories.id', '=', 'product.category_id')
				->select('product.id','product_name','category_name','image','image_detail1','image_detail2','detail','price','view','size','sale','afterSale','category_id','categories.parent_id')
				->whereIn('category_id', function($query) use ($id){
			   		$query->select('categories.id')
			   			  ->from('categories')
			   			  ->where('id', function($query1) use ($id){
			   			 		$query1->select('category_id')
			   			 			   ->from('product')
			   			 			   ->join('categories', 'categories.id', '=', 'product.category_id')
			   			 			   ->where('product.id', '=', $id);
			   			  });
			   			  
			   });
	}

}

?>