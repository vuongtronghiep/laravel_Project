<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'ten' => 'required:product,product_name',
            'anhbia' => 'required|unique:product,image',
            'anhchitiet1' => 'required:product,image_detail1',
            'anhchitiet1' => 'required:product,image_detail2',
            'size' => 'required:product,size',
            'gia' => 'required:product,price',
            'mota' => 'required:product,detail'
        ];
    }
    public function messages (){
        return [
            'ten.required' => 'Hãy nhập tên sản phẩm!',
            'anhbia.required' => 'Hãy chọn ảnh bìa sản phẩm!',
            'anhbia.unique'=> 'Đã tồn tại! Xin chọn ảnh bìa khác!',
            'anhchitiet1.required' => 'Hãy chọn ảnh chi tiết sản phẩm!',
            'anhchitiet2.required' => 'Hãy chọn ảnh chi tiết sản phẩm!',
            'size.required'=> 'Hãy nhập size sản phẩm!',
            'gia.required'=> 'Hãy nhập giá sản phẩm!',
            'mota.required'=> 'Hãy nhập mô tả về sản phẩm!'
        ];
    }
}
