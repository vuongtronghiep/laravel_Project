<?php
namespace App\Http\Controllers\admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Model\admin\Product;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class dasbroadController extends Controller
{	

    public function get(){
    	if (Auth::check())
	    {
	        $product = new Product();
	        $data['countcate'] = $product->countCate();
	        $data['countpro'] = $product->countPro();
	        return view('admin.dasbroad',$data);
	    }else{
	    	return redirect()->route('admin.get');
	    }
    }

    public function getLogOut(){
    	Auth::logout();
    	return redirect()->route('admin.get');
    }   
}
