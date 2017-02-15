<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use DB;
use App\Model\admin\category;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
class TheLoaiController extends Controller
{

    //list
    public function getList(){
        if (Auth::check())
        {
            $category = new Category();
            $data['cate'] = $category->getList()->paginate(10);
            $data['countcate'] = $category->countCate();
            $data['countpro'] = $category->countPro();
        	return view('admin.theloai.danhsachtheloai',$data);
        }else{
            return redirect()->route('admin.get');
        }
    }

    //search
    public function search(Request $request){
        if (Auth::check())
        {
            $cate =new Category();
            $name = $request['name'];
            $data['list1'] = $cate->search($name)->paginate(10);
            /*var_dump($data);exit();
            $data['list1'] = json_decode(json_encode($result), True);*/
            $data['countcate'] = $cate->countCate();
            $data['countpro'] = $cate->countPro();
            return view('admin.theloai.timkiem', $data);
        }else{
            return redirect()->route('admin.get');
        }
    }

    //add
    public function getAdd(){
        if (Auth::check())
        {
             $cate = new Category();
             $parent = $cate->getParent();
             $data['list1'] = json_decode(json_encode($parent), True);
             $data['countcate'] = $cate->countCate();
             $data['countpro'] = $cate->countPro();
        	return view('admin.theloai.themtheloai',$data);
        }else{
            return redirect()->route('admin.get');
        }
    }

	public function postAdd(CategoryRequest $request){
        if (Auth::check())
        {
    	    $cate = new Category();
    	    $cate->category_name = $request['name'];
    	    $cate->alias = $request['alias'];
    	    $cate->parent_id = $request['theloaicha'];

    	    $cate->save();
    	    return redirect()->route('admin.category.list')->with(['flash_message'=>'Thêm mới thành công!']);
        }else{
            return redirect()->route('admin.get');
        }

    }

    public function getEdit($id){
        if (Auth::check())
        {
        	 $cate = new Category();
        	 $parent = $cate->getParent();
             $data['list1'] = json_decode(json_encode($parent), True);
        	 $data['idcate'] = Category::findOrFail($id)->toArray();
             $data['countcate'] = $cate->countCate();
             $data['countpro'] = $cate->countPro();
        	return view('admin.theloai.suatheloai',$data);
        }else{
            return redirect()->route('admin.get');
        }
    }

    public function postEdit($id, Request $request){
        if (Auth::check())
        {
        	$cate = new Category();
    	    Category::find($id);
    	    $data = array(
    	    	'category_name' => $request['name'],
    	    	'alias' => $request['alias'],
    	    	'parent_id' => $request['theloaicha']
    	    	);
    		$cate->capnhat($id,$data);
    		return redirect()->route('admin.category.list')->with(['flash_message'=>'Sửa thành công!']);
	    }else{
            return redirect()->route('admin.get');
        }
    }


    public function delete($id){
        if (Auth::check())
        {
        	$cate = new Category();
        	Category::find($id)->delete();
        	return redirect()->route('admin.category.list')->with(['flash_message'=>'xóa thành công!']);
        }else{
            return redirect()->route('admin.get');
        }
    }

    
}
