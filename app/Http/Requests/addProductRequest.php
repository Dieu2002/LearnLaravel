<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|max:255|string',
            'image'=>'required|mimetypes:image/jpeg,image/png|mimes:jpeg,png|file_extension:jpeg,png|max:2048|filled',
            'price'=>'required|numeric|min:10000',
            'quantity'=>'required|numeric',
            'description'=>'required|string',


        ];
    }
    public function messagess()
    {
        return[
            'name.string'=>'vui lòng nhập tên sản phẩm',
            'image.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
			'image.max' => 'Hình thẻ giới hạn dung lượng không quá 2M',
            'price.numeric' =>'vui lòng nhập giá',
            'image.required'=>'Bạn chưa chọn ảnh',
            'image.filled'=>'Bạn chưa chọn ảnh',
            'quantity.numeric'=>'vui lòng nhập số lượng',
            'description.string'=>'vui lòng nhập mô tả'
        ];
    }
}
