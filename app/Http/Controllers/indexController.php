<?php

namespace App\Http\Controllers;
USE Illuminate\Database\Query\Builder;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Model\indexModel;
use App\Model\admin\Product;
use App\Model\admin\category;
use App\Model\customer;
use App\Model\order;
use App\Model\detail_order;
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
        $content = Cart::content();
        $data['content'] = json_decode(json_encode($content), True);
        $data['total'] = Cart::total();

        return view('index',$data);
    }

    /*xem nhanh*/
    public function quickview($id){
        $pro = new Product();
        $index = new indexModel();

        $data['product']= product::find($id); 
        $parent_cate1 = $index->getParentCate();
        $data['parent_cate'] = json_decode(json_encode($parent_cate1), True);
        $content = Cart::content();
        $data['content'] = json_decode(json_encode($content), True);
        $data['total'] = Cart::total();

        return view('index',$data);
    }

    public function detailProduct($id){
        $pro = new Product();
        $index = new indexModel();
        $product = $index->showProduct($id);

        foreach ($product as $row){                       
            $new_view = $row->view + 1;

            $data1 = array(
                'view' => $new_view
                );
             $index->incView($id, $data1);
        }
       
        $data['product']= product::find($id);
        $parent_cate1 = $index->getParentCate();
        $data['parent_cate'] = json_decode(json_encode($parent_cate1), True);
        $data['relativeProduct'] = $index->getReativeProduct($id)->get();
        $content = Cart::content();
        $data['content'] = json_decode(json_encode($content), True);
        $data['total'] = Cart::total();

        return view('product_details', $data);
    }

    /*chi tiết category*/
    public function detailCategory($id,Request $request) {
        $index = new indexModel();

        $data['t'] = $index->getParentCategory($id);
        $data['catego'] = $index->getTitleCate($id);
        $data['product'] = $index->getProductInCategory($id)->paginate(12);
        $parent_cate1 = $index->getParentCate();
        $data['parent_cate'] = json_decode(json_encode($parent_cate1), True);
        $cate1 = $index->cate();
        $data['cate'] = json_decode(json_encode($cate1), True);
        $content = Cart::content();
        $data['content'] = json_decode(json_encode($content), True);
        $data['total'] = Cart::total();

        return view('category_grid', $data);
    }

    /*click mua sản phẩm*/
    public function buyProduct($id, $size) {
        $product = Product::find($id);
        Cart::add(['id'=>$id, 'name'=>$size, 'qty'=>1, 'price'=>$product->afterSale, 'options'=>['image'=>$product->image] ]);
        $content = Cart::content();
        return redirect()->route('cart');
        
    }

    /*giỏ hàng*/
    public function cart() {
        $index = new indexModel();

        $parent_cate1 = $index->getParentCate();
        $data['parent_cate'] = json_decode(json_encode($parent_cate1), True);
        $content = Cart::content();
        $data['content'] = json_decode(json_encode($content), True);
        $data['total'] = Cart::total();

        return view('cart', $data);
    }

    /*xóa sản phẩm trong giỏ hàng*/
    public function deleteProductCart($id) {
        Cart::remove($id);
        return redirect()->route('cart');
    }

    /*cập nhật giỏ hàng*/
    public function updateProductCart($id, $qty ) {
        Cart::update($id, $qty);
        echo "Thành công";
    }

    /*thanh toán*/
    public function payment(){
        $index = new indexModel();

        $parent_cate1 = $index->getParentCate();
        $data['parent_cate'] = json_decode(json_encode($parent_cate1), True);
        $data['total'] = Cart::total();

        return view ('thanhtoan', $data);
    }

    /*lưu hóa đơn*/
    public function saveOrder(Request $request){
        $custom = new customer();
        $order = new order();
        $detail = new detail_order();
        $index = new indexModel();

        $parent_cate1 = $index->getParentCate();
        $data['parent_cate'] = json_decode(json_encode($parent_cate1), True);

        $custom->name = $request['name'];
        $custom->phone = $request['phone'];
        $custom->email = $request['email'];
        $custom->address = $request['address'];
        $custom->save();

        $order->id_khachhang = $custom->id;
        $order->ngay_order = date('y-m-d');
        $order->tongtien = Cart::total();
        $order->tinhtrang = 'chưa duyệt';
        $order->ngay_duyet = '';
        $order->save();

        $content = Cart::content();
        foreach ($content as $row) {
            $detail_order = array(
                'id_order' => $order->id,
                'id_product' => $row->id,
                'quantity' => $row->qty,
                'price' => $row->price
            );

            $detail->insertDetailOrder( $detail_order);
            cart::destroy();
        return view ('success',$data);
    }

        

        




    }
}
