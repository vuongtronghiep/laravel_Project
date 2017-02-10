<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\User;
use Illuminate\Support\Facades\Auth;

class dangNhapController extends Controller
{
    public function get(){       
        return view('admin.login');
    }

    public function postLogin(Request $request){

    	if (Auth::attempt(['name' => $request->user,'password' => $request->password])) {
            return redirect()->route('admin.home.get');
        }else{
        		echo "Sai tên đăng nhập hoặc mật khẩu";
        	}
    }   
}
