<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequestUpdate extends FormRequest
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
            'name' => 'required|string|min:3|max:50',
            'description' => 'required|min:3|max:500',
            'price' => 'required|numeric',
            'sale_price' => 'nullable|numeric',
            'category' => 'required',
            'main_image' => 'mimes:png,jpg,svg,jpeg',
        ];
    }
}
