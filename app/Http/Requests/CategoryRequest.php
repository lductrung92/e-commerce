<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'txtName' => 'required|unique:categories,name',
            'txtOrder' => 'required',
            'txtKeyWords' => 'required',
            'txtDes' => 'required'
        ];
    }

    public function messages() 
    {
        return array(
            'txtName.required' => 'Please input category name',
            'txtName.unique' => 'Category name exist',
            'txtOrder.required' => 'Please input order',
            'txtKeyWords.required' => 'Please input keywords',
            'txtDes.required' => 'Please input description'
        );
    }
}
