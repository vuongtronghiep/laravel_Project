<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CategoryRequest extends Request
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
            'name' => 'required|unique:categories,category_name',
            'alias' => 'required|unique:categories,alias'
        ];
    }
    public function messages (){
        return [
            'name.required' => 'Hãy nhập tên thể loại',
            'alias.required' => 'Hãy nhập alias',
            'name.unique'=> 'Đã tồn tại! Xin chọn tên khác',
            'alias.unique'=> 'Đã tồn tại! Xin chọn alias khác'
        ];
    }
}
