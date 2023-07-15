<?php

namespace App\Http\Requests\v1\admin;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            
            'code' => ['required','min:4'],
            'name' => ['required','min:8','max:23'],
            'brandcode' => ['required', 'min:3'],
            'catcode' => ['required', 'min:3'],
            'baseprice' => ['required', 'integer'], 
            'saleprice' => ['required', 'integer'],
            'unit'  => ['required'],
            'stock'  => ['required', 'integer'],
            'image'  => ['required|image|mimes:png,jpg,jpeg|max:2048'],
            'status' => ['required','boolean']
        ];
    }
}
