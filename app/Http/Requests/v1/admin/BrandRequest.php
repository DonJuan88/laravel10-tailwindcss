<?php

namespace App\Http\Requests\v1\admin;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
            'brandcode' => ['required', 'min:3','unique:brands'],
            'brandname' => ['required', 'min:5']
        ];
    }
}
