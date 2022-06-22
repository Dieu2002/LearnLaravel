<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class Homerequest extends FormRequest
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
            'ten'=>'required|max:255|string',
            'anh'=>'required|mimetypes:image/jpeg,image/png|mimes:jpeg,png|file_extension:jpeg,png|max:2048|filled',
            'price'=>'required|numeric|min:10000',
            'gia'=>'required|numeric',
            'danhmuc'=>'required|max:255|string',
            'spnb'=>'required|max:255|string',
            'giacu' =>'required|numeric',
        ];
    }
    public function messagess()
    {
        return[
            'ten.string'=>'vui lòng nhập tên sản phẩm',
            'anh.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
			'anh.max' => 'Hình thẻ giới hạn dung lượng không quá 2M',
            'anh.required'=>'Bạn chưa chọn ảnh',
            'anh.filled'=>'Bạn chưa chọn ảnh',
            'gia.numeric'=>'vui lòng nhập giá',
            'giacu.numeric'=>'vui lòng nhập giá',
            'danhmuc.string'=>'vui lòng nhập tên sản phẩm',
            'spnb.string'=>'vui lòng nhập tên nổi bật'
        ];
    }
}
