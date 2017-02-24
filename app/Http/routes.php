<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Illuminate\Http\Request;
// thể loại
//add
Route::group(['namespace' => 'admin', 'prefix' => 'admin'], function()
{    
    Route::get('dangnhap', ['as' =>'admin.get','uses'=>'dangNhapController@get']);
    Route::post('dangnhap', ['as' =>'admin.postLogin','uses'=>'dangNhapController@postLogin']);
    Route::group(['prefix' => 'category'], function(){
    	Route::get('add', ['as' =>'admin.category.getAdd','uses'=>'TheLoaiController@getAdd']);
    	Route::post('add', ['as' =>'admin.category.postAdd','uses'=>'TheLoaiController@postAdd']);
    	Route::get('list', ['as' =>'admin.category.list','uses'=>'TheLoaiController@getList']);
    	Route::get('edit/{id}', ['as' =>'admin.category.getEdit','uses'=>'TheLoaiController@getEdit']);
    	Route::post('edit/{id}', ['as' =>'admin.category.postEdit','uses'=>'TheLoaiController@postEdit']);
    	Route::get('delete/{id}', ['as' =>'admin.category.delete','uses'=>'TheLoaiController@delete']);
    	Route::get('search', ['as' =>'admin.category.search','uses'=>'TheLoaiController@search']);
    });
    Route::group(['prefix' => 'product'], function(){
    	Route::get('add', ['as' =>'admin.product.getAdd','uses'=>'SanPhamController@getAdd']);
    	Route::post('add', ['as' =>'admin.product.postAdd','uses'=>'SanPhamController@postAdd']);
    	Route::get('list', ['as' =>'admin.product.list','uses'=>'SanPhamController@getList']);
    	Route::get('edit/{id}', ['as' =>'admin.product.getEdit','uses'=>'SanPhamController@getEdit']);
    	Route::post('edit/{id}', ['as' =>'admin.product.postEdit','uses'=>'SanPhamController@postEdit']);
    	Route::get('delete/{id}', ['as' =>'admin.product.delete','uses'=>'SanPhamController@delete']);
    	Route::get('search', ['as' =>'admin.product.search','uses'=>'SanPhamController@search']);
    });
    Route::group(['prefix' => 'home'], function(){
        Route::get('dashbroad', ['as' =>'admin.home.get','uses'=>'dasbroadController@get']);
        Route::get('logout', ['as' =>'admin.home.getLogOut','uses'=>'dasbroadController@getLogOut']);

    });
    
});

Route::get('/', ['as' =>'index','uses'=>'indexController@index']);
Route::auth();
Route::get('detail/{id}',['as' => 'detail','uses'=>'indexController@getDetail']);
Route::get('view/{id}',['as' => 'quickview','uses'=>'indexController@quickview']);
Route::get('the-loai/{id}/{alias}',['as' => 'category.view','uses'=>'indexController@detailCategory']);
Route::get('chi-tiet/{id}/{alias}',['as' => 'detail.view','uses'=>'indexController@detailProduct']);
Route::get('mua-hang/{id}/{alias}',['as' => 'buy.product','uses'=>'indexController@buyProduct']);
Route::get('gio-hang',['as' => 'cart','uses'=>'indexController@cart']);
Route::get('xoa-san-pham/{id}',['as' => 'delete.product.cart','uses'=>'indexController@deleteProductCart']);
Route::get('cap-nhat/{id}/{qty}',['as' => 'update.product.cart','uses'=>'indexController@updateProductCart']);


