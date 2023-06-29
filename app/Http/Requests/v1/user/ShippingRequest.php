<?php

namespace App\Http\Requests\v1\user;

use Illuminate\Foundation\Http\FormRequest;

class ShippingRequest extends FormRequest
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
            'shipcode' => ['required'],
            'email' => ['required'],
            'shipname' => ['required'],
            'notes' => ['required'],
            'village' => ['required'],
            'subdisc' => ['required'],
            'disctric' => ['required'],
            'province' => ['required'],
            'postalcode' => ['required'],
            'phone' => ['required']
            
        ];
    }
}
