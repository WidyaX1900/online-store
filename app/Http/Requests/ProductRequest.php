<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'cost' => 'required',
            'category_id' => 'required',
            'qty' => 'required',
            'photo' => 'required|mimes:jpg,png,jpeg|max:2050'
        ];
    }

    public function messages()
    {
        return [
            'category_id.required' => 'The category field is required'
        ];
    }
}
