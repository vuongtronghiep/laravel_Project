<?php

namespace App\Http\Controllers;
USE Illuminate\Database\Query\Builder;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Model\indexModel;
use App\Model\admin\Product;
use App\Model\admin\category;
use Illuminate\Pagination\LengthAwarePaginator;
use Cart;

class indexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = new indexModel();

        $parent_cate1 = $index->getParentCate();
        $data['parent_cate'] = json_decode(json_encode($parent_cate1), True);
        $cate1 = $index->cate();
        $data['cate'] = json_decode(json_encode($cate1), True);
        $pro = $index->getProductMan();
        $data['productMan'] = json_decode(json_encode($pro), True);
        $pro1 = $index->getProductWomen();
        $data['productWomen'] = json_decode(json_encode($pro1), True);
        $pro2 = $index->getProductBoy();
        $data['productBoy'] = json_decode(json_encode($pro2), True);
        $pro3 = $index->getProductGirl();
        $data['productGirl'] = json_decode(json_encode($pro3), True);
        $sel = $index->bestSeller();
        $data['seller'] = json_decode(json_encode($sel), True);
        $spe = $index->special();
        $data['special'] = json_decode(json_encode($spe), True);
        $new = $index->productNew();
        $data['productNew'] = json_decode(json_encode($new), True);
        $new2 = $index->productNew2();
        $data['productNew2'] = json_decode(json_encode($new2), True);
        return view('index',$data);
    }

    public function getDetail($id){
        $pro = new Product();
        $index = new indexModel();
        $data['detail']= Product::find($id);
        $data['relate'] = $index->related($id);
        return view('product_details',$data);
    }

    public function detailProduct($id){
        $pro = new Product();
        $index = new indexModel();

        $data['product']= product::find($id); 
        $parent_cate1 = $index->getParentCate();
        $data['parent_cate'] = json_decode(json_encode($parent_cate1), True);
        $data['relativeProduct'] = $index->getReativeProduct($id)->get();

        return view('product_details', $data);
    }

    public function detailCategory($id,Request $request) {
        $index = new indexModel();

        $data['t'] = $index->getParentCategory($id);
        $data['catego'] = $index->getTitleCate($id);
        $data['product'] = $index->getProductInCategory($id)->paginate(12);
        $parent_cate1 = $index->getParentCate();
        $data['parent_cate'] = json_decode(json_encode($parent_cate1), True);
        $cate1 = $index->cate();
        $data['cate'] = json_decode(json_encode($cate1), True);

        return view('category_grid', $data);
    }

    public function buyProduct($id) {
        $product = Product::find($id);
        Cart::add(['id'=>$id, 'name'=>$product->product_name, 'qty'=>1, 'price'=>$product->afterSale, 'options'=>['image'=>$product->image] ]);
        $content = Cart::content();

        return redirect()->route('cart');
    }

    public function cart() {
        $index = new indexModel();

        $parent_cate1 = $index->getParentCate();
        $data['parent_cate'] = json_decode(json_encode($parent_cate1), True);
        $content = Cart::content();
        $data['content'] = json_decode(json_encode($content), True);
        $data['total'] = Cart::total();

        return view('cart', $data);
    }

    public function deleteProductCart($id) {
        Cart::remove($id);
        return redirect()->route('cart');
    }

    public function updateProductCart($id, $qty ) {
        Cart::update($id, $qty);
        echo "Thành công";
    }
}
