<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use DB;
use App\Model\admin\product;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class SanPhamController extends Controller
{

    //list
    public function getList(){
        if (Auth::check())
        {
            $product = new Product();
            $data['pro'] = $product->getList()->paginate(7);
            $data['countcate'] = $product->countCate();
            $data['countpro'] = $product->countPro();
        	return view('admin.sanpham.danhsachsanpham',$data);
        }else{
            return redirect()->route('admin.get');
        }
    }

    //add
    public function getAdd(){
        if (Auth::check())
        {
            $pro = new Product();
            $pro1 = $pro->getCategory();
            $data['category'] = json_decode(json_encode($pro1), True);
            $data['countcate'] = $pro->countCate();
            $data['countpro'] = $pro->countPro();

        	return view('admin.sanpham.themsanpham',$data);
        }else{
            return redirect()->route('admin.get');
        }
    }

	public function postAdd(ProductRequest $request){
        if (Auth::check())
        {
            $sale = $request['gia'] - ($request['gia'] * ($request['sale'] / 100));
    	    $pro = new Product();
            $image          = $request->file('anhbia')->getClientOriginalName();
            $image_detail1  = $request->file('anhchitiet1')->getClientOriginalName();
            $image_detail2  = $request->file('anhchitiet2')->getClientOriginalName();
    	    $pro->product_name  = $request['ten'];
            $pro->category_id   = $request['theloai'];
    	    $pro->image         = $image;
    	    $pro->image_detail1 = $image_detail1;
            $pro->image_detail2 = $image_detail2;
            $pro->price         = $request['gia'];
            $pro->size          = $request['size'];
            $pro->sale          = $request['sale'];
            $pro->afterSale     = $sale;   
            $pro->detail        = $request['mota'];

            $request->file('anhbia')->move('resources/upload/',$image);
            $request->file('anhchitiet1')->move('resources/upload/',$image_detail1);
            $request->file('anhchitiet2')->move('resources/upload/',$image_detail2);

    	    $pro->save();
    	    return redirect()->route('admin.product.list')->with(['flash_message'=>'Thêm mới thành công!']);
        }else{
            return redirect()->route('admin.get');
        }
    }

    public function getEdit($id){
        if (Auth::check())
        {
        	 $pro = new Product();
        	 $cate = $pro->getCategory();
             $data['category'] = json_decode(json_encode($cate), True);
        	 $idproduct = $pro->getNameCate($id);
             $data['idpro'] = json_decode(json_encode($idproduct), True);
             $data['countcate'] = $pro->countCate();
             $data['countpro'] = $pro->countPro();
        	 return view('admin.sanpham.suasanpham',$data);
        }else{
            return redirect()->route('admin.get');
        }     
    }

    public function postEdit($id, Request $request){
        if (Auth::check())
        {
             $pro = Product::find($id);
            //ảnh bìa
            if($request->hasFile('anhbia')){
               $image  = $request->file('anhbia')->getClientOriginalName();
               $request->file('anhbia')->move('resources/upload/',$image);
               $pro->image         = $image;
               $old = 'resources/upload/'.$request->input('anhbia_old');
                    File::delete($old);
            }else{
                echo $image1  =  $request->input('anhbia_old');
                $pro->image         = $image1;
            }

            //chi tiết 1
            if($request->hasFile('anhchitiet1')){
                $image  = $request->file('anhchitiet1')->getClientOriginalName();
                $request->file('anhchitiet1')->move('resources/upload/',$image);
                $pro->image_detail1         = $image;
                $chitiet1_old = 'resources/upload/'.$request->input('anhchitiet1_old');
                    File::delete($chitiet1_old);
            }else{
                $image1  = $request->input('anhchitiet1_old');
                $pro->image_detail1         = $image1;
            }

             //chi tiết 2
            if($request->hasFile('anhchitiet2')){
                $image  = $request->file('anhchitiet2')->getClientOriginalName();
                $request->file('anhchitiet2')->move('resources/upload/',$image);
                $pro->image_detail2         = $image;
                $chitiet2_old = 'resources/upload/'.$request->input('anhchitiet2_old');
                    File::delete($chitiet2_old);
            }else{
                $image1  = $request->input('anhchitiet2_old');
                $pro->image_detail2         = $image1;
            }
            $sale = $request['gia'] - ($request['gia'] * ($request['sale'] / 100));
            $pro->product_name  = $request['ten'];
            $pro->category_id   = $request['theloai'];
            $pro->price         = $request['gia'];
            $pro->size          = $request['size'];
            $pro->sale          = $request['sale'];
            $pro->afterSale     = $sale;
            $pro->detail        = $request['mota'];
    		$pro->save();
    		return redirect()->route('admin.product.list')->with(['flash_message'=>'Sửa thành công!']);
        }else{
            return redirect()->route('admin.get');
        } 	    
    }


    public function delete($id){
        if (Auth::check())
        {
        	$product = Product::find($id);
            File::delete('resources/upload/'.$product->image);
            File::delete('resources/upload/'.$product->image_detail2);
            File::delete('resources/upload/'.$product->image_detail2);
            $product->delete($id);
            return redirect()->route('admin.product.list')->with(['flash_message'=>'xóa thành công!']);
        }else{
            return redirect()->route('admin.get');
        } 
    }

    public function search(Request $request){
        if (Auth::check())
        {
            $pro1 =new Product();
            $name = $request['name'];
            $data['pro']  = $pro1->search($name)->get();
            //$data['pro'] = json_decode(json_encode($result), True);
            $data['countcate'] = $pro1->countCate();
            $data['countpro'] = $pro1->countPro();
            return view('admin.sanpham.timkiem',$data);
        }else{
            return redirect()->route('admin.get');
        } 
    }
}
