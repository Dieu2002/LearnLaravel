<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class formAdd extends FormRequest
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
            'inputName'=>'required|max:255|string',
            'inputImage'=>'required|mimetypes:image/jpeg,image/png|mimes:jpeg,png|file_extension:jpeg,png|max:2048|filled',
            'inputPrice'=>'required|numeric|min:10000',
            'inputPromotionPrice'=>'required|numeric|min:10000',
            'inputUnit'=>'required|max:255|string',
            'inputDescription'=>'required|string',
            'inputNew'=>'required|numeric',
            'inputType'=>'required|max:255|string',
            'inputImage'=>'required|mimetypes:image/jpeg,image/png|mimes:jpeg,png|file_extension:jpeg,png|max:2048|filled',
        ];
    }
    public function messagess()
    {
        return[
            'inputName.string'=>'vui lòng nhập tên sản phẩm',
            'inputImage.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
			'inputImage.max' => 'Hình thẻ giới hạn dung lượng không quá 2M',
            'inputImage.required'=>'Bạn chưa chọn ảnh',
            'inputImage.filled'=>'Bạn chưa chọn ảnh',
            'inputPrice.numeric'=>'vui lòng nhập giá',
            'inputPromotionPrice.numeric'=>'vui lòng nhập giá',
            'inputNew.numeric'=>'vui lòng nhập tên sản phẩm',
            'inputType.string'=>'vui lòng nhập loại của sản phẩm',
            'inputDescription.string'=>'Vui lòng nhập mô tả'
        ];
    }
}
